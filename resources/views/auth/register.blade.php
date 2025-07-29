<x-guest-layout>
    <section class="login-content">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-5 col-sm-12 col-12 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2>Sign Up</h2>
                            <p>Create your Gdrive account.</p>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}" data-toggle="validator">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="floating-input form-group">
                                            <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}" id="fullname" required autocomplete="off" />
                                            <label class="form-label" for="fullname">Full Name <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-input form-group">
                                            <input class="form-control" type="text" name="last_name" value="{{old('last_name')}}" id="lastname" required autocomplete="off"/>
                                            <label class="form-label" for="lastname">Last Name <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-input form-group">
                                            <input class="form-control" type="text" id="email"  name="email" value="{{old('email')}}"  required  autocomplete="off"/>
                                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-input form-group">
                                            <input class="form-control" type="password" id="password" name="password" required autocomplete="new-password" />
                                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="floating-input form-group">
                                            <input id="password1" class="form-control" type="password" placeholder=" " name="password_confirmation" required autocomplete="off" >
                                            <label class="form-label" for="password1">Confirm Password <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="custom-control custom-checkbox mb-3 text-left">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                            <label class="custom-control-label" for="customCheck1">I agree with the terms of use <span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Sign Up') }}</button>
                                <p class="mt-3">
                                    Already have an Account <a href="{{route('auth.login')}}" class="text-primary">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-guest-layout>
