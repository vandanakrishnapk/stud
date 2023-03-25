@extends('index1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif
            <form action ="{{ route('update',$employee->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                       <div class="col-mb-4 p-2">
                       <label>Enter name:</label>
                        <input type="text" class ="form-control" name = "name" placeholder="name" value="{{ $employee->name }}">  
                       </div>
                                         
                <div class="col-mb-4 p-2">
                <label>Enter email</label>
                        <input type="text" class = "form-control" name="email" placeholder="email" value="{{ $employee->email }}">
                </div>
                        
                 <div class="col-mb-4 p-2">
                 <label>Phone number</label>
                        <input type="number" name="phone" class="form-control" placeholder="phonenumber" value="{{ $employee->phone }}">
                 </div>              
              </div>
              <div class="col-mb-4 p-2">
                 <label>Upload profile photo</label>
                        <input type="file" name="image" class="form-control">
                 </div>              
              </div>
                <center><input type="submit" class="btn btn-primary mt-2" value="update"></center>
            </form>
        </div>
    </div>
</div>
@endsection