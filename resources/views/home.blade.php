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
<div class="space-y-8">
    <section>
        <h1 class="text-3xl lg:text-4xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
            Welcome to {{ config('app.name', 'SMT Holdings') }}
        </h1>
        <p class="text-[#706f6c] dark:text-[#A1A09A] text-lg leading-relaxed">
            This is the home page. It uses the main layout with header and footer.
        </p>
    </section>

    <section class="pt-6 border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
        <h2 class="text-xl font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Getting started</h2>
        <p class="text-[#706f6c] dark:text-[#A1A09A]">
            Your application is set up with a main blade layout, reusable header and footer, and this home view.
        </p>
    </section>
</div>
@endsection
