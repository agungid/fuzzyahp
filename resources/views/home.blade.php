@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang {{Auth::user()->name}}</div>

                <div class="panel-body">
                    <div style="text-align:center">
                        <h3 style="position:absolute; background:rgba(255, 255, 255, 0.7); padding:15px; margin-top:200px;">Aplikasi Pemilihan Mobil Pribadi Menggunakan Metode FuzzyAHP</h3>
                        <img src="{{asset('image/bg1.jpg')}}" style="width:900px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
