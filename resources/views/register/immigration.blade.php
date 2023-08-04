@extends('register.layout')
@section('content')
<div class="container">
        <h1 align="middle"><img src="{{asset('img/imm-logo.png')}}" alt="" width="200px" height="80px"></h1>
        @if(Session::has('Success'))
            <div class="alert alert-success" role="alert">
            {{Session::get('Success')}}
            </div>
        @endif
        <h2>FRSC Registration</h2>
        <form action="{{url('immigration-store')}}" method="Post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="username">Fullname</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" id="username" name="email" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="type">type:</label>
                <input type="text" id="type" name="type" placeholder="Enter your type." required>
            </div>    
            <div class="form-group">
                <label for="country_code">country code:</label>
                <input type="text" id="country_code" name="country_code" placeholder="Enter your country_code" required>
            </div>    
            <div class="form-group">
                <label for="passport_no">passport no:</label>
                <input type="text" id="passport_no" name="passport_no"  required>
            </div>    
            <div class="form-group">
                <label for="nationality">nationality:</label>
                <input type="text" id="nationality" name="nationality" placeholder="Enter your nationality." required>
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
                <label for="place_of_birth">place_of_birth:</label>
                <input type="text" id="place_of_birth" name="place_of_birth" required>
            </div>    
            <div class="form-group">
                <label for="personal_no">personal no:</label>
                <input type="text" id="personal_no" name="personal_no" required>
            </div>    
            <div class="form-group">
                <label for="authority">authority:</label>
                <input type="text" id="authority" name="authority" required>
            </div>    
            <div class="form-group">
                <label for="date_of_issue">date of issue:</label>
                <input type="text" id="date_of_issue" name="date_of_issue" required>
            </div>    
            <div class="form-group">
                <label for="date_of_expiry">date of expiry:</label>
                <input type="text" id="date_of_expiry" name="date_of_expiry" required>
            </div>    
               <div>
                 <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection