@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Contactus Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('contactus.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Contactus Location</label>
                      <input class="form-control" type="text" name="contactus_location" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Contactus Phonenumber</label>
                      <input class="form-control" type="text" name="contactus_phonenumber" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Featured Email</label>
                      <input class="form-control" type="email" name="contactus_email" id="formFileMultiple" multiple>
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
