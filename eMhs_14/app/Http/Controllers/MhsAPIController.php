<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function read(){
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => "Data berhasil ditampilkan",
            'data' => $mhs
        ], 200);
    }

    public function create(Request $req){
        $mhs = Mahasiswa::create([
            'nim' => $req->nim,
            'nama'=> $req->nama,
            'gender'=> $req->gender,
            'prodi'=> $req->prodi,
            'minat'=> $req->minat
        ]);
        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil ditambahkan'
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data gagal ditambahkan'
            ], 400);
        }
    }

    public function update($id, Request $req){
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $req->nim,
            'nama'=> $req->nama,
            'gender'=> $req->gender,
            'prodi'=> $req->prodi,
            'minat'=> $req->minat
        ]);
        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diubah'
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data gagal diubah'
            ], 400);
        }
    }

    public function delete($id){
        $mhs = Mahasiswa::find($id)->delete();

        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus'
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data gagal dihapus'
            ], 400);
        }
    }
}
