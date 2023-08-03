<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><h2>E-<em>Commerce</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Home
                <span class="sr-only">(current)</span>
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('allProducts')); ?>">Products</a>
            </li>
            
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('dashboard')); ?>">Profile</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Log in</a>
                        </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>
                    <?php endif; ?>
                <?php endif; ?>
        <?php endif; ?>
            </ul>
        </div>
        </div>
    </nav>
    </header><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/user/navbar.blade.php ENDPATH**/ ?>