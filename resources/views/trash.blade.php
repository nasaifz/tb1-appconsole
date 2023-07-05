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
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" id="fname" name="fname" value=""> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Light OFF Duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
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
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" value="0"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Pump OFF Duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" value="0"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
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
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" value="0"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label>Atomizer OFF Duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" value="0"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></i></span></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

<div class="row mt-0 d-grid gap-2 col-xl-4 col-lg-6 col-md-6 col-sm-8 col-10 mx-auto">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 p-2">
        <button class="btn btn-info btn-lg btn-block">load</button>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 p-2">
        <button class="btn btn-primary btn-lg btn-block">Save</button>
    </div>
</div>

</div>
        </div>
    </div>
            <!--**********************************
            Content body end
        ***********************************-->

 @endsection




 <div class="card">
    <div class="card-body">
        <!-- Nav tabs -->

        <div class="default-tab">
            <li><h4 class="card-title text-center d-block">Previous 1 Hour Chart</h4></li>
            <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-thermometer-snow p-1" viewBox="0 0 16 16">
                            <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585A1.5 1.5 0 0 1 5 12.5z"/>
                            <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1.293l.646-.647a.5.5 0 0 1 .708.708L9 5.207v1.927l1.669-.963.495-1.85a.5.5 0 1 1 .966.26l-.237.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.884.237a.5.5 0 1 1-.26.966l-1.848-.495L9.5 8l1.669.963 1.849-.495a.5.5 0 1 1 .258.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.237.883a.5.5 0 1 1-.966.258L10.67 9.83 9 8.866v1.927l1.354 1.353a.5.5 0 0 1-.708.708L9 12.207V13.5a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5z"/>
                        </svg>  EnvTemp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-moisture p-1" viewBox="0 0 16 16">
                            <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z"/>
                        </svg>  Humidity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-thermometer-half p-1" viewBox="0 0 16 16">
                            <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z"/>
                            <path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z"/>
                        </svg>  NutTemp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-brightness-high-fill p-1" viewBox="0 0 16 16">
                            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                        </svg>  Light intensity</a>
                </li>
            </ul>
            <div class="tab-content ">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="pt-4">
                        <canvas id="lineChart_2"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile1">
                    <div class="pt-4">
                        <canvas id="lineChart_2"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact1">
                    <div class="pt-4">
                        <canvas id="lineChart_2"></canvas>
                    </div>
                </div>
                <div class="tab-pane fade" id="message1">
                    <div class="pt-4">
                        <canvas id="lineChart_2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
