<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = DB::table('brands')->get();
        return view('brand.index', ['brands' => $brands]);
    }

    public function create(){
        return view('brand.create');
    }

    public function addBrand(Request $request){

        $validated = $request->validate([
            'name' => 'required|min:4|max:255',
            'desc' => 'max:255'
        ], [
            'name.required' => 'Nama Brand tidak boleh kosong'
        ]);

        DB::table('brands')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('brand')->with('status', 'Data Brand berhasil ditambah!');
    }

    public function edit($id){
        $brands = DB::table('brands')->where('id', $id)->first();
        return view('brand.edit', ['brands' => $brands]);
    }

    public function editProses(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required|min:4|max:255',
            'desc' => 'max:255'
        ], [
            'name.required' => 'Nama Brand tidak boleh kosong'
        ]);

        DB::table('brands')->where('id', $id)
            ->update([
                'name' => $request->name,
                'desc' => $request->desc
            ]);
        return redirect('brand')->with('status', 'Data Brand berhasil diupdate!');
    }

    public function delete(Request $request, $id){
        DB::table('brands')->where('id', $id)->delete();
        return redirect('brand')->with('status', 'Data Brand berhasil dihapus!');    
    }
}
