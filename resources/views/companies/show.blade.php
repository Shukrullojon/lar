@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-hover">
                <tr>
                    <th>Nomi</th>
                    <th>Description</th>
                    <th>User</th>
                </tr>
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->description }}</td>
                    <td>{{ $company->user_id }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
