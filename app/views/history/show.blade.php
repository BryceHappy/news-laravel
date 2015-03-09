<!-- app/views/historys/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

@include('layouts.history.topnav')

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

懶人包 @<h1> {{ $history->history }}</h1>

	<div class="jumbotron text-center">
		<h4>{{ $history->history }}</h4>
		<p>
			發生時間: {{ $history->time }}<br>
		</p>
	</div>
{{ link_to_route('ListCreate', '新增事件', array($history->id),array('class' => 'btn btn-small btn-success')) }}｜
<a class="btn btn-sm btn-info " href="{{ URL::to('show/' . $history->id) }}">編輯</a>	
@if(count($history->lists) > 0)
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<td width="70%">懶人包</td>
			<td width="14%">時間</td>
			<td width="5%">開放編輯</td>
			<td width="11%">Actions</td>
			</tr>
		</thead>

		<tbody>
		@foreach($history->lists as $key => $value)
			<tr>
				<td>{{ $value->content }}</td>
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
				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-sm btn-info " href="{{ URL::to('list/' . $value->id . '/edit') }}">編輯</a>

				<!-- delete the nerd (uses the destroy method DESTROY /activities/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'list/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('刪除', array('class' => 'btn btn-danger btn-sm')) }}
				{{ Form::close() }}

			</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@else
	沒有事件<BR>
@endif

</div>	
</body>
</html>