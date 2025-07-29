<x-guest-layout>
<section class="login-content">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
                <div class="card">
                    <div class="card-body text-center">
                        <h2>Sign In</h2>
                        <p>Login to stay connected.</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="floating-input form-group">
                                        <input class="form-control" type="text" name="email" id="email" required autocomplete="off"/>
                                        <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-input form-group">
                                        <input class="form-control" type="password" name="password" id="password" required autocomplete="current-password"/>
                                        <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox mb-3 text-left">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{route('auth.recover-password')}}" class="text-primary float-right">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                            <p class="mt-3">
                                Create an Account <a href="{{route('auth.register')}}" class="text-primary">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-guest-layout>
