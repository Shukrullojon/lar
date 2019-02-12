@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="panel panel-success col-md-6 col-xs-12 col-lg-6 col-md-offset-2" style="padding: 0px">
            <div class="panel-heading">Companies</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($companies as $item=>$value)
                        <li class="list-group-item"><a href="/companies/{{$value->id}}}">{{ $value->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection