@extends('layout.main')

@section('container')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-sm-12	col-md-12	col-lg-4	col-xl-4	col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                <h4 class="card-title">Light Control</h4>
                                </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <label>Light ON Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_light">-</span>
                                        <strong class="text-muted">Minutes</strong></li>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Light OFF Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_lightoff">-</span>
                                        <strong class="text-muted">Minutes</strong>
                                    </li>
                                </div>

                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-12	col-md-12	col-lg-4	col-xl-4	col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                <h4 class="card-title">Pump Control</h4>
                                </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <label>Pump ON Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_pump">-</span>
                                        <strong class="text-muted">Minutes</strong>
                                    </li>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Pump OFF Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_pumpoff">-</span>
                                        <strong class="text-muted">Minutes</strong>
                                    </li>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-12	col-md-12	col-lg-4	col-xl-4	col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                <h4 class="card-title">Atomizer Control</h4>
                                </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <label>Atomizer ON Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_atomizer">-</span>
                                        <strong class="text-muted">Minutes</strong>
                                    </li>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Atomizer OFF Duration</label>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="mb-0" id="c_atomizeroff">-</span>
                                        <strong class="text-muted">Minutes</strong>
                                    </li>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

<div class="row mt-0 d-grid col-xl-4 col-lg-4 col-md-6 col-sm-6 col-8 mx-auto">
        <div class="col-12 p-2">
            <a href="/editparameter">
        <button class="btn btn-primary btn-lg btn-block">Costume</button>
    </div>
</div>

</div>
        </div>
    </div>
            <!--**********************************
            Content body end
        ***********************************-->

 @endsection
