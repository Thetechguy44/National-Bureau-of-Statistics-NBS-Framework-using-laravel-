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
                      <!-- Recent Sales Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Registered Candadates</h6>
                    </div>
                         @if(Session::has('Success'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('Success')}}
                            </div>
                         @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">S/N</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">License No</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">First_iss_state</th>
                                    <th scope="col">Blood_group</th>
                                    <th scope="col">Facial_mark</th>
                                    <th scope="col">Glasses</th>
                                    <th scope="col">Replace_no</th>
                                    <th scope="col">Renewal_no</th>
                                    <th scope="col">Next_of_kin</th>
                                    <th scope="col">Date of first ISS</th>
                                    <th scope="col">ISS</th>
                                    <th scope="col">EXP</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1
                                @endphp
                                @foreach($frscs as $frsc)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$frsc->fullname}}</td>
                                    <td>{{$frsc->email}}</td>
                                    <td>{{$frsc->license_no}}</td>
                                    <td>{{$frsc->category}}</td>
                                    <td>{{$frsc->date_of_birth}}</td>
                                    <td>{{$frsc->address}}</td>
                                    <td>{{$frsc->sex}}</td>
                                    <td>{{$frsc->height}}</td>
                                    <td>{{$frsc->frst_iss_state}}</td>
                                    <td>{{$frsc->blood_group}}</td>
                                    <td>{{$frsc->facial_mark}}</td>
                                    <td>{{$frsc->glasses}}</td>
                                    <td>{{$frsc->replace_no}}</td>
                                    <td>{{$frsc->renewal_no}}</td>
                                    <td>{{$frsc->next_of_kin}}</td>
                                    <td>{{$frsc->date_of_1st_ISS}}</td>
                                    <td>{{$frsc->ISS}}</td>
                                    <td>{{$frsc->EXP}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{url('frsc-edit/'.$frsc->id)}}">
                                            <button type="submit" class="btn btn-sm btn-success">Edit</button> 
                                            </form>
                                            <form action="{{url('frsc-delete/'.$frsc->id)}}">
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to delete this candidate?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $frscs->links()}}
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection