<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\ENT;
use App\Models\School_certeficate;
use App\Models\udastak;
use App\Models\User;
use App\Models\Profession;
use App\Models\ProfUniver;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Winners;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('adminSignIn');
    }

    public function signIn(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if ($email == 'admin' && $password == 'admin') {
            return redirect()->route('decan');
        } else {
            return redirect()->route('admin')->with('info', 'Please enter correct data');
        }
    }

    public function decan()
    {
        $students = User::all();
        $ents = ENT::all();
        $udastak = udastak::all();

        return view('decanat')->with(compact('students'))
            ->with(compact('ents'))
            ->with(compact('udastak'));
    }

    public function isChecked()
    {
        $students = DB::table('users')->where('isChecked', true)->get();
        $ents = ENT::all();
        $udastak = udastak::all();
        if ($students) {
            return view('decanat')->with(compact('students'))
                ->with(compact('ents'))
                ->with(compact('udastak'));
        } else {
            return redirect()->route('decan');
        }

    }

    public function unChecked()
    {
        $students = DB::table('users')->where('isChecked', false)->get();
        $ents = ENT::all();
        $udastak = udastak::all();

        if ($students) {
            return view('decanat', ['ents' => $ents, 'students' => $students, 'udastak' => $udastak]);
        } else {
            return redirect()->route('decan');
        }
    }


    public function viewStudent($id)
    {
        $student = DB::table('users')->where('id', $id)->first();
        $udastak = DB::table('udastaks')->where('user_id', $id)->first();
        $sch_cer = DB::table('school_certeficates')->where('user_id', $id)->first();
        $ents = DB::table('e_n_t_s')->where('user_id', $id)->first();
        $choices = DB::table('choices')->where('user_id', $id)->first();

        return view('detailStudent')
            ->with('user', auth()->user())
            ->with(compact('student'))
            ->with(compact('udastak'))
            ->with(compact('sch_cer'))
            ->with(compact('ents'))
            ->with(compact('choices'));
    }

    public function checkedTrue(Request $request)
    {
        error_log("HII");
        DB::table('users')
            ->where('id', $request->input('id'))
            ->update(array('isChecked' => true,
                            'feadback' =>null)
            );
        return redirect()->route('decan');

    }

    public function feedback(Request $request)
    {
        error_log("HII");
        error_log($request->input('feadback'));
        DB::table('users')
            ->where('id', $request->input('id'))
            ->update(array('isChecked' => false,
                    'feadback' => $request->input('feadback'))
            );
        return redirect()->route('decan');


    }

    public function professions()
    {

        $professions = DB::table('professions')->whereIn('id', function ($query) {
            $query->select('prof_id')->from(with(new ProfUniver())->getTable())->where('univer_id', 1)->groupBy('univer_id');
        })->get();
        foreach ($professions as $prof) {
            error_log($prof->name);
        }

        return view('professions')->with(compact('professions'));
    }

    public function addPage()
    {
        return view('addProfession');
    }

    public function addProfession(Request $request)
    {
        if ($request->has('quota')) {
            $quota = true;
        } else {
            $quota = false;
        }
        Profession::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'count_of_grants' => $request->input('count_of_grants'),
            'quota' => $quota,
            'count_of_quota' => $request->input('count_of_quota')

        ]);
        $prof = DB::table('professions')->where('name', $request->input('name'))->first();
        ProfUniver::create([
            'univer_id' => 1,
            'prof_id' => $prof->id,
        ]);
        return redirect()->route('professions');


    }

    public function viewProfession($id)
    {
        $prof = DB::table('professions')->where('id', $id)->first();
        return view('detailProf')->with(compact('prof'));

    }

    public function editProfession(Request $request)
    {
        if ($request->has('quota')) {
            error_log('I AM HAS');
            $quota = true;
        } else {
            $quota = false;
        }

        DB::table('professions')
            ->where('id', $request->input('id'))
            ->update(array(
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'count_of_grants' => $request->input('count_of_grants'),
                'quota' => $quota,
                'count_of_quota' => $request->input('count_of_quota')));
        return redirect()->route('professions');

    }

    public function delete(Request $request)
    {
        DB::table('prof_univers')->where('prof_id', $request->input('id'))->delete();
        DB::table('professions')->where('id', $request->input('id'))->delete();
        return redirect()->route('professions');
    }

    public function algorithm()
    {
        $students = DB::table('users')->where('isChecked', true)->get();
        $iitu_prof_univers = DB::table('prof_univers')->where('univer_id', 1)->get();



        $users_points = [];
        if ($students) {
            foreach ($students as $student) {
                $ent = DB::table('e_n_t_s')->where('user_id', $student->id)->first();
                $users_points[$student->id] = $ent->total * 0.45 + $ent->subject_1_point*0.23 + $ent->subject_2_point*0.19 + $ent->math*0.13;
            }
        }


        foreach ($iitu_prof_univers as $iitu_prof_univer){
            $profession = DB::table('professions')->where('id', $iitu_prof_univer->prof_id)->first();
            $current_prof_univer_students = [];

            $choices = DB::table('choices')->where('first', $iitu_prof_univer->id)->get();

            foreach ($choices as $choice){
                $keys = array_keys($users_points);
                for($i= 0; $i<sizeof($users_points); $i++){
                    $key = $keys[$i];
                    if($key == $choice->user_id){
                        $current_prof_univer_students[$key] = $users_points[$key]; // $current_prof_univer_students[key][value]
                    }
                }
            }

            $keys = array_keys($current_prof_univer_students);
            for($i= 0; $i<sizeof($current_prof_univer_students)-1; $i++){
                for($j = 0; $j < sizeof($current_prof_univer_students) - 1 - $i; $j++){
                    $key = $keys[$j];
                    $key2=  $keys[$j+1];
                    if($current_prof_univer_students[$key] < $current_prof_univer_students[$key2]){
                        $temp = $keys[$j];
                        $keys[$j] = $keys[$j+1];
                        $keys[$j+1] = $temp;
                    }elseif($current_prof_univer_students[$key] == $current_prof_univer_students[$key2]){
                        $student1 = DB::table('school_certeficates')->where('user_id', $key)->first();
                        $student2 = DB::table('school_certeficates')->where('user_id', $key2)->first();

                        $student1_type = 0;
                        $student2_type = 0;
                        if($student1->type == 'red'){
                            $student1_type=1;
                        }elseif ($student1->type == 'golden'){
                            $student1_type=2;
                        }
                        if($student2->type == 'red'){
                            $student2_type=1;
                        }elseif ($student2->type == 'golden'){
                            $student2_type=2;
                        }

                        if($student1_type < $student2_type){
                            $temp = $keys[$j];
                            $keys[$j] = $keys[$j+1];
                            $keys[$j+1] = $temp;
                        }elseif($student1_type == $student2_type){
                            if($student1->avarage_point < $student2->avarage_point){
                                $temp = $keys[$j];
                                $keys[$j] = $keys[$j+1];
                                $keys[$j+1] = $temp;
                            }
                        }
                    }
                }
            }



            if($profession->count_of_grants < sizeof($keys)){
                for($i = 0; $i < $profession->count_of_grants; $i++){
                    Winners::create([
                        'user_id'=>$keys[$i],
                        'prof_univer_id'=>$iitu_prof_univer->id
                    ]);
                }
            }else{
                for($i = 0; $i < sizeof($keys); $i++){
                    Winners::create([
                        'user_id'=>$keys[$i],
                        'prof_univer_id'=>$iitu_prof_univer->id
                    ]);
                }
            }
        }



//        $keys = array_keys($users_points);
//        for($i= 0; $i<sizeof($users_points); $i++){
//            $key = $keys[$i];
////            error_log($key);
////            error_log($users_points[$key]);
//        }

        return redirect()->route('professions');
    }
}
