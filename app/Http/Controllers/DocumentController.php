<?php

namespace App\Http\Controllers;

use App\Models\udastak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    //

    public function viewUdastak($id)
    {
        $data = DB::table('udastaks')->where('id', $id)->first();
        return view('doc')->with( compact('data')) ;

    }

    public function download($file){
        return response()->download('documents/'.$file);
    }

    public function viewScholCer($id)
    {
        $data = DB::table('school_certeficates')->where('id', $id)->first();
        return view('doc')->with( compact('data')) ;

    }
    public function viewEnt($id)
    {
        $data = DB::table('e_n_t_s')->where('id', $id)->first();
        return view('doc')->with( compact('data')) ;

    }


    public function viewOther()
    {
        $data = DB::table('users')->where('id', Auth::id())->first();
        return view('docOther')->with( compact('data')) ;

    }


}
