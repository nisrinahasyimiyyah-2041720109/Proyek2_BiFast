@extends('layout.login')

@section('content')
    
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          height: 150px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-4 mx-md-5 mb-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 7%, 0.557);
          backdrop-filter: blur(5px);
          ">
      <div class="card-body">
  
        <div class="row d-flex justify-content-center text-light">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Register now</h2>
            <form action="/register" method="POST">
              @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control @error('name') is-invalid                        
                        @enderror" name="name" value="{{ old('name') }}"/>
                <label class="form-label" for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control @error('email') is-invalid                        
                        @enderror" name="email" value="{{ old('email') }}"/>
                <label class="form-label" for="email">E-mail</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!-- No input -->
            <div class="form-outline mb-4">
                <input type="number" id="phone" class="form-control @error('phone') is-invalid                        
                        @enderror" name="phone" value="{{ old('phone') }}"/>
                <label class="form-label" for="phone">Phone Number</label>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
   
              <!-- Password input -->
              <div class="form-outline mb-4">
                 <input type="password" id="password" class="form-control @error('password') is-invalid                        
                        @enderror" name="password" />
          
                <label class="form-label" for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
  
              <!-- Submit button -->
              <button type="submit" class="btn btn-success btn-block mb-4">
                Register
              </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
@endsection