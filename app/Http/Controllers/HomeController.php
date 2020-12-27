<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function main()
    {
      $user_id = Auth::user()->id;

      $user_status = Auth::user()->status;

      if ($user_status == 'teacher') {

        if (DB::table('rates')->where('id_teacher', $user_id)->exists()) {
          $appraisals = DB::table('rates')->where('id_teacher', $user_id)->get();
        }else {
          $appraisals = NULL;
        }

      }else{
        if (DB::table('rates')->where('id_student', $user_id)->exists()) {
          $appraisals = DB::table('rates')->where('id_student', $user_id)->get();
        }else {
          $appraisals = NULL;
        }


      }
      // var_dump($appraisals);

      return view('student',[
        'appraisals'=>$appraisals,
      ]);
    }
}
