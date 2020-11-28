<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Pusher\Pusher;

class NotificationController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user',compact('users'));
    }


    public function notify()
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data['message'] = 'hello Murkho';
        $pusher->trigger('notify-channel', 'App\\Events\\Notify', $data);

    }
}
