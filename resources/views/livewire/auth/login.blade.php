<form wire:submit.prevent="login">
    @csrf

    <div class="d-flex justify-content-between align-items-center">
      <label for="email" class="mt-4">Email</label>
      @error('email')<p class="mt-4 login__description error">{{ $message }}</p>@enderror
    </div>
    <input class="primary__input w-100 mt-2 @error('email') {{ $message }} error__border @enderror" type="email" wire:model="email" value="{{ old('email') }}" placeholder="Enter your email...">

    <div class="d-flex justify-content-between align-items-center">
      <label for="password" class="mt-4">Password</label>
      @error('password') <p class="mt-4 login__description error"> {{ $message }}</p> @enderror
      @error('invalid') <p class="mt-4 login__description error"> {{ $message }}</p> @enderror
    </div>
    <input class="primary__input w-100 mt-2 @error('password') {{ $message }} error__border @enderror" type="password" wire:model="password" placeholder="Enter your password...">
  
    <button class="primary__button login__button mx-0 w-100 mt-4">Login</button>
  
    <p class="auth__link mt-3">Don't have an account? <a  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal" class="pointer">Register here</a></p>
  </form>