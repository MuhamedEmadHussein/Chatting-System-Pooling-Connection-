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
                        <li class="breadcrumb-item">Miscellaneous</li>
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
                    <!-- [Mini Cards] start -->
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between mb-4 pb-">
                                    <div>
                                        <h5 class="mb-1">Projects</h5>
                                        <span class="fs-12 text-muted">Recent project progress</span>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light-brand">View Alls</a>
                                </div>
                                <div class="row g-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card-body border border-dashed border-gray-5 rounded-3 position-relative">
                                            <div class="hstack justify-content-between gap-4">
                                                <div>
                                                    <h6 class="fs-14 text-truncate-1-line">NFT Mobile Apps Developemnt</h6>
                                                    <div class="fs-12 text-muted"><span class="text-dark fw-medium">Deadiline:</span> 20 days left</div>
                                                </div>
                                                <div class="project-progress-1"></div>
                                            </div>
                                            <div class="badge bg-gray-200 text-dark project-mini-card-badge">Updates</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card-body border border-dashed border-gray-5 rounded-3 position-relative">
                                            <div class="hstack justify-content-between gap-4">
                                                <div>
                                                    <h6 class="fs-14 text-truncate-1-line">NFT Mobile Apps Developemnt</h6>
                                                    <div class="fs-12 text-muted"><span class="text-dark fw-medium">Deadiline:</span> 20 days left</div>
                                                </div>
                                                <div class="project-progress-2"></div>
                                            </div>
                                            <div class="badge bg-gray-200 text-dark project-mini-card-badge">Updates</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card-body border border-dashed border-gray-5 rounded-3 position-relative">
                                            <div class="hstack justify-content-between gap-4">
                                                <div>
                                                    <h6 class="fs-14 text-truncate-1-line">NFT Mobile Apps Developemnt</h6>
                                                    <div class="fs-12 text-muted"><span class="text-dark fw-medium">Deadiline:</span> 20 days left</div>
                                                </div>
                                                <div class="project-progress-3"></div>
                                            </div>
                                            <div class="badge bg-gray-200 text-dark project-mini-card-badge">Updates</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card-body border border-dashed border-gray-5 rounded-3 position-relative">
                                            <div class="hstack justify-content-between gap-4">
                                                <div>
                                                    <h6 class="fs-14 text-truncate-1-line">NFT Mobile Apps Developemnt</h6>
                                                    <div class="fs-12 text-muted"><span class="text-dark fw-medium">Deadiline:</span> 20 days left</div>
                                                </div>
                                                <div class="project-progress-4"></div>
                                            </div>
                                            <div class="badge bg-gray-200 text-dark project-mini-card-badge">Updates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Mini Cards] end -->
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
                    <!-- [Tasks Progress] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Tasks Progress</h5>
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
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Alexandra Della</a>
                                            <div class="fs-11 text-muted">Frontend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-1"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Archie Cantones</a>
                                            <div class="fs-11 text-muted">UI/UX Designer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-2"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Malanie Hanvey</a>
                                            <div class="fs-11 text-muted">Backend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-3"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-0">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Kenneth Hune</a>
                                            <div class="fs-11 text-muted">Digital Marketer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-4"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0);" class="btn btn-primary">Generate Report</a>
                            </div>
                        </div>
                    </div>
                    <!-- [Tasks Progress] end -->
                    <!-- [Goal Progress] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Goal Progress</h5>
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
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="mx-auto mb-4">
                                                <div class="goal-progress-1"></div>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Marketing Gaol</h2>
                                            <div class="fs-11 text-muted">$550/$1250 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="mx-auto mb-4">
                                                <div class="goal-progress-2"></div>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Teams Goal</h2>
                                            <div class="fs-11 text-muted">$550/$1250 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="mx-auto mb-4">
                                                <div class="goal-progress-3"></div>
                                            </div>
                                            <h2 class="fs-13 tx-spacing-1">Leads Goal</h2>
                                            <div class="fs-11 text-muted">$850/$950 USD</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="px-4 py-3 text-center border border-dashed rounded-3">
                                            <div class="mx-auto mb-4">
                                                <div class="goal-progress-4"></div>
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
                    <!-- [Goal Progress] end -->
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
                                    <div class="goal-progress"></div>
                                </div>
                                <hr class="border-top-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text">
                                            <img src="assets/images/icons/1.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="fw-bold">Monthly Subscription</a>
                                            <div class="fs-11 text-muted mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="badge bg-soft-100 text-dark">+ 85K</div>
                                    </div>
                                </div>
                                <hr class="border-top-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text">
                                            <img src="assets/images/icons/2.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="fw-bold">Monthly Contributors</a>
                                            <div class="fs-11 text-muted mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="badge bg-soft-100 text-dark">+ 96K</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0);" class="btn btn-primary">Generate Report</a>
                            </div>
                        </div>
                    </div>
                    <!-- [Revenue Forecast] end -->
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">React Apps</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">Vuejs Apps</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">CRM Admin</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">CRM Admin</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">React Apps</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">Vuejs Apps</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">CRM Admin</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">Vuejs Apps</a>
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
                                            <a href="javascript:void(0);" class="fw-semibold text-truncate-1-line">React Apps</a>
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
                    <!-- [Selling Status] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-primary text-white">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <h5 class="text-reset">Selling Status</h5>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end rounded-top">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="selling-status-area-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded">
                                            <i class="feather-airplay"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="fw-bold mb-2">Weekly Bestseller</a>
                                            <p class="fs-12 text-muted mb-0">10+ weekly bestseller</p>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr class="border-top-dashed">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded">
                                            <i class="feather-award"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="fw-bold mb-2">Feature Sellers</a>
                                            <p class="fs-12 text-muted mb-0">10+ feature sellers</p>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr class="border-top-dashed">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded">
                                            <i class="feather-bar-chart-2"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="fw-bold mb-2">Average Bestseller</a>
                                            <p class="fs-12 text-muted mb-0">10+ average bestseller</p>
                                        </div>
                                    </div>
                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Selling Status] end !-->
                    <!-- [Conversion Status] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-success text-white">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <h5 class="text-reset">Conversion Status</h5>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end rounded-top">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="conversion-statistic-bar-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 bg-soft-primary text-primary text-center rounded">
                                            <i class="feather-airplay fs-3"></i>
                                            <h6 class="fs-13 text-reset mt-2">Weekly Sales</h6>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 bg-soft-warning text-warning text-center rounded">
                                            <i class="feather-layers fs-3"></i>
                                            <h6 class="fs-13 text-reset mt-2">Sales Progress</h6>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 bg-soft-danger text-danger text-center rounded">
                                            <i class="feather-briefcase fs-3"></i>
                                            <h6 class="fs-13 text-reset mt-2">New Projects</h6>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 bg-soft-success text-success text-center rounded">
                                            <i class="feather-shopping-cart fs-3"></i>
                                            <h6 class="fs-13 text-reset mt-2">Items Orders</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Conversion Status] end !-->
                    <!-- [Traffic Source] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-danger text-white">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <h5 class="text-reset">Traffic Source</h5>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end rounded-top">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="traffic-source-area-chart"></div>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center border border-dashed border-soft-primary rounded position-relative">
                                            <div class="avatar-text avatar-md bg-soft-primary text-primary border-soft-primary position-absolute top-0 start-50 translate-middle">
                                                <i class="feather-airplay"></i>
                                            </div>
                                            <div>
                                                <div class="fs-12 text-muted mb-2">Organic Traffics</div>
                                                <h3>8,865</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center border border-dashed border-soft-warning rounded position-relative">
                                            <div class="avatar-text avatar-md bg-soft-warning text-warning border-soft-warning position-absolute top-0 start-50 translate-middle">
                                                <i class="feather-layers"></i>
                                            </div>
                                            <div>
                                                <div class="fs-12 text-muted mb-2">Referral Traffics</div>
                                                <h3>6,579</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center border border-dashed border-soft-danger rounded position-relative">
                                            <div class="avatar-text avatar-md bg-soft-danger text-danger border-soft-danger position-absolute top-0 start-50 translate-middle">
                                                <i class="feather-link-2"></i>
                                            </div>
                                            <div>
                                                <div class="fs-12 text-muted mb-2">Affiliates Traffics</div>
                                                <h3>5,865</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center border border-dashed border-soft-success rounded position-relative">
                                            <div class="avatar-text avatar-md bg-soft-success text-success border-soft-success position-absolute top-0 start-50 translate-middle">
                                                <i class="feather-bookmark"></i>
                                            </div>
                                            <div>
                                                <div class="fs-12 text-muted mb-2">Others Traffics</div>
                                                <h3>2,354</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Traffic Source] end !-->
                    <!-- [Total Sales] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-primary text-white">
                                <div class="p-4">
                                    <span class="badge bg-soft-primary text-primary text-dark float-end">12%</span>
                                    <div class="text-start">
                                        <h4 class="text-reset">3,569</h4>
                                        <p class="text-reset m-0">Total Sales</p>
                                    </div>
                                </div>
                                <div id="total-sales-color-graph"></div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg rounded">
                                            <img class="img-fluid" src="assets/images/gallery/1.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">Headphones JBL</a>
                                            <span class="fs-12 text-muted">Electronics </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$205</div>
                                        <div class="fs-12 text-end">5 sold</div>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg rounded">
                                            <img class="img-fluid" src="assets/images/gallery/2.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">Smart watch</a>
                                            <span class="fs-12 text-muted">Electronics </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$350</div>
                                        <div class="fs-12 text-end">6 sold</div>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg rounded">
                                            <img class="img-fluid" src="assets/images/gallery/3.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">Hear Bud 202</a>
                                            <span class="fs-12 text-muted">Electronics </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$550</div>
                                        <div class="fs-12 text-end">7 sold</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Total Sales] end !-->
                    <!-- [Total Comment] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-danger text-white">
                                <div class="p-4">
                                    <span class="badge bg-soft-primary text-primary text-dark float-end">15%</span>
                                    <div class="text-start">
                                        <h4 class="text-reset">1,254</h4>
                                        <p class="text-reset m-0">Total Comment</p>
                                    </div>
                                </div>
                                <div id="total-comment-color-graph"></div>
                            </div>
                            <div class="card-body">
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">20</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="mb-2 text-truncate-1-line">React Dashboard Design</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">11:30am - 12:30pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="mb-2 text-truncate-1-line">Standup Team Meeting</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">8:00am - 9:00am</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="fs-13">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <!-- [Total Comment] end !-->
                    <!-- [Income Status] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-success text-white">
                                <div class="p-4">
                                    <span class="badge bg-soft-primary text-primary text-dark float-end">20%</span>
                                    <div class="text-start">
                                        <h4 class="text-reset">$9.657</h4>
                                        <p class="text-reset m-0">Income Status</p>
                                    </div>
                                </div>
                                <div id="total-income-color-graph"></div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded me-3">
                                            <i class="feather-airplay"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Weekly Bestseller</a>
                                            <p class="fs-12 text-muted mb-0">Mark, Rowling, Esther</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$99,685</a>
                                        <span class="fs-12 text-muted">698 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded me-3">
                                            <i class="feather-award"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Feature Sellers</a>
                                            <p class="fs-12 text-muted mb-0">Randy, Steve, Mike</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$95,685 </a>
                                        <span class="fs-12 text-muted">457 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded me-3">
                                            <i class="feather-user-check"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Popular Authors</a>
                                            <p class="fs-12 text-muted mb-0">John, Pat, Jimmy</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$90,759 </a>
                                        <span class="fs-12 text-muted">447 Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Income Status] end !-->
                    <!-- [Earnings] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
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
                            <div id="earnings-card-area-chart"></div>
                            <div class="card-body bg-soft-success">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Avarage Sale</div>
                                            <div class="fs-5 fw-bold text-dark">$850</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Comissions</div>
                                            <div class="fs-5 fw-bold text-dark">$34,500</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Revenue</div>
                                            <div class="fs-5 fw-bold text-dark">$68,000</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Expenses</div>
                                            <div class="fs-5 fw-bold text-dark">$230,600</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Earnings] end !-->
                    <!-- [Expenses] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
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
                            <div id="expense-card-area-chart"></div>
                            <div class="card-body bg-soft-danger">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Avarage Sale</div>
                                            <div class="fs-5 fw-bold text-dark">$850</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Comissions</div>
                                            <div class="fs-5 fw-bold text-dark">$34,500</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Revenue</div>
                                            <div class="fs-5 fw-bold text-dark">$68,000</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Expenses</div>
                                            <div class="fs-5 fw-bold text-dark">$230,600</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Expenses] end !-->
                    <!-- [Revenue] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="p-4 d-flex align-items-start justify-content-between">
                                <div>
                                    <div class="fs-12 text-primary fw-semibold mb-2">Revenue</div>
                                    <h4 class="text-primary mb-2">(+) $96,753 USD</h4>
                                    <div class="fs-12 text-muted text-truncate-1-line">Earnings is 74% more than last month.</div>
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
                            <div id="revenue-card-area-chart"></div>
                            <div class="card-body bg-soft-primary">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Avarage Sale</div>
                                            <div class="fs-5 fw-bold text-dark">$850</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Comissions</div>
                                            <div class="fs-5 fw-bold text-dark">$34,500</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Revenue</div>
                                            <div class="fs-5 fw-bold text-dark">$68,000</div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-block p-4 text-center rounded border border-dashed">
                                            <div class="fs-12 text-muted">Expenses</div>
                                            <div class="fs-5 fw-bold text-dark">$230,600</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Revenue] end !-->
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
	<?php include './partials/widget-scripts.php'?>	
</body>

</html>