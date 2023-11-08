<div class="modal fade" id="registerModal" tabindex="-1"  aria-labelledby="registerModal" aria-hidden="true"> 
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="height: 594px">
        <div class="modal-body p-0 d-flex alin gap-2">
          <div class="modal__image"></div>
          <div class="w-100 py-4 px-2">
            <p class="post__title">Register</p>
            <p class="login__description">Welcome, please make an account!</p>

            <form method="post" action="/register">
              @csrf

              <div class="d-flex justify-content-between align-items-center">
                <label for="registerEmail" class="mt-4">Email</label>
                @if ($errors->has('registerEmail'))
                <p class="mt-4 login__description error">{{ $errors->first('registerEmail') }}</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2 @if ($errors->has('registerEmail')) error__border @endif" type="email" required name="registerEmail" value="{{ old('registerEmail') }}" placeholder="Enter your email...">

              <div class="d-flex justify-content-between align-items-center">
                <label for="registerUsername" class="mt-4">Username</label>
                @if ($errors->get('registerUsername'))
                <p class="mt-4 login__description error">{{ $errors->first('registerUsername') }}</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2 @if ($errors->has('registerUsername')) error__border @endif" type="text" required name="registerUsername" value="{{ old('registerUsername') }}" placeholder="Enter your username...">

              <div class="d-flex justify-content-between align-items-center">
                <label for="registerPassword" class="mt-4">Password</label>
                @if ($errors->get('registerPassword'))
                <p class="mt-4 login__description error">{{ $errors->first('registerPassword') }}</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2 @if ($errors->has('registerPassword')) error__border @endif" type="password" required name="registerPassword" placeholder="Enter your password...">

              <div class="d-flex justify-content-between align-items-center">
                <label for="registerPassword_confirmation" class="mt-4">Confirm Password</label>
                @if ($errors->get('registerPassword'))
                <p class="mt-4 login__description error">{{ $errors->first('registerPassword') }}</p>
                @endif
              </div>
              <input class="primary__input w-100 mt-2 @if ($errors->has('registerPassword')) error__border @endif" type="password" required name="registerPassword_confirmation" placeholder="Confirm your password...">
            
              <button class="primary__button login__button mx-0 w-100 mt-4" type="submit">Register</button>
            
              <p class="auth__link mt-3">Have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal" class="pointer">Login</a></p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>