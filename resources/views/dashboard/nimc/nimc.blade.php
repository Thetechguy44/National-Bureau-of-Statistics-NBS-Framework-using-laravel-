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
                                    <th scope="col">Gender</th>
                                    <th scope="col">Tracking id</th>
                                    <th scope="col">National Id No</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1
                                @endphp
                                @foreach($nimcs as $nimc)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$nimc->fullname}}</td>
                                    <td>{{$nimc->email}}</td>
                                    <td>{{$nimc->gender}}</td>
                                    <td>{{$nimc->tracking_id}}</td>
                                    <td>{{$nimc->national_id_no}}</td>
                                    <td>{{$nimc->address}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{url('nimc-edit/'.$nimc->id)}}">
                                            <button type="submit" class="btn btn-sm btn-success">Edit</button> 
                                            </form>
                                            <form action="{{url('nimc-delete/'.$nimc->id)}}">
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to delete this candidate?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $nimcs->links()}}
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