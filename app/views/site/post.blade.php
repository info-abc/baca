<?php 
	if(isset($post)) {
		$title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_keyword = ($post->meta_keyword!='')?$post->meta_keyword:$post->name;
		$meta_description = ($post->meta_description!='')?$post->meta_description:$post->name;
		$meta_image = $post->meta_image;
	}
	$extendData = array(
			'pagePost' => 1,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', $title)

@section('content')
	
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">

	<div class="container">
		<h1 class="txt3 color4 marTop9 marBot3">{{ $post->name }}</h1>
		
		@if(count($images) > 0)
		<div class="post-images">
			<div class="row">
				@foreach($images as $value)
				<div class="grid_2">
					<a class="fancybox-button" rel="fancybox-button" href="{{ $value->image }}">
						<img src="{{ $value->image }}" alt="" />
					</a>
				</div>
				@endforeach
			</div>
		</div>
		@endif

		@if($post->embed != '')
		<div class="marBot3 description">
		<iframe src="{{ $post->embed }}" style="border:none; width: 100%; height: 400px;" allowfullscreen></iframe>
		</div>
		@endif

		<p class="marBot3">{{ $post->summary }}</p>

		<div class="marBot3 description">
			{{ $post->description }}
		</div>

	</div>

</section>

@stop
