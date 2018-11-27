@extends('layouts.frontend')

@section('title', 'Hair Transplant Center')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('content')
    <!-- Hero -->
    @include('frontend.partials.hero')
    <!-- End Hero -->

    <!-- How it works -->
    @include('frontend.partials.how-it-works')
    <!-- End How it worka -->

    <!--Pricing -->
    @include('frontend.partials.pricing')
    <!-- End Pricing -->

    <!--Our Hotels -->
    @include('frontend.partials.hotels')
    <!-- End Our Hotels -->

    <!--Testimonials -->
    @include('frontend.partials.testimonials')
    <!-- End testimonials-->

    <!--Have questions -->
    @include('frontend.partials.have-questions')
    <!-- End have questions -->
@stop