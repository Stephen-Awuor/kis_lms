@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
   @endif
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin | Users
  </title>

  <!-- CSS Files -->
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" /> 
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="grey">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <li class="{{Request::is('admin_workplace') ? 'active' : ''}}">
            <a href="./admin_workplace">
              <i class="now-ui-icons design_app"></i>
              <p class="text-info">My Workplace</p>
            </a>
          </li>
          <li>
            <li class="{{Request::is('admin_teaching') ? 'active' : ''}}">
            <a href="./admin_teaching">
              <i class="now-ui-icons location_map-big"></i>
              <p class="text-info">My Teaching</p>
            </a>
          </li>
          <li>
            <li class="{{Request::is('admin_attendance') ? 'active' : ''}}">
            <a href="./admin_attendance">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p class="text-info">Attendance</p>
            </a>
          </li>
          <li>
            <li class="{{Request::is('admin_academics') ? 'active' : ''}}">
            <a href="./admin_academics">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p class="text-info">Academics</p>
            </a>
          </li>
          <li class="{{Request::is('admin_students') ? 'active' : ''}}">
            <a href="./admin_students">
              <i class="now-ui-icons users_single-02"></i>
              <p class="text-info">Student Information</p>
            </a>
          </li>
          <li class="{{Request::is('admin_users') ? 'active' : ''}}">
            <a href="./admin_users">
              <i class="now-ui-icons users_single-02"></i>
              <p class="text-info">Users</p>
            </a>
          </li>
          <li class="{{Request::is('admin_configs') ? 'active' : ''}}">
            <a href="./admin_configs">
              <i class="now-ui-icons users_single-02"></i>
              <p class="text-info">Settings</p>
            </a>
          </li>
          <li class="{{Request::is('admin_reports') ? 'active' : ''}}">
            <a href="./admin_reports">
              <i class="now-ui-icons users_single-02"></i>
              <p class="text-info">Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
           <ul class="navbar-nav">
  
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->fname }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
     <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h4 class="card-title">Parents Details</h4>
              </div>
              <div class="card-body">
                <form action="/add_parent" method="POST">
                  @csrf
                  {{method_field('PUT')}}
                <div class="container-fluid">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>First Name</label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" placeholder="Enter First Name">
                        @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Middle Name</label>
                        <input type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" placeholder="Enter Middle Name">
                        @error('mname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Last Name</label>
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" placeholder="Enter Last Name">
                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Gender</label>
                            <select id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Username</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="">
                      @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                       @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label>Occupation</label>
                      <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" placeholder="Enter Occupation">
                      @error('occupation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                       @enderror
                        </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nationality</label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" placeholder="Enter Parent Nationality">
                        @error('nationality')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Country Of Birth</label>
                        <input type="text" class="form-control @error('b_country') is-invalid @enderror" name="b_country" placeholder="Enter Birth Country">
                        @error('b_country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Language</label>
                        <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" placeholder="Enter Language">
                        @error('language')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Mobile Number</label>
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Enter Mobile Number">
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Email Address</label>
                        <input type="email" class="form-control @error('language') is-invalid @enderror" name="email" placeholder="Enter Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label>Desctiption</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="">
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                          </div>
                      </div><br>
                      <button type="submit" class="btn btn-success">Add</button>
                      <a href="/admin_parents" class="btn btn-danger">Cancel</a>
                    </form>
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
