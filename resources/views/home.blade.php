@extends('layouts.app')

@section('title', 'GifBloom - Each scroll is a story')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 large__gutter text-center text-lg-start mb-4" style="margin-left: auto;">
            <x-public.postsheader title="Explore" description="Every scroll you make, a new surprise awaits!" />
        </div>             
    </div>

    <div class="row">
        <div class="col-12 col-lg-3 d-fixed">
            <div class="sticky-column">
                {{-- <div style="width: 100%; background: red">a</div> --}}
            </div>
        </div>
        <div class="col-12 col-lg-9 large__gutter">
            <div>
                <livewire:post lazy />
            </div>
        </div>
    </div>
    
</div>

@endsection
