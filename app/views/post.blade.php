@extends('layout.master')
@section('content')
	@if(isset($post) && $post != "")
		{{$post}}
	@else
		<div class="center" style="margin-top: 15%">
			<h1>Article not found</h1>
			<a href="/">Go back</a>
		</div>
	@endif
@stop