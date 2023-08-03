
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Desc</th>
        <th scope="col">image</th>
        <th scope="col">Aciton</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php echo e($loop->iteration); ?></th>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td><?php echo e($product->quantity); ?></td>
        <td><?php echo e($product->desc); ?></td>
        <td><img src="<?php echo e(asset("storage/$product->image")); ?>" width="100px" alt="" srcset=""></td>
        <td>
            <form action="<?php echo e(url("deleteProduct/$product->id")); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
            <h1>
                <a class="btn btn-success" href="<?php echo e(url("editProduct/$product->id")); ?>" >edit</a>
            </h1>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/admin/allProducts.blade.php ENDPATH**/ ?>