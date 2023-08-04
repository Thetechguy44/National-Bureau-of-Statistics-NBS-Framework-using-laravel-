@extends('register.layout')
@section('content')
<div class="container">
        <h1 align="middle"><img src="{{asset('img/logonin.png')}}" alt="" width="200px" height="80px"></h1>
            @if(Session::has('Success'))
                <div class="alert alert-success" role="alert">
                {{Session::get('Success')}}
                </div>
            @endif
        <h2>NIMC Registration</h2>
        <form action="{{url('nimc-store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="username">Fullname</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" id="username" name="email" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="gender">gender:</label>
                <input type="text" id="gender" name="gender" required>
            </div>    
            <div class="form-group">
                <label for="tracking_id">tracking id:</label>
                <input type="text" id="tracking_id" name="tracking_id" placeholder="Enter your tracking_id." required>
            </div>    
            <div class="form-group">
                <label for="national_id_no">national id no:</label>
                <input type="text" id="national_id_no" name="national_id_no" placeholder="Enter your national_id_no" required>
            </div>    
            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" id="address" name="address" required>
            </div>       
            <div>
                 <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection