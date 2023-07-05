@extends('layout.main')

@section('container')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-xxl-6 col-sm-12">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header text-center p-3 fs-20 d-block rounded">
                                      <h4 class="card-title">Sensor Update</h4>
                                      <h5 class="mb-0">on
                                        <span id="tanggal">-</span>
                                    </h5>
                                     </div>
                                 </div>
                            </div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-5">
                                        <div class="media ai-icon">
                                            <span class="mr-3 bgl-success text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-thermometer-snow" viewBox="0 0 16 16">
                                                    <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585A1.5 1.5 0 0 1 5 12.5z"/>
                                                    <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1.293l.646-.647a.5.5 0 0 1 .708.708L9 5.207v1.927l1.669-.963.495-1.85a.5.5 0 1 1 .966.26l-.237.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.884.237a.5.5 0 1 1-.26.966l-1.848-.495L9.5 8l1.669.963 1.849-.495a.5.5 0 1 1 .258.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.237.883a.5.5 0 1 1-.966.258L10.67 9.83 9 8.866v1.927l1.354 1.353a.5.5 0 0 1-.708.708L9 12.207V13.5a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5z"/>
                                                  </svg>
                                            </span>
                                            <div class="media-body">
                                                <p class="mb-1">Environment Temp</p>
                                                <h4 class="mb-0">
                                                    <span id="t_udara">0</span>
                                                </h4>
                                                <span class="badge badge-success">&degC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-5">
                                        <div class="media ai-icon">
                                            <span class="mr-3 bgl-warning text-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-moisture" viewBox="0 0 16 16">
                                                    <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z"/>
                                                  </svg>
                                            </span>
                                            <div class="media-body">
                                                <p class="mb-1">Humidity</p>
                                                <h4 class="mb-0">
                                                    <span id="rh_udara">0</span>
                                                </h4>
                                                <span class="badge badge-warning">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-5">
                                        <div class="media ai-icon">
                                            <span class="mr-3 bgl-primary text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-thermometer-half" viewBox="0 0 16 16">
                                                    <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z"/>
                                                    <path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z"/>
                                                  </svg>
                                            </span>
                                            <div class="media-body">
                                                <p class="mb-1">Nutrition Temp</p>
                                                <h4 class="mb-0">
                                                    <span id="t_akar1">0</span>
                                                </h4>
                                                <span class="badge badge-primary">&degC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-5">
                                        <div class="media ai-icon">
                                            <span class="mr-3 bgl-yellow text-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                                                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                                  </svg>
                                            </span>
                                            <div class="media-body">
                                                <p class="mb-1">Light intensity</p>
                                                <h4 class="mb-0">
                                                    <span id="cahaya">0</span>
                                                </h4>
                                                <span class="badge badge-yellow">lux</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <h4 class="card-title">Previous A Hour</h4>
                                <div class="card-action mb-sm-0 my-2">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-success" data-toggle="tab" href="#tab1" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-thermometer-snow p-1" viewBox="0 0 16 16">
                                                    <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585A1.5 1.5 0 0 1 5 12.5z"/>
                                                    <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1.293l.646-.647a.5.5 0 0 1 .708.708L9 5.207v1.927l1.669-.963.495-1.85a.5.5 0 1 1 .966.26l-.237.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.884.237a.5.5 0 1 1-.26.966l-1.848-.495L9.5 8l1.669.963 1.849-.495a.5.5 0 1 1 .258.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.237.883a.5.5 0 1 1-.966.258L10.67 9.83 9 8.866v1.927l1.354 1.353a.5.5 0 0 1-.708.708L9 12.207V13.5a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-warning" data-toggle="tab" href="#tab2" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-moisture p-1" viewBox="0 0 16 16">
                                                    <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-primary" data-toggle="tab" href="#tab3" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-thermometer-half p-1" viewBox="0 0 16 16">
                                                    <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z"/>
                                                    <path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-yellow" data-toggle="tab" href="#tab4" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-brightness-high-fill p-1" viewBox="0 0 16 16">
                                                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="pt-0">
                                            <canvas id="lineChart_2"></canvas>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="pt-0">
                                            <canvas id="temperatureChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <div class="pt-0">
                                            <canvas id="lineChart_2"></canvas>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <div class="pt-0">
                                            <canvas id="lineChart_2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12">
						<div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header text-center p-3 fs-20 d-block rounded">
                                      <h4 class="card-title ">Activity</h4>
                                     </div>
                                 </div>
                            </div>

							<div class="col-xxl-4 col-xl-4 col-lg-12 col-sm-12">
                                <div class="card text-white bg-white text-black">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0"><strong>Light Activity</strong></span></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Last Action is :</span><strong>ON</strong>at<strong>27/02/2023 22:25:00</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duration ON :</span><strong><span id="c_light">-</span></strong>minutes</li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duraton OFF :</span><strong><span id="c_lightoff">-</span></strong>minutes</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-12 col-sm-12">
                                <div class="card text-white bg-white text-black">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0"><strong>Pump Activity</strong></span></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Last Action is :</span><strong>ON</strong>at<strong>27/02/2023 22:25:00</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duration ON :</span><strong><span id="c_pump">-</span></strong>minutes</li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duraton OFF :</span><strong><span id="c_pumpoff">-</span></strong>minutes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-12 col-sm-12">
                                <div class="card text-white bg-white text-black">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0"><strong>Ultrasonic Atomizer Activity</strong></span></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Last Action is :</span><strong>ON</strong>at<strong>27/02/2023 22:25:00</strong></li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duraton ON :</span><strong><span id="c_atomizer">-</span></strong>minutes</li>
                                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Duraton OFF :</span><strong><span id="c_atomizeroff">-</span></strong>minutes</li>
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <script src="./vendor/flot/jquery.flot.js"></script>
        <script src="./vendor/flot/jquery.flot.pie.js"></script>
        <script src="./vendor/flot/jquery.flot.resize.js"></script>
        <script src="./vendor/flot-spline/jquery.flot.spline.min.js"></script>
        <script src="./js/plugins-init/flot-init.js"></script>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
