<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <h1>Departments</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('departmentsCreate')); ?>" class="btn btn-dark mt-2 float-right">
                Create New Department
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Director</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e($department->name); ?></td>
                                <td><?php echo e($department->director_id); ?></td>
                                <td>
                                    <div class="float-left mx-1">
                                        <a href="<?php echo e(route('departmentsEdit', $department->id)); ?>" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="float-left mx-1">
                                        <form action="<?php echo e(route('departmentsDelete', $department->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/basheer/testing code/example-app/resources/views/managment/departments/index.blade.php ENDPATH**/ ?>