<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function showUserName(){
        return 'Arwa';
    }


    public function getIndex(){
         //$obj=new \stClass();
       /* $obj = (object) ['a' => 'new object'];
        $obj -> name='arwa';
        $obj -> id='5';
        $obj -> gender='female';
        return view('welcome',compact('obj'));*/
       // $data=['a'=>'ahmed','b'=>'bassem'];
       $data=[];
       // return view('welcome')->with('data',$data);
       return view('welcome',compact('data'));
       // return view('welcome')->with('name','Ahmed');

       
}
}