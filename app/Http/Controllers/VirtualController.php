<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VirtualController extends Controller
{
    public function Home()
    {
        return view('welcome');
    }
    
    public function GedungPancasila()
    {
        return view('Pages.gedung_pancasila');
    }

    public function NormaalSchool() 
    {
        return view('Pages.normaal');
    }

    public function LapanganTeaterTerbuka() 
    {
        return view('Pages.lap_teater');
    }

    public function Hexapark() 
    {
        return view('Pages.hexa');
    }

    public function Masjid() 
    {
        return view('Pages.masjid');
    }

    public function Perpustakaan() 
    {
        return view('Pages.perpus');
    }

    public function AulaBarat() 
    {
        return view('Pages.albar');
    }

    public function PosPamdal() 
    {
        return view('Pages.pospamdal');
    }

    public function BEMUPIPWK() 
    {
        return view('Pages.bempwk');
    }

    public function PKM() 
    {
        return view('Pages.pkmpwk');
    }

    public function RKMKB() 
    {
        return view('Pages.rkmkb');
    }

    public function AulaTimur() 
    {
        return view('Pages.altim');
    }

    public function Gazebo() 
    {
        return view('Pages.gazebo');
    }

    public function Labkom() 
    {
        return view('Pages.labkom');
    }

    // Pembatas
    public function RKPSTI()  
    {
       return view('Pages.RK_PSTI'); 
    }

    public function GedungReformasi()  
    {
       return view('Pages.gedung_reformasi'); 
    }

    public function LobbyGedungReformasi()  
    {
       return view('Pages.lobby_reformasi'); 
    }

    public function LobbyGedungPancasila()  
    {
       return view('Pages.lobby_pancasila'); 
    }

    public function SmartClass()  
    {
       return view('Pages.smartclass'); 
    }

    public function RuangProdiPSTI()  
    {
       return view('Pages.prodipsti'); 
    }

    public function RAdmin()  
    {
       return view('Pages.radmin'); 
    }

    public function RuangDosen()  
    {
       return view('Pages.ruang_dosen'); 
    }

    public function RuangMicro()  
    {
       return view('Pages.ruang_micro'); 
    }

    public function LapanganBola()  
    {
       return view('Pages.lapangan_bola'); 
    }

    public function LapanganVolly()  
    {
       return view('Pages.lapangan_volly'); 
    }

    public function Asrama()  
    {
       return view('Pages.asrama'); 
    }
}
