@extends('layouts.main')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                        <div class="row">
                            <div class="col-xl-12 col-12 dashboard-users">
                                <div class="row ">
                                    <!-- Statistics Cards Starts -->
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-sm-3 col-12 dashboard-users-success">
                                                <div class="card text-center">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">New Products</div>
                                                        <h3 class="mb-0">1.2k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12 dashboard-users-danger">
                                                <div class="card text-center">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">New Users</div>
                                                        <h3 class="mb-0">05.6k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12 dashboard-users-danger">
                                                <div class="card text-center">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-category font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">New Categories</div>
                                                        <h3 class="mb-0">45.6k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12 dashboard-users-danger">
                                                <div class="card text-center">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">New Users</div>
                                                        <h3 class="mb-0">05.6k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 dashboard-revenue-growth">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between align-items-center pb-0">
                                                        <h4 class="card-title">Revenue Growth</h4>
                                                        <div class="d-flex align-items-end justify-content-end">
                                                            <span class="mr-25">$25,980</span>
                                                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div id="revenue-growth-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Revenue Growth Chart Starts -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-12 dashboard-order-summary">
                                <div class="card">
                                    <div class="row">
                                        <!-- Order Summary Starts -->
                                        <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                    <h4 class="card-title">Order Summary</h4>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-sm btn-light-primary mr-1">Week</button>
                                                        <button type="button" class="btn btn-sm btn-primary glow">Month</button>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div id="order-summary-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sales History Starts -->
                                        <div class="col-md-4 col-12 pl-md-0">
                                            <div class="card mb-0">
                                                <div class="card-header pb-50">
                                                    <h4 class="card-title">Best Sellers</h4>
                                                </div>
                                                <div class="card-body py-1">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">iPhone</p>
                                                            <small class="text-muted">Smartphone</small>
                                                        </div>
                                                        <h6 class='mb-0'>794</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">Airpods</p>
                                                            <small class="text-muted">Earphone</small>
                                                        </div>
                                                        <h6 class='mb-0'>550</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">MacBook</p>
                                                            <small class="text-muted">Laptop</small>
                                                        </div>
                                                        <h6 class='mb-0'>271</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-top pb-md-0">
                                                    <h5>Total Sales</h5>
                                                    <span class="text-primary text-bold-500">$82,950.96</span>
                                                    <div class="progress progress-bar-primary progress-sm mt-50 mb-md-50">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" style="width:78%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest Update Starts -->
                            <div class="col-xl-4 col-md-6 col-12 dashboard-latest-update">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                        <h4 class="card-title">Latest Update</h4>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                2020
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSec">
                                                <a class="dropdown-item" href="javascript:;">2020</a>
                                                <a class="dropdown-item" href="javascript:;">2019</a>
                                                <a class="dropdown-item" href="javascript:;">2018</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 pb-1">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-primary m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bxs-zap text-primary font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Products</span>
                                                        <small class="text-muted d-block">2k New Products</small>
                                                    </div>
                                                </div>
                                                <span>10k</span>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-info m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-stats text-info font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Sales</span>
                                                        <small class="text-muted d-block">39k New Sales</small>
                                                    </div>
                                                </div>
                                                <span>26M</span>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-danger m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-credit-card text-danger font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Revenue</span>
                                                        <small class="text-muted d-block">43k New Revenue</small>
                                                    </div>
                                                </div>
                                                <span>15M</span>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-success m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-dollar text-success font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Cost</span>
                                                        <small class="text-muted d-block">Total Expenses</small>
                                                    </div>
                                                </div>
                                                <span>2B</span>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-primary m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-user text-primary font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Users</span>
                                                        <small class="text-muted d-block">New Users</small>
                                                    </div>
                                                </div>
                                                <span>2k</span>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-danger m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-edit-alt text-danger font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content">
                                                        <span class="list-title">Total Visits</span>
                                                        <small class="text-muted d-block">New Visits</small>
                                                    </div>
                                                </div>
                                                <span>46k</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush