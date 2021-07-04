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
                  <div id="page-content-wrapper">
                    <!-- Top navigation-->
                    <!-- Page content-->
                    <form action="/updateProfile/{id}" method="POST">
                      @csrf
                      {{method_field('PUT')}}
                    <div class="container-fluid">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>First Name</label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{$user->fname}}">
                        @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Last Name</label>
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{$user->lname}}">
                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          </div><br>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Salutation</label>
                          <input type="text" class="form-control @error('salutation') is-invalid @enderror" name="salutation" value="{{$user->salutation}}">
                          @error('salutation')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                           @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label>Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                           @enderror
                            </div>
                          </div><br>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Phone Number</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}">
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                           @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label>Password</label>
                          <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                           @enderror
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
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
