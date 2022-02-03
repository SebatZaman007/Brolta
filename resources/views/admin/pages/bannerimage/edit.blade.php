@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">BannerImage Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('bannerimage.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Banner Image</label>
                      <input class="form-control" type="text" name="banner_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->banner_image)}}" width="70px" height="70px" alt="img">
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
