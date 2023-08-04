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
                                    <th scope="col">Type</th>
                                    <th scope="col">Country Code</th>
                                    <th scope="col">Passport No.</th>
                                    <th scope="col">Nationality</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Place of Birth</th>
                                    <th scope="col">Personal No.</th>
                                    <th scope="col">Authority</th>
                                    <th scope="col">Date of Issue</th>
                                    <th scope="col">Date of Expiry</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1
                                @endphp
                                @foreach($immigrations as $immigration)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$immigration->fullname}}</td>
                                    <td>{{$immigration->email}}</td>
                                    <td>{{$immigration->type}}</td>
                                    <td>{{$immigration->country_code}}</td>
                                    <td>{{$immigration->passport_no}}</td>
                                    <td>{{$immigration->nationality}}</td>
                                    <td>{{$immigration->date_of_birth}}</td>
                                    <td>{{$immigration->sex}}</td>
                                    <td>{{$immigration->place_of_birth}}</td>
                                    <td>{{$immigration->personal_no}}</td>
                                    <td>{{$immigration->authority}}</td>
                                    <td>{{$immigration->date_of_issue}}</td>
                                    <td>{{$immigration->date_of_expiry}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{url('immigration-edit/'.$immigration->id)}}">
                                            <button type="submit" class="btn btn-sm btn-success">Edit</button> 
                                            </form>
                                            <form action="{{url('immigration-delete/'.$immigration->id)}}">
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to delete this candidate?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $immigrations->links()}}
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