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

<h1>懶人包 >> {{ $history->history }}</h1>

	<div class="jumbotron text-center">
		<h4>{{ $history->history }}</h4>
		<p>
			發生時間: {{ $history->time }}<br>
		</p>
	</div>
@if(count($history->lists) > 0)
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<td>ID</td>
			<td>懶人包</td>
			<td>時間</td>
			</tr>
		</thead>

		<tbody>
		@foreach($history->lists as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->content }}</td>
				<td>{{ $value->time }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@else
	沒有事件<BR>
@endif
{{ link_to_route('ListCreate', '新增事件', array($history->id),array('class' => 'btn btn-small btn-success')) }}
</div>	
</body>
</html>