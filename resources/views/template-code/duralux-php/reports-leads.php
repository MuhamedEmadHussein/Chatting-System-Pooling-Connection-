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
                        <li class="breadcrumb-item">Leads</li>
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
                    <!-- [Inquiry Tracking] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Inquiry Tracking</h5>
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
                                <div id="leads-inquiry-tracking"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Inquiry Tracking] end -->
                    <!-- [Inquiry Channel] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Inquiry Channel</h5>
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
                                <div id="leads-inquiry-channel"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Inquiry Channel] end -->
                    <!-- [Leads Status] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads Status</h5>
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
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col" class="wd-100">Sale Rep.</th>
                                                <th scope="col">Contacted</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-success rounded"></div>
                                                    <a href="javascript:void(0);">Archie Tones</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>15 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-success text-success">Deal Won</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$15.65K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-warning rounded"></div>
                                                    <a href="javascript:void(0);">Holmes Cherry</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>20 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-warning text-warning">Intro Call</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$10.24K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-primary rounded"></div>
                                                    <a href="javascript:void(0);">Kenneth Hune</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>18 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-primary text-primary">Stuck</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$12.47K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-danger rounded"></div>
                                                    <a href="javascript:void(0);">Malanie Hanvey</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>22 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-danger text-danger">Cancelled</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$10.88K</a></td>
                                            </tr>
                                            <tr>
                                                <td class="position-relative">
                                                    <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-dark rounded"></div>
                                                    <a href="javascript:void(0);">Valentine Maton</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md">
                                                        <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td>25 June, 2023</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="badge bg-soft-primary text-primary">Progress</a>
                                                </td>
                                                <td><a href="javascript:void(0);">$13.85K</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 30 Min Ago</a>
                        </div>
                    </div>
                    <!-- [Leads Status] end -->
                    <!-- [Upcoming Events] start -->
                    <div class="col-xxl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Upcoming Events</h5>
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
                                <ul class="list-group list-group-flush upcoming-event-report-lead">
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">20</span>
                                                    <span class="fs-10 text-uppercase">Fri</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">09:00 PM - 10:30 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">22</span>
                                                    <span class="fs-10 text-uppercase">Sun</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">11:00 PM - 12:00 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 24+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">25</span>
                                                    <span class="fs-10 text-uppercase">Thu</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">10:30 PM - 11:30 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 20+ </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 20 Min Ago</a>
                        </div>
                    </div>
                    <!-- [Upcoming Events] end -->
                    <!-- [Project Leads] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Leads</h5>
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
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-4">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-primary text-primary rounded-top">
                                                    <i class="feather-user-plus"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-primary rounded-bottom">
                                                    <div class="fs-16 fw-bold">5+</div>
                                                    <div class="fs-12 fw-medium">Follow Up</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#874965</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (375) 9874 663</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">4295 Pheasant Ridge Road, Philadelphia, PA 19131</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$5,685 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-1 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-4">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-success text-success rounded-top">
                                                    <i class="feather-check-circle"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-success rounded-bottom">
                                                    <div class="fs-16 fw-bold">15+</div>
                                                    <div class="fs-12 fw-medium">Completed</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#963245</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (951) 6547 862</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">1362 Emerson Road, Doyline, LA 71023</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$6,500 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-2 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-0">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-warning text-warning rounded-top">
                                                    <i class="feather-eye"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-warning rounded-bottom">
                                                    <div class="fs-16 fw-bold">2+</div>
                                                    <div class="fs-12 fw-medium">Upcomming</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#953684</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (856) 6548 963</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">139 Ethels Lane, Okeechobee, FL 33472</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$3,500 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-3 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Project Leads ] end -->
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