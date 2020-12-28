<?php

namespace App\Http\Controllers;

use App\User;
use App\Rates;
use App\User_to_rates;
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
      $id_teacher = Auth::user()->id;
      $students = DB::table('users')->where('status', 'teacher')->get();


        // $appraisals = DB::table('rates')->where('id_teacher', $id_teacher)->get();
        // $i = 0;
        // $array = [];
        // foreach ($appraisals as $item) {
        //   $array[$i] = DB::table('users')->where('id', $item->id_student)->get();
        //   $i++;
        // }


        // $all = $appraisals->merge($array);
        // $eee = new Rates();
        // $all = Rates::with('users')->get();
        // var_dump($eee);

        $eeee = DB::table('rates')
            ->join('users', 'rates.id_student','=','users.id')
            ->select('rates.title','rates.rate', 'rates.id_student','rates.id_teacher','rates.updated_at','users.surname','users.name','users.id','users.name')
            ->where('id_teacher', $id_teacher)
            ->get();

        var_dump($eeee);
        //
        // die();


      $students = DB::table('users')->where('status', 'student')->get();

      return view('add_rates',[
        'students'=>$students,
        'role'=>$role,
        'eeee'=>$eeee,
        // 'student_group'=>$student_group,
        // 'appraisals'=>$appraisals,
      ]);
  }
}
