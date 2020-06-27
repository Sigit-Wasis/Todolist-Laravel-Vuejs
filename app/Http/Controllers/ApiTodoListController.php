<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTodoListController extends Controller
{
    // menampilkan data (Read)
    public function getList() {
    	$result = DB::table("todolist")->orderby('id', "desc")->get();
    	return response()->json($result);
    }

    // menambahkan data (Create)
    public function postCreate() {
    	$content = request('content');
    	DB::table('todolist')
    		->insert([
    			'created_at'	=> date('Y-m-d H:i:s'),
    			'content'		=> $content
    		]);
    	return response()->json(['status' => true, 'message' => 'Data berhasil Ditambahkan!']);
    }

    // mengupdate data (Update)
    public function postUpdate($id) {
    	$content = request('content');
    	DB::table('todolist')
    		->where('id', $id)
    		->update([
    			'updated_at'	=> date('Y-m-d H:i:s'),
    			'content'		=> $content
    		]);
    	return response()->json(['status' => true, 'message' => 'Data berhasil Diupdate!']);
    }

	// menghapus data (Delete)
	public function getDelete($id) {
		DB::table('todolist')
			->where('id', $id)
			->delete();
		return response()->json(['status' => true, 'message' => 'Data berhasil Dihapus!']);
	}

    // method get id
    public function getRead($id) {
        $row = DB::table('todolist')->where("id", $id)->first();
        return response()->json($row);
    }
}
