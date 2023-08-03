<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href=""><img src="<?php echo e(asset('admin/assets')); ?>/images/e-logo.png" alt="logo" /></a>
    </div> 


    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form action="<?php echo e(url('search')); ?>" method="get" class="nav-link mt-2 mt-md-1 d-none d-lg-flex search">
            <?php echo csrf_field(); ?>
            <input type="text" name="key" class="form-control" value="<?php echo e(old('key')); ?>" placeholder="Search products">
            <button type="submit" class="btn btn-info">search</button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">
            <i class="mdi mdi-home"></i>
          </a>
        </li>

        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="<?php echo e(url('allProducts')); ?>">
            <i class="mdi mdi-layers"></i>
          </a>
        </li>
        
        
        <li >
          <a  href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
        </li>
      </ul>
      
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/admin/navbar.blade.php ENDPATH**/ ?>