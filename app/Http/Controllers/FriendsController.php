<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Friendable;

class FriendsController extends Controller
{

    //
    public function check($id){
        if(Auth::user()->isFriendWith($id)===1){
            return["status"=>"friends"];
        }
        if(Auth::user()->hasFriendRequestFrom($id)){
            return ["status"=>"pending"];
        }
        if(Auth::user()->hasSentFriendRequestTo()){
            return ["status"=>"waiting"];

        }
        return ["status"=>0];
    }
    public function add_friend($id){
        return Auth::user()->befriend($id);

    }
    public function accept_friend($id){
        return Auth::user()->acceptFriendRequest($id);
    }
}
