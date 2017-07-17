@extends('master')

@section('navbar')
    @include('navbar_default')
@stop

@section('content')

    @include('home')

    @include('portfolio')

    @include('services')

    @include('testimonials')

    @include('randomcar')

    @include('about')

    @include('contact')

@stop
