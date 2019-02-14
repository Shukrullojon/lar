@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" action="{{route('store')}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description">
                    <label>User id</label>
                    <input type="text" class="form-control" name="user_id">
                    <br>
                    <input type="submit" class="form-control btn btn-success" value="add companies">
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection