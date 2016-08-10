@extends('layouts.main')

@section('content')
@if (App::getLocale() == 'fr')
    oui
    @else
    no
    @endif
    @endsection