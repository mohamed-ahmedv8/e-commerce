
<?php $__env->startSection('content'); ?>
<div class="latest-products">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
            <div class="col-md-4">
                <div class="product-item">
                <a ><img src="<?php echo e(asset("storage/$product->image")); ?>" width="100" height="300" alt=""></a>
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
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/user/product.blade.php ENDPATH**/ ?>