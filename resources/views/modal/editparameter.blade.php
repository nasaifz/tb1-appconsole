@extends('layout.main')

@section('container')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

            <form action="{{ route('cdata.update', $cdata->id_data) }}" method="POST">
                @csrf
                @method('PUT')

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <h4 class="card-title">Light Control</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <label for="c_light">Light ON Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_light }}" name="c_light"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*previous : <span class="mb-0" id="c_light">-</span> minutes</small></p>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label>Light OFF Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_lightoff }}" name="c_lightoff"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*previous : <span class="mb-0" id="c_lightoff">-</span> minutes</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <h4 class="card-title">Pump Control</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <label>Pump ON Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_pump }}" name="c_pump"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*previous : <span class="mb-0" id="c_pump">-</span> minutes</small></p>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label>Pump OFF Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_pumpoff }}" name="c_pumpoff"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*previous : <span class="mb-0" id="c_pumpoff">-</span> minutes</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <h4 class="card-title">Atomizer Control</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <label>Atomizer ON Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_atomizer }}" name="c_atomizer"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*previous : <span class="mb-0" id="c_atomizer">-</span> minutes</small></p>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label>Atomizer OFF Duration</label>
                                            <div class="input-group">
                                                <input type="text" required="required" class="form-control text-center" value="{{ $data->c_atomizeroff }}" name="c_atomizeroff"> <span class="input-group-append"><span class="input-group-text"><b>Minutes</b></span></span>
                                            </div>
                                            <p><small>*Previous : <span class="mb-0" id="c_atomizeroff">-</span> minutes</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-0 d-grid col-xl-4 col-lg-4 col-md-6 col-sm-6 col-8 mx-auto">
                <div class="col-12 p-2">

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>

                </div>
            </div>
        </form>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection

