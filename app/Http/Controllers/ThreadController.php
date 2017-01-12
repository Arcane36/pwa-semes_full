<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class ThreadController extends Controller {

    public function index() {
        return response()->json(Thread::all());
//        return Response::json(Thread::all());
    }

    public function store() {
        Thread::create(array(
            'name' => Input::get('name'),
            'desc' => Input::get('desc')
        ));
        return response()->json(['success' => true]);
    }

    public function destroy($id) {
        Thread::destroy($id);
        return response()->json(['success' => true]);
    }

}
