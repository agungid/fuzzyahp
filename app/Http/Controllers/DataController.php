<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Kriteria;
use Hitung;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kriteria::all();
        //Hitung SIGMA M1 Lower
        $m1L=[];
        $title_sigma=['SIGMA M1 J','SIGMA M2 J','SIGMA M3 J','SIGMA M4 J'];
        foreach ($datas as $data) {
            $m1L[]= Hitung::setBagi(Hitung::sekalaFuzzyLower($data['harga']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['bbm']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['warna']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['cc']));
        }
        //Hitung SIGMA M1 Middle
        $m1M=[];
        foreach ($datas as $data) {
            $m1M[]= Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['harga']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['bbm']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['warna']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['cc']));
        }

        //Hitung SIGMA M1 Upper
        $m1U=[];
        foreach ($datas as $data) {
            $m1U[]= Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['harga']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['bbm']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['warna']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['cc']));
        }

        return view('data.index', compact('datas','m1L','m1M','m1U','title_sigma'))->withTitle('Kriteria');
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
        $datas = Kriteria::findOrFail($id);
        return view('data.edit', compact('datas'))->withTitle('Edit Kriteria');
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
        $kriteria = Kriteria::findOrFail($id);
        $data = $request->all();
        $kriteria->update($data);
        return redirect(route('data.index'));
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
