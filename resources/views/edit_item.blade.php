@extends('layouts.app')
@section('contant')


<div class="content">
       
<!--        <div class="row">
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
            <h4 class="mb-3">Edit Product Master</h4>
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
            <form action="{{ route('item_update', $item->id) }}" method="POST" class="row g-3 mb-9">

                @csrf
                @method('PUT')
                <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="item_name" 
                 name="itemname" placeholder="Item Name" value="{{ $item->itemname }}">
                <label for="item_name">Item Name</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="product_code" name="itemcode" placeholder="Enter Product Code" value="{{ $item->itemcode }}">
                <label for="product_code">Product Code</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <input type="text" class="form-control" id="our_code" name="ourcode" placeholder="Our Code" value="{{ $item->ourcode }}">
                <label for="our_code">Our Code</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="item_group" name="itemgroupid">
                                <option selected disabled>Item Group</option>
                                @foreach($itemGroups as $id => $groupName)
                                    <option value="{{ $id }}" {{ $item->itemgroupid == $id ? 'selected' : '' }}>{{ $groupName }}</option>
                                @endforeach
                 </select>
                    <label for="floatingSelectOwner">Item Group</label>
                </div>
            </div>

              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="item_class" name="classid">
                                <option selected disabled>Item Class</option>
                                @foreach($itemClasses as $id => $classname)
                                    <option value="{{ $id }}" {{ $item->classid == $id ? 'selected' : '' }}>{{ $classname }}</option>
                                @endforeach
                </select>
                  <label for="floatingSelectOwner">Item Class</label>
                </div>
              </div>
            

                <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="acc_group" name="acc_group" required>
                    @foreach($accountGroups as $groupid => $groupname)
                        <option value="{{ $groupid }}">{{ $groupname }}</option>
                    @endforeach
                </select>
                <label for="floatingSelectOwner">Account Group</label>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 conatiner-fluid">
                <div class="form-floating">
                <select class="form-select" id="location" name="location" required>
                    @foreach($itemLocations as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                  <label for="floatingSelectOwner">Item Location</label>
                </div>
              </div>
             
                        
             <div class="col-12 d-flex justify-content-end mt-6">
             <button type="submit" class="btn btn-primary">Update Product</button>&nbsp;
             <a href="{{ url('/item_list') }}" class="btn btn-primary">Product List</a>
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