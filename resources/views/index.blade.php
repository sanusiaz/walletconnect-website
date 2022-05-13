@extends('layouts.app')


@section('title', 'Home')
@section('contents')

	@include('include.slider')
    @include('include.wallet')
    @include('include.about')
    @include('include.graf')
    @include('include.testimonials')
    @include('include.contact')
@endsection