

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS; background-position: center">Book List</h1>
            <table class="table">
                <thead>
                <tr>
                    <td style="font-family: Comic Sans MS">Title</td>
                    <td style="font-family: Comic Sans MS">Author</td>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><a href="/BookDetails/<?php echo e($bookdata->title); ?>" style="font-family: Comic Sans MS"><?php echo e($bookdata->title); ?></a></td>
                    <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td style="font-family: Comic Sans MS">
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
        <div class="col-md-4" >
            <h1 style="background-color: #00B0FF; color: white; font-family: Comic Sans MS">Category</h1>
            <a href="/Fiction" style="font-family: Comic Sans MS">Fiction<br></a>
            <a href="/NonFiction" style="font-family: Comic Sans MS">Non-Fiction<br></a>
            <a href="/Language" style="font-family: Comic Sans MS">Language<br></a>
            <a href="/Children" style="font-family: Comic Sans MS">Children's Books<br></a>
            <a href="/Science" style="font-family: Comic Sans MS">Science Books<br></a>
            <a href="/Computer" style="font-family: Comic Sans MS">Computer Books<br></a>
            <a href="/Comics" style="font-family: Comic Sans MS">Comics<br></a>
        </div>
    </div>
    <div style="padding-left: 56%">
        <button> <a href="" style="font-family: Comic Sans MS">Previous</a></button>
        <button><a href="" style="font-family: Comic Sans MS">Next</a></button>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSWebProgramming\resources\views/layouts/books.blade.php ENDPATH**/ ?>