@extends('layouts.app')

@section('title', 'GifBloom - {USER} Profile')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 m-auto">
            {{ $user->username }}
        </div>
    </div>
</div>

@endsection
