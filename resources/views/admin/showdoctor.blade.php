<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    @include('admin.css')

</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                                more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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

            <div class="container" align="center" style="padding-top: 100px;">

                <table>
                    <thead>
                        <tr style="background: #00d25b;">
                            <th style="padding: 10px;">Doctor's Name</th>
                            <th style="padding: 10px;">Phone</th>
                            <th style="padding: 10px;">Specialty</th>
                            <th style="padding: 10px;">Room</th>
                            <th style="padding: 10px;">Image</th>
                            <th style="padding: 10px;">Delete</th>
                            <th style="padding: 10px;">Update</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $doctor)
                            <tr align="center">
                                <td style="padding: 10px;">{{ $doctor->name }}</td>
                                <td style="padding: 10px;">{{ $doctor->phone }}</td>
                                <td style="padding: 10px;">{{ $doctor->specialty }}</td>
                                <td style="padding: 10px;">{{ $doctor->room }}</td>
                                <td style="padding: 10px;">
                                    <img src="{{ asset('doctorimage/'.$doctor->image ) }}" alt="" height="50" width="50">
                                </td>
                                <td style="padding: 10px;">
                                    <a href="{{ url('deletedoctor/'.$doctor->id) }}" onclick="return confirm('Are you sure you want to delete this doctor?')" class="btn btn-danger">Delete</a>
                                </td>
                                <td style="padding: 10px;">
                                    <a href="{{ url('updatedoctor/'.$doctor->id) }}" class="btn btn-primary">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

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
