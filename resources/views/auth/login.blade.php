@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="https://i.pinimg.com/564x/c7/2c/2a/c72c2a53eeb9e7aada6b61077195d711.jpg" width="100" class="shadow-dark rounded-circle">
            </div>

            <div class="card card-warning">
              <div class="card-header"><h4>Hallo Selamat Datang ^-^</h4></div>

                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning">
                        Cek Kembali Email atau passwordmu
                    </div>
                @endforeach

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Masukan Emailmu Yuk</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                Isi email dengan benar ya
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password Agar Lebih Aman</label>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                        @error('password')
                            <div class="invalid-feedback">
                                Please fill in your password
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                        Yuk Login
                    </button>
                    </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              ERP &copy; Diana Vicka ^-^
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
