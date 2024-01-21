@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
 <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Forms</h1>
      <form>
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name">
            <label for="name">Name</label>
          </div>
        <div class="form-floating">
          <input type="text" name= "name" class="form-control" id="username" placeholder="username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="password">
          <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
        <small class="d-block text-center mt-3">Already Registered? <a href="/login.index">Login</a></small>
      </form>
    </main>

  </div>
</div>
   


@endsection