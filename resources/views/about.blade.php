@section('title', '| About')
@section('PageName', 'About')
@extends('FrontEnd.app')
@section('FrontEndContent')
    @include('FComponent.header')
    @include('FComponent.booking')
    @include('FComponent.about')
    @include('FComponent.feature')
@endsection