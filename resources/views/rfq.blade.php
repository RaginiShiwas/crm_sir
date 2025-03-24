@extends('layouts.app')
@section('contant')


<div class="content">
       
      <!--  <div class="row">
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
            </div>-->
            <h4 class="mb-3">RFQ</h4>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container-fluid">
                <form action="{{ route('rfq.store') }}" method="POST" class="row g-3 mb-9">
                    @csrf
                <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="date" name="date">
                <label for="date">Date</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="tech" name="tech" placeholder="Enter Full Name">
                <label for="tech">Technician</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="cid" name="cid" placeholder="Ex-23">
                <label for="cid">CID#</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="bussiness" name="bussiness" placeholder="Enter Bussiness Name">
                <label for="bussiness">Bussiness Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="poc" name="poc" placeholder="Enter POC">
                <label for="poc">POC</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                <label for="address">Address</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                <label for="city">City</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
              <div class="form-floating">
                  <select class="form-select" id="state" name="state">
                      <option selected="selected">Select State</option>
                      @foreach($states as $id => $state)
                          <option value="{{ $id }}">{{ $state }}</option>
                      @endforeach
                  </select>
                  <label for="floatingSelectOwner">State</label>
              </div>
          </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter PIN Code">
                <label for="pincode">PIN Code</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Enter State">
                <label for="phone_no">Phone Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                <label for="email">Email</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="number" name="number" placeholder="Enter Number">
                <label for="number">Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="product" name="product_1" placeholder="Enter Product Name">
                <label for="product_1">Product Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="quanity" class="form-control" id="quanity" name="quanity_1" placeholder="Enter Quanity">
                <label for="quanity">Quanity</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="quanity" class="form-control" id="labor" name="labor" placeholder="Enter Labor Hours">
                <label for="labor">Labor Hours</label>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <textarea class="form-control" placeholder="Enter Additional Information" id="add_info" name="add_info" style="height: 100px;"></textarea>
                <label for="labor">Additional Information</label>
                </div>
              </div>
              <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="agree-checkbox" name="aggrement">
                            <label class="form-check-label" for="agree-checkbox">
                                I agree to the <a href="{{ route('rfq.agreement') }}" target="_blank">terms and conditions</a>
                            </label>
                        </div>
                 </div>
              
          <div class="col-12 d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary">Create lead</button>&nbsp;
       <a href="{{ url('/rfq_list') }}" class="btn btn-primary">RFQ List</a>
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
        @endsection