    <?php echo $__env->make('user.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
        <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
        </div>
        </div>
        <div class="banner-item-02">
        <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
        </div>
        </div>
        <div class="banner-item-03">
        <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
        </div>
        </div>
    </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="latest-products">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="<?php echo e(url('allProducts')); ?>">view all products <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="product-item">
                <a><img src="<?php echo e(asset("storage/$product->image")); ?>" width="100" height="300" alt=""></a>
                <div class="down-content">
                    <a><h4><?php echo e($product->name); ?></h4></a>
                    <h6>$<?php echo e($product->price); ?></h6>
                    <p><?php echo e($product->desc); ?></p>
                    
                </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
    </div>
    </div>

    <div class="best-features">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
            <h2>About E-Commerce</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="left-content">
            <h4>Looking for the best products?</h4>
            <p><a rel="nofollow"></a>E-Commerce is a fashion and apparel retail website, committed to making the beauty of fashion accessible to everyone with the best quality and lowest price for customers .</p>
            <ul class="featured-list">
                <li><a>The best quality and the lowest price</a></li>
                <li><a>Fastest delivery service</a></li>
                <li><a>Customer service all the time</a></li>
                <li><a>Easy to browse and buy safely</a></li>
            </ul>
            
            </div>
        </div>
        <div class="col-md-6">
            <div class="right-image">
            <img src="<?php echo e(asset('assets')); ?>/images/feature-image.jpg" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>

    
    <?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/user/body.blade.php ENDPATH**/ ?>