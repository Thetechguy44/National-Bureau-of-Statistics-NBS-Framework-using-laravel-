@extends('dashboard.layout.layout')
@section('content')
<div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
        @include('dashboard.layout.nav')
        </div>
       
         <!-- Content Start -->
        <div class="content">
        @include('dashboard.layout.topbar')
             <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-4">Edit Candadate</h6>
                    </div>
                         @if(Session::has('Success'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('Success')}}
                            </div>
                         @endif
                    <form action="{{url('immigration-update',$immigration->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="username" class="form-label">Fullname:</label>
                                <input type="text" id="username" class="form-control" name="fullname" value="{{$immigration->fullname}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$immigration->email}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="license" class="form-label">Type:</label>
                                <input type="text" id="license" name="type" class="form-control" value="{{$immigration->type}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="category" class="form-label">Country code:</label>
                                <input type="text" id="category" name="country_code" class="form-control" value="{{$immigration->country_code}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="dob" class="form-label">Passport no:</label>
                                <input type="text" id="dob" name="passport_no" class="form-control" value="{{$immigration->passport_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="license" class="form-label">Nationality:</label>
                                <input type="text" id="address" name="nationality" class="form-control" value="{{$immigration->nationality}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="sex" class="form-label">Date of Birth:</label>
                                <input type="text" id="sex" name="dob" class="form-control" value="{{$immigration->date_of_birth}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="height" class="form-label">Sex:</label>
                                <input type="text" id="height" name="sex" class="form-control" value="{{$immigration->sex}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="first_iss_state" class="form-label">Place_of_birth:</label>
                                <input type="text" id="first_iss_state" class="form-control" value="{{$immigration->place_of_birth}}" name="place_of_birth" required>
                            </div>    
                            <div class="mb-3">
                                <label for="blood_group" class="form-label">Personal no:</label>
                                <input type="text" id="blood_group" class="form-control" name="personal_no" value="{{$immigration->personal_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="facial_mark" class="form-label">Authority:</label>
                                <input type="text" id="facial_mark" class="form-control" name="authority" value="{{$immigration->authority}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="glasses" class="form-label">Date of Issue:</label>
                                <input type="text" id="glasses" name="date_of_issue" class="form-control" value="{{$immigration->date_of_issue}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="replace_no" class="form-label">Date of Expiry:</label>
                                <input type="text" id="replace_no" name="date_of_expiry" class="form-control" value="{{$immigration->date_of_expiry}}" required>
                            </div>    
                            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </form>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection