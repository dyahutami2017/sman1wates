<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use File; 

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $berita = Berita::where('keterangan', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        } else {
            $berita = Berita::OrderBy('created_at','desc')->paginate(3);
        }
        
        return view('berita.index',['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ket_berita' => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        
        Berita::create([
			'file' => $nama_file,
			'keterangan' => $request->ket_berita,
		]);
		return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = \App\Berita::find($id);
        return view('berita.edit',['berita' => $berita]);
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
        $berita = Berita::where('id',$request->id)->first();
        
        
        if($request->hasfile('file')){
            $file_old = 'data_file/'.$berita->file;
            unlink($file_old);

            $file = $request->file;
            $filename = time()."_".$file->getClientOriginalName();
            $file->move('data_file', $filename);

        $berita->update([
            'file' => $filename,
            'keterangan' => $request->ket_berita,           
        ]);
        }
        else{
            $berita->update([
                'keterangan' => $request->ket_berita,           
            ]); 
        }
        
        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::where('id',$id)->first();
	    File::delete('data_file/'.$berita->file);
 
        // hapus data
        Berita::where('id',$id)->delete();

      return redirect()->back();
    }
    public function detail($id)
   {
        $detailBerita = Berita::where('id',$id)->get();
        return view('detail_berita',['detail' => $detailBerita]);
   }
}
