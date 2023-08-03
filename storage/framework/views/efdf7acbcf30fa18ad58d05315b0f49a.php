
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form method="POST" action="<?php echo e(url("updateProduct/$product->id")); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
      <label for="exampleInputEmail1">product Name</label>
      <input type="text" name="name" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->name); ?>">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">product desc</label>
        <textarea type="text" name="desc" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" ><?php echo e($product->desc); ?></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">product Price</label>
        <input type="number" name="price" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->price); ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">product quantity</label>
        <input type="text" name="quantity" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->quantity); ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">old image</label>
        <img src="<?php echo e(asset("storage/$product->image")); ?>" width="100" alt="" srcset="">
        <input type="file" name="image" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/admin/edit.blade.php ENDPATH**/ ?>