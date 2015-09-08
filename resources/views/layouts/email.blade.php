<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>{{ $subject }}</h2>
@section('content')
@show
<br>
<p>
{{ trans('globals.email_thanks_support') }}
</p>
</body>
</html>
