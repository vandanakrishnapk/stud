@extends('index1')
@section('search')
&nbsp; &nbsp;<input type="text" class="form-control" id="phone">
<a href="{{ route('search') }}" class="btn btn-primary" id="search_button">search</a>
<div id="search_result"></div>
@endsection
@section('content')

@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

<table class="table table-bordered" style="color:white">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>Qualification</th>
        <th>Photo</th>
      
      
        <th colspan="2">Action</th>
    </tr>
    @foreach($profile as $profiles)
    <tr>
        <td>{{ $profiles->name }}</td>
        <td>{{ $profiles->email }}</td>
        <td>{{ $profiles->phone}}</td>      
        <td>{{ $profiles->gender }}</td> 
        <td>
       @foreach($profiles->qualification as $value)
       {{ $value }},
       @endforeach
        </td> 
        <td><img src="{{asset('storage/images/'.$profiles->image)}}"  alt="photo" width="55" height="55">
    </td>
        
    <td>
        <a href="{{ route('edit',$profiles->id) }}" class="btn btn-warning">Edit </a>
    </td>
    <td>
        <a href="{{ route('delete',$profiles->id) }}" class="btn btn-info">Delete</a>
    </td>
    </tr>
    
    @endforeach
  
</table>

@endsection