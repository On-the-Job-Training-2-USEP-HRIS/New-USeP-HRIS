@extends('layouts.admin.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">
        
        <h4 class="page-title">Dashboard</h4>
       
        <!-- Row -->
        <div class="row">

            <!-- Card -->
            <div class="col-md-3">
                <div class="card card-stats card-warning">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-users"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Users</p>
                                    <h4 class="card-title">
                                        <p>{{$result['users']}}</p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->           
            <!-- Card -->   
            <div class="col-md-3">
                <div class="card card-stats card-success">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-pie-chart"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Sections</p>
                                    <h4 class="card-title">{{$result['sections']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->   
            <!-- Card -->   
            <div class="col-md-3">
                <div class="card card-stats card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-newspaper-o"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Fields</p>
                                    <h4 class="card-title">{{$result['sections']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->   
            <!-- Card -->   
            <div class="col-md-3">
                <div class="card card-stats card-primary">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-sort-down"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Subfields</p>
                                    <h4 class="card-title">{{$result['fields']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->   
            <!-- Card -->   
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="la la-pie-chart text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Number</p>
                                    <h4 class="card-title">150GB</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->   
            <!-- Card -->   
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-bar-chart text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Revenue</p>
                                    <h4 class="card-title">$ 1,345</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->
            <!-- Card -->      
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-times-circle-o text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Errors</p>
                                    <h4 class="card-title">23</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->  
            <!-- Card -->    
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-heart-o text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Followers</p>
                                    <h4 class="card-title">+45K</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->   

        </div>
        <!-- /# Row -->

        <!-- Row -->
        <div class="row row-card-no-pd">
            
            <!-- Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="fw-bold mt-1">My Balance</p>
                        <h4><b>$ 3,018</b></h4>
                        <a href="#" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Add
                            Balance</a>
                    </div>
                    <div class="card-footer">
                        <ul class="nav">
                            <li class="nav-item"><a class="btn btn-default btn-link" href="#"><i
                                        class="la la-history"></i> History</a></li>
                            <li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="#"><i
                                        class="la la-refresh"></i> Refresh</a></li>
                        </ul>
                    </div>
                </div>
            </div>      
            <!-- /# Card -->
            <!-- Card -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="progress-card">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted">Profit</span>
                                <span class="text-muted fw-bold"> $3K</span>
                            </div>
                            <div class="progress mb-2" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 78%"
                                    aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip"
                                    data-placement="top" title="78%"></div>
                            </div>
                        </div>
                        <div class="progress-card">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted">Orders</span>
                                <span class="text-muted fw-bold"> 576</span>
                            </div>
                            <div class="progress mb-2" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip"
                                    data-placement="top" title="65%"></div>
                            </div>
                        </div>
                        <div class="progress-card">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted">Tasks Complete</span>
                                <span class="text-muted fw-bold"> 70%</span>
                            </div>
                            <div class="progress mb-2" style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip"
                                    data-placement="top" title="70%"></div>
                            </div>
                        </div>
                        <div class="progress-card">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted">Open Rate</span>
                                <span class="text-muted fw-bold"> 60%</span>
                            </div>
                            <div class="progress mb-2" style="height: 7px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip"
                                    data-placement="top" title="60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->
            <!-- Card -->
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <p class="fw-bold mt-1">Statistic</p>
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center icon-warning">
                                    <i class="la la-pie-chart text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Number</p>
                                    <h4 class="card-title">150GB</h4>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-heart-o text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Followers</p>
                                    <h4 class="card-title">+45K</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->

        </div>
        <!-- /Row -->

        <!-- Row -->
        <div class="row">
            
            <!-- Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users Statistics</h4>
                        <p class="card-category">
                            Users statistics this month</p>
                    </div>
                    <div class="card-body">
                        <div id="monthlyChart" class="chart chart-pie"></div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->
            <!-- Card -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">2018 Sales</h4>
                        <p class="card-category">
                            Number of products sold</p>
                    </div>
                    <div class="card-body">
                        <div id="salesChart" class="chart"></div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->
            <!-- Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Table</h4>
                        <p class="card-category">Users Table</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-head-bg-success table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# Card -->
            <!-- Card -->
            <div class="col-md-6">
                <div class="card card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Tasks</h4>
                        <p class="card-category">To Do List</p>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input  select-all-checkbox" type="checkbox"
                                                        data-select="checkbox" data-target=".task-select">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </th>
                                        <th>Task</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input task-select" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Planning new project structure</td>
                                        <td class="td-actions text-right">
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title="Edit Task"
                                                    class="btn btn-link <btn-simple-primary">
                                                    <i class="la la-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-link btn-simple-danger">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input task-select" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Update Fonts</td>
                                        <td class="td-actions text-right">
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title="Edit Task"
                                                    class="btn btn-link <btn-simple-primary">
                                                    <i class="la la-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-link btn-simple-danger">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input task-select" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Add new Post
                                        </td>
                                        <td class="td-actions text-right">
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title="Edit Task"
                                                    class="btn btn-link <btn-simple-primary">
                                                    <i class="la la-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-link btn-simple-danger">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input task-select" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Finalise the design proposal</td>
                                        <td class="td-actions text-right">
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title="Edit Task"
                                                    class="btn btn-link <btn-simple-primary">
                                                    <i class="la la-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-link btn-simple-danger">
                                                    <i class="la la-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <div class="stats">
                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# Card -->

        </div>
        <!-- /# Row -->        

    </div>
    <!-- /# Container-Fluid -->

</div>
@stop

@section('css')
@stop

@section('js')
@stop

@section('jquery')
<script type="text/javascript">
$(document).ready(function() {
    
    $('#dashboard').addClass('active'); // Update Active Tab

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});
</script>
@stop