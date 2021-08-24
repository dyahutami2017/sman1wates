<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use App\Kelas;
use DB;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_kelas = \App\Kelas::where('nama_kelas', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kelas = \App\Kelas::all();
        }
        return view('kelas.index', ['data_kelas' => $data_kelas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        // $validated = $request->validate([
        //     'kelas' => 'required',
        //     'jurusan' => 'required',
        //     'nama_kelas' => 'required',
        // ]);

        $kelas = \App\Kelas::create([
            'kelas_id' => $request->kelas,
            'jurusan_id' => $request->jurusan,
            'nama_kelas' => $request->nama_kelas,
        ]);
        return redirect('/kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Request $request)
    {
        if ($request->has('cari')) {
            $data_kelas = \DB::table('kelas')
                        ->join('siswa','kelas_id','=','kelas')
                        ->where('siswa.user_id',Auth::user()->id)
                        ->where('kelas.jurusan_id',Auth::user()->jurusan)
                        ->where('nama_kelas', 'LIKE', '%' . $request->cari . '%')
                        ->get();
        } 
        else {
            $data_kelas = \DB::table('kelas')
                        ->join('siswa','kelas_id','=','kelas')
                        ->where('siswa.user_id',Auth::user()->id)
                        ->where('kelas.jurusan_id',Auth::user()->jurusan)
                        ->get();
        }
        return view('kelas.kelas_siswa',['data_kelas' => $data_kelas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = \App\Kelas::find($id);
        return view('kelas.edit', ['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $kelas = \App\Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/kelas')->with('sukses', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas= \App\Kelas::where('id', $id)->delete();
        return redirect('/kelas');
    }

}
