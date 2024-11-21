@extends('frontend.master')
@section('header')
@endsection

@section('content')
<main>
   <div class="pattern-square"></div>
   <!--Pageheader start-->
   <section class="py-5 py-lg-8">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
               <div class="text-center">
                  <a href="index.html"><img src="assets/images/logo/brand-icon.svg" alt="brand" class="mb-3"></a>
                  <h1 class="mb-1">Admin Dashboard (Registration)</h1>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Pageheader end-->
   <!--Sign up start-->
   <section>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-12">
               <div class="card shadow-sm mb-6">
                  <div class="card-body">
                     <form class="needs-validation mb-6" method="post" action="{{route('register')}}">@csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                           <p><strong>Opps Something went wrong</strong></p>
                           <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                        <div class="mb-3">
                           <label for="signinEmailInput" class="form-label">
                              Name
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text" name='name' class="form-control" id="signinEmailInput" required="">
                           <div class="invalid-feedback">Enter Name.</div>
                        </div>
                        <div class="mb-3">
                           <label for="signinEmailInput" class="form-label">
                              Email
                              <span class="text-danger">*</span>
                           </label>
                           <input type="email" name='email' class="form-control" id="signinEmailInput" required="">
                           <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="mb-3">
                           <label for="formSignUpPassword" class="form-label">Password</label>
                           <div class="password-field position-relative">
                              <input type="password" name='password' class="form-control fakePassword" id="formSignUpPassword" required="">
                              <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                              <div class="invalid-feedback">Please enter password.</div>
                           </div>
                        </div>
                        <div class="mb-3">
                           <label for="formSignUpPassword" class="form-label">Confirm Password</label>
                           <div class="password-field position-relative">
                              <input type="password" name='password_confirmation' class="form-control fakePassword" id="formSignUpPassword" required="">
                              <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                              <div class="invalid-feedback">Please enter password.</div>
                           </div>
                        </div>



                        <div class="d-grid">
                           <button class="btn btn-primary" type="submit">Sign In</button>
                        </div>
                     </form>


                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!--Sign up end-->
   <div class="position-absolute end-0 bottom-0 m-4">
      <div class="dropdown">
         <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="bi theme-icon-active"><i class="bi theme-icon bi-sun-fill"></i></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                  <i class="bi theme-icon bi-sun-fill"></i>
                  <span class="ms-2">Light</span>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <i class="bi theme-icon bi-moon-stars-fill"></i>
                  <span class="ms-2">Dark</span>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                  <i class="bi theme-icon bi-circle-half"></i>
                  <span class="ms-2">Auto</span>
               </button>
            </li>
         </ul>
      </div>
   </div>
</main>
@endsection


@section('script')
@endsection