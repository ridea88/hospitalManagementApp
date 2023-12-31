


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
            <div align="center" style="padding-top: 100px;">
                <table style="width: 100%; border-collapse: collapse; padding: 10px;">
                    <tr style="background-color: #343a40; color: white;">
                        <th style="padding: 10px; border: 1px solid white;">Customer name</th>
                        <th style="padding: 10px; border: 1px solid white;">Email</th>
                        <th style="padding: 10px; border: 1px solid white;">Phone</th>
                        <th style="padding: 10px; border: 1px solid white;">Doctor Name</th>
                        <th style="padding: 10px; border: 1px solid white;">Date</th>
                        <th style="padding: 10px; border: 1px solid white;">Message</th>
                        <th style="padding: 10px; border: 1px solid white;">Status</th>
                        <th style="padding: 10px; border: 1px solid white;">Approved</th>
                        <th style="padding: 10px; border: 1px solid white;">Canceled</th>
                        <th style="padding: 10px; border: 1px solid white;">Send Mail</th>
                    </tr>
                    @foreach ($data as $appointment)
                        <tr align="center" style="background-color: #f0f8ff; color: black;">
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->name }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->email }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->phone }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->doctor }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->date }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->message }}</td>
                            <td style="border: 1px solid white; padding: 10px;">{{ $appointment->status }}</td>
                            <td style="border: 1px solid white; padding: 10px;">
                                <a style="color: white; background-color: #28a745; padding: 5px 10px; text-decoration: none; border-radius: 5px;" href="{{ url('approved',$appointment->id) }}">Approved</a>
                            </td>
                            <td style="border: 1px solid white; padding: 10px;">
                                <a style="color: white; background-color: #dc3545; padding: 5px 10px; text-decoration: none; border-radius: 5px;" href="{{ url('canceled',$appointment->id) }}">Canceled</a>
                            </td>
                            <td style="border: 1px solid white; padding: 10px;">
                              <a style="color: white; background-color: #007bff; padding: 5px 10px; text-decoration: none; border-radius: 5px;" href="{{ url('emailview',$appointment->id) }}">Send</a>
                          </td>
                          
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>