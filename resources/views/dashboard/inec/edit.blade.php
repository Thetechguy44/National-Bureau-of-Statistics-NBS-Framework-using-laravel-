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
                    <form action="{{url('inec-update',$inec->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="username" class="form-label">Fullname:</label>
                                <input type="text" id="username" class="form-control" name="fullname" value="{{$inec->fullname}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$inec->email}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="license" class="form-label">Code:</label>
                                <input type="text" id="license" name="code" class="form-control" value="{{$inec->code}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="category" class="form-label">Voter's id no:</label>
                                <input type="text" id="category" name="voter_id_no" class="form-control" value="{{$inec->voter_id_no}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="dob" class="form-label">Delim:</label>
                                <input type="text" id="dob" name="delim" class="form-control" value="{{$inec->delim}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="license" class="form-label">Date of Birth:</label>
                                <input type="text" id="address" name="dob" class="form-control" value="{{$inec->date_of_birth}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="height" class="form-label">Sex:</label>
                                <input type="text" id="height" name="sex" class="form-control" value="{{$inec->sex}}" required>
                            </div>    
                            <div class="mb-3">
                                <label for="first_iss_state" class="form-label">Occupation:</label>
                                <input type="text" id="first_iss_state" class="form-control" value="{{$inec->occupation}}" name="occupation" required>
                            </div>    
                            <div class="mb-3">
                                <label for="blood_group" class="form-label">Address:</label>
                                <input type="text" id="blood_group" class="form-control" name="address" value="{{$inec->address}}" required>
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