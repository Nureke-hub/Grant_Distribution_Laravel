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

class ProfilleController extends Controller
{
    //

    public function getProfile()
    {
        $student = DB::table('users')->where('id', Auth::id())->first();
        $udastak = DB::table('udastaks')->where('user_id', Auth::id())->first();
        $sch_cer = DB::table('school_certeficates')->where('user_id', Auth::id())->first();
        $ents = DB::table('e_n_t_s')->where('user_id', Auth::id())->first();

            return view('profile')
                ->with('user', auth()->user())
                ->with(compact('student'))
                ->with(compact('udastak'))
                ->with(compact('sch_cer'))
                ->with(compact('ents'));


    }

    public function postFullNameGenderPhoto(Request $request)
    {
        if ($request->input('gender')=="M"){
            $gender =true;
        }
        else{
            $gender = false;
        }
        $image =$request->file('file');
        $imageName =time().'.'.$image->extension();
        $image->move(public_path('documents'),$imageName);
        DB::table('users')
            ->where('id', $request -> input('id'))
            ->update(array('full_name' =>$request -> input('full_name'),
                    'gender'=>$gender,
                    'photo' =>$imageName
                )
            );
        return redirect()->route('profile');
    }


    public function postOtherDoc(Request $request){

        if($request->file('086')) {

            $doc1 = $request->file('086');

            $doc1Name = time() . '.' . $doc1->extension();

            $doc1->move(public_path('documents'), $doc1Name);


        }
        if($request->file('063')) {

            $doc2 = $request->file('063');
            $doc2Name = time() . '.' . $doc2->extension();
            $doc2->move(public_path('documents'), $doc2Name);
        }

        if($request->file('boy_reg')) {

            $doc3 = $request->file('boy_reg');

            $doc3Name = time() . '.' . $doc3->extension();

            $doc3->move(public_path('documents'), $doc3Name);

        }

        if($request->file('pdf_quota')) {

            $doc4 = $request->file('pdf_quota');
            $doc4Name = time() . '.' . $doc4->extension();
            $doc4->move(public_path('documents'), $doc4Name);
            $quota = $request->input('quota');
        }

        if ($request -> input('quota')==""){
            $quota=null;
        }


        DB::table('users')
            ->where('id', Auth::id())
            ->update(array('quota' =>$quota,
                    'doc_086'=>$doc1Name,
                    'doc_063' =>$doc2Name,
                    'pdf_quota'=>$doc4Name,
                    'boy_reg'=>$doc3Name
                )
            );




        return redirect()->route('profile');

    }

    public function postUdastak(Request $request){
        $udastak = DB::table('udastaks')->where('user_id', Auth::id())->first();
        $image =$request->file('file');
        $imageName =time().'.'.$image->extension();
        $image->move(public_path('documents'),$imageName);
        if($udastak){
            DB::table('udastaks')
                ->where('user_id', Auth::id())
                ->update(array('iin' =>$request -> input('iin'),
                        'birth_date' =>$request -> input('birth_date'),
                        'by_whom' =>$request -> input('by_whom'),
                        'file' =>$imageName,
                        'nationality'=> $request -> input('nationality')
                    )
                );
        }
        else{
            udastak::create([
                    'iin' =>$request -> input('iin'),
                    'birth_date' =>$request -> input('birth_date'),
                    'by_whom' =>$request -> input('by_whom'),
                    'file' =>$imageName,
                    'nationality'=> $request -> input('nationality'),
                    'user_id'=>Auth::id()
                ]
            );
        }
        return  redirect()->route('profile');


    }
    public function postSchCer(Request  $request){
        $school_certeficates = DB::table('school_certeficates')->where('user_id', Auth::id())->first();
        $image =$request->file('file');
        $imageName =time().'.'.$image->extension();
        $image->move(public_path('documents'),$imageName);
        if($school_certeficates){
            DB::table('school_certeficates')
                ->where('user_id', Auth::id())
                ->update(array('avarage_point' =>$request -> input('avarage_point'),
                        'type' =>$request -> input('type'),
                        'school_name' =>$request -> input('school_name'),
                        'graduation_year' =>$request -> input('graduation_year'),
                        'region' =>$request -> input('region'),
                        'file' =>$imageName,
                        'user_id'=>Auth::id()

                    )
                );
        }
        else{
            School_certeficate::create([
                    'avarage_point' =>$request -> input('avarage_point'),
                        'type' =>$request -> input('type'),
                        'school_name' =>$request -> input('school_name'),
                        'graduation_year' =>$request -> input('graduation_year'),
                        'region' =>$request -> input('region'),
                        'file' =>$imageName,
                        'user_id'=>Auth::id()

                ]
            );
        }
        return  redirect()->route('profile');
    }

    public function postENTCer(Request $request){
        if($request -> input('reading')==null || $request -> input('math')==null||
        $request -> input('history')==null ||$request -> input('subject_1_point')==null ||$request -> input('subject_2_point')==null ){
            return redirect()
                -> route('profile')
                -> with('danger','Enter all datas ');
        }

        $total =$request -> input('reading') +$request -> input('math')+$request -> input('history')+$request -> input('subject_1_point')+$request -> input('subject_2_point');


        $e_n_t_s = DB::table('e_n_t_s')->where('user_id', Auth::id())->first();
        $image =$request->file('file');
        $imageName =time().'.'.$image->extension();
        $image->move(public_path('documents'),$imageName);
        if($e_n_t_s){
            DB::table('e_n_t_s')
                ->where('user_id', Auth::id())
                ->update(array('reading' =>$request -> input('reading'),
                        'math' =>$request -> input('math'),
                        'history' =>$request -> input('history'),
                        'subject_1_name' =>$request -> input('subject_1_name'),
                        'subject_2_name' =>$request -> input('subject_2_name'),
                        'subject_1_point' =>$request -> input('subject_1_point'),
                        'subject_2_point' =>$request -> input('subject_2_point'),
                        'total' =>$total,
                        'tjk' =>$request -> input('tjk'),
                        'language' =>$request -> input('language'),
                        'file' =>$imageName,
                        'user_id'=>Auth::id()

                    )
                );
        }
        else{
           ENT::create([
                   'reading' =>$request -> input('reading'),
                   'math' =>$request -> input('math'),
                   'history' =>$request -> input('history'),
                   'subject_1_name' =>$request -> input('subject_1_name'),
                   'subject_2_name' =>$request -> input('subject_2_name'),
                   'subject_1_point' =>$request -> input('subject_1_point'),
                   'subject_2_point' =>$request -> input('subject_2_point'),
                   'total' =>$total,
                   'tjk' =>$request -> input('tjk'),
                   'language' =>$request -> input('language'),
                   'file' =>$imageName,
                   'user_id'=>Auth::id()

                ]
            );
        }
        return  redirect()->route('profile') -> with('danger',' Success input datas');

    }


    public function choice(){
        $student = DB::table('users')->where('id', Auth::id())->first();
        $universities = University::all();
        error_log($universities);
//        $univers_with_profs = [];
//        error_log("university =".$university);
//        foreach ($university as $i){
//            error_log("i =".$i);
//            $profession_ids = DB::table('prof_univers')
//                                                            ->select('prof_id')
//                                                            ->where('univer_id', $i->id);
//
//            $professions = array();
//            foreach ($profession_ids as $j){
//                $profession = DB::table('professions')->where('id', $j);
//                array_unshift($professions, $profession);
//            }
//
//            $univers_with_profs -> add($i, $professions);
//        }

        return view('myChoices', ['universities'=>$universities, 'student'=>$student]);
    }

    public function get_profs()
    {
        try{

            $id = \request('univer_id');
            $professions = DB::table('professions')->whereIn('id', function ($query) {
                $query-> select('prof_id')->from(with(new ProfUniver())->getTable())->where('univer_id', \request('univer_id'))->groupBy('univer_id');
            })->get();

            foreach ($professions as $prof){
                error_log($prof->name);
            }
//            error_log("profession =".$professions);
            return response()->json(['professions'=>$professions]);
        } catch(\Exception $e){
            error_log($e);
            return response()->json(['error'=>'Some error']);
        }
    }

    public function save_choices(){
        $univer_1 = \request('univer_1');
        $prof_1 = \request('prof_1');

        $univer_2 = \request('univer_2');
        $prof_2 = \request('prof_2');

        $univer_3 = \request('univer_3');
        $prof_3 = \request('prof_3');

        $univer_4 = \request('univer_4');
        $prof_4 = \request('prof_4');

        if($univer_1 != 'not' && $prof_1!='not' && $univer_2 != 'not' && $prof_2!='not' && $univer_3 != 'not' && $prof_3!='not' && $univer_4 != 'not' && $prof_4!='not'){
            $prof_unver_1_id = DB::table('prof_univers')
                ->where('univer_id',$univer_1)
                ->where('prof_id',$prof_1)->first();

            $prof_unver_2_id = DB::table('prof_univers')
                ->where('univer_id',$univer_2)
                ->where('prof_id',$prof_2)->first();

            $prof_unver_3_id = DB::table('prof_univers')
                ->where('univer_id',$univer_3)
                ->where('prof_id',$prof_3)->first();

            $prof_unver_4_id = DB::table('prof_univers')
                ->where('univer_id',$univer_4)
                ->where('prof_id',$prof_4)->first();

            $choice=DB::table('choices')->where('id',Auth::id())->first();

            if($choice){
                DB::table('choices')
                    ->where('user_id', Auth::id())
                    ->update(array('first'=>$prof_unver_1_id->id,
                        'second'=>$prof_unver_2_id->id,
                        'third'=>$prof_unver_3_id->id,
                        'fourth'=>$prof_unver_4_id->id
                    ));}
            else{
                Choice::create([
                    'user_id'=>Auth::id(),
                    'first'=>$prof_unver_1_id->id,
                    'second'=>$prof_unver_2_id->id,
                    'third'=>$prof_unver_3_id->id,
                    'fourth'=>$prof_unver_4_id->id
                ]);
            }
        }
        $student = DB::table('users')->where('id', Auth::id())->first();
        $universities = University::all();
        return view('myChoices', ['universities'=>$universities, 'student'=>$student]);
    }

    public function status(){
        $student = DB::table('users')->where('id', Auth::id())->first();
        return view('myStatus', ['student'=>$student]);
    }

    public function messages(){
        $student = DB::table('users')->where('id', Auth::id())->first();
        return view('messages', ['student'=>$student]);
    }




}
