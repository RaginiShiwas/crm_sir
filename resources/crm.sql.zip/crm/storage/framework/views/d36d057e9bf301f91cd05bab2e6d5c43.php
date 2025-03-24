
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
            <h4 class="mb-3">Lead Information </h4>
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
            <form action="<?php echo e(route('rfq.store')); ?>" method="POST" class="row g-3 mb-9">
            <?php echo csrf_field(); ?>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" class="form-control select2 js-example-basic-single" id="" name="priority">
                    <option selected="selected">Priority</option>
                    <option value="Priority1">Priority1</option>
                    <option value="Priority2">Priority2 </option>
                  </select>
                  <label for="floatingSelectOwner">Lead owner</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                   <select class="form-select" id="customer_name" name="customer_name">
                        <option selected disabled>Customer Name</option>
                        <?php $__currentLoopData = $customerNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              </div>
               <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="customer" name="customer">
                        <option selected disabled>Customer</option>
                        <?php $__currentLoopData = $customerNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="customer_ansoff">
                    <option selected="selected">Customer - Ansoff</option>
                    <option value="New Customer">New Customer</option>
                    <option value="Existing Customer">Existing Customer</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="product_ansoff">
                    <option selected="selected">Product - Ansoff</option>
                    <option value="New Customer">New Customer</option>
                    <option value="Existing Customer">Existing Customer</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="email" name="email">
                  <option selected="selected">Customer Email</option>
                    <?php $__currentLoopData = $customerEmails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($email); ?>"><?php echo e($email); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="email_cc" name="email_cc">
                  <option selected="selected">Customer Email Cc</option>
                      <?php $__currentLoopData = $customerEmails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($email); ?>"><?php echo e($email); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="temp">
                    <option selected="selected">Temp</option>
                    <option value="Awarded">Awarded</option>
                    <option value="Quoted">Quoted </option>
                    <option value="Lost RFQ">Lost RFQ </option>
                    <option value="Regretted">Regretted </option>
                    <option value="LUKEWARM">LUKEWARM </option>
                    <option value="HOT">HOT </option>
                    <option value="On Hold by Customer">On Hold by Customer </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="rfq_status">
                    <option selected="selected">RFQ Status</option>
                    <option value="Awarded">Awarded</option>
                    <option value="Quoted">Quoted </option>
                    <option value="Lost RFQ">Lost RFQ </option>
                    <option value="Regretted">Regretted </option>
                    <option value="LUKEWARM">LUKEWARM </option>
                    <option value="HOT">HOT </option>
                    <option value="On Hold by Customer">On Hold by Customer </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="product_family" >
                    
                    <option selected="selected">Product Family</option>
                      <?php $__currentLoopData = $productFamilies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productFamily): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($productFamily); ?>"><?php echo e($productFamily); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
             <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="segment">
                    <option selected="selected">Segment</option>
                    <option value="EV">EV</option>
                    <option value="PV">PV </option>
                    <option value="Power">Power </option>
                    <option value="Tractor">Tractor </option>
                    <option value="Off Highway">Off Highway </option>
                    <option value="HCV">HCV</option>
                    <option value="LCV">LCV </option>
                    <option value="PV">PV </option>
                    <option value="Other">Other </option>
                    <option value="Industrial">Industrial </option>
                    <option value="2 Wheeler">2 Wheeler </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="geography">
                    <option selected="selected">Geography</option>
                    <option value="Domestic">Domestic</option>
                    <option value="Export">Export </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="project">
                  <option selected="selected">Project</option>
                      <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($project); ?>"><?php echo e($project); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="bdhead">
                    <option selected="selected">BD Head</option>
                    <option value="Customer1">Customer1</option>
                    <option value="Customer2">Customer2 </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="receivedDt" placeholder="Received Dt" name="received_dt">
                <label for="floatingSelectOwner">Received date</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="create_acc_manger">
                  <option selected disabled>Customer Account Manager</option>
                      <?php $__currentLoopData = $accountManagers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accountManager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($accountManager); ?>"><?php echo e($accountManager); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="division">
                    <option selected="selected">Division</option>
                    <option value="Amtek">Amtek</option>
                    <option value="Castex">Castex </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="business_category">
                  <option selected disabled>Business Category</option>
                    <?php $__currentLoopData = $businessCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $categoryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($categoryName); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="" name="plant">
                  <option selected disabled>Plant</option>
                  <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $branchName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($id); ?>"><?php echo e($branchName); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                  <select class="form-select" id="amtekt1" name="amtekt1">
                    <option selected="selected">Amtek T1 Supplier Plant</option>
                    <option selected disabled>Amtek T1 Supplier Plant</option>
                  <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $branchName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($id); ?>"><?php echo e($branchName); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              
            <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="quote_targetdt" name="quote_targetdt" placeholder="Quote Target date">
                <label for="quote_targetdt">Quote Target date</label>
                </div>
              </div>
                  
            <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="target_price" name="target_price" placeholder="Target price by customer">
                <label for="target_price">Target price by customer (if any)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="endcustomer" name="endcustomer" placeholder="End customer  name informed">
                <label for="endcustomer">End customer  name informed</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="partno" name="partno">
                    <option selected disabled>Part Number</option>
                    <?php $__currentLoopData = $partNumbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $partNumber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($partNumber); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
              </div>

             <div class="col-sm-6 col-md-2">
                <div class="form-floating">
                <select class="form-select" id="partno" name="partdesc">
                    <option selected disabled>Part Description</option>
                    <?php $__currentLoopData = $itemDescription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $partDescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>"><?php echo e($partDescription); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="annual_vol" name="annual_vol" placeholder="Annual Volume">
                <label for="annual_vol">Annual volume (Nos)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="sorpdate" name="sorpdate" placeholder="sorpdate">
                <label for="sorpdate">SORP Date</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="businessvalue" name="businessvalue" placeholder="">
                <label for="Total business value(Crore INR)">Total business value(Crore INR)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="estimate_price" name="estimate_price" placeholder="Estimated Price (Before Quote)-">
                <label for="">Estimated Price (Before Quote)</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="rpelvascopre" name="rpelvascopre" placeholder="RPEL VA Scopre">
                <label for="RPEL VA Scopre">RPEL VA Scopre</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="rmclvascopre" name="rmclvascopre" placeholder="RMCL VA Scopre">
                <label for="RMCL VA Scopre">RMCL VA Scopre</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="acknowledge" name="acknowledge" placeholder="Acknowledgement sent on">
                <label for="Acknowledgement sent on">Acknowledgement sent on</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="rfqsharedplant" name="rfqsharedplant" placeholder="RFQ shared with plant">
                <label for="RFQ shared with plant">RFQ shared with plant</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="queries" name="queries" placeholder="Queries on RFQ from plant (if any)">
                <label for="Queries on RFQ from plant (if any)">Queries on RFQ from plant (if any)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="queries" name="dtqueries" placeholder="Queries on RFQ from plant (if any)">
                <label for="Date of all queries closure if any">Date of all queries closure if any</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="feasiblity" name="feasiblity" placeholder="Feasibility received from Plant on">
                <label for="Feasibility received from Plant on">Feasibility received from Plant on</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="feasiblityrem" name="feasiblityrem" placeholder="Feasibility Remark">
                <label for="Feasibility Remark">Feasibility Remark</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="investmentneeded" name="investmentneeded" placeholder="Investment Needed (Crore Rs)">
                <label for="Investment Needed(Crore Rs)">Investment Needed(Crore Rs)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="quoterec" name="quoterec" placeholder="Quote rec. from Casting Plant">
                <label for="Quote rec. from Casting Plant">Quote rec. from Casting Plant</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="quotemachine" name="quotemachine" placeholder="Quote from Machining Plant">
                <label for="Quote from Machining Plant">Quote from Machining Plant</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="quotemachine" name="quot_sub_cust" placeholder="Quote from Machining Plant">
                <label for="Quote from Machining Plant">Quote Submitted to Customer</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="latestquo" name="latestquo" placeholder="Latest complete Quotation received from Plant On">
                <label for="Latest complete Quotation received from Plant On">Latest complete Quotation received from Plant On</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pricefinal" name="pricefinal" placeholder="Price finalized with Customer">
                <label for="Price finalized with Customer">
                  Price finalized with Customer</label>
                </div>
              </div>
            
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="latestcft" name="latestcft" placeholder="Latest Quotation reviewed by CFT (Engg head, Plant">
                <label for="Latest Quotation reviewed by CFT (Engg head, Plant">
                Latest Quotation reviewed by CFT (Engg head, Plant)</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="latest_quo_cust" name="latest_quo_cust" placeholder="Latest Quotation submitted to customer on">
                <label for="Latest Quotation submitted to customer on">
                Latest Quotation submitted to customer on</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="businessaward" name="businessaward" placeholder="Business Awarded Date">
                <label for="Business Awarded Date">
                Business Awarded Date</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="statusbar" name="statusbar" placeholder="statusbar">
                <label for=" Status Bar">
                Status Bar</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="rearfq" name="rearfq" placeholder="Reason for RFQ not getting converted into business">
                <label for="Reason for RFQ not getting converted into business">
                Reason for RFQ not getting converted into business</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="comments" name="comments" placeholder="Comments for reason as Others">
                <label for="Comments for reason as Others">
                Comments for reason as Others</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-2 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="rfqreview" name="rfqreview" placeholder="RFQ review latest status">
                <label for="RFQ review latest status">
                RFQ review latest status</label>
                </div>
              </div>
            
              <div class="col-12 d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary">Create lead</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gipl\crm1\resources\views/rfq_receipt.blade.php ENDPATH**/ ?>