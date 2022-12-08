<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Users;
use App\Messages;

Route::get('/login',function(){
    return view('login');
});

Route::get('/dashboard',function(){
     $msgs=Messages::AllMsg();
     return view('dashboard',['msgs'=>$msgs]);   
});

Route::get('/authenticate',function(){
   //dd($request->all());      
   $username = htmlspecialchars($_GET['username']);
   $userpassword  = htmlspecialchars($_GET['userpassword']);
   if(Users::Find($username,$userpassword)==200)
   {     
      header("HTTP/1.1 200 OK");
      return redirect('/dashboard');
   }
   else{
      header("Status: 401 Not Found");
      return "401 Not Found";
   }
});
