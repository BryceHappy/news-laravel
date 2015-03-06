<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
</head>
<body>

<div class="container">
	@include('layouts.history.topnav')
<h1>ALL History</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>懶人包</td>
			<td>時間</td>
			<td>是否開放編輯？</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($history as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td><a href="{{ URL::to('history/' . $value->id) }}"> {{ $value->history }}</a></td>
			<td>{{ $value->time }}</td>
			<td>
				@if ($value->other_edit == 0)
					是
				@else
					否
				@endif	
			</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /activities/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'history/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('history/' . $value->id) }}">Show this Nerd</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('history/' . $value->id . '/edit') }}">Edit this Nerd</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<?php echo $history->links(); ?>
</div>
</body>
</html>