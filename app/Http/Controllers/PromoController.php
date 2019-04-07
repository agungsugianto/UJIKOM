<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use File;
class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $promos = Promo::paginate(10);
        return view('promo.index',compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
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
            'foto' => 'required'
            ]);
            $promos = new Promo;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);
            $promos->foto = $filename;
        }
        $promos->save();
        return redirect()->route('promo.index');
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
        $promos = Promo::findOrFail($id);
        return view('promo.edit',compact('promos'));
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
        $this->validate($request,[
            'foto' =>'',
            ]);
        $promos = Promo::findOrFail($id);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadsucces = $file->move($destinationPath, $filename);

            if ($promos->foto){
                $old_foto = $promos->foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
                . DIRECTORY_SEPARATOR . $promos->foto;
                try{
                    file::delete($filepath);
                } catch (FileNotFoundException $e) {

                }
            }
            $promos->foto = $filename;
        }
        $promos->save();
        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promos = Promo::findOrFail($id);
        if ($promos->foto){
            $old_foto = $promos->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
            . DIRECTORY_SEPARATOR . $promos->foto;
            try{
                file::delete($filepath);
            }
            catch (FileNotFoundException $e) {

            }
        }
        $promos->delete();
        return redirect()->route('promo.index');
    }
}
