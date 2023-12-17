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
}
