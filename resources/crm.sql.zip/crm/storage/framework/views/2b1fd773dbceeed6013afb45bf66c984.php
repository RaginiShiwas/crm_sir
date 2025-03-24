
<?php $__env->startSection('contant'); ?>


<div class="content">
       
        <div class="row">
          <div class="col-xl-12 container-fluid">
            <div class="d-flex align-items-end position-relative mb-7">
              <input class="d-none" id="upload-avatar" type="file" />
              <div class="hoverbox" style="width: 150px; height: 150px">
                <div class="hoverbox-content bg-black rounded-circle d-flex flex-center z-index-1" style="--phoenix-bg-opacity: .56;"><span class="fa-solid fa-camera fs-7 text-300"></span></div>
                <div class="position-relative bg-400 rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../assets/img/team/150x150/58.webp" alt="" /></div>
                  <label class="w-100 h-100 position-absolute z-index-1" for="upload-avatar"></label>
                </div>
              </div>
            </div>
            <h4 class="mb-3">Edit Item Master</h4>
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="container-fluid">
            <form action="<?php echo e(route('item_update', $item->id)); ?>" method="POST" class="row g-3 mb-9">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="item_name" 
                 name="itemname" placeholder="Item Name" value="<?php echo e($item->itemname); ?>">
                <label for="item_name">Item Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="product_code" name="itemcode" placeholder="Enter Product Code" value="<?php echo e($item->itemcode); ?>">
                <label for="product_code">Product Code</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="our_code" name="ourcode" placeholder="Our Code" value="<?php echo e($item->ourcode); ?>">
                <label for="our_code">Our Code</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="item_group" name="itemgroupid">
                                <option selected disabled>Item Group</option>
                                <?php $__currentLoopData = $itemGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $groupName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e($item->itemgroupid == $id ? 'selected' : ''); ?>><?php echo e($groupName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
                    <label for="floatingSelectOwner">Item Group</label>
                </div>
            </div>

              <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="item_class" name="classid">
                                <option selected disabled>Item Class</option>
                                <?php $__currentLoopData = $itemClasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $classname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e($item->classid == $id ? 'selected' : ''); ?>><?php echo e($classname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                  <label for="floatingSelectOwner">Item Class</label>
                </div>
              </div>
            

                <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="acc_group" name="acc_group" required>
                    <?php $__currentLoopData = $accountGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupid => $groupname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($groupid); ?>"><?php echo e($groupname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="floatingSelectOwner">Account Group</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="location" name="location" required>
                    <?php $__currentLoopData = $itemLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                  <label for="floatingSelectOwner">Item Location</label>
                </div>
              </div>
             
                        
             <div class="col-12 d-flex justify-content-end mt-6">
             <button type="submit" class="btn btn-primary">Update Item</button>&nbsp;
             <a href="<?php echo e(url('/item_list')); ?>" class="btn btn-primary">Item List</a>
             </div>
            </form>
           </div>
          </div>
        </div>
        <script>
  $(document).ready(function() {
      $('.js-example-basic-single').select2();
  });
</script>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\CRM_1\resources\views/edit_item.blade.php ENDPATH**/ ?>