@if(isset($errors)&&count($errors)>0)
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($errors->all() as $error)
            <strong>{!! $error !!}</strong>
        @endforeach
    </div>
@endif