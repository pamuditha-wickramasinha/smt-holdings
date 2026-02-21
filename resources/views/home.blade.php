@extends('layouts.main')

@push('vite')
    @vite(['resources/css/home.css', 'resources/js/home.js'])
@endpush

@section('title', 'Home - ' . config('app.name'))

@section('meta_description')
    Welcome to {{ config('app.name', 'SMT Holdings') }}. This is the home page with main layout, header and footer.
@endsection

@section('meta_keywords')
    home, {{ config('app.name') }}, welcome, getting started
@endsection

@section('content')
    <div class="page-content">
        @include('home.slider')
        @include('home.specialization')
        @include('home.about-company')
        @include('home.our-value')
        @include('home.our-mission')
        @include('home.our-services')
        @include('home.call-us')
        @include('home.our-project')
        @include('home.our-team')
        @include('home.pricing')
        @include('home.client-logo')
        @include('home.testimonials')
    </div>
@endsection
