<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController
{
    public function readdata()
    {
        $story=DB::table('story')->get();

        return view('foreign',['story'=>$story]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request){
        //masukkan data ke dalam table
        DB::table('story')->insert([
            'judul' => $request->judul,
            'link' => $request->link

        ]);
        return redirect('/tampilcerita');
    }

    public function edit($judul)
    {
        #ambil data mahasiswa berdasarkan nim
        $story = DB::table('story')->where('judul', $judul)->get();

        #passing data
        return view('edit', ['story'=>$story]);
    }

    public function update(Request $request){
        //masukkan data ke dalam table
        DB::table('story')->where('judul', $request->judul)->update([
            'judul' => $request->judul,
            'link' => $request->link
        ]);

        return redirect('/tampilcerita');
    }

    public function hapus($judul)
    {
        DB::table('story')->where('judul', $judul)->delete();
        return redirect('/tampilcerita');
    }
}