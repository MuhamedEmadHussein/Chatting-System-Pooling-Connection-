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
                        <li class="breadcrumb-item">Tmesheets</li>
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
                    <!-- [Time Logged] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Time Logged</h5>
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
                                <div id="logged-time-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Time Logged] end -->
                    <!-- [Billable Time] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Billable Time</h5>
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
                                <div id="billable-time-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Billable Time] end -->
                    <!-- [Time Progress 1] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header justify-content-center">
                                <div class="times-progress-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-primary rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-primary rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">React Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">3/5 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 34/m : 24/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-success rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-success rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Vuejs Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">4/8 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">02/h: 26/m : 35/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-danger rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-danger rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">CRM Admin</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">13/15 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 33/m : 42/s</a>
                                </div>
                            </div>
                            <div class="card-footer hstack justify-content-around">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">05/H : 33/M</a>
                                    <div class="fs-11 text-muted">Billable Hours</div>
                                </div>
                                <span class="vr"></span>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">02/H : 14/M</a>
                                    <div class="fs-11 text-muted">Unbillable Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Time Progress 1] end -->
                    <!-- [Time Progress 2] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header justify-content-center">
                                <div class="tasks-progress-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-danger rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-danger rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">CRM Admin</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">13/15 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 33/m : 42/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-primary rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-primary rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">React Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">3/5 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 34/m : 24/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-success rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-success rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Vuejs Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">4/8 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">02/h: 26/m : 35/s</a>
                                </div>
                            </div>
                            <div class="card-footer hstack justify-content-around">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">15/30</a>
                                    <div class="fs-11 text-muted">Tasks Completed</div>
                                </div>
                                <span class="vr"></span>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">00/50</a>
                                    <div class="fs-11 text-muted">Tasks Upcomming</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Time Progress 2] end -->
                    <!-- [Time Progress 3] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header justify-content-center">
                                <div class="projects-progress-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-danger rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-danger rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">CRM Admin</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">13/15 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 33/m : 42/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-success rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-success rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Vuejs Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">4/8 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">02/h: 26/m : 35/s</a>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-primary rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-primary rounded">
                                            <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">React Apps</a>
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">3/5 Tasks</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="fw-bold">01/h: 34/m : 24/s</a>
                                </div>
                            </div>
                            <div class="card-footer hstack justify-content-around">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">13/20</a>
                                    <div class="fs-11 text-muted">Projects Completed</div>
                                </div>
                                <span class="vr"></span>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="fs-16 fw-bold">00/25</a>
                                    <div class="fs-11 text-muted">Projects Upcomming</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Time Progress 3] end -->
                    <!-- [Project Tracker] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Tracker</h5>
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
                                            <tr>
                                                <th scope="col">Project</th>
                                                <th scope="col" class="w-25">Status</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Logged</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-bold d-block mb-1">Search inspiration for project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>04:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>32 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">86% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                                    </div>
                                                </td>
                                                <td>08:30 - 09:30</td>
                                                <td class="fw-bold">00/h : 52/m : 34/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-bold d-block mb-1">React admnin dashboard design</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>05:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>45 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">46% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%"></div>
                                                    </div>
                                                </td>
                                                <td>09:30 - 10:30</td>
                                                <td class="fw-bold">00/h : 50/m : 46/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-bold d-block mb-1">Laravel ecommerce project tasks</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>06:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>22 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">65% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                    </div>
                                                </td>
                                                <td>11:00 - 12:30</td>
                                                <td class="fw-bold">00/h : 56/m : 47/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-bold d-block mb-1">Search inspiration for project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>07:00 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>36 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">75% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                    </div>
                                                </td>
                                                <td>12:30 - 14:30</td>
                                                <td class="fw-bold">01/h : 48/m : 36/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="hstack gap-3">
                                                        <div class="avatar-text bg-soft-primary text-primary">
                                                            <i class="feather-clock"></i>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-bold d-block mb-1">Digital marketing for react project</a>
                                                            <div class="d-flex gap-3">
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-clock fs-10"></i>
                                                                    <span>08:30 PM</span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="hstack gap-1 fs-11 fw-normal text-muted">
                                                                    <i class="feather-message-square fs-10"></i>
                                                                    <span>42 comments</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fs-12 fw-medium mb-2">80% Completed</div>
                                                    <div class="progress ht-3">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                    </div>
                                                </td>
                                                <td>11:00 - 12:30</td>
                                                <td class="fw-bold">01/h : 22/m : 52/s</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-globe"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-printer"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather-bell"></i>
                                                        </a>
                                                    </div>
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
                    <!-- [Project Tracker] end -->
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