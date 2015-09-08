@extends('layouts.default')

@section('title')
{{ trans('posts.create_post') }}
@stop

@section('top')
<div class="page-header">
<h1>{{ trans('posts.create_post') }}</h1>
</div>
@stop

@section('content')
<div class="well">
    <?php
    $form = ['url' => URL::route('blog.posts.store'),
        'method' => 'POST',
        'button' => trans('posts.create_new_post'),
        'defaults' => [
            'title' => '',
            'summary' => '',
            'body' => '',
    ], ];
    ?>
    @include('posts.form')
</div>
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.8.0/css/bootstrap-markdown.min.css">
@stop

@section('js')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.8.0/js/bootstrap-markdown.min.js"></script>
@stop
