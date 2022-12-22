<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function room(Request $request)
    {
        // $requestの中身を全て$postsに格納
        $posts = $request->all();
        // dump die の略 -> メソッドの引数の取った値を展開して止める -> データを確認するためのデバッグメソッド
        // dd($posts);


        Room::insert(
            ['room_id' => $posts['room_id']],
            ['room_name' => $posts['room_name']],
            ['room_type' => $posts['room_type']],
            ['room_accommodated' => $posts['room_accommodated']],
        );

        return view('room');
    }

}
