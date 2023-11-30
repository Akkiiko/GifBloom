<nav class="navbar navbar-expand-lg navbar-dark mx-auto">
    <div class="container">
        <a  href={{ route('home') }} class="navbar-brand">
            <img class="navbar__logo" draggable="false" alt="Logo of {{ config('app.name') }}" src="{{ asset('/images/branding/logonotext.png') }}">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav text-center">
                <li class="navbar__link"><a href={{ route('home') }}>Explore</a></li>
                <li class="navbar__link"><a href="">Following</a></li>
            </ul>
            <ul class="navbar-nav align-items-center">
                <a class="secondary__button pointer" @guest data-bs-toggle="modal" data-bs-target="#loginModal" @else data-bs-toggle="modal" data-bs-target="#uploadModal" @endif><img id="upload__icon" width="12" height="12" src="{{ asset('/images/icons/addition.png') }}">Upload</a>
                @guest
                <a class="primary__button pointer" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                @else 
                <li class="navbar__link position-relative">
                    <a href="#">
                        {{ Auth::user()->username }}
                        <img alt="Arrow pointing down" src="{{ asset('/images/icons/down_arrow.png') }}">
                    </a>

                    <div class="dropdown-content">
                        <a href="/profile/{{ Auth::user()->id }}">Profile</a>
                        <a href="/account/settings">Settings</a>
                        <a href="/logout">Logout</a>
                    </div>
                </li>
                @endif                
            </ul>
        </div>
    </div>
</nav>