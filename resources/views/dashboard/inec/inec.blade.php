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
                                    <th scope="col">Code</th>
                                    <th scope="col">voter's_id_no</th>
                                    <th scope="col">Delim</th>
                                    <th scope="col">Date_of_Birth</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1
                                @endphp
                                @foreach($inecs as $inec)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$inec->fullname}}</td>
                                    <td>{{$inec->email}}</td>
                                    <td>{{$inec->code}}</td>
                                    <td>{{$inec->voter_id_no}}</td>
                                    <td>{{$inec->delim}}</td>
                                    <td>{{$inec->date_of_birth}}</td>
                                    <td>{{$inec->sex}}</td>
                                    <td>{{$inec->occupation}}</td>
                                    <td>{{$inec->address}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{url('inec-edit/'.$inec->id)}}">
                                            <button type="submit" class="btn btn-sm btn-success">Edit</button> 
                                            </form>
                                            <form action="{{url('inec-delete/'.$inec->id)}}">
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to delete this candidate?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $inecs->links()}}
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