<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>   
</head>
<body>
<div class="container">
	@include('layouts.history.topnav')
<h1>Create </h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'list')) }}
	{{ Form::hidden('history_id', $history_id) }}
	<div class="form-group">
		{{ Form::label('content', '事件內容') }}
		{{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('time', '發生時間') }}
		{{ Form::text('time', Input::old('time'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('pic_url', '照片網址') }}
		{{ Form::text('pic_url', Input::old('pic_url'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('other_edit', '是否開放其他人編輯？') }}
		{{ Form::select('other_edit', array('0' => '是', '1' => '否'), Input::old('other_edit'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('建立懶人包', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
	@include('layouts.bottomnav')
</html>

