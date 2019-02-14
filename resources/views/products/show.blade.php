@extends('products.master')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <tr>
                <th>N#</th>
                <th>Name</th>
                <th>Detail</th>
                <th>
                    <a href="{{route('products.index')}}" class="btn btn-default" style="width: 200px">Ortga</a>
                </th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{$product->name}}</td>
                <td>{{$product->detail}}</td>
                <td></td>
            </tr>
        </table>
    </div>
@endsection