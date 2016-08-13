<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Harga;
use Hitung;
use Illuminate\Http\Request;
use Session;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alt_kriteria = Session::get('alt_kriteria');
        $harga_alt = Session::get('harga_alt');
        $bbm_alt = Session::get('bbm_alt');
        $warna_alt = Session::get('warna_alt');
        $cc_alt = Session::get('cc_alt');
        $data = ['Harga','BBM','Warna','CC'];
        return view('hasil.index', compact('alt_kriteria','harga_alt','bbm_alt','warna_alt','cc_alt','data'))->withTitle('Hasil Perhitungan');
    }
}
