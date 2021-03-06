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

	@if(isset($last_time))

		{{ Form::hidden('last_time', $last_time ,  array('id' => 'last_time')) }}
	@else
		{{ Form::hidden('last_time', '',  array('id' => 'last_time')) }}
	@endif
	<div class="form-group">
		{{ Form::label('content', '事件內容') }}
		{{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('time', '發生時間') }}
		{{ Form::text('time', Input::old('time'), array('class' => 'form-control' )) }}
	</div>

	<div class="form-group">
		{{ Form::label('ref_url', '參考網址') }}
		{{ Form::text('ref_url', Input::old('ref_url'), array('class' => 'form-control')) }}
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

<script type="text/javascript">
	$('#time').val($('#last_time').val());
</script>	

</html>

