<?php

namespace App\Http\Controllers;

use File;
use App\Barang;
use App\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->paginate(20);
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('barang.create',compact('kategori'));
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
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'foto' => '',
            'deskripsi' => 'required',
            'beli' => 'required'
        ]);

        $barangs = new Barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->slug = str_slug($request->nama_barang, '-').'-'.str_random(6);
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        $barangs->beli = $request->beli;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $barangs->foto = $filename;
        }
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = Barang::findorFail($id);
        return view('blog.blog-single',compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = barang::findOrFail($id)->kategori_id;
        return view('barang.edit',compact('barangs','kategori','selectedKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_barang' => 'required|max:255',
            'kategori_id' => 'required|',
            'harga' => 'required',
            'foto' => '',
            'deskripsi' => 'required',
            'beli' => 'required'
        ]);
        $barangs = Barang::findOrFail($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->slug = str_slug($request->nama_barang, '-').'-'.str_random(6);
        $barangs->kategori_id = $request->kategori_id;
        $barangs->harga = $request->harga;
        $barangs->deskripsi = $request->deskripsi;
        $barangs->beli = $request->beli;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            if ($barangs->foto){
                $old_foto = $barangs->foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $barangs->foto;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $barangs->foto = $filename;
        }
        $barangs->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barang.index');
    }
}
