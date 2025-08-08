<!DOCTYPE html>
<html lang="zxx">

    <?php $title='Duralux - Admin & Dashboard PHP Template'?>
    <?php include './partials/head.php'?>

<body>
		<!-- Left sidebar -->
        <?php include './partials/left-sidebar.php'?>
	
	<!-- Header Section Start -->
        <?php include './partials/header.php'?>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Widgets</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Statistics</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add widget</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-dollar-sign"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">45</span>/<span class="counter">76</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Invoices Awaiting Payment</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Invoices Awaiting </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">$5,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-cast"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">48</span>/<span class="counter">86</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Converted Leads</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Leads </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">52 Completed</span>
                                            <span class="fs-11 text-muted">(63%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-briefcase"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">16</span>/<span class="counter">20</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Projects In Progress</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Projects In Progress </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">16 Completed</span>
                                            <span class="fs-11 text-muted">(78%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-activity"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line"> Conversion Rate </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">$2,254</span>
                                            <span class="fs-11 text-muted">(46%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <h5 class="fs-4">$84,059</h5>
                                    <span class="text-muted">Sales</span>
                                </div>
                                <div class="avatar-text avatar-lg bg-primary text-white rounded">
                                    <i class="feather-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <h5 class="fs-4">$23,485</h5>
                                    <span class="text-muted">Earnings</span>
                                </div>
                                <div class="avatar-text avatar-lg bg-success text-white rounded">
                                    <i class="feather-dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <h5 class="fs-4">2,364</h5>
                                    <span class="text-muted">Total Sales</span>
                                </div>
                                <div class="avatar-text avatar-lg bg-warning text-white rounded">
                                    <i class="feather-tag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <h5 class="fs-4">$96,485</h5>
                                    <span class="text-muted">Revenue</span>
                                </div>
                                <div class="avatar-text avatar-lg bg-teal text-white rounded">
                                    <i class="feather-bar-chart-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-dollar-sign"></i>
                                            <span>Active Deals</span>
                                        </div>
                                        <h3 class="fw-bolder mb-3">$<span class="counter">5,658</span> USD</h3>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-bold text-dark">$4,563 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-success text-success">+ 23.65%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-pie-chart"></i>
                                            <span>Revenue Deals</span>
                                        </div>
                                        <h3 class="fw-bolder mb-3">$<span class="counter">89,657</span> USD</h3>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-bold text-dark">$76,852 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-danger text-danger">- 06.32%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-plus-square"></i>
                                            <span>Deals Created</span>
                                        </div>
                                        <h3 class="fw-bolder mb-3">$<span class="counter">2,354</span> USD</h3>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-bold text-dark">$1,578 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-success text-success">+ 30.47%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-sunset"></i>
                                            <span>Deals Closing</span>
                                        </div>
                                        <h3 class="fw-bolder mb-3">$<span class="counter">2,422</span> USD</h3>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-bold text-dark">$2,847 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-danger text-danger">- 08.55%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Cards] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="fs-12 text-muted">Employees</div>
                            <div class="hstack justify-content-between mt-4">
                                <div class="text-dark fw-bold">$3,238</div>
                                <span class="badge bg-soft-danger text-danger">
                                    <span class="me-1">22.6%</span>
                                    <i class="feather-chevron-down fs-12"></i>
                                </span>
                            </div>
                            <div class="progress mt-2 ht-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 63%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="fs-12 text-muted">Expenses</div>
                            <div class="hstack justify-content-between mt-4">
                                <div class="text-dark fw-bold">$3,238</div>
                                <span class="badge bg-soft-success text-success">
                                    <span class="me-1">25.7%</span>
                                    <i class="feather-chevron-up fs-12"></i>
                                </span>
                            </div>
                            <div class="progress mt-2 ht-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 63%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="fs-12 text-muted">New Users</div>
                            <div class="hstack justify-content-between mt-4">
                                <div class="text-dark fw-bold">2,367</div>
                                <span class="badge bg-soft-danger text-danger">
                                    <span class="me-1">20.8%</span>
                                    <i class="feather-chevron-down fs-12"></i>
                                </span>
                            </div>
                            <div class="progress mt-2 ht-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body">
                            <div class="fs-12 text-muted">New Clients</div>
                            <div class="hstack justify-content-between mt-4">
                                <div class="text-dark fw-bold">2,367</div>
                                <span class="badge bg-soft-success text-success">
                                    <span class="me-1">20.2%</span>
                                    <i class="feather-chevron-down fs-12"></i>
                                </span>
                            </div>
                            <div class="progress mt-2 ht-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 79%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Cards] start -->
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">Total Inquiry</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">32</span>K</h3>
                                    <div class="hstack gap-2 fs-11 text-success">
                                        <i class="feather-arrow-up-circle fs-12"></i>
                                        <span>+20.36%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">Performance</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">45.68</span>%</h3>
                                    <div class="hstack gap-2 fs-11 text-danger">
                                        <i class="feather-arrow-down-circle fs-12"></i>
                                        <span>-10.46%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">Escalations</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">985</span></h3>
                                    <div class="hstack gap-2 fs-11 text-success">
                                        <i class="feather-arrow-up-circle fs-12"></i>
                                        <span>+25.48%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">SLA Compliant</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">895</span></h3>
                                    <div class="hstack gap-2 fs-11 text-success">
                                        <i class="feather-arrow-up-circle fs-12"></i>
                                        <span>+15.39%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">Avg. Time (H)</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">03.45</span></h3>
                                    <div class="hstack gap-2 fs-11 text-danger">
                                        <i class="feather-arrow-down-circle fs-12"></i>
                                        <span>-12.86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="fs-12 fw-medium text-muted mb-3">Avg. Fullfilment</div>
                                <div class="hstack justify-content-between lh-base">
                                    <h3><span class="counter">65.95</span>%</h3>
                                    <div class="hstack gap-2 fs-11 text-success">
                                        <i class="feather-arrow-up-circle fs-12"></i>
                                        <span>+20.35%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Cards] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <p class="fs-11 fw-semibold text-uppercase text-muted">Regular</p>
                                <h4><span class="counter">42</span>H : <span class="counter">35</span>M</h4>
                                <div class="hstack gap-2 mt-3">
                                    <span class="fs-11 text-success badge bg-gray-100">
                                        <i class="feather-trending-up fs-12 me-1"></i>
                                        <span>56.67%</span>
                                    </span>
                                    <span class="fs-11 text-muted">Up from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <p class="fs-11 fw-semibold text-uppercase text-muted">Overtime</p>
                                <h4><span class="counter">12</span>H : <span class="counter">40</span>M</h4>
                                <div class="hstack gap-2 mt-3">
                                    <span class="fs-11 text-danger badge bg-gray-100">
                                        <i class="feather-trending-down fs-12 me-1"></i>
                                        <span>23.49%</span>
                                    </span>
                                    <span class="fs-11 text-muted">Down from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <p class="fs-11 fw-semibold text-uppercase text-muted">Billable</p>
                                <h4><span class="counter">35</span>H : <span class="counter">30</span>M</h4>
                                <div class="hstack gap-2 mt-3">
                                    <span class="fs-11 text-success badge bg-gray-100">
                                        <i class="feather-trending-up fs-12 me-1"></i>
                                        <span>43.85%</span>
                                    </span>
                                    <span class="fs-11 text-muted">Up from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <p class="fs-11 fw-semibold text-uppercase text-muted">Unbillable</p>
                                <h4><span class="counter">10</span>H : <span class="counter">25</span>M</h4>
                                <div class="hstack gap-2 mt-3">
                                    <span class="fs-11 text-danger badge bg-gray-100">
                                        <i class="feather-trending-down fs-12 me-1"></i>
                                        <span>20.46%</span>
                                    </span>
                                    <span class="fs-11 text-muted">Down from last week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
                        <div class="card card-body">
                            <div class="hstack justify-content-between">
                                <div class="fw-bold text-dark">Total Earnings</div>
                                <div class="dropdown open">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="feather-more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="hstack justify-content-between">
                                    <div class="fs-4 fw-bold text-dark">$485,328</div>
                                    <div class="badge bg-soft-primary text-primary">
                                        <span>25.7%</span>
                                        <i class="feather-chevron-up fs-12 ms-1"></i>
                                    </div>
                                </div>
                                <div class="progress ht-5 my-2">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                </div>
                                <div class="fs-12 text-muted">This week extra earnings in <span class="fw-bold text-dark">$1,827</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
                        <div class="card card-body">
                            <div class="hstack justify-content-between">
                                <div class="fw-bold text-dark">Total Sale</div>
                                <div class="dropdown open">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="feather-more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="hstack justify-content-between">
                                    <div class="fs-4 fw-bold text-dark">$32,585</div>
                                    <div class="badge bg-soft-danger text-danger">
                                        <span>20.9%</span>
                                        <i class="feather-chevron-down fs-12 ms-1"></i>
                                    </div>
                                </div>
                                <div class="progress ht-5 my-2">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                </div>
                                <div class="fs-12 text-muted">This week extra earnings in <span class="fw-bold text-dark">$1,827</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
                        <div class="card card-body">
                            <div class="hstack justify-content-between">
                                <div class="fw-bold text-dark">Total Profit</div>
                                <div class="dropdown open">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="feather-more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="hstack justify-content-between">
                                    <div class="fs-4 fw-bold text-dark">$674,245</div>
                                    <div class="badge bg-soft-warning text-warning">
                                        <span>34.2%</span>
                                        <i class="feather-chevron-up fs-12 ms-1"></i>
                                    </div>
                                </div>
                                <div class="progress ht-5 my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                </div>
                                <div class="fs-12 text-muted">This week extra earnings in <span class="fw-bold text-dark">$64,827</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
                        <div class="card card-body">
                            <div class="hstack justify-content-between">
                                <div class="fw-bold text-dark">Total Order</div>
                                <div class="dropdown open">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="feather-more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="hstack justify-content-between">
                                    <div class="fs-4 fw-bold text-dark">$568,963</div>
                                    <div class="badge bg-soft-teal text-teal">
                                        <span>26.8%</span>
                                        <i class="feather-chevron-down fs-12 ms-1"></i>
                                    </div>
                                </div>
                                <div class="progress ht-5 my-2">
                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                </div>
                                <div class="fs-12 text-muted">This week extra earnings in <span class="fw-bold text-dark">$6,827</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Paid</span>
                                        <span class="fs-20 fw-bold d-block">78/100</span>
                                    </a>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>36.85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Unpaid</span>
                                        <span class="fs-20 fw-bold d-block">38/50</span>
                                    </a>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>23.45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Overdue</span>
                                        <span class="fs-20 fw-bold d-block">15/30</span>
                                    </a>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>25.44%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Draft</span>
                                        <span class="fs-20 fw-bold d-block">3/10</span>
                                    </a>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>12.68%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-primary text-white">
                                            <i class="feather-users"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="text-truncate-1-line">Total Customers</span>
                                            <span class="fs-24 fw-bolder d-block">26,595</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>36.85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-success text-white">
                                            <i class="feather-user-check"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="text-truncate-1-line">Active Customers</span>
                                            <span class="fs-24 fw-bolder d-block">2,245</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>24.56%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-teal text-white">
                                            <i class="feather-user-plus"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="text-truncate-1-line">New Customers</span>
                                            <span class="fs-24 fw-bolder d-block">1,254</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>33.29%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-danger text-white">
                                            <i class="feather-user-minus"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="text-truncate-1-line">Inactive Customers</span>
                                            <span class="fs-24 fw-bolder d-block">4,586</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>42.47%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Not Started</span>
                                    <span class="fs-24 fw-bolder d-block">04</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Invoices Awaiting</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">$5,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">In Progress</span>
                                    <span class="fs-24 fw-bolder d-block">06</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Projects In Progress</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">16 Completed</span>
                                            <span class="fs-11 text-muted">(78%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Cancelled</span>
                                    <span class="fs-24 fw-bolder d-block">02</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Converted Leads</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">52 Completed</span>
                                            <span class="fs-11 text-muted">(63%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Finished</span>
                                    <span class="fs-24 fw-bolder d-block">25</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                            <span>Conversion Rate</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-muted">$2,254</span>
                                            <span class="fs-11 text-muted">(46%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-soft-primary text-primary border-soft-primary">
                                            <i class="feather-users"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="d-block">Total Leads</span>
                                            <span class="fs-24 fw-bolder d-block">26,595</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>36.85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-soft-success text-success border-soft-success">
                                            <i class="feather-user-check"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="d-block">Active Leads</span>
                                            <span class="fs-24 fw-bolder d-block">2,245</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>24.56%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-soft-teal text-teal border-soft-teal">
                                            <i class="feather-user-plus"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="d-block">New Leads</span>
                                            <span class="fs-24 fw-bolder d-block">1,254</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-success text-success">
                                        <i class="feather-arrow-up fs-10 me-1"></i>
                                        <span>33.29%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-xl rounded bg-soft-danger text-danger border-soft-danger">
                                            <i class="feather-user-minus"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="fw-bold d-block">
                                            <span class="d-block">Inactive Leads</span>
                                            <span class="fs-24 fw-bolder d-block">4,586</span>
                                        </a>
                                    </div>
                                    <div class="badge bg-soft-danger text-danger">
                                        <i class="feather-arrow-down fs-10 me-1"></i>
                                        <span>42.47%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="avatar-text bg-soft-primary text-primary border-0 mb-3">
                                    <i class="feather-log-in"></i>
                                </div>
                                <p><span class="fw-bold text-primary">Logged Hours:</span> 00:00</p>
                                <div><span class="fw-bold text-dark">Total Billed:</span> 00:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="avatar-text bg-soft-warning text-warning border-0 mb-3">
                                    <i class="feather-clipboard"></i>
                                </div>
                                <p><span class="fw-bold text-warning">Billable Hours:</span> 00:00</p>
                                <div><span class="fw-bold text-dark">Total Billed:</span> 00:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="avatar-text bg-soft-success text-success border-0 mb-3">
                                    <i class="feather-check"></i>
                                </div>
                                <p><span class="fw-bold text-success">Billed Hours:</span> 00:00</p>
                                <div><span class="fw-bold text-dark">Total Billed:</span> 00:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="avatar-text bg-soft-danger text-danger border-0 mb-3">
                                    <i class="feather-x"></i>
                                </div>
                                <p><span class="fw-bold text-danger">Unbilled Hour:</span> 00:00</p>
                                <div><span class="fw-bold text-dark">Total Billed:</span> 00:00</div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <h4 class="text-success">290+</h4>
                                        <div class="text-muted">Page Views</div>
                                    </div>
                                    <div class="text-end">
                                        <i class="feather-eye fs-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-success py-3">
                                <div class="hstack justify-content-between">
                                    <p class="text-white mb-0">2.9% change</p>
                                    <div class="text-end">
                                        <i class="feather-trending-up text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <h4 class="text-warning">$10,254</h4>
                                        <div class="text-muted">Today Earnings</div>
                                    </div>
                                    <div class="text-end">
                                        <i class="feather-pie-chart fs-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-warning py-3">
                                <div class="hstack justify-content-between">
                                    <p class="text-white mb-0">3.6% change</p>
                                    <div class="text-end">
                                        <i class="feather-trending-down text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <h4 class="text-primary">690+</h4>
                                        <div class="text-muted">Total Sales</div>
                                    </div>
                                    <div class="text-end">
                                        <i class="feather-shopping-bag fs-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-primary py-3">
                                <div class="hstack justify-content-between">
                                    <p class="text-white mb-0">2.3% change</p>
                                    <div class="text-end">
                                        <i class="feather-trending-up text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <h4 class="text-danger">$25,345</h4>
                                        <div class="text-muted">Orders Received</div>
                                    </div>
                                    <div class="text-end">
                                        <i class="feather-shopping-cart fs-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-danger py-3">
                                <div class="hstack justify-content-between">
                                    <p class="text-white mb-0">4.2% change</p>
                                    <div class="text-end">
                                        <i class="feather-trending-down text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-primary border-soft-primary text-primary overflow-hidden">
                            <div class="card-body">
                                <i class="feather-users fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">8,475</h5>
                                <div class="fs-12 text-reset fw-normal">New Customers</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-success border-soft-success text-success overflow-hidden">
                            <div class="card-body">
                                <i class="feather-user-plus fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">4,586</h5>
                                <div class="fs-12 text-reset fw-normal">New Clients</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-warning border-soft-warning text-warning overflow-hidden">
                            <div class="card-body">
                                <i class="feather-shopping-cart fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">2,245</h5>
                                <div class="fs-12 text-reset fw-normal">Total Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-danger border-soft-danger text-danger overflow-hidden">
                            <div class="card-body">
                                <i class="feather-dollar-sign fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">$26.45K</h5>
                                <div class="fs-12 text-reset fw-normal">Total Revenue</div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-primary text-primary border-primary border-dashed">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block text-reset">
                                    <span class="d-block">Not Started</span>
                                    <span class="fs-24 fw-bolder d-block">04</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-reset">
                                            <span>Invoices Awaiting</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-reset">$5,569</span>
                                            <span class="fs-11 text-reset">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-success text-success border-success border-dashed">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block text-reset">
                                    <span class="d-block">In Progress</span>
                                    <span class="fs-24 fw-bolder d-block">06</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-reset">
                                            <span>Projects In Progress</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-reset">16 Completed</span>
                                            <span class="fs-11 text-reset">(78%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-warning text-warning border-warning border-dashed">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block text-reset">
                                    <span class="d-block">Cancelled</span>
                                    <span class="fs-24 fw-bolder d-block">02</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-reset">
                                            <span>Converted Leads</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-reset">52 Completed</span>
                                            <span class="fs-11 text-reset">(63%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-soft-danger text-danger border-danger border-dashed">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="fw-bold d-block text-reset">
                                    <span class="d-block">Finished</span>
                                    <span class="fs-24 fw-bolder d-block">25</span>
                                </a>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-reset">
                                            <span>Conversion Rate</span>
                                            <i class="feather-link-2 fs-10 ms-1"></i>
                                        </a>
                                        <div>
                                            <span class="fs-12 text-reset">$2,254</span>
                                            <span class="fs-11 text-reset">(46%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-primary border-primary text-white overflow-hidden">
                            <div class="card-body">
                                <i class="feather-users fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">8,475</h5>
                                <div class="fs-12 text-reset fw-normal">New Customers</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-success border-success text-white overflow-hidden">
                            <div class="card-body">
                                <i class="feather-user-plus fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">4,586</h5>
                                <div class="fs-12 text-reset fw-normal">New Clients</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-warning border-warning text-white overflow-hidden">
                            <div class="card-body">
                                <i class="feather-shopping-cart fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">2,245</h5>
                                <div class="fs-12 text-reset fw-normal">Total Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card bg-danger border-danger text-white overflow-hidden">
                            <div class="card-body">
                                <i class="feather-dollar-sign fs-20"></i>
                                <h5 class="fs-4 text-reset mt-4 mb-1">$26.45K</h5>
                                <div class="fs-12 text-reset fw-normal">Total Revenue</div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                    <hr class="border-top-dashed mt-4 mb-5 mx-3">
                    <!-- [Mini Card] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body bg-primary text-white position-relative">
                            <h3 class="text-reset">5,165 +</h3>
                            <span class="mt-2">Facebook Users</span>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <i class="fab fa-facebook fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body bg-teal text-white position-relative">
                            <h3 class="text-reset">4,254 +</h3>
                            <span class="mt-2">Twitter Users</span>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <i class="fab fa-twitter fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body bg-danger text-white position-relative">
                            <h3 class="text-reset">3,355 +</h3>
                            <span class="mt-2">Youtube Users</span>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <i class="fab fa-youtube fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card card-body bg-indigo text-white position-relative">
                            <h3 class="text-reset">2,658 +</h3>
                            <span class="mt-2">Linkedin Users</span>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <i class="fab fa-linkedin fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Card] end -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
		<?php include './partials/footer.php'?>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Search Modal !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="searchModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-top modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header search-form py-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="feather-search fs-4 text-muted"></i>
                        </span>
                        <input type="text" class="form-control search-input-field" placeholder="Search...">
                        <span class="input-group-text">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="searching-for mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">I'm searching for...</h4>
                        <div class="row g-1">
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-compass"></i>
                                    <span>Recent</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-command"></i>
                                    <span>Command</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-users"></i>
                                    <span>Peoples</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-file"></i>
                                    <span>Files</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-video"></i>
                                    <span>Medias</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <span>More</span>
                                    <i class="feather-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-airplay fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM dashboard redesign</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">/<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-file-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new eocument</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">N /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite project colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                    </div>
                    <div class="command-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small bg-gray-200 rounded ms-1 text-dark">5</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user fs-5"></i>
                                <div class="fs-13 fw-semibold">My profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-users fs-5"></i>
                                <div class="fs-13 fw-semibold">Team profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">T /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">I /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-briefcase fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new project</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">CP /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-life-buoy fs-5"></i>
                                <div class="fs-13 fw-semibold">Support center</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">SC /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                    </div>
                    <div class="file-result mb-4">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Desing Project <span class="fs-12 fw-normal text-muted">(56.74 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Admin Dashboard Project <span class="fs-12 fw-normal text-muted">(46.83 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Dashboard Project <span class="fs-12 fw-normal text-muted">(68.59 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Search Modal !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Language Select !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="languageSelectModal" aria-hidden="true" aria-labelledby="languageSelectModalLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="languageSelectModalLabel">Select Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sa.svg" alt="" class="img-fluid"></div>
                                <span>Arabic </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/bd.svg" alt="" class="img-fluid"></div>
                                <span>Bengali </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ch.svg" alt="" class="img-fluid"></div>
                                <span>Chinese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/hr.svg" alt="" class="img-fluid"></div>
                                <span>Croatian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/dk.svg" alt="" class="img-fluid"></div>
                                <span>Danish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/nl.svg" alt="" class="img-fluid"></div>
                                <span>Dutch </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select active">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/us.svg" alt="" class="img-fluid"></div>
                                <span>English </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fi.svg" alt="" class="img-fluid"></div>
                                <span>Filipino </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fr.svg" alt="" class="img-fluid"></div>
                                <span>French </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/de.svg" alt="" class="img-fluid"></div>
                                <span>German </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/il.svg" alt="" class="img-fluid"></div>
                                <span>Hebrew </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/in.svg" alt="" class="img-fluid"></div>
                                <span>Hindi </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/id.svg" alt="" class="img-fluid"></div>
                                <span>Indonesian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/it.svg" alt="" class="img-fluid"></div>
                                <span>Italian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/jp.svg" alt="" class="img-fluid"></div>
                                <span>Japanese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/kr.svg" alt="" class="img-fluid"></div>
                                <span>Korean </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ir.svg" alt="" class="img-fluid"></div>
                                <span>Persian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pt.svg" alt="" class="img-fluid"></div>
                                <span>Portuguese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ru.svg" alt="" class="img-fluid"></div>
                                <span>Russian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/es.svg" alt="" class="img-fluid"></div>
                                <span>Spanish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sv.svg" alt="" class="img-fluid"></div>
                                <span>Swedish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/tr.svg" alt="" class="img-fluid"></div>
                                <span>Turkish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pk.svg" alt="" class="img-fluid"></div>
                                <span>Urdo</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/vi.svg" alt="" class="img-fluid"></div>
                                <span>Vietnamese</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Language Select !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Downloading Toast !-->
    <!--! ================================================================ !-->
    <div class="position-fixed" style="right: 5px; bottom: 5px; z-index: 999999">
        <div id="toast" class="toast bg-black hide" data-bs-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header px-3 bg-transparent d-flex align-items-center justify-content-between border-bottom border-light border-opacity-10">
                <div class="text-white mb-0 mr-auto">Downloading...</div>
                <a href="javascript:void(0)" class="ms-2 mb-1 close fw-normal" data-bs-dismiss="toast" aria-label="Close">
                    <span class="text-white">&times;</span>
                </a>
            </div>
            <div class="toast-body p-3 text-white">
                <h6 class="fs-13 text-white">Project.zip</h6>
                <span class="text-light fs-11">4.2mb of 5.5mb</span>
            </div>
            <div class="toast-footer p-3 pt-0 border-top border-light border-opacity-10">
                <div class="progress mt-3" style="height: 5px">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-75 bg-dark" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Downloading Toast !-->
    <!--! ================================================================ !-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>	
</body>

</html>