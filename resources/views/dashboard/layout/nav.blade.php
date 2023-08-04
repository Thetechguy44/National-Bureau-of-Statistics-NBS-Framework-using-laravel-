<nav class="navbar bg-secondary navbar-dark">
    <a href="{{url('dashboard')}}" class="navbar-brand mx-4 mb-3">

        <h3 class="text-primary"><img src="{{asset('img/nbs-logo.jpg')}}" alt="" width="37px" height="37px">NBS</h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="{{asset('img/IMG_0646.JPG')}}" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">Fortress Ch</h6>
            <span>Admin</span>
        </div>
    </div>
    <div class="navbar-nav w-100">
        <a href="{{url('dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="{{url('frsc')}}" class="nav-item nav-link"><img src="{{asset('img/frs.jpg')}}" alt="" width="37px" height="37px"> FRSC</a>
        <a href="{{url('immigration')}}" class="nav-item nav-link"><img src="{{asset('img/imm.jpg')}}" alt="" width="37px" height="30px"> IMMIGRATION</a>
        <a href="{{url('nimc')}}" class="nav-item nav-link"><img src="{{asset('img/Nimc-logo.png')}}" alt="" width="37px" height="37px"> NIMC</a>
        <a href="{{url('inec')}}" class="nav-item nav-link"><img src="{{asset('img/vote.jpg')}}" alt="" width="37px" height="37px"> INEC</a>
        <a href="{{url('access')}}" class="nav-item nav-link"><img src="{{asset('img/nbs-logo.jpg')}}" alt="" width="37px" height="37px"> Unified database</a>
    </div>
</nav>