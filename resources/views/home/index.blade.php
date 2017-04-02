@extends('home.layouts.app')

@section('body')
    @include('home.layouts.nav_header')
    <!-- About Section -->
    @include('home.sections.about')

    <!-- Promo Section - "We know design" -->
    @include('home.sections.promo')

    <!-- Team Section -->
    @include('home.sections.team')

    <!-- Promo Section "Statistics" -->
    @include('home.sections.statistics')

    <!-- Work Section -->
    @include('home.sections.work')

    <!-- Modal for full size images on click-->
    @include('home.sections.modal')

    <!-- Skills Section -->
    @include('home.sections.skills')

    <!-- Pricing Section -->
    @include('home.sections.pricing')

    <!-- Contact Section -->
    @include('home.sections.contact')

    <!-- Footer -->
    @include('home.layouts.footer')
@endsection