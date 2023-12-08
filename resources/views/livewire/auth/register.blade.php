<form wire:submit.prevent="register">
    @csrf

    <div class="d-flex justify-content-between align-items-center">
      <label for="registerEmail" class="mt-4">Email</label>
      @error('email')<p class="mt-4 login__description error">{{ $message }}</p>@enderror
    </div>
    <input class="primary__input w-100 mt-2 @error('email') error__border @enderror" type="email"  wire:model="email" placeholder="Enter your email...">

    <div class="d-flex justify-content-between align-items-center">
      <label for="registerUsername" class="mt-4">Username</label>
      @error('username')<p class="mt-4 login__description error">{{ $message }}</p>@enderror
    </div>
    <input class="primary__input w-100 mt-2 @error('username') error__border @enderror" type="text"  wire:model="username" placeholder="Enter your username...">

    <div class="d-flex justify-content-between align-items-center">
      <label for="registerPassword" class="mt-4">Password</label>
      @error('password')<p class="mt-4 login__description error">{{ $message }}</p>@enderror
    </div>
    <input class="primary__input w-100 mt-2 @error('password') error__border @enderror" type="password"  wire:model="password" placeholder="Enter your password...">

    <div class="d-flex justify-content-between align-items-center">
      <label for="registerPassword_confirmation" class="mt-4">Confirm Password</label>
    </div>
    <input class="primary__input w-100 mt-2" type="password"  wire:model="password_confirmation" placeholder="Confirm your password...">
  
    <button class="primary__button login__button mx-0 w-100 mt-4">Register</button>
  
    <p class="auth__link mt-3">Have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal" class="pointer">Login</a></p>
  </form>