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
            <form action ="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                       <div class="col-mb-4 p-1">
                       <label>Enter name:</label>
                        <input type="text" class ="form-control" name = "name" placeholder="name">  
                       </div>
                                         
                <div class="col-mb-4 p-1">
                <label>Enter email</label>
                        <input type="text" class = "form-control" name="email" placeholder="email">
                </div>
                        
                 <div class="col-mb-4 p-1">
                 <label>Phone number</label>
                        <input type="number" name="phone" class="form-control" placeholder="phonenumber">
                 </div>
                        
<div class="col-mb-4 p-1">
<label>Qualification</label><br>
                        <input  type="checkbox" name="qualification[]" value="sslc">SSLC <br>
                        <input   type="checkbox" name="qualification[]" value="plustwo">PlusTwo <br>
                        <input   type="checkbox" name="qualification[]" value="degree">Degree <br>
                        <input   type="checkbox" name="qualification[]" value="PG">PG<br>
</div>
<div class="col-mb-4">
    <label>Gender</label>
    <input type="radio" name="gender"  value="male">Male 
    <input type="radio" name="gender"  value="female">Female
</div>
<div class="col-mb-4">
    <label>Upload profile photo</label>
    <input type="file" name="image" required>
</div>
                        
                </div>
                <center><input type="submit" class="btn btn-primary mt-2" value="register"></center>
            </form>
        </div>
    </div>
</div>
@endsection