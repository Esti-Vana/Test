<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function AllUsers(){
        return [
            [
                'username'=>"Martin",
                'password'=>"1234"
            ],
            [
                'username'=>"Alon",
                'password'=>"458"
            ], [
                'username'=>"Moshe",
                'password'=>"7854"
            ], [
                'username'=>"David",
                'password'=>"$566"
            ], [
                'username'=>"martin",
                'password'=>"547"
            ],
        ];
    }


    public static function Find($username,$password){
        $users=self::AllUsers();
        foreach($users as $user){
            if($user['username']==$username && $user['password']==$password)
            return 200;
        }
        return 404;
    }}
