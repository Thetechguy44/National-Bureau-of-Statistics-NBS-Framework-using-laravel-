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
                        <h6 class="mb-0">FRSC Candadates</h6>
                    </div>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Immigration Candadates</h6>
                    </div>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">INEC Candadates</h6>
                    </div>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">NIMC Candadates</h6>
                    </div>
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
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection