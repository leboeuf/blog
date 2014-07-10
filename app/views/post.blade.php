@extends('layout.master')
@section('content')
	@if(isset($post) && $post != "")
		{{$post}}
	@endif
@stop