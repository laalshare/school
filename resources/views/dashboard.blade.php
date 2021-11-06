@extends('adminlte::page')

@section('title', __('Dashboard'))


@section('content_header')
    <h1 class=" font-weight-semibold">
        {{ __('Dashboard') }}
    </h1>

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('schools.index'), 'text'=> 'Schools' , 'active']
    ]])
@stop

@section('content')
    <x-jet-welcome />
@stop
