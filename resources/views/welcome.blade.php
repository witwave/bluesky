@extends('layouts.main')
@section('title')
首页
@endsection
@section('content')
<div class="intro-block mgb-20">
	@include('include.slider')
	@include('include.product')
	@include('include.xxx')
</div>
@endsection