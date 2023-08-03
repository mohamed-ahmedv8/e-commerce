<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" ><img src="<?php echo e(asset('admin/assets')); ?>/images/e-logo.png" alt="logo"/></a>
  </div>
  <ul class="nav">
    

    <li class="nav-item nav-category">
      <span class="nav-link">Control Panel</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php echo e(url('redirect')); ?>">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php echo e(url('products')); ?>">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">All Product</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php echo e(url('create')); ?>">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add Product</span>
      </a>
    </li>
  </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>