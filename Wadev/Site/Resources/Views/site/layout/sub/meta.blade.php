<?php 

	$description = isset($metaDescription) ? $metaDescription : "website sekolah";

?>

<meta property="og:url" content="{{ url()->current() }}">

@if(isset($description))
<meta name="description" content="{{ $description }}">
<meta property="og:description" content="{{ $description }}">
@endif

@if(isset($title))
<meta property="og:title" content="{{$title}}">
@endif

@if(isset($ogImage))
<meta property="og:image" content="{{ $ogImage }}">
@endif

{{-- <meta property="fb:app_id" content="188641365042956"/> --}}