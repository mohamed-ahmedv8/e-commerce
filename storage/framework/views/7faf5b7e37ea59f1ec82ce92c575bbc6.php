
    <?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>All Products</h2>
            </div>
            </div>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="product-item">
                <a ><img src="<?php echo e(asset("storage/$product->image")); ?>" width="150" height="250" alt=""></a>
                <div class="down-content">
                    <a ><h4><?php echo e($product->name); ?></h4></a>
                    <h6>$<?php echo e($product->price); ?></h6>
                    <p><?php echo e($product->desc); ?></p>
                    <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>Reviews (24)</span>
                </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="d-flex justify-content-center mx-auto">
          <?php echo e($products->links()); ?>

        </div>
        
    </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/user/products.blade.php ENDPATH**/ ?>