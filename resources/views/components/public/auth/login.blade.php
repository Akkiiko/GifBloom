<div class="modal fade" id="loginModal" tabindex="-1"  aria-labelledby="loginModal" aria-hidden="true"> 
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="height: 424px;">
        <div class="modal-body p-0 d-flex alin gap-2">
          <div class="modal__image"></div>
          <div class="w-100 py-4 px-2">
            <p class="post__title">Login</p>
            <p class="login__description">Welcome back, login to your account!</p>

            <form method="post" action="/login">
              @csrf

              <div class="d-flex justify-content-between align-items-center">
                <label for="email" class="mt-4">Email</label>
                @if ($errors->has('email'))
                <p class="mt-4 login__description error">{{ ucfirst($errors->first()) }}</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2 @if ($errors->has('email')) error__border @endif" type="email" required name="email" value="{{ old('email') }}" placeholder="Enter your email...">

              <div class="d-flex justify-content-between align-items-center">
                <label for="password" class="mt-4">Password</label>
                @if (session('password'))
                <p class="mt-4 login__description error">Password is invalaid.</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2" type="password" required name="password" placeholder="Enter your password...">
            
              <button class="primary__button login__button mx-0 w-100 mt-4" type="submit">Login</button>
            
              <p class="auth__link mt-3">Don't have an account? <a  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal" class="pointer">Register here</a></p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>