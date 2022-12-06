<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public static function AllMsg(){
        return [
            ['message_title'=>'Chava Smith',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
            ['message_title'=>'Monica De-Has',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
            ['message_title'=>'Johan Willner',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
            ['message_title'=>'Ruthie Mosh',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
            ['message_title'=>'Gill Brown',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
            ['message_title'=>'Nir Allaluff',
            'message_body'=>' The generated Lorem lpsum is therefor...',
            'message_time'=>'Today 12:06 05/12/2022'],
        ];
    
        } 
    
}