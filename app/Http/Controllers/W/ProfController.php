<?php

namespace App\Http\Controllers\W;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Webprofile;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Webprofile::first();
        return view('Web.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Web.ProfilInput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $fotoAbout = $request->file('foto_about');
        $namaFotoAbout = md5($fotoAbout->getClientOriginalName().time()).".".$fotoAbout->getClientOriginalExtension();
        $fotoAbout->storeAs('public/web',$namaFotoAbout);

        $sliders = $request->file('slider');

        $slide1 = $sliders[0];
        $namaSlider1 = md5($slide1->getClientOriginalName().time()).".".$slide1->getClientOriginalExtension();
        $slide1->storeAs('public/web',$namaSlider1);

        $slide2 = $sliders[1];
        $namaSlider2 = md5($slide2->getClientOriginalName().time()).".".$slide2->getClientOriginalExtension();
        $slide2->storeAs('public/web',$namaSlider2);

        $slide3 = $sliders[2];
        $namaSlider3 = md5($slide3->getClientOriginalName().time()).".".$slide3->getClientOriginalExtension();
        $slide3->storeAs('public/web',$namaSlider3);

        $data = new Webprofile([
            'nama_kampus' => $request->input('nama_kampus'),
            'judul_about' => $request->input('judul_about'),
            'isi_about' => $request->input('isi_about'),
            'foto_about' => $namaFotoAbout,
            'alamat_kampus' => $request->input('alamat_kampus'),
            'telepon_kampus' => $request->input('telepon_kampus'),
            'fax_kampus' => $request->input('fax_kampus'),
            'email_kampus' => $request->input('email_kampus'),
            'fb_kampus' => $request->input('fb_kampus'),
            'twitter_kampus' => $request->input('twitter_kampus'),
            'linkedin_kampus' => $request->input('linkedin_kampus'),
            'google_kampus' => $request->input('google_kampus'),
            'koordinat' => $request->input('koordinat'),
            'foto_slider1' => $namaSlider1,
            'foto_slider2' => $namaSlider2,
            'foto_slider3' => $namaSlider3,
        ]);

        $data->save();

        return redirect('/Web/create');
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
