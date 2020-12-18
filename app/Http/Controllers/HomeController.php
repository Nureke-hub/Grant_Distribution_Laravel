<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Winners;

class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function contacts(){
        return view('contacts');
    }
    public function results(){
        error_log("HEllo bitch");
        error_log(isset($winners));

        $student = DB::table('users')->where('id', Auth::id())->first();

        $winners = Winners::all();

        $text = '';
        if(isset($winners)){
            $winner = DB::table('winners')->where('user_id', $student->id)->first();
            if(isset($winner)){
                $text = "Congratulations you won a grant!";
            }else{
                $text = "Unfortunately, you are not included in the list of grant holders.";
            }
            return view('results', ['student'=>$student,'winners'=>$winners, 'winner'=>$winner, 'text'=>$text]);
        }else{
            $text = 'Results not released yet';
            return view('results', ['student'=>$student, 'text'=>$text]);
        }
    }
}
