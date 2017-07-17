@extends('master')

@section('navbar')
    @include('navbar_alternative')
@stop

@section('content')

    @include($page)

@stop
