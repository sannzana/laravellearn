@extends('base.backend.master')
@section('dashboard')
active
@endsection
@section('title')
Ticketing Dashboard
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="row">
    <div class="col-xxxl-12 col-12">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="box box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-start">
                            <h5>Total Booking</h5>
                            <h3 class="mb-0 fw-500">325</h3>
                        </div>
                        <div>
                            <div id="progressbar1" class="mx-auto w-100 position-relative"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="#eee" stroke-width="8" fill-opacity="0"></path><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="rgb(230,100,48)" stroke-width="8" fill-opacity="0" style="stroke-dasharray: 219.942, 219.942; stroke-dashoffset: 48.3873;"></path></svg><div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(230, 100, 48); font-size: 1.5rem;"><i class="icon-Dinner1"><span class="path1"></span><span class="path2"></span></i></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-start">
                            <h5>Total Revenue</h5>
                            <h3 class="mb-0 fw-500">$425k</h3>
                        </div>
                        <div>
                            <div id="progressbar2" class="mx-auto w-100 position-relative"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="#eee" stroke-width="8" fill-opacity="0"></path><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="rgb(230,100,48)" stroke-width="8" fill-opacity="0" style="stroke-dasharray: 219.942, 219.942; stroke-dashoffset: 109.971;"></path></svg><div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(230, 100, 48); font-size: 1.5rem;"><i class="icon-Dollar"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-start">
                            <h5>All Admin User</h5>
                            <h3 class="mb-0 fw-500">{{ App\Models\User::AllCustomer() }}</h3>
                        </div>
                        <div>
                            <div id="progressbar3" class="mx-auto w-100 position-relative"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="#eee" stroke-width="8" fill-opacity="0"></path><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="rgb(230,100,48)" stroke-width="8" fill-opacity="0" style="stroke-dasharray: 219.942, 219.942; stroke-dashoffset: 131.965;"></path></svg><div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(230, 100, 48); font-size: 1.5rem;"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-start">
                            <h5>Total Customers</h5>
                            <h3 class="mb-0 fw-500">{{ App\Models\User::AllAdminUser() }}</h3>
                        </div>
                        <div>
                            <div id="progressbar4" class="mx-auto w-100 position-relative"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="#eee" stroke-width="8" fill-opacity="0"></path><path d="M 50,50 m 0,-35 a 35,35 0 1 1 0,70 a 35,35 0 1 1 0,-70" stroke="rgb(230,100,48)" stroke-width="8" fill-opacity="0" style="stroke-dasharray: 219.942, 219.942; stroke-dashoffset: 153.96;"></path></svg><div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(230, 100, 48); font-size: 1.5rem;"><i class="icon-User"><span class="path1"></span><span class="path2"></span></i></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection