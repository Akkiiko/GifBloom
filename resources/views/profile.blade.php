@extends('layouts.app')

@section('title', "GifBloom - $user->username's Profile")

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 m-auto">
            <x-public.profile.header :user="$user" />
        </div>

        <div class="col-12 col-lg-10 m-auto mt-4 d-flex justify-content-between">
            <p>Recent Posts</p>
            <p>{{ count($user->posts) }} Total Posts</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 col-lg-10 m-auto">
            <div class="row">
                @foreach ($user->posts as $post)
                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <a class="text-wrap" href="{{ route('view.post', $post) }}">
                        <livewire:post.post :post="$post" />  
                    </a>        
                </div>
                @endforeach      
            </div>
        </div>
    </div>
</div>

@endsection
