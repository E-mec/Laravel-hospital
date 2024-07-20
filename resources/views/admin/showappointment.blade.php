<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')

</head>

<body>
    <div class="container-scroller">
        {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
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
      </div> --}}
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')


        <!-- partial -->
        <!-- partial:partials/_navbar.html -->


        @include('admin.navbar')


        <!-- partial -->


        <div class="container-fluid page-body-wrapper">



            <div class="container" align="center" style="padding-top: 100px;">

                @if (session()->has('message'))

                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>

                        {{ session()->get('message') }}
                    </div>
                @endif



            <table>
                <thead>
                    <tr style="background: #00d25b;">
                        <th style="padding: 10px;">Patient Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Doctor's Name</th>
                        <th style="padding: 10px;">Date</th>
                        <th style="padding: 10px;">Message</th>
                        <th style="padding: 10px;">Status</th>
                        <th style="padding: 10px;">Approved</th>
                        <th style="padding: 10px;">Cancel</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($data as $appoint)

                    <tr align="center" >
                        <td style="padding: 10px;">{{ $appoint->name }}</td>
                        <td style="padding: 10px;">{{ $appoint->email }}</td>
                        <td style="padding: 10px;">{{ $appoint->phone }}</td>
                        <td style="padding: 10px;">{{ $appoint->doctor }}</td>
                        <td style="padding: 10px;">{{ $appoint->date }}</td>
                        <td style="padding: 10px;">{{ $appoint->message }}</td>
                        <td style="padding: 10px;">{{ $appoint->status }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ url('approved', $appoint->id) }}" class="btn btn-success">Approved</a>
                        </td>
                        <td style="padding: 10px;">
                            <a href="{{ url('cancel', $appoint->id) }}" class="btn btn-danger">Cancel</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

            </div>


        </div>

        <!-- main-panel ends -->
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

</body>

</html>
