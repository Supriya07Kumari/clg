@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('holiday-ecommerce.jpg');height:600px;background-size:cover">
    <div class="row">
    @foreach($data as $d)
        <div class="col-lg-3">
            <div class="card mt-3  bg-light">
                <img src="{{asset('images/'.$d->logo)}}" alt="" width="100px" class="card-image">
                <div class="card-body mx-auto">
                    
                    
                       <h5>{{$d->title}}</h5>
                       
                       <h5>{{$d->city}}</h5>
                    
                    
                    <a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-success btn-sm">Delete</a>
                    <a href="{{route('edit',['id'=>$d->id])}}" class="btn btn-danger btn-sm">Edit</a>
                </div>
            </div>       
        </div>
        @endforeach 
    </div>
</div>
@endsection