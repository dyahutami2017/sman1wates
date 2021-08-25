<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_admin = \App\User::where('role','admin')
                        ->where('name', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_admin = \App\User::where('role','admin')->get();
        }
        return view('admin.index', ['data_admin' => $data_admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $admin = \App\User::find($id);
        return view('admin.edit', ['admin' => $admin]);
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
        $admin = \App\User::find($id);
        $admin->update([
            'name'=>$request->nama,
            'email'=>$request->email,
        ]);
       return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin= \App\User::where('id', $id)->delete();
        return redirect('/admin');
    }

    public function profile($id)
    {
        // dd($request->all());

        $admin = \App\User::find($id);
        return view('admin.profile', ['admin' => $admin]);
    }
    public function profilSaya($id)
    {
        $admin = \App\User::where('id', $id)->first();
        return view('admin.profile', ['admin' => $admin]);
    }
    public function editProfile($id)
    {
        $admin = \App\User::where('id', $id)->first();
        return view('admin.edit', ['admin' => $admin]);
    }
}
