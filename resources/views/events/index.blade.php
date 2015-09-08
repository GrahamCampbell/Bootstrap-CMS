@extends('layouts.default')

@section('title')
{{ trans('events.events') }}
@stop

@section('top')
<div class="page-header">
<h1>{{ trans('events.events') }}</h1>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-8">
        <p class="lead">
            @if (count($events) == 0)
                {{ trans('events.no_events') }}
            @else
                {{ trans('events.our_events') }}:
            @endif
        </p>
    </div>
    @auth('edit')
        <div class="col-xs-4">
            <div class="pull-right">
                <a class="btn btn-primary" href="{!! URL::route('events.create') !!}"><i class="fa fa-calendar"></i> {{ trans('events.new_event') }}</a>
            </div>
        </div>
    @endauth
</div>
@foreach($events as $event)
    <h2>{!! $event->title !!}</h2>
    <p>
        <strong>{!! $event->date->format(Config::get('date.php_display_format')) !!}</strong>
    </p>
    <p>
        <a class="btn btn-success" href="{!! URL::route('events.show', array('events' => $event->id)) !!}">
            <i class="fa fa-file-text"></i> {{ trans('events.show_event') }}
        </a>
        @auth('edit')
             <a class="btn btn-info" href="{!! URL::route('events.edit', array('events' => $event->id)) !!}">
                <i class="fa fa-pencil-square-o"></i> {{ trans('events.edit_event') }}
            </a> 
            <a class="btn btn-danger" href="#delete_event_{!! $event->id !!}" data-toggle="modal" data-target="#delete_event_{!! $event->id !!}">
                <i class="fa fa-times"></i> {{ trans('events.delete_event') }}
            </a>
        @endauth
    </p>
    <br>
@endforeach
{!! $links !!}
@stop

@section('bottom')
@auth('edit')
    @include('events.deletes')
@endauth
@stop
