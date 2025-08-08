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
    <main class="nxl-container apps-container apps-notes">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Notes</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100" id="add-notes">
                            <i class="feather-plus me-2"></i>
                            <span>Add Notes</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav d-flex flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link active" id="all-category">
                                    <i class="feather-layers"></i>
                                    <span>Alls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-tasks">
                                    <i class="feather-check-circle"></i>
                                    <span>Tasks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-works">
                                    <i class="feather-tool"></i>
                                    <span>Works</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-social">
                                    <i class="feather-cast"></i>
                                    <span>Social</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-archive">
                                    <i class="feather-archive"></i>
                                    <span>Archive</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-priority">
                                    <i class="feather-command"></i>
                                    <span>Priority</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-personal">
                                    <i class="feather-user"></i>
                                    <span>Personal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-business">
                                    <i class="feather-briefcase"></i>
                                    <span>Business</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-important">
                                    <i class="feather-star"></i>
                                    <span>Important</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,18">Project Notes</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">All Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Lead Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Client Notes</a></li>
                                    <li><a class="dropdown-item active" href="javascript:void(0)">Project Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Meeting Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Personal Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Customer Notes</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                    <i class="feather-eye"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye me-3"></i>
                                            <span>Read</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Unread</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-star me-3"></i>
                                            <span>Starred</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-shield-off me-3"></i>
                                            <span>Unstarred</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-clock me-3"></i>
                                            <span>Snooze</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-check-circle me-3"></i>
                                            <span>Add Tasks</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-archive me-3"></i>
                                            <span>Archive</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-alert-octagon me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tags">
                                        <i class="feather-tag"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Office" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Office">Office</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Family">
                                            <label class="custom-control-label c-pointer" for="Family">Family</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Friend" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Friend">Friend</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Marketplace">
                                            <label class="custom-control-label c-pointer" for="Marketplace"> Marketplace </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Development">
                                            <label class="custom-control-label c-pointer" for="Development"> Development </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Tag</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-tag me-3"></i>
                                        <span>Manages Tag</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Labels">
                                        <i class="feather-folder-plus"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Updates">
                                            <label class="custom-control-label c-pointer" for="Updates">Updates</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Socials">
                                            <label class="custom-control-label c-pointer" for="Socials">Socials</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Primary" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Primary">Primary</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Forums">
                                            <label class="custom-control-label c-pointer" for="Forums">Forums</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Promotions" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Promotions"> Promotions </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Label</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-folder-plus me-3"></i>
                                        <span>Manages Label</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div class="hstack">
                                    <a href="javascript:void(0)" class="search-form-open-toggle">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search">
                                            <i class="feather feather-search"></i>
                                        </div>
                                    </a>
                                    <form class="search-form" style="display: none">
                                        <div class="search-form-inner">
                                            <a href="javascript:void(0)" class="search-form-close-toggle">
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search Close">
                                                    <i class="feather feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="notesSearch" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Newest">
                                        <i class="feather feather-chevron-left"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Oldest">
                                        <i class="feather feather-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="btn btn-light-brand btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,23">Newest</a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Title</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Priority</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Category</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Time & Date</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item active" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ascending</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Descending</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-plus me-3"></i>
                                            <span>Add to Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-user-plus me-3"></i>
                                            <span>Add to Contact</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-eye-off me-3"></i>
                                            <span>Make as Unread</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-sliders me-3"></i>
                                            <span>Filter Messages</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-archive me-3"></i>
                                            <span>Make as Archive</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-slash me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-sliders me-3"></i>
                                            <span>Report phishing</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-download me-3"></i>
                                            <span>Download Messages</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body pb-0">
                        <div class="row note-has-grid" id="note-full-container">
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Book a Ticket for Movie">Book a Ticket for Movie <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">11 March 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-archive note-works">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Go for lunch">Go for lunch <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 April 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">19 October 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-business note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give Review for design">Give Review for design <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">02 January 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Nightout with friends">Nightout with friends <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 August 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-works">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Launch new template">Launch new template <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">21 January 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Change a Design">Change a Design <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">25 December 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-business note-priority">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give review for foods">Give review for foods <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">18 December 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give salary to employee">Give salary to employee <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">15 Fabruary 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Nightout with friends">Nightout with friends <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 August 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Go for lunch">Go for lunch <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 April 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-works note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">19 October 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Footer ] start -->
                    <footer class="footer">
                        <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                            <span>Copyright ©</span>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                        <div class="d-flex align-items-center gap-4">
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
                        </div>
                    </footer>
                    <!-- [ Footer ] end -->
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Modal Add Notes !-->
    <!--! ================================================================ !-->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" data-bs-keyboard="false" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Add Notes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="notes-box">
                        <div class="notes-content">
                            <form action="javascript:void(0);" id="addnotesmodalTitle">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="note-title">
                                            <label class="form-label">Note Title</label>
                                            <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="note-description">
                                            <label class="form-label">Note Description</label>
                                            <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-n-save" class="float-left btn btn-success">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                    <button id="btn-n-add" class="btn btn-success" disabled="disabled">Add Note</button>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Modal Add Notes !-->
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
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small bg-gray-200 rounded ms-1 text-dark">5</span></h4>
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
	<!--<< Footer Section Start >>-->
	<?php include './partials/footer.php'?>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
	<!--<< Footer Section Start >>-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>	
    <script>
        function removeNote() {
            $(".remove-note")
                .off("click")
                .on("click", function(event) {
                    event.stopPropagation();
                    $(this).parents(".single-note-item").remove();
                });
        }

        function favouriteNote() {
            $(".favourite-note")
                .off("click")
                .on("click", function(event) {
                    event.stopPropagation();
                    $(this).parents(".single-note-item").toggleClass("note-favourite");
                });
        }

        function addLabelGroups() {
            $(".category-selector .badge-group-item")
                .off("click")
                .on("click", function(event) {
                    event.preventDefault();
                    /* Act on the event */
                    var getclass = this.className;
                    var getSplitclass = getclass.split(" ")[0];
                    if ($(this).hasClass("badge-tasks")) {
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-works")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-social")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-archive")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-priority")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-personal")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-business")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-important");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    } else if ($(this).hasClass("badge-important")) {
                        $(this).parents(".single-note-item").removeClass("note-tasks");
                        $(this).parents(".single-note-item").removeClass("note-works");
                        $(this).parents(".single-note-item").removeClass("note-social");
                        $(this).parents(".single-note-item").removeClass("note-archive");
                        $(this).parents(".single-note-item").removeClass("note-priority");
                        $(this).parents(".single-note-item").removeClass("note-personal");
                        $(this).parents(".single-note-item").removeClass("note-business");
                        $(this).parents(".single-note-item").toggleClass(getSplitclass);
                    }
                });
        }
        var $btns = $(".note-link").click(function() {
            if (this.id == "all-category") {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            }
            if (this.id == "important") {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            } else {
                var $el = $("." + this.id).fadeIn();
                $("#note-full-container> div").not($el).hide();
            }
            $btns.removeClass("active");
            $(this).addClass("active");
        });
        $("#add-notes").on("click", function(event) {
            $("#addnotesmodal").modal("show");
            $("#btn-n-save").hide();
            $("#btn-n-add").show();
        });
        // Button add
        $("#btn-n-add").on("click", function(event) {
            event.preventDefault();
            /* Act on the event */
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, "0");
            var mm = String(today.getMonth()); //January is 0!
            var yyyy = today.getFullYear();
            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            today = dd + " " + monthNames[mm] + " " + yyyy;

            var $_noteTitle = document.getElementById("note-has-title").value;
            var $_noteDescription = document.getElementById("note-has-description").value;

            $html = '<div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category"><div class="card card-body mb-4 stretch stretch-full">' + '<span class="side-stick"></span>' + '<h5 class="note-title text-truncate w-75 mb-1" data-noteHeading="' + $_noteTitle + '">' + $_noteTitle + '<i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>' + '<p class="fs-11 text-muted note-date">' + today + "</p>" + '<div class="note-content flex-grow-1">' + '<p class="text-muted note-inner-content text-truncate-3-line" data-noteContent="' + $_noteDescription + '">' + $_noteDescription + "</p>" + "</div>" + '<div class="d-flex align-items-center gap-1">' + '<span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>' + '<span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>' + '<div class="ms-auto">' + '<div class="dropdown btn-group category-selector">' + '<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">' + '<div class="category">' + '<div class="category-tasks"></div>' + '<div class="category-works"></div>' + '<div class="category-works"></div>' + '<div class="category-social"></div>' + '<div class="category-archive"></div>' + '<div class="category-priority"></div>' + '<div class="category-personal"></div>' + '<div class="category-business"></div>' + '<div class="category-important"></div>' + "</div>" + "</a>" + '<div class="dropdown-menu dropdown-menu-right category-menu">' + '<a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-danger rounded-circle fs-12 me-3"></i>Tasks </a>' + '<a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-primary rounded-circle fs-12 me-3"></i>Works </a>' + '<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-info rounded-circle fs-12 me-3"></i>Social </a>' + '<a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-dark rounded-circle fs-12 me-3"></i>Archive </a>' + '<a class="note-archive badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-danger rounded-circle fs-12 me-3"></i>Priority </a>' + '<a class="note-archive badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-primary rounded-circle fs-12 me-3"></i>Personal </a>' + '<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"> <i class="wd-5 ht-5 bg-warning rounded-circle me-3"></i>Business </a>' + '<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"> <span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>' + "</div>" + "</div>" + "</div>" + "</div>" + "</div></div> ";

            $("#note-full-container").prepend($html);
            $("#addnotesmodal").modal("hide");

            removeNote();
            favouriteNote();
            addLabelGroups();
        });
        $("#addnotesmodal").on("hidden.bs.modal", function(event) {
            event.preventDefault();
            document.getElementById("note-has-title").value = "";
            document.getElementById("note-has-description").value = "";
        });
        removeNote();
        favouriteNote();
        addLabelGroups();
        $("#btn-n-add").attr("disabled", "disabled");

        $("#note-has-title").keyup(function() {
            var empty = false;
            $("#note-has-title").each(function() {
                if ($(this).val() == "") {
                    empty = true;
                }
            });

            if (empty) {
                $("#btn-n-add").attr("disabled", "disabled");
            } else {
                $("#btn-n-add").removeAttr("disabled");
            }
        });
    </script>
</body>

</html>