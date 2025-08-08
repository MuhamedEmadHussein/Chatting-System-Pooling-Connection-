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
                        <h5 class="m-b-10">Projects</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">View</li>
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
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-map-pin me-3"></i>
                                        <span>Pin Project</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-edit me-3"></i>
                                        <span>Edit Project</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-copy me-3"></i>
                                        <span>Copy Project</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-pause me-3"></i>
                                        <span>Make as Hold</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-star me-3"></i>
                                        <span>Make as Started</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-check-circle me-3"></i>
                                        <span>Make as Finished</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-delete me-3"></i>
                                        <span>Make as Cancelled</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-eye me-3"></i>
                                        <span>Project View</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-cast me-3"></i>
                                        <span>Export Project</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-trash-2 me-3"></i>
                                        <span>Delete Project</span>
                                    </a>
                                </div>
                            </div>
                            <a href="projects-create.html" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Create Project</span>
                            </a>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="dropdown" data-bs-offset="0,11">
                                    <i class="feather-share-2 me-2"></i>
                                    <span>Share Project</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-github me-3"></i>
                                            <span>Github</span>
                                            <span class="fs-10 text-gray-500 ms-2">(39.57K)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-twitter me-3"></i>
                                            <span>Twitter</span>
                                            <span class="fs-10 text-gray-500 ms-2">(64.37K)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-youtube me-3"></i>
                                            <span>Youtube</span>
                                            <span class="fs-10 text-gray-500 ms-2">(53.76K)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-linkedin me-3"></i>
                                            <span>Linkedin</span>
                                            <span class="fs-10 text-gray-500 ms-2">(42.69K)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-facebook me-3"></i>
                                            <span>Facebook</span>
                                            <span class="fs-10 text-gray-500 ms-2">(95.65K)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-instagram me-3"></i>
                                            <span>Instagram</span>
                                            <span class="fs-10 text-gray-500 ms-2">(32.69K)</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-link me-3"></i>
                                            <span>Copy Link</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-grid me-3"></i>
                                            <span>Share via QR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-mail me-3"></i>
                                            <span>Share via Email</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            <i class="feather feather-message-square me-3"></i>
                                            <span>Share via Message</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
            <div class="bg-white py-3 border-bottom rounded-0 p-md-0 mb-0">
                <div class="d-md-none d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)" class="page-content-left-open-toggle">
                        <i class="feather-align-left fs-20"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="nav-tabs-wrapper page-content-left-sidebar-wrapper">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-content-left-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-custom-style" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overviewTab">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#activityTab">Activity</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#timesheetsTab">Timesheets</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#milestonesTab">Milestones</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#discussionsTab">Discussions</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="overviewTab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    <div class="card-body task-header d-md-flex align-items-center justify-content-between">
                                        <div class="me-4">
                                            <h4 class="mb-4 fw-bold d-flex">
                                                <span class="text-truncate-1-line">Duralux || CRM Applications &amp; Admin Dashboar <span class="badge bg-soft-primary text-primary mx-3">In Prograss</span></span>
                                            </h4>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0, 10"> CRM Dashboard </a>
                                                    <div class="dropdown-menu wd-300">
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> #01 - CRM Applications</span>
                                                            <span class="fs-12 fw-normal text-muted">- G.Cute</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> #02 - Admin Dashboard</span>
                                                            <span class="fs-12 fw-normal text-muted">- A.Cantones</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> #03 - Webapps Applications</span>
                                                            <span class="fs-12 fw-normal text-muted">- M.Hanvey</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> #04 - Dashboard Redesign</span>
                                                            <span class="fs-12 fw-normal text-muted">- K.Hune</span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> #05 - Applications Debugging</span>
                                                            <span class="fs-12 fw-normal text-muted"> - V.Maton</span>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <span> Explorer More Projects </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="vr mx-3 text-muted"></span>
                                                <div class="img-group lh-0 ms-2 justify-content-start">
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                                        <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                                        <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                        <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                        <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                                        <i class="feather-more-horizontal"></i>
                                                    </a>
                                                    <span class="d-none d-sm-flex">
                                                        <span class="fs-12 text-muted ms-3 text-truncate-1-line">24+ members</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mt-md-0">
                                            <div class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Make as Complete">
                                                    <i class="feather-check-circle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Timesheets">
                                                    <i class="feather-calendar"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon" data-bs-toggle="tooltip" title="Statistics">
                                                    <i class="feather-bar-chart-2"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-success" data-bs-toggle="tooltip" title="Timesheets">
                                                    <i class="feather-clock me-2"></i>
                                                    <span>Start Timer</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <div class="w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                    <span class="text-truncate-1-line">Projects In Progress <i class="feather-link-2 fs-10 ms-1"></i></span>
                                                </a>
                                                <div class="ms-3">
                                                    <span class="fs-12 text-muted text-truncate-1-line">16/25 Tasks Completed <span class="fs-11 text-muted">(78%)</span></span>
                                                </div>
                                            </div>
                                            <div class="progress mt-2 ht-5">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Project</label>
                                                <p>#01 - CRM Applications - G.Cute</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Billing Type </label>
                                                <p>Project Hours</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Status</label>
                                                <p>In Progress</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Customer</label>
                                                <p>Green Cute</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Start Date </label>
                                                <p>2023-02-25</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">End Date </label>
                                                <p>2023-03-20</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Hourly Rate</label>
                                                <p>$25.00</p>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label class="form-label">Logged Hours</label>
                                                <p>00:00:00</p>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <p>CRM (Customer Relationship Management) applications are software tools that help organizations manage interactions with their customers, streamline sales and marketing activities, and improve overall customer satisfaction. There are many different CRM applications available, ranging from simple contact management tools to more sophisticated platforms that integrate with other business systems.</p>
                                                <p class="fw-semibold mt-4">Some of the common features of CRM applications include:</p>
                                                <ul>
                                                    <li>Contact Management: Allows organizations to store and manage customer data, including names, addresses, phone numbers, and email addresses.</li>
                                                    <li>Sales Management: Helps organizations manage their sales pipeline, track leads and deals, and analyze sales performance.</li>
                                                    <li>Marketing Automation: Helps organizations automate their marketing processes, including email marketing, social media campaigns, and lead generation.</li>
                                                    <li>Customer Service and Support: Allows organizations to track and manage customer service requests and provide support to customers via various channels.</li>
                                                    <li>Analytics and Reporting: Provides insights into customer behavior, sales trends, and other key metrics that help organizations make data-driven decisions.</li>
                                                </ul>
                                                <p class="mb-0">Some popular CRM applications include Salesforce, Microsoft Dynamics 365, HubSpot, Zoho CRM, and Freshsales. The choice of CRM application depends on an organization's specific needs and budget.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-12 col-sm-6">
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
                                    <div class="col-xxl-6 col-xl-12 col-sm-6">
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
                                    <div class="col-xxl-6 col-xl-12 col-sm-6">
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
                                    <div class="col-xxl-6 col-xl-12 col-sm-6">
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
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-semibold">16 / 25 Open Tasks</div>
                                                    <i class="feather-check-circle text-warning"></i>
                                                </div>
                                                <div class="progress mt-2 ht-3">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-semibold">25 / 25 Days Left</div>
                                                    <i class="feather-calendar text-success"></i>
                                                </div>
                                                <div class="progress mt-2 ht-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card stretch stretch-full">
                                    <div id="billed-area-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="activityTab">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                    <div class="text-center">
                                        <h2 class="fs-16 fw-semibold">No activity yet!</h2>
                                        <p class="fs-12 text-muted">There is no activity on this project</p>
                                        <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Activity">
                                            <i class="feather-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="timesheetsTab">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                    <div class="text-center">
                                        <h2 class="fs-16 fw-semibold">No timesheets yet!</h2>
                                        <p class="fs-12 text-muted">There is no timesheets on this project</p>
                                        <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Timesheets">
                                            <i class="feather-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="milestonesTab">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                    <div class="text-center">
                                        <h2 class="fs-16 fw-semibold">No milestones yet!</h2>
                                        <p class="fs-12 text-muted">There is no milestones on this project</p>
                                        <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Milestones">
                                            <i class="feather-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="discussionsTab">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                    <div class="text-center">
                                        <h2 class="fs-16 fw-semibold">No discussions yet!</h2>
                                        <p class="fs-12 text-muted">There is no discussions on this project</p>
                                        <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Discussions">
                                            <i class="feather-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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