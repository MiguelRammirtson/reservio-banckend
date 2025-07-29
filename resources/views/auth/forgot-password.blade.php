{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--        </div>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('password.email') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Email Password Reset Link') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
<x-guest-layout>
    <section class="login-content">
        <div class="container h-100">
           <div class="row justify-content-center align-items-center height-self-center">
              <div class="col-md-5 col-sm-12 col-12 align-self-center">
                 <div class="card">
                    <div class="card-body text-center">
                       <h2>Reset Password</h2>
                       <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                       <form action="{{ route('login') }}" data-toggle="validator">
                          <div class="row">
                             <div class="col-lg-12">
                                <div class="floating-input form-group">
                                   <input class="form-control" type="text" name="email" id="email" required autofocus="off"/>
                                   <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
</x-guest-layout>
