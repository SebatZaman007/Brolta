@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('allproduct.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Product Image</label>
                      <input class="form-control" type="file" name="product_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->allproduct_image)}}" width="70px" height="70px" alt="img">
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Name</label>
                      <input class="form-control" type="text" name="allproduct_name" value="{{$edit->allproduct_name}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Newprise</label>
                      <input class="form-control" type="text" name="allproduct_newprice" value="{{$edit->allproduct_newprice}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Oldprise</label>
                      <input class="form-control" type="text" name="allproduct_oldprice" value="{{$edit->allproduct_oldprice}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Buy</label>
                      <input class="form-control" type="text" name="allproduct_seemore" value="{{$edit->allproduct_seemore}}" id="formFileMultiple" multiple>
                    </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>

@endsection
