<?php

namespace App\Http\Controllers;

use Auth;
use File;
use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galeris = Galeri::paginate(20);
        return view('galeri.index',compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar' => ''
        ]);
        $galeris = new Galeri;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $galeris->gambar = $filename;
        }
        $galeris->save();

        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeris = Galeri::findOrFail($id);
        return view('galeri.edit',compact('galeris'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar' => ''
        ]);
        $galeris = Galeri::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);

            if ($galeris->gambar){
                $old_foto = $galeris->gambar;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $galeris->gambar;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $galeris->gambar = $filename;
        }
        $galeris->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = Galeri::findOrFail($id);
        if ($galeris->gambar){
            $old_foto = $galeris->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
            . DIRECTORY_SEPARATOR . $galeris->gambar;
            try{
                file::delete($filepath);
            }
            catch (FileNotFoundException $e) {

            }
        }
        $galeris->delete();
        return redirect()->route('galeri.index');
    }
}
