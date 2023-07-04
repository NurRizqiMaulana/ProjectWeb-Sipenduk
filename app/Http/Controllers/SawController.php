<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Kriteria;

class SawController extends Controller
{
    //
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
            $arr["tanggungan_anak"]= $data->tanggungan_anak/ $maxAnak ;  
            $arr["penghasilan"]= $minPenghasilan/ $data->penghasilan;
            $arr["luas_bangunan"]= $minLuas /$data->luas_bangunan;
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

    public function preferensi(): array
    {

        $alternatif = $this->normalisasi();

        $alternatifBaru = [];


        $c1 = Kriteria::where('kode', 'c1')->first();
        $c2 = Kriteria::where('kode', 'c2')->first();
        $c3 = Kriteria::where('kode', 'c3')->first();
        $c4 = Kriteria::where('kode', 'c4')->first();
        $c5 = Kriteria::where('kode', 'c5')->first();

        foreach ($alternatif as $value) {

            $arr = [];
            
            $arr['nama'] = $value['nama'];
            $arr['tanggungan_anak'] = $value['tanggungan_anak'] * $c1->bobot;
            $arr['penghasilan'] = $value["penghasilan"] * $c2->bobot;
            $arr['luas_bangunan'] = $value["luas_bangunan"] * $c3->bobot;
            $arr['kelistrikan'] = $value["kelistrikan"] * $c4->bobot;
            $arr['kendaraan'] = $value["kendaraan"] * $c5->bobot;

            $arr['nilai'] = $arr['tanggungan_anak'] + $arr['penghasilan'] + $arr['luas_bangunan'] + $arr['kelistrikan'] + $arr['kendaraan'];

            array_push($alternatifBaru, $arr);
        }
        return $alternatifBaru;
    }
    public function get_view_preferensi()
    {
        $alternatif = $this->preferensi();
        // dd($suplements);
        return view('rank', compact('alternatif'));
    }
}
