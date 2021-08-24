<?php

namespace App\Http\Controllers;
use App\Profil;
use DB;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        $data_profil = \App\Profil::all();
        return view('profil.index', ['data_profil' => $data_profil]);

    }
    
    public function edit($id)
    {
        $profil = \App\Profil::find($id);
        return view('profil.edit', ['profil' => $profil]);
    }
    public function update(Request $request, $id)
    {
        $profil = Profil::where('id',$request->id)->first();
        
        
        if($request->hasfile('gambar')){
            $file_old = 'data_file/'.$profil->gambar;
            unlink($file_old);

            $file = $request->gambar;
            $filename = time()."_".$file->getClientOriginalName();
            $file->move('data_file', $filename);
        // dd($profil);
        $profil->update([
            'gambar' => $filename,
            'nama' => $request->nama,           
            'npsn' => $request->npsn,           
            'status' => $request->status,           
            'bentuk' => $request->bentuk,           
            'akreditasi' => $request->akreditasi,           
            'kurikulum' => $request->kurikulum,           
            'alamat' => $request->alamat,           
            'telepon' => $request->telepon,           
            'email' => $request->email,           
            'visi' => $request->visi,           
            'misi' => $request->misi,           
            'sejarah' => $request->sejarah,           
        ]);
        }
        else{
            $profil->update([
                'nama' => $request->nama,           
                'npsn' => $request->npsn,           
                'status' => $request->status,           
                'bentuk' => $request->bentuk,           
                'akreditasi' => $request->akreditasi,           
                'kurikulum' => $request->kurikulum,           
                'alamat' => $request->alamat,           
                'telepon' => $request->telepon,           
                'email' => $request->email,           
                'visi' => $request->visi,           
                'misi' => $request->misi,           
                'sejarah' => $request->sejarah,          
            ]); 
        }
        
        return redirect('/profil_sekolah');
    }
}
