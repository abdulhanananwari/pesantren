@extends('wadev.site::site.layout.frame')
<?php
    $title = 'home page';
?>
@section('title')
    {{$title}}
@stop
@section('body')
<div class="container">
    <div class="row">
        @include('wadev.site::site.home.partials.slide')
    </div>
    <div class="row">
        @include('wadev.site::site.home.partials.course')    
    </div>
    <div class="row">
        @include('wadev.site::site.home.partials.studentCount')
    </div>
    <div class="row">
        @include('wadev.site::site.home.partials.testi')
    </div>
    <div class="row">
        @include('wadev.site::site.home.partials.event')
    </div>
    <div class="row">
        @include('wadev.site::site.home.partials.instagram')
    </div>
</div>
@stop
