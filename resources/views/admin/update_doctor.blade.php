



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    @include('admin.css')

    <style>
      label {
        display: inline-block;
        width: 200px;
      }
    </style>

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

      @include('admin.sidebar')


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->


        @include('admin.navbar')


        <!-- partial -->

        <div class="container-fluid page-body-wrapper">



            <div class="container" align="center" style="padding-top: 100px;">

                <form action="{{ url('editdoctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color: black;" value="{{ $doctor->name }}" name="name" placeholder="Write the name" required>
                    </div>


                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color: black;" value="{{ $doctor->phone }}" name="phone" placeholder="Write the number" required>
                    </div>

                    <div style="padding: 15px;">
                      <label for="">Doctor Specialty</label>
                      <input type="text" style="color: black;" value="{{ $doctor->specialty }}" name="room" placeholder="Write the room number" required>
                  </div>

                    <div style="padding: 15px;">
                        <label for="">Doctor Room Number</label>
                        <input type="text" style="color: black;" value="{{ $doctor->room }}" name="room" placeholder="Write the room number" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Old Image</label>
                        <img src="{{ asset('doctorimage/'.$doctor->image) }}" alt="" height="150" width="150">
                      </div>

                      <div style="padding: 15px;">
                        <label for="">Change Image</label>
                        <input type="file" style="color: black;" name="image" >
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

  </body>
</html>
