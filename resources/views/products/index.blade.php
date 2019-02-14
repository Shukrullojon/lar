@extends('products.master')
@section('content')
    <div class="row">
        <h2 style="display: inline-block;text-align: center">Product CRUD</h2>
        <a href="{{route('products.create')}}" style="float: right; margin-top: 20px;width: 200px" class="btn btn-success">Add product</a>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{$message}}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>N#</th>
                <th>Name</th>
                <th>Details</th>
                <th width="300px">Action</th>
            </tr>
            <?php $i=0;?>
            @foreach($products as $product)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="POST" role="form">
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

