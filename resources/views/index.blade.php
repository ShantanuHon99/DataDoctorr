@extends('layouts.main')

@section('title', 'DataDoctor')

@section('content')
    @include('home')
    @include('tools')
    @include('demo')
    @include('testimonial')
    @include('whyus')
@endsection
