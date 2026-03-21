@extends('layouts.main')

@push('vite')
@vite([])
@endpush

@section('title', config('app.name') . ' | Our Projects')

@section('meta_description')
Explore our portfolio of professional construction and architecture projects at {{ config('app.name') }}.
@endsection

@section('content')
<!-- INNER PAGE BANNER -->
<div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
    style="background-image: url('{{ asset('images/our-project.jpeg') }}'); min-height: 400px;">
    <div class="overlay-main bg-blue-gradient"></div>
    
    <!-- Content Container -->
    <div class="hero-content">

        <!-- Title -->
        <h1 class="hero-title" style="font-size: 50px; line-height: 58px;">
            Our Projects
        </h1>

        <!-- Subtitle / Breadcrumb -->
        <p class="hero-subtitle" style="font-size: 16px;">
            <a href="{{ route('home') }}" style="color: rgba(255, 255, 255, 1); font-weight: 600;">Home</a> 
            <span class="mx-2" style="color: rgba(255,255,255,0.5);">&gt;&gt;</span> 
            Our Projects
        </p>

        <!-- Buttons -->
        <div class="hero-buttons">
            <a href="{{ route('home') }}#about" class="site-button-secondry btn-effect">
                More About
            </a>
            <a href="{{ route('home') }}#contact" class="site-button btn-effect">
                Contact Us
            </a>
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- PROJECTS SECTION -->
@include('components.sub.projects')

@endsection