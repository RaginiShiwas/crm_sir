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
            <h4 class="mb-3">Edit RFQ</h4>
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
            <form action="{{ route('rfq.update', ['id' => $rfq->id]) }}" method="POST" class="row g-3 mb-9">
                @csrf
                @method('PUT')
                <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="date" class="form-control" id="date" name="date" value="{{ $rfq->date }}" required>
                <label for="date">Date</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="tech" name="tech" value="{{ $rfq->tech }}" required>
                <label for="tech">Technician</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="cid" name="cid" value="{{ $rfq->cid }}" required>
                <label for="cid">CID#</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="bussiness" name="bussiness" value="{{ $rfq->bussiness }}" required>
                <label for="bussiness">Bussiness Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="poc" name="poc" value="{{ $rfq->poc }}" required>
                <label for="poc">POC</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="address" name="address" value="{{ $rfq->address }}" required>
                <label for="address">Address</label>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="city" name="city" value="{{ $rfq->city }}" required>
                <label for="city">City</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
              <div class="form-floating">
              <select class="form-select" id="state" name="state">
                                <option selected="selected">Select State</option>
                                @foreach($states as $id => $state)
                                    <option value="{{ $id }}" {{ $rfq->state == $id ? 'selected' : '' }}>{{ $state }}</option>
                                @endforeach
                </select>
                  <label for="floatingSelectOwner">State</label>
              </div>
          </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="pincode" name="pincode" value="{{ $rfq->pincode }}" required>
                <label for="pincode">PIN Code</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ $rfq->phone_no }}" required>
                <label for="phone_no">Phone Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" value="{{ $rfq->email }}" required>
                <label for="email">Email</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="number" name="number" value="{{ $rfq->number }}" required>
                <label for="number">Number</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="product_1" name="product_1" value="{{ $rfq->product_1 }}" required>
                <label for="product_1">Product Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="number" class="form-control" id="quanity_1" name="quanity_1" value="{{ $rfq->quanity_1 }}" required>
                <label for="quanity">Quanity</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="number" class="form-control" id="labor" name="labor" value="{{ $rfq->labor }}" required>
                <label for="labor">Labor Hours</label>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <textarea class="form-control" id="add_info" name="add_info">{{ $rfq->add_info }}</textarea>
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
          <button type="submit" class="btn btn-primary">Update RFQ</button>&nbsp;
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