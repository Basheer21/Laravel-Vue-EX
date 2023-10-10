<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <link rel="stylesheet" href="<?php echo e(asset('sidebar/css/style.css')); ?>">
</head>

<body>


    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5"
                    style="background-image: url(<?php echo e(asset('sidebar/images/logo.jpg')); ?>);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Managment</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href=" <?php echo e(Route('departmentsIndex')); ?> ">Departments</a>
                            </li>
                            <li>
                                <a href=" <?php echo e(route('usersIndex')); ?>">Users</a>
                            </li>
                            <li>
                                <a href="#">Permisions</a>
                            </li>
                            <li>
                              <a href="#">Roles</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Tasks Inbox</a>
                    </li>


                </ul>

                <div class="footer">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4s p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2 class="mb-4">Sidebar #01</h2>
            <?php echo $__env->yieldContent('content'); ?>;
        </div>
    </div>


    <script src="<?php echo e(asset('sidebar/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sidebar/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('sidebar/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sidebar/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/basheer/testing code/example-app/resources/views/layouts/master.blade.php ENDPATH**/ ?>