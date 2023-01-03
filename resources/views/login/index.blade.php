@extends('template.front.main')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                    <form>
                        <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3">
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection



