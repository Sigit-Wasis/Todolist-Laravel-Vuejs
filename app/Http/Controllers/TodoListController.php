<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    // read data to view
    public function getIndex() {
    	return view('todolist');
    }
}
