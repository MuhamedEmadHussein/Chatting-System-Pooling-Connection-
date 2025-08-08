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
                            <a href="javascript:void(0);" class="btn btn-icon btn-light-brand">
                                <i class="feather-printer"></i>
                            </a>
                            <a href="leads-create.html" class="btn btn-icon btn-light-brand">
                                <i class="feather-edit"></i>
                            </a>
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-user-x me-3"></i>
                                        <span>Make as Lost</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-delete me-3"></i>
                                        <span>Make as Junk</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-trash-2 me-3"></i>
                                        <span>Delete as Lead</span>
                                    </a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-plus me-2"></i>
                                <span>Make as Customer</span>
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
            <div class="bg-white py-3 border-bottom rounded-0 p-md-0 mb-0">
                <div class="d-md-none d-flex">
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
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#proposalTab">Proposal</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tasksTab">Tasks</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notesTab">Notes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#commentTab">Comments</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                        <div class="card card-body lead-info">
                            <div class="mb-4 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">
                                    <span class="d-block mb-2">Lead Information :</span>
                                    <span class="fs-12 fw-normal text-muted d-block">Following information for your lead</span>
                                </h5>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Create Invoice</a>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Name</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">Alexandra Dell</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Position</div>
                                <div class="col-lg-10">CEO, Founder at <a href="javascript:void(0);">WRAPCODERS</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Company</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">WRAPCODERS</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Email</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">alex.della@outlook.com</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Phone</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">+01 (375) 5896 654</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Website</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">https://www.wrapcodes.com</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Lead value</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">$255.50 USD</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Address</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">47813 Johnathon Parks Suite 559</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">City</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">Cartermouth</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">State</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">Connecticut</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Country</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">United Kingdom </a></div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-lg-2 fw-medium">Zip Code</div>
                                <div class="col-lg-10"><a href="javascript:void(0);">81135-0615 </a></div>
                            </div>
                        </div>
                        <hr>
                        <div class="card card-body general-info">
                            <div class="mb-4 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">
                                    <span class="d-block mb-2">General Information :</span>
                                    <span class="fs-12 fw-normal text-muted d-block">General information for your lead</span>
                                </h5>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Edit Lead</a>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Status</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-text avatar-sm">
                                            <i class="feather-git-commit"></i>
                                        </div>
                                        <span>Customer</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Source</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-text avatar-sm">
                                            <i class="feather-facebook"></i>
                                        </div>
                                        <span>Facebook</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Default Language</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-text avatar-sm">
                                            <i class="feather-airplay"></i>
                                        </div>
                                        <span>System Default</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Privacy</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-text avatar-sm">
                                            <i class="feather-globe"></i>
                                        </div>
                                        <span>Private</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Created</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-text avatar-sm">
                                            <i class="feather-clock"></i>
                                        </div>
                                        <span>26 MAY, 2023</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Assigned</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-image avatar-sm">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </div>
                                        <span>Alexandra Della</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Lead By</div>
                                <div class="col-lg-10 hstack gap-1">
                                    <a href="javascript:void(0);" class="hstack gap-2">
                                        <div class="avatar-image avatar-sm">
                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                        </div>
                                        <span>Green Cute - Website design and development</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Tags</div>
                                <div class="col-lg-10 hstack gap-1"><a href="javascript:void(0);" class="badge bg-soft-primary text-primary">VIP</a><a href="javascript:void(0);" class="badge bg-soft-success text-success">High Rated</a><a href="javascript:void(0);" class="badge bg-soft-warning text-warning">Promotions</a><a href="javascript:void(0);" class="badge bg-soft-danger text-danger">Team</a><a href="javascript:void(0);" class="badge bg-soft-teal text-teal">Updates</a></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-2 fw-medium">Description</div>
                                <div class="col-lg-10 hstack gap-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, nulla veniam, ipsam nemo autem fugit earum accusantium reprehenderit recusandae in minima harum vitae doloremque quasi aut dolorum voluptate. Minima, deleniti.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, nulla veniam, ipsam nemo autem fugit earum accusantium reprehenderit recusandae in minima harum vitae doloremque quasi aut dolorum voluptate.</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="proposalTab" role="tabpanel">
                        <div class="card card-body">
                            <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                <div class="text-center">
                                    <h2 class="fs-16 fw-semibold">No proposals yet!</h2>
                                    <p class="fs-12 text-muted">There is no proposals create yet.</p>
                                    <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Proposals">
                                        <i class="feather-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tasksTab" role="tabpanel">
                        <div class="card card-body">
                            <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                <div class="text-center">
                                    <h2 class="fs-16 fw-semibold">No tasks yet!</h2>
                                    <p class="fs-12 text-muted">There is no tasks create yet.</p>
                                    <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Tasks">
                                        <i class="feather-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notesTab" role="tabpanel">
                        <div class="card card-body">
                            <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                <div class="text-center">
                                    <h2 class="fs-16 fw-semibold">No notes yet!</h2>
                                    <p class="fs-12 text-muted">There is no notes create yet.</p>
                                    <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Create Notes">
                                        <i class="feather-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="commentTab" role="tabpanel">
                        <div class="card card-body">
                            <div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 315px)">
                                <div class="text-center">
                                    <h2 class="fs-16 fw-semibold">No comments yet!</h2>
                                    <p class="fs-12 text-muted">There is no comments posted yet.</p>
                                    <a href="javascript:void(0);" class="avatar-text bg-soft-primary text-primary mx-auto" data-bs-toggle="tooltip" title="Add Comments">
                                        <i class="feather-plus"></i>
                                    </a>
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
	<!--<< Footer Section Start >>-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>		
</body>

</html>