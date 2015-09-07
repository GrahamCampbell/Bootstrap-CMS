@extends('layouts.default')

@section('title')
{{ $event->title }}
@stop

@section('top')
<div class="page-header">
<h1>{{ $event->title }}</h1>
</div>
@stop

@section('content')
@auth('edit')
    <div class="well clearfix">
        <div class="hidden-xs">
            <div class="col-xs-6">
                <p>
                    <strong>{{ trans('events.event_owner') }}:</strong> {!! $event->owner !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('events.edit', array('events' => $event->id)) !!}">
                    <i class="fa fa-pencil-square-o"></i> {{ trans('events.edit_event') }}
                </a> 
                <a class="btn btn-danger" href="#delete_event" data-toggle="modal" data-target="#delete_event">
                    <i class="fa fa-times"></i> {{ trans('events.delete_event') }}
                </a>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <p>
                        <em>{{ trans('events.event_created') }}: {!! html_ago($event->created_at) !!}</em>
                    </p>
                    <p>
                        <em>{{ trans('events.last_updated') }}: {!! html_ago($event->updated_at) !!}</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="visible-xs">
            <div class="col-xs-12">
                <p>
                    <strong>{{ trans('events.event_owner') }}:</strong> {!! $event->owner !!}
                </p>
                <p>
                    <strong>{{ trans('events.event_created') }}:</strong> {!! html_ago($event->created_at) !!}
                </p>
                <p>
                    <strong>{{ trans('events.last_updated') }}:</strong> {!! html_ago($event->updated_at) !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('events.edit', array('events' => $event->id)) !!}">
                    <i class="fa fa-pencil-square-o"></i> {{ trans('events.edit_event') }}
                </a> 
                <a class="btn btn-danger" href="#delete_event" data-toggle="modal" data-target="#delete_event">
                    <i class="fa fa-times"></i> {{ trans('events.delete_event') }}
                </a>
            </div>
        </div>
    </div>
    <hr>
@endauth
<div class="well clearfix">
    <div class="hidden-xs">
        <div class="col-xs-6">
            <p class="lead">{{ trans('events.date') }}: {!! $event->date->format(Config::get('date.php_display_format')) !!}</p>
        </div>
        <div class="col-xs-6">
            <div class="pull-right">
                <p class="lead">{{ trans('events.location') }}: {!! $event->location !!}</p>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <div class="col-xs-12">
            <p class="lead">{{ trans('events.date') }}: {!! $event->date->format(Config::get('date.php_display_format')) !!}</p>
            <p class="lead">{{ trans('events.location') }}: {!! $event->location !!}</p>
        </div>
    </div>
    <div class="col-xs-12">
        <hr>
        {!! str_replace('<p>', '<p class="lead">', $event->content) !!}
    </div>
</div>
@stop

@section('bottom')
@auth('edit')
@include('events.delete')
@endauth
@stop
