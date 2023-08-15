


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

            <div class="container" align="center" style="padding-top: 100px">
                
                <form style="width: 500px; margin: 0 auto;" action="{{ url('sendemail',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-group">
                        <label >Greeting</label>
                        <input type="text" class="form-control" name="greeting" placeholder="Enter doctor's name" style="color: black; background-color: white;" required>
                    </div>
                
                    <div class="form-group">
                        <label >Body</label>
                        <input type="text" class="form-control" name="body"  placeholder="Enter doctor's phone number" style="color: black; background-color: white;" required>
                    </div>
                
                
                    <div class="form-group">
                        <label ">Action Text</label>
                        <input type="text" class="form-control" name="actiontext"  placeholder="Enter doctor's room number" style="color: black; background-color: white;" required>
                    </div>


                    <div class="form-group">
                        <label ">Action Url</label>
                        <input type="text" class="form-control" name="actionurl"  placeholder="Enter doctor's room number" style="color: black; background-color: white;" required>
                    </div>


                    <div class="form-group">
                        <label ">End Part</label>
                        <input type="text" class="form-control" name="endpart"  placeholder="Enter doctor's room number" style="color: black; background-color: white;" required>
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