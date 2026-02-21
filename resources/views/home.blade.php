@extends('layouts.main')

@push('vite')
@vite([])
@endpush

@section('title', config('app.name') . ' | Professional Construction & Architecture Services')

@section('meta_description')
Welcome to {{ config('app.name') }}. Professional construction, architecture, and renovation services. We build your
dreams with excellence.
@endsection

@section('meta_keywords')
construction, architecture, renovation, building design, professional services, {{ config('app.name') }}
@endsection

@section('content')
<!-- SLIDER -->
@include('components.sub.slider')

<!-- SPECIALIZATION -->
@include('components.sub.specialization')

<!-- ABOUT COMPANY -->
@include('components.sub.about')

<!-- VIDEO & VALUE -->
@include('components.sub.video-value')

<!-- CONTACT FORM -->
@include('components.sub.contact-form')

<!-- SERVICES -->
@include('components.sub.services')

<!-- CALL TO ACTION -->
@include('components.sub.cta')

<!-- PROJECTS -->
@include('components.sub.projects')

<!-- TEAM -->
@include('components.sub.team')

<!-- PRICING -->
@include('components.sub.pricing')

<!-- CLIENT LOGOS -->
@include('components.sub.clients')

<!-- TESTIMONIALS -->
@include('components.sub.testimonials')
@endsection