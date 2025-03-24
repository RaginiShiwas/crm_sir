
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
            <h4 class="mb-3">Customer Contact Edit</h4>
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
            <form action="<?php echo e(route('update_customer_cont', $party->id)); ?>" method="POST" class="row g-3 mb-9">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="party_name" name="vendorname" placeholder="Party Name" value="<?php echo e($party->vendorname); ?>">
                <label for="party_name">Party Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="print_name" name="printname" placeholder="Print Name" value="<?php echo e($party->printname); ?>">
                <label for="print_name">Print Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="party_code" name="vendorcode" placeholder="Party Code" value="<?php echo e($party->vendorcode); ?>">
                <label for="party_code">Party Code</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="under_group" name="groupid">
                                <option selected="selected">Under Group</option>
                                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupid => $groupname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($groupid); ?>" <?php echo e($party->groupid == $groupid ? 'selected' : ''); ?>><?php echo e($groupname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                  <label for="floatingSelectOwner">Under Group</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <textarea class="form-control" id="address" name="address1" placeholder="Enter Address"><?php echo e($party->address1); ?></textarea>
                  <label for="floatingSelectOwner">Address</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <textarea class="form-control" id="address_1" name="address2" placeholder="Enter Address"><?php echo e($party->address2); ?></textarea>
                  <label for="floatingSelectOwner">Address 1</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="<?php echo e($party->city); ?>">
                <label for="city">City</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pin" name="pincode" placeholder="Enter Pin" value="<?php echo e($party->pincode); ?>">
                <label for="pin">Enter Pin</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
              <div class="form-floating">
              <select class="form-select" id="state" name="state">
                                <option selected="selected">Select State</option>
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e($party->state == $id ? 'selected' : ''); ?>><?php echo e($state); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                  <label for="floatingSelectOwner">State</label>
              </div>
          </div>

              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="country" name="countryid">
                                        <option selected="selected">Country</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>" <?php echo e($party->countryid == $id ? 'selected' : ''); ?>><?php echo e($country); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                    <label for="floatingSelectOwner">Country</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pan_no" name="pan_number" placeholder="Enter PAN Number" value="<?php echo e($party->pan_number); ?>">
                <label for="pan_no">PAN No.</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="gst_no" name="gstnumber" placeholder="Enter GST Number" value="<?php echo e($party->gstnumber); ?>">
                <label for="gst_no">GST No.</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="phone" class="form-control" id="phone_no" name="phone" placeholder="Enter Phone Number" value="<?php echo e($party->phone); ?>">
                <label for="phone_no">Phone Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="phone" class="form-control" id="cell_no" name="cellnumber" placeholder="Enter Cell Number" value="<?php echo e($party->cellnumber); ?>">
                <label for="cell_no">Cell Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail" value="<?php echo e($party->email); ?>">
                <label for="email">E-mail</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-3 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="creditdays" name="creditdays" placeholder="Enter Credit Days" value="<?php echo e($party->creditdays); ?>">
                <label for="credit_days">Credit Days</label>
                </div>
              </div>
             
              <div class="col-12 d-flex justify-content-end mt-6">
                        <button type="submit" class="btn btn-primary">Update</button>&nbsp;
                        <a href="<?php echo e(url('/customer_cont_list')); ?>" class="btn btn-primary">Customer Contact List</a>
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
             
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\CRM_1\resources\views/edit_customer_cont.blade.php ENDPATH**/ ?>