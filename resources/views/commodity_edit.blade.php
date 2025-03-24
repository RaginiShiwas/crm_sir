@extends('layouts.app')
@section('contant')


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
            <h4 class="mb-3">Commodity Master</h4>
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
                <form action="{{ route('commodity.update', $commodity->id) }}" method="POST" class="row g-3 mb-9">
                    @csrf
                    @method('PUT')
                <div class="col-sm-6 col-md-12 conatiner-fluid">
                <div class="form-floating">
                <input type="text" name="commodity_name" class="form-control" id="commodity_name" value="{{ old('commodity_name', $commodity->commodity_name) }}" required>
                                @error('commodity_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                <label for="commodity_name">Commodity Name</label>
                </div>
              </div>
             
              <div class="col-sm-6 col-md-12 conatiner-fluid">
                <div class="form-floating">
                <input type="text" name="commodity_code" class="form-control" id="commodity_code" value="{{ old('commodity_code', $commodity->commodity_code) }}" required>
                                @error('commodity_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                <label for="commodity_code">Commodity Code</label>
                </div>
              </div>
             
             
              
             <div class="col-12 d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary">update commodity</button>&nbsp;
          <a href="{{ url('/commodity_list') }}" class="btn btn-primary">Commodity List</a>
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