

<?php $__env->startSection('title', 'Non-Fiction Books'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS; background-position: center">Non-Fiction</h1>
            <table class="table">
                <thead>
                <tr>
                    <td>Title</td>
                    <td style="padding-left: 34%">Author</td>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><a href="/BookDetails/<?php echo e($bookdata->title); ?>"><?php echo e($bookdata->title); ?></a></td>
                        <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>
                            <?php echo e($bookdetail->author); ?>

                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">No Data...</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSWebProgramming\resources\views/layouts/nonfictionbooks.blade.php ENDPATH**/ ?>