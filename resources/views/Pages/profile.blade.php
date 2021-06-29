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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{!! url('/profile/{{$user->id}}'); !!}">Profile</a>
                </div>
            </div>
            <!-- Page content wrapper-->
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection
