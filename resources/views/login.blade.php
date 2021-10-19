@extends('master')

@section('content')
    
  <div class="container-fluid" style="min-height: 100vh">
    <div class="row justify-content-center">
      <div class="col-md-4 py-5">
        <div class="card shadow">
          <div class="card-body">
            <div class="rounded-circle mx-auto bg-primary d-flex border mb-4" style="height: 100px; width: 100px">
              <i class="fa fa-user fa-3x m-auto text-light"></i>
            </div>
            <h3 class="text-center text-primary">User Login</h3>

                <form action="login" method="POST">
                  @csrf
                  <div class="form-outline my-3">
                    <input type="email" name="useremail" id="useremail" class="form-control">
                    <label class="form-label" for="useremail">Email</label>
                  </div>
                  <div class="form-outline my-3">
                    <input type="password" name="userpassword" id="userpassword" class="form-control">
                    <label class="form-label" for="userpassword">Password</label>
                  </div>
                  <input type="submit" value="Login" class="btn btn-primary d-block mx-auto">
                  <p class="text-center my-3">Not a member? <a href="#!">Register</a></p>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
