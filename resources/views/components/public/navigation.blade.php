<nav class="navbar navbar-expand-lg navbar-dark mx-auto">
    <div class="container">
        <a  href={{ route('home') }} class="navbar-brand">
            <img class="navbar__logo" draggable="false" alt="Logo of {{ config('app.name') }}" src="{{ asset('/images/branding/logonotext.png') }}">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="navbar__link"><a href={{ route('home') }}>Explore</a></li>
                <li class="navbar__link"><a href="">Following</a></li>
            </ul>
            <ul class="navbar-nav align-items-center">
                <a class="secondary__button pointer" data-bs-toggle="modal" data-bs-target="#uploadModal"><img id="upload__icon" width="12" height="12" src="{{ asset('/images/icons/addition.png') }}">Upload</a>
                @guest
                <a class="primary__button pointer" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                @else 
                <li class="navbar__link">
                    <a href="">
                        {{Auth::user()->username }}
                        <img alt="Arrow pointing down" src="{{ asset('/images/icons/down_arrow.png') }}">
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>