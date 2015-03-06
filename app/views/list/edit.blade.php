<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

@include('layouts.history.topnav')
<h1>Edit {{ $history->history }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($history, array('action' => array('HistoriesController@update', $history->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('history', 'history') }}
		{{ Form::text('history', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('time', '發生時間') }}
		{{ Form::text('time', Input::old('time'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('other_edit', '是否開放其他人編輯？') }}
		{{ Form::select('other_edit', array('0' => '是', '1' => '否'), Input::old('other_edit'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('編輯', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
@include('layouts.bottomnav')
</html>
