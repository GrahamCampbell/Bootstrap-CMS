<form class="form-horizontal" action="{{ $form['url'] }}" method="{{ $form['method'] }}">

    {{ csrf_field() }}

    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">{{ trans('posts.post_title') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="{{ trans('posts.post_title') }}">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('summary')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="summary">{{ trans('posts.post_summary') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="summary" value="{!! Request::old('summary', $form['defaults']['summary']) !!}" type="text" class="form-control" placeholder="{{ trans('posts.post_summary') }}">
            {!! ($errors->has('summary') ? $errors->first('summary') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">{{ trans('posts.post_body') }}</label>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
            <textarea name="body" provide="markdown" type="text" class="form-control"  placeholder="{{ trans('posts.post_body') }}" rows="10">{!! Request::old('body', $form['defaults']['body']) !!}</textarea>
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
