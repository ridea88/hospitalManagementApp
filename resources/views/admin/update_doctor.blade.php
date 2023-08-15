


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


        @if (session()->has('message'))

        <div class="alert alert-success">


                {{ session()->get('message') }}

                <button type="button" class="close" data-bs-dismiss="alert">
                    X
                </button>
        </div>
            
        @endif

        <div class="container-fluid page-body-wrapper">

            @if (session()->has('message'))

            <div class="alert alert-success">
    
    
                    {{ session()->get('message') }}
    
                    <button type="button" class="close" data-bs-dismiss="alert">
                        X
                    </button>
            </div>
                
            @endif
            
            <div class="container" align="center" style="padding:100px">

                <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div style="padding: 15px">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color: black" name="name" value="{{ $data->name }}">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input type="number" style="color: black" name="phone" value="{{ $data->phone }}">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Speciality</label>
                        <input type="text" style="color: black" name="speciality" value="{{ $data->speciality }}">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Room</label>
                        <input type="text" style="color: black" name="name" value="{{ $data->room }}">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Old image</label>
                        <img height="150" width="150" src="doctorimage/{{ $data->image }}" alt="">
                    </div>

                    <div>
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>


                    <div>
                        <input type="submit" name="file" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>