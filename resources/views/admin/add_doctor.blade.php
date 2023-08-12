


<!DOCTYPE html>
<html lang="en">
  <head>
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


            <div class="container" align="center" style="padding-top: 100px">


            @if (session()->has('message'))

            <div class="alert alert-success">


                    {{ session()->get('message') }}

                    <button type="button" class="close" data-bs-dismiss="alert">
                        X
                    </button>
            </div>
                
            @endif
                
                <form style="width: 500px; margin: 0 auto;" action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>Doctor Information</h2>
                
                    <div class="form-group">
                        <label for="name">Doctor Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter doctor's name" style="color: black; background-color: white;" required>
                    </div>
                
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="number" id="phone" placeholder="Enter doctor's phone number" style="color: black; background-color: white;" required>
                    </div>
                
                    <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <select class="form-control" name="speciality" id="speciality" style="color: black; background-color: white;" required>
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="room">Room Number</label>
                        <input type="text" class="form-control" name="room" id="room" placeholder="Enter doctor's room number" style="color: black; background-color: white;" required>
                    </div>
                
                    <div class="form-group">
                        <label for="image">Doctor Image</label>
                        <input type="file" class="form-control-file" name="file" id="image" style="color: black; background-color: white;" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                
                
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>