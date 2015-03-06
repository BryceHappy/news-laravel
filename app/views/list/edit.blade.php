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
<h1>編輯</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($lists, array('action' => array('HistoryListsController@update', $lists->id), 'method' => 'PUT')) }}
	{{ Form::hidden('history_id', $history_id) }}
	<div class="form-group">
		{{ Form::label('content', '事件內容') }}
		{{ Form::text('content', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('time', '發生時間') }}
		{{ Form::text('time', Input::old('time'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('pic_url', '參考網址') }}
		{{ Form::text('pic_url', Input::old('pic_url'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('ref_url', '照片網址') }}
		{{ Form::text('ref_url', Input::old('ref_url'), array('class' => 'form-control')) }}
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
