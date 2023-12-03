@extends('layouts.app')

@section('title', 'GifBloom - {USER} Profile')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 m-auto">
            <x-public.profile.header :user="$user" />
        </div>

        <div class="col-12 col-lg-9 m-auto mt-4">
            <p>Recent Posts</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-9 m-auto">

        </div>
    </div>
</div>

@endsection
