@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div>

            <p>Welcome Home, <span class="fw-bold"> {{ Auth::user()->name }} </span></p>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body mb-2">
                <center class="mt-4">
                    <h4 class="card-title mt-2">{{ Auth::user()->name }}</h4>
                    <h6 class="card-subtitle">{{ Auth::user()->nik }}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                <font class="font-weight-medium">254</font>
                            </a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                <font class="font-weight-medium">54</font>
                            </a></div>
                    </div>
                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body"> <small class="text-muted">Email address </small>
                <h6>{{ Auth::user()->email }}</h6> <small class="text-muted pt-4 db">Phone</small>
                <h6>{{ Auth::user()->telp }}</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-6">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row pt-2 pb-2">
                        <!-- Column -->
                        <div class="col pr-0">
                            <h1 class="font-weight-light">86</h1>
                            <h6 class="text-muted">New Clients</h6>
                        </div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20"><i
                                    class="mdi mdi-account-circle"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-6">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row pt-2 pb-2">
                        <!-- Column -->
                        <div class="col pr-0">
                            <h1 class="font-weight-light">248</h1>
                            <h6 class="text-muted">All Projects</h6>
                        </div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="30%" class="css-bar mb-0 css-bar-danger css-bar-20"><i
                                    class="mdi mdi-briefcase-check"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-6">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row pt-2 pb-2">
                        <!-- Column -->
                        <div class="col pr-0">
                            <h1 class="font-weight-light">352</h1>
                            <h6 class="text-muted">New Items</h6>
                        </div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="40%" class="css-bar mb-0 css-bar-warning css-bar-40"><i
                                    class="mdi mdi-star-circle"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-6">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row pt-2 pb-2">
                        <!-- Column -->
                        <div class="col pr-0">
                            <h1 class="font-weight-light">159</h1>
                            <h6 class="text-muted">Invoices</h6>
                        </div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="60%" class="css-bar mb-0 css-bar-info css-bar-60"><i
                                    class="mdi mdi-receipt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
