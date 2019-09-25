@extends('layouts.app')
@section('main')
  <div class="container-fluid">
    <div class="row mt-5 justify-content-center">
      <div class="col-3">
        <div class="card">
          <div class="card-header text-center">
            <h4>Daftar Akun</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <button class="btn btn-block btn-primary">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection