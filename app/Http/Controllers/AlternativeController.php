<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Kriteria;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alternative = Alternative::get();
        $kriteria = Kriteria::get();
        return view('alternative.index', compact( 'alternative', 'kriteria'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kriteria = Kriteria::get();
        return view('alternative.create', compact('kriteria'));
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
        $request->validate([
            'nama' => 'required'
        ]);

        // Save the alternative
        $alt = new Alternative;
        $alt->nik = $request->nik;
        $alt->nama = $request->nama;
        $alt->tempat_lahir = $request->tempat_lahir;
        $alt->tanggal_lahir = $request->tanggal_lahir;
        $alt->jk = $request->jk;
        $alt->agama = $request->agama;
        $alt->tanggungan_anak = $request->tanggungan;
        
        $alt->penghasilan = $request->penghasilan;
        $alt->luas_bangunan = $request->luas_bangunan;
        $alt->kelistrikan = $request->kelistrikan;
        $alt->kendaraan = $request->kendaraan;

       
        $alt->save();

        // // Save the score
        // $kriteria = Kriteria::get();
        // foreach ($kriteria as $cw) {
        //     $score = new AlternativeScore();
        //     $score->alternative_id = $alt->id;
        //     $score->id_kriteria = $cw->id;
        //     $score->id_nilai = $request->input('criteria')[$cw->id];
        //     $score->save();
        

        return redirect()->route('alternatives.index')
            ->with('success', 'Alternative created successfully.');
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
        $alternative = Alternative::where('id', $id)->first();
        return view('alternative.edit', compact('alternative'));
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
        $request->validate([
            
            'tanggungan_anak' => 'required',
            'penghasilan' => 'required',
            'luas_bangunan' => 'required',
            'kelistrikan' => 'required',
            'kendaraan' => 'required',
        ]);

        $agama      = $request->input('agama');

        $tanggungan_anak      = $request->input('tanggungan_anak');
        
        $penghasilan   = $request->input('penghasilan');
        $luas_bangunan       = $request->input('luas_bangunan');
        $kelistrikan = $request->input('kelistrikan');
        $kendaraan = $request->input('kendaraan');

        $alt = Alternative::where('id', $id)->first();
        $alt->agama = $agama;
        $alt->tanggungan_anak = $tanggungan_anak;
        
        $alt->penghasilan = $penghasilan;
        $alt->luas_bangunan = $luas_bangunan;
        $alt->kelistrikan = $kelistrikan;
        $alt->kendaraan = $kendaraan;

        $alt->save();

        return redirect()->route('alternatives.index')
            ->with('success', 'Alternative updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternative $alternative)
    {
        //
        $alternative->delete();

        return redirect()->route('alternatives.index')
            ->with('success', 'Alternative deleted successfully');
    }

    public function normalisasi(){
        
        $alternatif=[];

        $maxAnak = Alternative::max('tanggungan_anak');
        
        $minPenghasilan = Alternative::min('penghasilan');
        $minLuas = Alternative::min('luas_bangunan');
        $minKelistrikan = Alternative::min('kelistrikan');
        $minKendaraan = Alternative::min('kendaraan');

        foreach( Alternative::all() as $data){
            $arr= [];
            $arr["nama"]= $data->nama;
            if($data->tanggungan_anak){
                $arr["tanggungan_anak"]= $data->tanggungan_anak/ $maxAnak ;
            }
            
            $arr["penghasilan"]= $minPenghasilan/ $data->tanggungan_anak;
            $arr["luas_bangunan"]= $data->luas_bangunan/ $maxAnak;
            $arr["kelistrikan"]=$minKelistrikan/ $data->tanggungan_anak;
            $arr["kendaraan"]=$minKendaraan/ $data->tanggungan_anak;
            array_push($alternatif, $arr);
        }
        return $alternatif;
    }
    public function get_view_normalisasi(){
        $alternatif = $this->normalisasi();
        return view ('normalisasi', compact('alternatif'));
    }
}
