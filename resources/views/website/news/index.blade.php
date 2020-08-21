@extends('website.app')
@section('content')
	<x-website.ui.breadcrumbs class="bg-accent">
		<div class="text-white page-breadcrumb d-flex align-items-end">
			<div class="page-breadcrumb__item">{{$article->title}}</div>
		</div>
	</x-website.ui.breadcrumbs>
	<x-website.news.index></x-website.news.index>
@endsection
