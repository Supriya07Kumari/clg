@extends('base')
@section('content')
<div class="jumbotron rounded-0" style="background-image:url('holiday-ecommerce.jpg');height:600px;background-size:cover">
    <div class="row">
        <div class="col-lg-4 mx-auto mt-5">
            <form action="{{route('insertData')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Type</label>
                    <select type="text" name="type" class="form-control">
                    <option selected disabled value="">select Your type</option>
                        <option>Medical College</option>
                        <option>Engineering College</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">est_year</label>
                    <input type="text" name="est_year" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">city</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">state</label>
                    <input type="text" name="state" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger btn-block">
                </div>
            </form>    
        </div>
    </div>
</div>    
    
@endsection    