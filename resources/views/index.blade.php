@extends('layouts.index')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/slick.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/>
@endsection

@section('content')
	@if(session('msg'))
    <div class="flash alert alert-success col-md-3 col-xs-12" >
        <p>{{ session('msg') }}</p>
    </div>
  @endif
  @include('partials.home')
  @include('partials.product')
  @include('partials.progress')
  @include('partials.info')
  @include('partials.partners')
  @include('partials.about')
 
@endsection
	
@section('extra-js')


@endsection