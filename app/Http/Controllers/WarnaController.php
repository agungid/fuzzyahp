<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Warna;
use Hitung;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Warna::all();
        //Hitung SIGMA M1 Lower
        $m1L=[];
        $title_sigma=['SIGMA M1 J','SIGMA M2 J','SIGMA M3 J','SIGMA M4 J'];
        foreach ($datas as $data) {
            $m1L[]= Hitung::setBagi(Hitung::sekalaFuzzyLower($data['xenia']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['luxio']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['terios']))+
            Hitung::setBagi(Hitung::sekalaFuzzyLower($data['ayla']));
        }
        //Hitung SIGMA M1 Middle
        $m1M=[];
        foreach ($datas as $data) {
            $m1M[]= Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['xenia']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['luxio']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['terios']))+
            Hitung::setBagi(Hitung::sekalaFuzzyMiddle($data['ayla']));
        }

        //Hitung SIGMA M1 Upper
        $m1U=[];
        foreach ($datas as $data) {
            $m1U[]= Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['xenia']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['luxio']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['terios']))+
            Hitung::setBagi(Hitung::sekalaFuzzyUpper($data['ayla']));
        }

        return view('warna.index', compact('datas','m1L','m1M','m1U','title_sigma'))->withTitle('Alternatif Warna');
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
        $datas = Warna::findOrFail($id);
        return view('warna.edit', compact('datas'))->withTitle('Edit Warna');
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
        $warna = Warna::findOrFail($id);
        $data = $request->all();
        $warna->update($data);
        return redirect(route('warna.index'));
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
