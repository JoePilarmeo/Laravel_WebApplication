<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/lg.png')); ?>">
    <title>
        Scholar Sphere System
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets/css/material-dashboard.css?v=3.0.0')); ?>" rel="stylesheet" />
    <style>
        .header-year,
        .header-sem {
            width: 100px;
        }

        select {
            padding: 2px 4px;
            border: 0px;
            border-radius: 4px;
            background-color: #f9d6e2;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="dashboard" target="_blank">
                <img src="<?php echo e(asset('assets/img/lg.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Scholar Sphere System</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="members">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">people</i>
                        </div>
                        <span class="nav-link-text ms-1">Members</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  active bg-gradient-primary" href="grades-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Grades</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="reqs-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Requirements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="allowance-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Allowance</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100"
                    href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
                    type="button">Upgrade to
                    pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h5 class="font-weight-bolder mb-0">Grades</h5>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->




        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3"
                            style="background-image: url('<?php echo e(asset('assets/img/bg.png')); ?>');background-size: cover">
                            <div class="row">
                                <div class="col-6 mb-4">

                                    <h5 style="color: white" class="mb-0">
                                        <?php echo e($members->firstname); ?>

                                        <?php echo e($members->midinitial); ?>

                                        <?php echo e($members->lastname); ?>

                                    </h5>
                                    <p class="mb-0 font-weight-normal text-m" style="color: white">
                                        <?php echo e($members->program); ?>

                                        <?php echo e($members->yearlevel); ?>

                                    </p>

                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn bg-gradient-dark mb-0"
                                        href="grades-add?memberID=<?php echo e($members->memberID); ?>"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Subjects</a>
                                </div>
                                <div class="my-auto " style="padding-bottom:10px">

                                    <form method="post"
                                        action="<?php echo e(url('/grades?memberID=' . $members->memberID)); ?>">

                                        <?php echo csrf_field(); ?>
                                        
                                        <label for="year" class=" font-weight-bolder "
                                            style="color: white; padding-left: 10px">Year level:</label>
                                        <select name="year">
                                            <option value="" class=" text-secondary text-m ">All Year Level
                                            </option>
                                            <option value="1st Year" <?php if($year == '1st Year'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m ">1st Year</option>
                                            <option value="2nd Year" <?php if($year == '2nd Year'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m ">2nd Year</option>
                                            <option value="3rd Year" <?php if($year == '3rd Year'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m ">3rd Year</option>
                                            <option value="4th Year" <?php if($year == '4th Year'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m ">4th Year</option>
                                        </select>
                                        <label for="sem" class="font-weight-bolder "
                                            style="color: white">Semester:</label>
                                        <select name="sem">
                                            <option value="">All Semester</option>
                                            <option value="1st Sem" <?php if($sem == '1st Sem'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m ">1st Sem</option>
                                            <option value="2nd Sem" <?php if($sem == '2nd Sem'): ?> selected <?php endif; ?>
                                                class=" text-secondary text-m">2nd Sem</option>
                                        </select>
                                        <button class="btn bg-gradient-dark mb-0"
                                            style="padding:4px 8px; margin-left: 15px;" type="submit">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3">Year Level
                                        </th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3">Semester
                                        </th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3">
                                            Course/Code</th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3">Unit</th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3">Grades
                                        </th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3"></th>
                                        <th class="text-uppercase text-body text-xs font-weight-bolder mb-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $gradesShow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if($grade->memberID == $members->memberID): ?>
                                                <td class="align-middle">
                                                    <h5 class="d-flex align-items-center font-weight-bold text-sm"
                                                        style="padding-left: 20px">
                                                        <?php echo e($grade->yearlevel); ?>

                                                    </h5>
                                                </td>

                                                <td class="align-middle">
                                                    <h5 class="d-flex align-items-center font-weight-bold text-sm"
                                                        style="padding-left: 20px">
                                                        <?php echo e($grade->semester); ?>

                                                    </h5>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <h6 class="mb-1 text-dark font-weight-bold text-sm"
                                                            style="padding-left: 15px">
                                                            <?php echo e($grade->course); ?>

                                                        </h6>
                                                        <span class="text-xs" style="padding-left: 15px">
                                                            <?php echo e($grade->code); ?>

                                                        </span>
                                                    </div>
                                                </td>


                                                <td class="align-middle">
                                                    <p class="d-flex align-items-center text-sm"
                                                        style="padding-left: 24px">
                                                        <?php echo e($grade->unit); ?>

                                                    </p>
                                                </td>


                                                <td class="align-middle">
                                                    <h5 class="d-flex align-middle text-sm"
                                                        style="padding-left: 24px">
                                                        <?php echo e($grade->grades); ?>

                                                    </h5>
                                                </td>

                                                <td class="align-middle">
                                                    <a href="grades-edit?memberID=<?php echo e($grade->memberID); ?>&gradeID=<?php echo e($grade->gradeID); ?>"
                                                        class="font-weight-bold text-xs"
                                                        style="color: rgb(0, 116, 44);">
                                                        Edit
                                                    </a>
                                                </td>

                                                <form
                                                    action="<?php echo e(route('grades.delete', ['memberID' => $grade->memberID, 'gradeID' => $grade->gradeID])); ?>"
                                                    method="POST">
                                                    <?php echo method_field('delete'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <td class="align-middle">
                                                        <button name="delete"
                                                            class="btn btn-link font-weight-bold text-s p-0 border-0 bg-transparent"
                                                            style="text-transform: capitalize; margin-top: 20px">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </form>
                                            <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn btn-outline-dark w-100" href="">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('assets/js/material-dashboard.min.js?v=3.0.0')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Mark\webapp\resources\views/grades.blade.php ENDPATH**/ ?>