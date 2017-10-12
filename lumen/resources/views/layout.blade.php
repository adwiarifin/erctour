@extends('master')

@section('navbar')
    @include('navbar_default')
@stop

@section('content')

    @include('home')

    @include('portfolio')

    @include('randomcar')

    @include('services')

    @include('testimonials')

    @include('about')

    @include('contact')

@stop
