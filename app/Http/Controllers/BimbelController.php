<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BimbelController extends Controller
{
    public function index(){

        $jenjang = DB::table('bimbels')->get();
        return view('jenjang', ['jenjang' => $jenjang]);
    }

    public function create(){
        return view('jenjang.index');
    }

    public function store(Request $request){
        DB::table('bimbels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('jenjang')->with('status', 'Jenjang berhasil ditambah!');
    }

    public function edit($id){
        $jenjang = DB::table('bimbels')->where('id', $id)->first();
        return view('jenjang.edit', compact('jenjang'));
    }

    public function editProses(Request $request, $id){
        DB::table('bimbels')->where('id', $id)
        ->update([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('jenjang')->with('status', 'Jenjang berhasil diupdate!');
    }

    public function delete($id){
        DB::table('bimbels')->where('id', $id)->delete();
        return redirect('jenjang')->with('status', 'Jenjang berhasil dihapus!');
    }
}
