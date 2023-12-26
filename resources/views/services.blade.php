@section('title', '| Services')
@section('PageName', 'Services')
@extends('FrontEnd.app')
@section('FrontEndContent')
    @include('FComponent.header')
    @include('FComponent.booking')
    @include('FComponent.services')
    @include('FComponent.tastimonial')
@endsection