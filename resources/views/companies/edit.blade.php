@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('companies.update',[$company->id])}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <input
                        value="{{$company->name}}"
                        name="name"
                        class="form-control"
                        id="company-name"
                        required

                >
            </div>
            <div class="form-group">
                <input
                        type="submit"
                        class="btn btn-primary form-control"
                        value="Update"
                >
            </div>
        </form>
    </div>
@endsection

