@extends('register.layout')
@section('content')
<div class="container">
        <h1 align="middle"><img src="{{asset('img/logofr.png')}}" alt="" width="200px" height="80px"></h1>
        @if(Session::has('Success'))
            <div class="alert alert-success" role="alert">
            {{Session::get('Success')}}
            </div>
        @endif
        <h2>FRSC Registration</h2>
        <form action="{{url('frsc/store')}}" method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="username">Fullname</label>
                <input type="text" id="username" name="fullname" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="license">License No:</label>
                <input type="text" id="license" name="license" placeholder="Enter your License No." required>
            </div>    
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" placeholder="Enter your category" required>
            </div>    
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob" placeholder="Enter your Date of Birth" required>
            </div>    
            <div class="form-group">
                <label for="license">address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address." required>
            </div>    
            <div class="form-group">
                <label for="sex">Sex:</label>
                <input type="text" id="sex" name="sex" required>
            </div>    
            <div class="form-group">
                <label for="height">height:</label>
                <input type="text" id="height" name="height" placeholder="Enter your height." required>
            </div>    
            <div class="form-group">
                <label for="first_iss_state">first_iss_state:</label>
                <input type="text" id="first_iss_state" name="first_iss_state" required>
            </div>    
            <div class="form-group">
                <label for="blood_group">blood_group:</label>
                <input type="text" id="blood_group" name="blood_group" required>
            </div>    
            <div class="form-group">
                <label for="facial_mark">facial_mark:</label>
                <input type="text" id="facial_mark" name="facial_mark" required>
            </div>    
            <div class="form-group">
                <label for="glasses">glasses:</label>
                <input type="text" id="glasses" name="glasses" required>
            </div>    
            <div class="form-group">
                <label for="replace_no">replace_no:</label>
                <input type="text" id="replace_no" name="replace_no" required>
            </div>    
            <div class="form-group">
                <label for="renewal_no">renewal_no:</label>
                <input type="text" id="renewal_no" name="renewal_no" required>
            </div>    
            <div class="form-group">
                <label for="next_of_kin">next_of_kin:</label>
                <input type="text" id="next_of_kin" name="next_of_kin" required>
            </div>    
            <div class="form-group">
                <label for="date_of_iss">Date of first ISS:</label>
                <input type="text" id="date_of_iss" name="date_of_iss" required>
            </div>    
            <div class="form-group">
                <label for="ISS">ISS:</label>
                <input type="text" id="ISS" name="ISS" required>
            </div>    
            <div class="form-group">
                <label for="EXP">EXP:</label>
                <input type="text" id="EXP" name="EXP" required>
            </div>     
            <div>
               <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection