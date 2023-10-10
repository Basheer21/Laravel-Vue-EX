<?php $__env->startSection('content'); ?>
    <h1>Create New Department</h1>
    <form action="<?php echo e(route('departmentsStore')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="director_id">Director</label>
                    <select name="director_id" class="form-control">
                        <option value="0" selected>Select a person</option>
                        <option value="1">IT Director</option>
                        <option value="2">HR Director</option>
                        <option value="3">BI Manager</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>\
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/basheer/testing code/example-app/resources/views/managment/departments/create.blade.php ENDPATH**/ ?>