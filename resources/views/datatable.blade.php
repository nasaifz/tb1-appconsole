@extends('layout.main')

@section('container')

<div class="content-body">
    <div class="container-fluid">
        <!-- <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div> -->
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title">Datatable</h4>
                    </div> --}}
                    <div id="user-activity" class="">
                        <div class="card-header border-0 pb-0 d-sm-flex d-block">
                            <div class="col-12">
                                <div class="row">
                                        <div class="card-body col-4">
                                        <input class="form-control input-daterange-datepicker text-center rounded input-primary" type="text" name="daterange" value="-">
                                        </div>
                                        <div class="card-body col-5">
                                            <div class="basic-dropdown">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                                                        Parameter
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Environment Temp</a>
                                                        <a class="dropdown-item" href="#">Humidity</a>
                                                        <a class="dropdown-item" href="#">Nutrition Temp</a>
                                                        <a class="dropdown-item" href="#">Light intensity</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body col-3 d-flex justify-content-end">
                                            <div class="row">
                                            <ul class="nav btn-group" role="tablist">
                                                <li class="nav-item btn btn-primary btn-sm">
                                                    <a class="nav-link active text-light" data-toggle="tab" href="#tab1" role="tab">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                                                          </svg>
                                                    </a>
                                                </li>
                                                <li class="nav-item btn btn-primary btn-sm">
                                                    <a class="nav-link text-light" data-toggle="tab" href="#tab2" role="tab">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                                                          </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>


                        </div>

                        <div class="card-body py-0">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <div class="pt-4">
                                        <canvas id="lineChart_2"></canvas>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="table-responsive">


                                        <table id="example2" class="display">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Environment Temp</th>
                                                    <th>Humidity</th>
                                                    <th>Nutrition Temp</th>
                                                    <th>Light intensity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datatable as $data)
                                                    <tr>
                                                        <td>{{ $data->id_data }}</td>
                                                        <td>{{ $data->date }}</td>
                                                        <td>{{ $data->t_udara }}</td>
                                                        <td>{{ $data->rh_udara }}</td>
                                                        <td>{{ $data->t_akar1 }}</td>
                                                        <td>{{ $data->cahaya }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Environment Temp</th>
                                                    <th>Humidity</th>
                                                    <th>Nutrition Temp</th>
                                                    <th>Light intensity</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
