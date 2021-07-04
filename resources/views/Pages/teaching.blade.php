@extends('layouts.app')
@section('content')
@include('Include.dashboard')
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Admin | Dashboard
    </title>
    <!-- CSS Files -->
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  </head>
  <body class="">
    <div class="wrapper ">
      <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        
        <!-- End Navbar -->
       <div class="content">
          <div class="row">
            <div class="col-md-12">
             <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Teaching</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                   
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    {{--<script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>--}}
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  </body>
  </html>
@endsection
