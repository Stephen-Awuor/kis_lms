@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Dashboard</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="workplace">My Workplace</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="teaching">My Teaching</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="behaviour">Behaviour</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="reports">Reports</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profile">Profile</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <!-- Page content-->
                <div class="container-fluid">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">First Name</label>
                          <input type="text" class="form-control" @error('fname') is-invalid @enderror" value="{{$users->fname}}" name="fname">
                          @error('fname')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Last Name</label>
                          <input type="text" class="form-control" @error('lname') is-invalid @enderror" value="{{$users->lname}}" name="lname">
                          @error('lname')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Salutation</label>
                          <input type="text" class="form-control" @error('salutation') is-invalid @enderror" value="{{$users->salutation}}" name="salutation">
                          @error('salutation')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Eamil Address</label>
                          <input type="email" class="form-control" @error('email') is-invalid @enderror" value="{{$users->email}}" name="email">
                          @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                      </div><br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Phone</label>
                          <input type="text" class="form-control" @error('phone') is-invalid @enderror" value="{{$users->phone}}" name="phone">
                          @error('phone')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" @error('password') is-invalid @enderror" value="{{$users->password}}" name="password">
                          @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection
