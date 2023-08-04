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
                    <form action="{{url('frsc-update',$frsc->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="username" class="form-label">Fullname</label>
                                <input type="text" id="username" class="form-control" name="fullname" value="{{$frsc->fullname}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$frsc->email}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="license" class="form-label">License No:</label>
                                <input type="text" id="license" name="license" class="form-control" value="{{$frsc->license_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="category" class="form-label">Category:</label>
                                <input type="text" id="category" name="category" class="form-control" value="{{$frsc->category}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth:</label>
                                <input type="text" id="dob" name="dob" class="form-control" value="{{$frsc->date_of_birth}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="license" class="form-label">address:</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{$frsc->address}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="sex" class="form-label">Sex:</label>
                                <input type="text" id="sex" name="sex" class="form-control" value="{{$frsc->sex}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="height" class="form-label">height:</label>
                                <input type="text" id="height" name="height" class="form-control" value="{{$frsc->height}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="first_iss_state" class="form-label">first_iss_state:</label>
                                <input type="text" id="first_iss_state" class="form-control" value="{{$frsc->frst_iss_state}}" name="first_iss_state" required>
                            </div>    
                            <div class="mb-3">
                                <label for="blood_group" class="form-label">blood_group:</label>
                                <input type="text" id="blood_group" class="form-control" name="blood_group" value="{{$frsc->blood_group}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="facial_mark" class="form-label">facial_mark:</label>
                                <input type="text" id="facial_mark" class="form-control" name="facial_mark" value="{{$frsc->facial_mark}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="glasses" class="form-label">glasses:</label>
                                <input type="text" id="glasses" name="glasses" class="form-control" value="{{$frsc->glasses}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="replace_no" class="form-label">replace_no:</label>
                                <input type="text" id="replace_no" name="replace_no" class="form-control" value="{{$frsc->replace_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="renewal_no" class="form-label">renewal_no:</label>
                                <input type="text" id="renewal_no" name="renewal_no" class="form-control" value="{{$frsc->renewal_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="next_of_kin" class="form-label">next_of_kin:</label>
                                <input type="text" id="next_of_kin" name="next_of_kin" class="form-control" value="{{$frsc->next_of_kin}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="date_of_iss" class="form-label">Date of first ISS:</label>
                                <input type="text" id="date_of_iss" name="date_of_iss"class="form-control" value="{{$frsc->date_of_1st_ISS}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="ISS" class="form-label">ISS:</label>
                                <input type="text" id="ISS" name="ISS" class="form-control" value="{{$frsc->ISS}}" 
                                required>
                            </div>    
                            <div class="mb-3">
                                <label for="EXP" class="form-label">EXP:</label>
                                <input type="text" id="EXP" name="EXP" class="form-control" value="{{$frsc->EXP}}"required>
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