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
                    			<th>Toyota</th>
                    			<th>Honda</th>
                    			<th>Isuzu</th>
                                <th>Nissan</th>
                    			<th width="7"></th>
                    		</tr>
                    	</thead>
                    	<tbody>

                			{{-- @foreach($datas as $data) --}}
                				<tr>
                                    {{Form::model($datas, array('route' => array('harga.update', $datas->id),'method'=>'put'))}}
                                        <td>{!!Form::text('xenia',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('luxio',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('terios',null,['class'=>'form-control'])!!}</td>
                                        <td>{!!Form::text('ayla',null,['class'=>'form-control'])!!}</td>
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