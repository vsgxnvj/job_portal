@extends('frontend.layouts.master')


@section('contents')

  <div class="bg-homepage1"></div>

@include('frontend.home.sections.hero-section')

    <div class="mt-100"></div>

@include('frontend.home.sections.category-section')

{{-- @include('frontend.home.sections.featured-job-section') --}}

{{-- @include('frontend.home.sections.why-choose-us-section') --}}

{{-- @include('frontend.home.sections.learn-more-section') --}}

{{-- @include('frontend.home.sections.counter-section') --}}

{{-- @include('frontend.home.sections.top-recruiters-section') --}}

{{-- @include('frontend.home.sections.price-plan-section') --}}

{{-- @include('frontend.home.sections.jobs-by-location-section') --}}

{{-- @include('frontend.home.sections.review-sections') --}}

{{-- @include('frontend.home.sections.blog-section') --}}



@endsection
