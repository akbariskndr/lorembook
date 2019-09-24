@extends('layouts.app')
@section('main')
  <div class="container-fluid">
    <div class="row mt-5 justify-content-center">
      <div class="col-3">
        <div class="card">
          <div class="card-header text-center">
            <h4>Lorembook</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="" id="" class="form-control">
              </div>
              <button class="btn btn-block btn-primary">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection