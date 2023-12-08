<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>
    <link rel="icon" type="image/png" href='{{ asset('/images/branding/logonotext.png') }}'>
    <meta property="og:title" content="@yield('title', 'Laravel')" />
    <meta property="og:image" content='{{ asset('/images/branding/banner.png') }}' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    @if(!Auth::check())<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}"> @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>

<body>

    @auth
        <livewire:post.create-post />
    @endauth

    @if(!Auth::check())
    <div class="modal fade" id="loginModal" tabindex="-1"  aria-labelledby="loginModal" aria-hidden="true"> 
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content" style="height: 424px;">
            <div class="modal-body p-0 d-flex alin gap-2">
              <div class="modal__image"></div>
              <div class="w-100 py-4 px-2">
                <p class="post__title">Login</p>
                <p class="login__description">Welcome back, login to your account!</p>
    
                <livewire:auth.login />
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="registerModal" tabindex="-1"  aria-labelledby="registerModal" aria-hidden="true"> 
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="height: 594px">
        <div class="modal-body p-0 d-flex alin gap-2">
          <div class="modal__image"></div>
          <div class="w-100 py-4 px-2">
            <p class="post__title">Register</p>
            <p class="login__description">Welcome, please make an account!</p>
            
            <livewire:auth.register />
          </div>
        </div>
      </div>
    </div>
  </div>

    @endif

    <x-public.header />
    @yield('content')

    @livewireScripts

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
