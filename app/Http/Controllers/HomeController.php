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
        $students =[];
        $winners = Winners::all();
        $prof_univers = [];
        $professions = [];

        foreach ($winners as $winner){
            array_push($students, DB::table('users')->where('id', $winner->user_id)->first());
            array_push($prof_univers, DB::table('prof_univers')->where('id', $winner->prof_univer_id)->first());
        }

        foreach($prof_univers as $prof_univer) {
            array_push($professions, DB::table('professions')->where('id', $prof_univer->prof_id)->first());
        }


        return view('results', ['students'=>$students, 'winners'=>$winners, 'professions'=>$professions, 'prof_univers'=>$prof_univers]);
    }

    public function instruction(){
        return view('instruction');
    }
}

