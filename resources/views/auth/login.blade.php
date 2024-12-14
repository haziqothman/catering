<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #F8F9FA;
    }
  </style>
</head>
<body>

<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border-light rounded-3 shadow-sm mt-5">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#">
                <img src="https://a.fsdn.com/con/app/proj/caterease.s/screenshots/1-643dc0fc.png/1000/auto/1" alt="Logo" width="250">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
            <form method="POST" action="{{ route('login') }}">
              @csrf

              @if(session('error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif

              <div class="mb-3">
                <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                  <label for="email">Email Address</label>
                </div>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <div class="form-floating">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="d-flex justify-content-between">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember">
                  <label class="form-check-label" for="remember">Keep me logged in</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot password?</a>
              </div>

              <div class="d-grid my-3">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
              </div>

              <p class="text-center">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Sign up</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
