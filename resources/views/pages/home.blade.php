@extends('layouts.app')
@push('seo')
    @include('components.home.tags')
@endpush
@section('content')
    <x-home.grupos-wpp-telegram />
    <x-home.faq />
@endsection


