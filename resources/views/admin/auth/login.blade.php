
@extends('admin.auth.layouts.auth-master')

@section('contents')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Admin Login</h4>
                        </div>

                        <div class="card-body">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <!-- Laravel Login Form -->
                            <form method="POST" action="{{ route('admin.login') }}" class="needs-validation" novalidate>
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" tabindex="1"
                                           required autofocus autocomplete="username">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            @if (Route::has('admin.password.request'))
                                                <a href="{{ route('admin.password.request') }}" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" tabindex="2" required autocomplete="current-password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                     <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input"
                                               tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="simple-footer">
                        Copyright &copy; BlackBox {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
