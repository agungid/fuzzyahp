@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{$title}}</strong></div>

                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th>Harga</th>
                    			<th>BBM</th>
                    			<th>Warna</th>
                                <th>CC</th>
                    			<th width="7"></th>
                    		</tr>
                    	</thead>
                    	<tbody>

                			{{-- @foreach($datas as $data) --}}
                				<tr>
                                    {{Form::model($datas, array('route' => array('data.update', $datas->id),'method'=>'put'))}}
                                        <td>{!!Form::text('harga',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('bbm',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('warna',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('cc',null,['class'=>'form-control'])!!}</td>
                                        <td><input type="submit" class="btn btn-primary btn-sm" value="Perbaharui"></td>
                                    {{ Form::close() }}
                                </tr>
                			{{-- @endforeach --}}
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection