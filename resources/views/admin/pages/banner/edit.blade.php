@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Banner Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('banner.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value={{$edit->id}}>
                      <label for="formFileMultiple" class="form-label">Banner Name</label>
                      <input class="form-control" type="text" name="banner_name" value="{{$edit->banner_name}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Banner Description</label>
                      <input class="form-control" type="text" name="banner_description" value="{{$edit->banner_description}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Banner Link</label>
                      <input class="form-control" type="text" name="banner_link" value="{{$edit->banner_link}}" id="formFileMultiple" multiple>
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
