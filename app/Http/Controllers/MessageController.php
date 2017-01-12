<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller {
    public function index() {
        return response()->json(Message::all());
//        return Response::json(Message::all());
    }

    public function show($id){
        return response()->json(Message::where('id_thread', $id)
            ->leftJoin('users', 'users.id', '=', 'message.id_user')
            ->leftJoin('thread', 'thread.id', '=', 'message.id_thread')
            ->select('text','message.id', 'id_user', 'id_thread', 'thread.name as threadn', 'users.name as usern', 'email', 'message.created_at')
            ->orderBy('id', 'asc')
            ->get());
    }

    public function store() {
        Message::create(array(
            'id_user' => Input::get('id_user'),
            'id_thread' => Input::get('id_thread'),
            'text' => Input::get('text')
        ));
        return response()->json(['success' => true]);
    }

    public function destroy($id) {
        Message::destroy($id);
        return response()->json(['success' => true]);
    }
}
