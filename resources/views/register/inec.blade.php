@extends('register.layout')
@section('content')
<div class="container">
        <h1 align="middle"><img src="{{asset('img/logo-inec.png')}}" alt="" width="200px" height="80px"></h1>
            @if(Session::has('Success'))
            <div class="alert alert-success" role="alert">
            {{Session::get('Success')}}
            </div>
            @endif
        <h2>INEC Registration</h2>
        <form action="{{url('inec-store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="username">Fullname</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" id="username" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="code">code:</label>
                <input type="text" id="code" name="code" placeholder="Enter your code." required>
            </div>    
            <div class="form-group">
                <label for="voter_id_no">voter's id no:</label>
                <input type="text" id="voter_id_no" name="voter_id_no" placeholder="Enter your voter_id_no" required>
            </div>    
            <div class="form-group">
                <label for="delim">delim:</label>
                <input type="text" id="delim" name="delim"  required>
            </div>    
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" placeholder="Enter your Date of Birth" required>
            </div>    
            <div class="form-group">
                <label for="sex">Sex:</label>
                <input type="text" id="sex" name="sex" required>
            </div>    
           
            <div class="form-group">
                <label for="occupation">occupation:</label>
                <input type="text" id="occupation" name="occupation" required>
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