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
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Image</label>
                      <input class="form-control" type="file" name="product_image" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Name</label>
                      <input class="form-control" type="text" name="product_name" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Newprise</label>
                      <input class="form-control" type="text" name="product_newprise" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Oldprise</label>
                      <input class="form-control" type="text" name="product_oldprise" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Product Buy</label>
                      <input class="form-control" type="text" name="product_buy" id="formFileMultiple" multiple>
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
