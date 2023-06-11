<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class PageController extends Controller
{
    public function home(){
        return view('home', ['key' => 'home']);
    }

    public function profile(){
        return view('profile', ['key' => 'profile']);
    }

    public function student(){
        $mhs = Mahasiswa::orderBy('id', 'desc')->paginate(10); //menampilkan 5 data pada halaman
        // $mhs = Mahasiswa::orderBy('id', 'desc')->get()->paginate(10); //menampilkan 5 data pada halaman
        return view('student', ['key' => 'student', 'mhs' => $mhs]);
    }

    public function pencarian(Request $req){
        $cari = $req->q;
        // $mhs = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->paginate(10);
        $mhs = Mahasiswa::where(function ($find) use($cari) {
            $find->where('nama', 'like', '%'.$cari.'%')
            ->orWhere('nim', 'like', '%'.$cari.'%');
        })->orderBy('id', 'desc')->paginate(10);
        $mhs -> appends($req -> all());
        return view('student', ['key' => 'student', 'mhs' => $mhs]);
    }

    public function tambah(){
        return view('formtambah', ['key' => 'student']);
    }

    public function simpan(Request $req){
        $minat = implode(',', $req->minat);
        Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'prodi' => $req->prodi,
            'minat' => $minat
        ]);
        return redirect('/student')->with('insert', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key' => 'student', 'mhs' => $mhs]);
    }

    public function update($id, Request $req){
        $minat = implode(',', $req->minat);
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $req -> nim;
        $mhs->nama = $req -> nama;
        $mhs->gender = $req -> gender;
        $mhs->prodi = $req -> prodi;
        $mhs->minat = $minat;
        $mhs->save();
        return redirect('/student')->with('update', 'Data berhasil diubah');
    }

    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/student')->with('delete', 'Data berhasil dihapus');
    }

    public function contact(){
        return view('contact', ['key' => 'contact']);
    }
}
