@extends('products.master')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Add new Product</h4>
            </div>
            <div class="col-md-4">
                <a href="{{route('products.index')}}" class="btn btn-success" style="width: 300px">Back</a>
            </div>
        </div>
        <div class="row">
            <form action="{{route('products.store')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group {{$errors->has('name')? ' has-error':''}}">
                            <strong>Name</strong>
                            <input type="text" class="form-control" name="name" placeholder="enter name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group {{$errors->has('detail')? ' has-error':''}}">
                            <strong>Name</strong>
                            <input type="text" class="form-control" name="detail" placeholder="enter detail">
                            <span class="text-danger">{{$errors->first('detail')}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn-primary">add new product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection