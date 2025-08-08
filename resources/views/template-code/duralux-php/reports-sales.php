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
                        <h5 class="m-b-10">Reports</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Sales</li>
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
                                <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
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
                            <a href="javascript:void(0);" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add Widgets</span>
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
                    <!-- [Active Deals] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-dollar-sign"></i>
                                            <span>Active Deals</span>
                                        </div>
                                        <h4 class="fw-bolder mb-3">$<span class="counter">5,658</span> USD</h4>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-semibold text-dark">$4,563 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-success text-success">+ 23.65%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Active Deals] end -->
                    <!-- [Revenue Deals] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-pie-chart"></i>
                                            <span>Revenue Deals</span>
                                        </div>
                                        <h4 class="fw-bolder mb-3">$<span class="counter">89,657</span> USD</h4>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-semibold text-dark">$76,852 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-danger text-danger">- 06.32%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Revenue Deals] end -->
                    <!-- [Deals Created] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-plus-square"></i>
                                            <span>Deals Created</span>
                                        </div>
                                        <h4 class="fw-bolder mb-3">$<span class="counter">2,354</span> USD</h4>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-semibold text-dark">$1,578 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-success text-success">+ 30.47%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Deals Created] end -->
                    <!-- [Deals Closing] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between">
                                    <div>
                                        <div class="hstack gap-2 mb-4">
                                            <i class="feather-sunset"></i>
                                            <span>Deals Closing</span>
                                        </div>
                                        <h4 class="fw-bolder mb-3">$<span class="counter">2,422</span> USD</h4>
                                        <p class="fs-12 text-muted mb-0">vs last month: <span class="fw-semibold text-dark">$2,847 USD</span></p>
                                    </div>
                                    <a href="javascript:void(0);" class="badge bg-soft-danger text-danger">- 08.55%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Deals Closing] end -->
                    <!-- [Sales Pipeline] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Sales Pipeline</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <ul class="nav mb-4 gap-4 sales-pipeline-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start active" data-bs-toggle="tab" data-bs-target="#leadsTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Leads</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$47,569</span>
                                            <span class="deals fs-12 text-muted d-block">57 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#proposalTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Proposal</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$35,258</span>
                                            <span class="deals fs-12 text-muted d-block">46 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#contractTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Contract</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$24,569</span>
                                            <span class="deals fs-12 text-muted d-block">34 Deals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link text-start" data-bs-toggle="tab" data-bs-target="#projectTab" role="tab">
                                            <span class="fw-semibold text-dark d-block">Project</span>
                                            <span class="amount fs-18 fw-bold my-1 d-block">$53,853</span>
                                            <span class="deals fs-12 text-muted d-block">42 Deals</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="leadsTab" role="tabpanel">
                                        <div id="leads-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="proposalTab" role="tabpanel">
                                        <div id="proposal-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="contractTab" role="tabpanel">
                                        <div id="contract-bar-chart"></div>
                                    </div>
                                    <div class="tab-pane fade" id="projectTab" role="tabpanel">
                                        <div id="project-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex flex-wrap p-4 pt-5 border-top border-gray-5">
                                <div class="flex-fill mb-4 mb-md-0 pb-2 pb-md-0">
                                    <p class="fs-11 fw-semibold text-uppercase text-primary mb-2">Current</p>
                                    <h2 class="fs-20 fw-bold mb-0">$65,658 USD</h2>
                                </div>
                                <div class="vr mx-4 text-gray-600 d-none d-md-flex"></div>
                                <div class="flex-fill mb-4 mb-md-0 pb-2 pb-md-0">
                                    <p class="fs-11 fw-semibold text-uppercase text-danger mb-2">Overdue</p>
                                    <h2 class="fs-20 fw-bold mb-0">$34,54 USD</h2>
                                </div>
                                <div class="vr mx-4 text-gray-600 d-none d-md-flex"></div>
                                <div class="flex-fill">
                                    <p class="fs-11 fw-semibold text-uppercase text-success mb-2">Additional</p>
                                    <h2 class="fs-20 fw-bold mb-0">$20,478 USD</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Sales Pipeline] end -->
                    <!-- [Revenue Forecast] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Revenue Forecast</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="text-center mb-4">
                                    <div class="goal-prigress"></div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="avatar-text bg-gray-200 mx-auto mb-2">
                                                <i class="feather-activity"></i>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Marketing Gaol</h2>
                                            <div class="fs-11 text-muted">$550/$1250 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="avatar-text bg-gray-200 mx-auto mb-2">
                                                <i class="feather-users"></i>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Teams Goal</h2>
                                            <div class="fs-11 text-muted">$550/$1250 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="avatar-text bg-gray-200 mx-auto mb-2">
                                                <i class="feather-check-circle"></i>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Leads Goal</h2>
                                            <div class="fs-11 text-muted">$850/$950 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="avatar-text bg-gray-200 mx-auto mb-2">
                                                <i class="feather-dollar-sign"></i>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Revenue Goal</h2>
                                            <div class="fs-11 text-muted">$5,655/$12,500 USD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0);" class="btn btn-primary">Generate Report</a>
                            </div>
                        </div>
                    </div>
                    <!-- [Revenue Forecast] end -->
                    <!-- [Mini Cards] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-lg-6">
                                        <div class="border border-dashed border-gray-5 p-4 rounded-3 gap-4 text-center">
                                            <div class="sales-progress-1"></div>
                                            <div class="mt-4">
                                                <p class="fs-12 text-muted mb-1">Clossing date: <span class="fs-11 fw-medium text-dark">22 March, 2023</span></p>
                                                <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Web developement deal with alex</a>
                                                <div class="hstack gap-3 mt-3 justify-content-center">
                                                    <div class="avatar-image avatar-sm">
                                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                    </div>
                                                    <a href="javascript:void(0);">Alexandra Della</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-6">
                                        <div class="border border-dashed border-gray-5 p-4 rounded-3 gap-4 text-center">
                                            <div class="sales-progress-2"></div>
                                            <div class="mt-4">
                                                <p class="fs-12 text-muted mb-1">Clossing date: <span class="fs-11 fw-medium text-dark">23 March, 2023</span></p>
                                                <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Web developement deal with alex</a>
                                                <div class="hstack gap-3 mt-3 justify-content-center">
                                                    <div class="avatar-image avatar-sm">
                                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                    </div>
                                                    <a href="javascript:void(0);">Green Cute</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-6">
                                        <div class="border border-dashed border-gray-5 p-4 rounded-3 gap-4 text-center">
                                            <div class="sales-progress-3"></div>
                                            <div class="mt-4">
                                                <p class="fs-12 text-muted mb-1">Clossing date: <span class="fs-11 fw-medium text-dark">24 March, 2023</span></p>
                                                <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Web developement deal with alex</a>
                                                <div class="hstack gap-3 mt-3 justify-content-center">
                                                    <div class="avatar-image avatar-sm">
                                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                    </div>
                                                    <a href="javascript:void(0);">Holmes Cherryman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-lg-6">
                                        <div class="border border-dashed border-gray-5 p-4 rounded-3 gap-4 text-center">
                                            <div class="sales-progress-4"></div>
                                            <div class="mt-4">
                                                <p class="fs-12 text-muted mb-1">Clossing date: <span class="fs-11 fw-medium text-dark">25 March, 2023</span></p>
                                                <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Web developement deal with alex</a>
                                                <div class="hstack gap-3 mt-3 justify-content-center">
                                                    <div class="avatar-image avatar-sm">
                                                        <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                    </div>
                                                    <a href="javascript:void(0);">Malanie Hanvey</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Cards] end -->
                    <!-- [Earnings + Expenses] start -->
                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="mb-4 border-bottom">
                                    <div class="p-4 d-flex align-items-start justify-content-between">
                                        <div>
                                            <div class="fs-12 text-success fw-semibold mb-2">Earnings</div>
                                            <h4 class="text-success mb-2">(+) $55,236 USD</h4>
                                            <div class="fs-12 text-muted text-truncate-1-line">Earnings is 69% more than last month.</div>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item active">2023</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2019</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="earnings-area-chart"></div>
                                </div>
                                <div>
                                    <div class="p-4 d-flex align-items-start justify-content-between">
                                        <div>
                                            <div class="fs-12 text-danger fw-semibold mb-2">Expenses</div>
                                            <h4 class="text-danger mb-2">(-) $16,845 USD</h4>
                                            <div class="fs-12 text-muted text-truncate-1-line">Expenses is 47% more than last month.</div>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light-brand dropdown-toggle" data-bs-toggle="dropdown">2023</a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item active">2023</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                                <a href="javascript:void(0);" class="dropdown-item">2019</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0);" class="dropdown-item">All Times</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="expense-area-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Earnings + Expenses] end -->
                    <!-- [Contact Leads] start -->
                    <div class="col-lg-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Contact Leads</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Lead Name</th>
                                                <th>Company</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th class="wd-250">Stage</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Archie Cantones</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$250.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Holmes Cherryman</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$500.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">In Progress </span>
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Malanie Hanvey</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$200.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Kenneth Hune</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$300.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Valentine Maton</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">WRAPCODERS</span>
                                                </td>
                                                <td>$450.00 USD</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Contact Leads] end -->
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
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-airplay fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM dashboard redesign</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">/<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-file-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new eocument</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">N /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite project colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1"></i></a>
                        </div>
                    </div>
                    <div class="command-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small rounded ms-1 text-dark">5</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user fs-5"></i>
                                <div class="fs-13 fw-semibold">My profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-users fs-5"></i>
                                <div class="fs-13 fw-semibold">Team profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">T /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">I /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-briefcase fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new project</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">CP /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-life-buoy fs-5"></i>
                                <div class="fs-13 fw-semibold">Support center</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">SC /<i class="feather-command ms-1"></i></a>
                        </div>
                    </div>
                    <div class="file-result mb-4">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small rounded ms-1 text-dark">3</span></h4>
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
	<?php include './partials/report-script.php'?>	
</body>

</html>