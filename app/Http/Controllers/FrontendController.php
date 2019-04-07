<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Galeri;
use App\Promo;
use App\barangfoto;
use File;

class FrontendController extends Controller
{
     public function index()
    {
        $galeris = Galeri::Orderby('created_at','DESC')->get();
        $promos = Promo::Orderby('created_at','DESC')->get();
        $barangs = Barang::Orderby('created_at','DESC')->paginate(30);
        return view ('layouts.frontend',compact('galeris','barangs','promos'));
    }

    // public function barang()
    // {
    //     $barangs = Barang::all();
    //     return view ('layouts.frontend',compact('barangs')); 
    // }
    public function barangkategori(Kategori $kategori)
    {
        $barangs = $kategori->Barang()->latest()->paginate(5);
        return view('frontend.produk', compact('barangs'));
    }
    public function product()
    {
        $barangs = Barang::Orderby('created_at','DESC')->paginate(8);
        return view ('frontend.produk',compact('barangs')); 
    }
    public function singleproduct(Barang $barangs)
    {
        return view('product.singleproduct', compact('barangs'));
    }
    public function show($id)
       {
           $barangs = Barang::find($id);
           return view('barang.show', compact('barangs'));
       }
}
