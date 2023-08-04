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
                    <form action="{{url('nimc-update',$nimc->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="username" class="form-label">Fullname:</label>
                                <input type="text" id="username" class="form-control" name="fullname" value="{{$nimc->fullname}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$nimc->email}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="license" class="form-label">Gender:</label>
                                <input type="text" id="license" name="gender" class="form-control" value="{{$nimc->gender}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="category" class="form-label">Tracking id:</label>
                                <input type="text" id="category" name="tracking_id" class="form-control" value="{{$nimc->tracking_id}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="dob" class="form-label">National id no:</label>
                                <input type="text" id="dob" name="national_id_no" class="form-control" value="{{$nimc->national_id_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="blood_group" class="form-label">Address:</label>
                                <input type="text" id="blood_group" class="form-control" name="address" value="{{$nimc->address}}" required>
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