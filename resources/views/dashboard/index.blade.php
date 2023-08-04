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
            <!-- Dashboard Header -->
            <header class="dashboard-header bg-primary py-3 px-4">
                <div class="row">
                    <div class="col-12">
                        <h2><img src="{{asset('img/nbs-logo.jpg')}}" alt="" width="80px" height="50px">NBS(National Bureau Of Statistics)</h2>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content p-4">
                <div class="row">
                    <!-- Dashboard Widgets -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Widget 1</h5>
                                <p class="card-text">This is the content of widget 1.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Widget 2</h5>
                                <p class="card-text">This is the content of widget 2.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Widget 3</h5>
                                <p class="card-text">This is the content of widget 3.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Other Dashboard Elements -->
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Other Elements</h5>
                                <p class="card-text"> {{ __("You're logged in!") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection