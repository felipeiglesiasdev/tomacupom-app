@extends('layouts.app')
@push('seo')
    @include('components.home.tags')
@endpush
@section('content')
    <x-home.hero />
    <x-home.lojas-destaque />
    <x-home.grupos-wpp-telegram />
@endsection


