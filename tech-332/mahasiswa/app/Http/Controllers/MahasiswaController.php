<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa as Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa/mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function findById($id)
    {
        $mahasiswa = DB::table('mahasiswas')->where('id', $id)->get();
        return view('mahasiswa/findbyid', ['mahasiswa' => $mahasiswa]);
    }

    public function tambahData()
    {
        return view('mahasiswa/form');
    }

    public function simpan(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'tanggal_lahir' => $request->tanggal_lahir

        ]);
        return redirect('mahasiswa');
    }
}
