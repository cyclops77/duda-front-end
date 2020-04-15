<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use \App\Layanan;
use \App\Kategori_layanan;
use \App\Produk;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::All();
        return view('guest.pesan-sekarang', compact('layanan'));
    }
    public function kategori(Request $request)
    {
        $id_layanan = $request->layanan_id;
        $kategori_layanan = Kategori_layanan::where('layanan_id','=', $id_layanan)->get();
        return response()->json($kategori_layanan);
    }
    public function produk(Request $request)
    {
        $id_kategori = $request->kategori_id;
        $produk = Produk::where('kategori_layanan_id','=', $id_kategori)->get();
        $cek = Produk::where('kategori_layanan_id',$id_kategori)->first();
        if (!empty($cek)) {
            return response()->json($produk);
        }else{
            return response()->json(array([
                "id" => 0,
                "name" => "nothing",
            ]));
        }
    }
    public function cek(Request $request)
    {
        $hasil = Layanan::whereId($request->id)->first();
        if($hasil){
            $res = 'ada';
            return response()->json(['msg' => $res]);
        }
    }
    public function refreshCaptcha()
    {
        return captcha_img();
    }
    public function cekCaptcha(Request $request)
    {
        // $val = $this->validate($request, [
        //     'captcha' => 'required|valid_captcha'
        // ]);
        $val = Validator::make($request->all(), [
            'captcha' => 'required|captcha',
        ]);
        
        if ($val->fails()) {
            return response()->json(['msg'=> 'gagal']);
        }else{
            return response()->json(['msg'=> 'ok']);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
