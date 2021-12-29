@extends('layout.app')
@section('css')


<link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/style.css') }}">

@stop

@section('content')
 @include('HOME.part1')

@endsection

@section('content2')
 @include('HOME.part2')

@endsection
@section('content3')

@include('HOME.part3')
@endsection

@section('js')
<script src="{{ URL::asset('js/main.js') }}"></script>
@stop
