<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use App\Kelas;
use App\Mapel;
use DB;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_mapel = \App\Mapel::where('nama_mapel', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_mapel = \App\Mapel::all();
        }
        return view('mapel.index', ['data_mapel' => $data_mapel]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $kelas = \App\Mapel::create([
            'kelas_id' => $request->kelas_id,
            'jurusan_id' => $request->jurusan_id,
            'nama_mapel' => $request->nama_mapel,
        ]);
        return redirect('/mapel');
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
        $data_mapel = \DB::table('mapel')
                        ->join('siswa','kelas_id','=','kelas')
                        ->where('siswa.user_id',Auth::user()->id)
                        ->where('mapel.jurusan_id',Auth::user()->jurusan)
                        ->where('nama_mapel', 'LIKE', '%' . $request->cari . '%')
                        ->get();
        } 
        else {
        $data_mapel = \DB::table('mapel')
                    ->join('siswa','kelas_id','=','kelas')
                    ->where('siswa.user_id',Auth::user()->id)
                    ->where('mapel.jurusan_id',Auth::user()->jurusan)
                    ->get();
        }
        return view('mapel.mapel_siswa',['data_mapel' => $data_mapel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = \App\Mapel::find($id);
        return view('mapel.edit', ['mapel' => $mapel]);
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
        $mapel = \App\Mapel::find($id);
        $mapel->update($request->all());
        return redirect('/mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel= \App\Mapel::where('id', $id)->delete();
        return redirect('/mapel');
    }

}
