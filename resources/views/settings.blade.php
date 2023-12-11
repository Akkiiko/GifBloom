@extends('layouts.app')

@section('title', 'GifBloom - Each scroll is a story')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 m-auto text-center text-lg-start mb-4">
            <x-public.postsheader title="Settings" description="Edit your profile and account settings!" />
        </div>     
        
        <div class="col-12 col-lg-10 m-auto text-center text-lg-start mb-4">
            <livewire:user.update-avatar />
        </div>
    </div>
</div>

@endsection
