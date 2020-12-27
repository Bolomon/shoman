<?php

namespace App\Http\Controllers;

use App\User;
use App\Rates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RatesController extends Controller
{

  public function create(Request $request)
    {
        $this->validate($request, [
        ]);
        $model = new Rates();
        $students = DB::table('users')->where('status', 'student')->get();
        $model->title = request('title');
        $model->rate = request('rate');
        $model->id_student = request('id_student');
        $model->id_teacher = auth()->user()->id;
        $model->save();
        return redirect('/rates');
    }


  public function index()
  {
      $role = Auth::user()->status;

      $students = DB::table('users')->where('status', 'student')->get();
      return view('add_rates',[
        'students'=>$students,
        'role'=>$role,
      ]);
  }
}
