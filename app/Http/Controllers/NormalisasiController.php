<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\AlternativeScore;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use App\Models\NormalisasiView;

class NormalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normalisasi(){
        $alternatif=[];

        $maxAnak = Alternative::max('tanggungan_anak');
        $maxPekerjaan = Alternative::max('pekerjaan');
        $minPenghasilan = Alternative::min('penghasilan');
        $minKelistrikan = Alternative::min('kelistrikan');
        $minKendaraan = Alternative::min('kendaraan');


        foreach( Alternative::all() as $data){
            $arr= [];
            $arr["nama"]= $data->nama;
            $arr["tanggungan_anak"]= $data->tanggungan_anak/ $maxAnak ;
            $arr["pekerjaan"]= $data->pekerjaan/ $maxPekerjaan;
            $arr["penghasilan"]= $minPenghasilan/ $data->penghasilan;
            $arr["kelistrikan"]=$minKelistrikan/ $data->kelistrikan;
            $arr["kendaraan"]=$minKendaraan/ $data->kendaraan;
            array_push($alternatif, $arr);
        }
        return $alternatif;
    }
    
    public function get_view_normalisasi(){
        $alternatif = $this->normalisasi();
        return view ('normalisasi', compact('alternatif'));
    }
    public function index()
    {
        $data = NormalisasiView::get();
        return view ('normalisasi', 
        ['normalisasi'=> $data]);
        
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
