<?php
/*echo "<pre>";
print_r($companies->projects);
die('5555');*/
?>
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
            <h3 style="text-align: center">Projects</h3>
            <table class="table table-hover">
                <tr>
                    <th>Project Nomi</th>
                    <th>Project Description</th>
                    <th>Project User</th>
                </tr>
                    @foreach($company->projects as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->user_id }}</td>
                        </tr>
                    @endforeach
            </table>
            <h3 style="text-align: center">Tasks</h3>
            <table class="table table-hover">
                <tr>
                    <th>Task Nomi</th>
                    <th>Task project id</th>
                    <th>Task User</th>
                </tr>
                @foreach($company->tasks as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->project_id }}</td>
                        <td>{{ $value->user_id }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
        <div class="col-md-2">
            <h1>Action</h1>
            <ul class="list-unstyled">
                <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                <li><a href="/companies/{{$company->id}}">Delete</a></li>
                <li><a href="#">Add new member</a></li>
            </ul>
        </div>
    </div>
@endsection
