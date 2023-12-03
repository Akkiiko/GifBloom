<div class="profile__header d-flex align-items-center gap-4">
    <img class="profile__avatar" alt="Avatar belonging to the {{$user->username}}" src="{{$user->avatar}}">
    <div>
        <h1 class="mb-2">Michael</h1>
        <p class="header__description">I have posted, {{ count($user->posts) }} posts!</p>
    </div>
</div>