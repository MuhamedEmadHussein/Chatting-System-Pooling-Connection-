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
                        <h5 class="m-b-10">Leads</h5>
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
                            <a href="javascript:void(0);" class="btn btn-icon btn-light-brand" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <i class="feather-bar-chart"></i>
                            </a>
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-primary rounded-circle d-inline-block me-3"></span>
                                        <span>New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>Working</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Qualified</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-danger rounded-circle d-inline-block me-3"></span>
                                        <span>Declined</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-teal rounded-circle d-inline-block me-3"></span>
                                        <span>Customer</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-indigo rounded-circle d-inline-block me-3"></span>
                                        <span>Contacted</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>Pending</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Approved</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-teal rounded-circle d-inline-block me-3"></span>
                                        <span>In Progress</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-paperclip"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-pdf me-3"></i>
                                        <span>PDF</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-csv me-3"></i>
                                        <span>CSV</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-xml me-3"></i>
                                        <span>XML</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-txt me-3"></i>
                                        <span>Text</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-exe me-3"></i>
                                        <span>Excel</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-printer me-3"></i>
                                        <span>Print</span>
                                    </a>
                                </div>
                            </div>
                            <a href="leads-create.html" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Create Lead</span>
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
            <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
                <div class="accordion-body pb-2">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-text avatar-xl rounded">
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
                                            <div class="avatar-text avatar-xl rounded">
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
                                            <div class="avatar-text avatar-xl rounded">
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
                                            <div class="avatar-text avatar-xl rounded">
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
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="leadList">
                                        <thead>
                                            <tr>
                                                <th class="wd-30">
                                                    <div class="btn-group mb-1">
                                                        <div class="custom-control custom-checkbox ms-1">
                                                            <input type="checkbox" class="custom-control-input" id="checkAllLead">
                                                            <label class="custom-control-label" for="checkAllLead"></label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Lead</th>
                                                <th>Email</th>
                                                <th>Source</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
                                                            <label class="custom-control-label" for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Alexandra Della</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">alex.della@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:">(375) 9632 548</a></td>
                                                <td>2023-04-05, 00:05PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo" selected>Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
                                                            <label class="custom-control-label" for="checkBox_2"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-06, 02:52PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected>Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
                                                            <label class="custom-control-label" for="checkBox_3"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Green Cute</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">green.cute@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-twitter"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Twitter</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (845) 9632 874</a></td>
                                                <td>2023-04-08, 08:34PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
                                                            <label class="custom-control-label" for="checkBox_4"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Henry Leach</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">henry.leach@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-instagram"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Instagram</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (258) 9514 657</a></td>
                                                <td>2023-04-10, 05:25PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success" selected>Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
                                                            <label class="custom-control-label" for="checkBox_5"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Marianne Audrey</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">marine.adrey@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-linkedin"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Linkedin</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (456) 6547 524</a></td>
                                                <td>2023-04-12, 12:02PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_6">
                                                            <label class="custom-control-label" for="checkBox_6"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-instagram"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Instagram</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-15, 02:40PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary" selected>New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_7">
                                                            <label class="custom-control-label" for="checkBox_7"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Cute Green</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">cute.green@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-github"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Github</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (632) 5486 662</a></td>
                                                <td>2023-04-25, 03:42PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo" selected>Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_8">
                                                            <label class="custom-control-label" for="checkBox_8"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-success text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Leach Henry</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">leach.henry@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-facebook"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Facebook</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (951) 5478 884</a></td>
                                                <td>2023-04-14, 03:32PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected>Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_9">
                                                            <label class="custom-control-label" for="checkBox_9"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Audrey Marianne</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">adrey.marine@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-linkedin"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Linkedin</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (556) 2457 586</a></td>
                                                <td>2023-04-20, 01:47PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success">Qualified</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_10">
                                                            <label class="custom-control-label" for="checkBox_10"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="leads-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-primary text-white">E</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Elliot Nancy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-mail.html">elliot.nancy@outlook.com</a></td>
                                                <td>
                                                    <div class="hstack gap-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-twitter"></i>
                                                        </div>
                                                        <a href="javascript:void(0);">Twitter</a>
                                                    </div>
                                                </td>
                                                <td><a href="tel:"> (554) 2478 663</a></td>
                                                <td>2023-04-22, 02:12PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">New</option>
                                                        <option value="warning" data-bg="bg-warning">Working</option>
                                                        <option value="success" data-bg="bg-success" selected>Qualified</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Customer</option>
                                                        <option value="indigo" data-bg="bg-indigo">Contacted</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="leads-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>			
</body>

</html>