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
            </div>--->
            <h4 class="mb-3">Customer Contact</h4>
            
            @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
           @endif

            <div class="container-fluid">
            <form action="{{ route('contact.store') }}" method="POST" class="row g-3 mb-9">
            @csrf
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="party_name" name="vendorname" placeholder="Party Name">
                <label for="party_name">Party Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="print_name" name="printname" placeholder="Print Name">
                <label for="print_name">Print Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="party_code" name="vendorcode" placeholder="Party Code">
                <label for="party_code">Party Code</label>
                </div>
              </div>
          
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                    <select class="form-select" id="under_group" name="groupid">
                          <option selected="selected">Under Group</option>
                          @foreach($groups as $groupid => $groupname)
                              <option value="{{ $groupid }}">{{ $groupname }}</option>
                          @endforeach
                      </select>
                  <label for="floatingSelectOwner">Under Group</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                   <textarea class="form-control" id="address" name="address1" placeholder="Enter Address"></textarea>
                  <label for="floatingSelectOwner">Address</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                   <textarea class="form-control" id="address_1" name="address2" placeholder="Enter Address"></textarea>
                  <label for="floatingSelectOwner">Address 1</label>
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
                <input type="text" class="form-control" id="pin" name="pincode" placeholder="Enter Pin">
                <label for="pin">Enter Pin</label>
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
                <select class="form-select" id="country" name="countryid">
                      <option selected="selected">Country</option>
                      @foreach($countries as $id => $country)
                          <option value="{{ $id }}">{{ $country }}</option>
                      @endforeach
                  </select>
                    <label for="floatingSelectOwner">Country</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pan_no" name="pan_number" placeholder="Enter PAN Number">
                <label for="pan_no">PAN No.</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="gst_no" name="gstnumber" placeholder="Enter GST Number">
                <label for="gst_no">GST No.</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="phone" class="form-control" id="phone_no" name="phone" placeholder="Enter Phone Number">
                <label for="phone_no">Phone Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="phone" class="form-control" id="cell_no" name="cellnumber" placeholder="Enter Cell Number">
                <label for="cell_no">Cell Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail">
                <label for="email">E-mail</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="creditdays" name="creditdays" placeholder="Enter Credit Days">
                <label for="credit_days">Credit Days</label>
                </div>
              </div>
             
              <div class="col-12 d-flex justify-content-end mt-6">
               <button type="submit" class="btn btn-primary">Create lead</button>&nbsp;
               <a href="{{ url('/customer_cont_list') }}" class="btn btn-primary">Customer Contact List</a>
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