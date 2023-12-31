


<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include('admin.ccs');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding: 100px;">
              @if (session()->has('message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session()->get('message') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
      
              <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Doctor Name</label>
                      <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                  </div>
      
                  <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="number" class="form-control" name="phone" value="{{ $data->phone }}">
                  </div>
      
                  <div class="mb-3">
                      <label for="speciality" class="form-label">Speciality</label>
                      <input type="text" class="form-control" name="speciality" value="{{ $data->speciality }}">
                  </div>
      
                  <div class="mb-3">
                      <label for="room" class="form-label">Room</label>
                      <input type="text" class="form-control" name="room" value="{{ $data->room }}">
                  </div>
      
                  <div class="mb-3">
                      <label class="form-label">Old Image</label>
                      <div>
                          <img class="" width="200px" height="200px" src="doctorimage/{{ $data->image }}" alt="Doctor Image">
                      </div>
                  </div>
      
                  <div class="mb-3">
                      <label for="file" class="form-label">Change Image</label>
                      <input type="file" class="form-control-file" name="file">
                  </div>
      
                  <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
      </div>
      
      <style>
          input[type="text"],
          input[type="number"],
          .form-control {
              color: black;
          }
      </style>
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>