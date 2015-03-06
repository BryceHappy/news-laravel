<!-- app/views/historys/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>

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
			<td>事件</td>
			<td>時間</td>
			</tr>
		</thead>

		<tbody>
		@foreach($lists->ticket as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->history }}</td>
				<td>{{ $value->time }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@else
	沒有售票！<BR>
@endif

<a class="btn btn-small btn-success" href="{{ URL::to('history/'.$lists->id.'/list/create') }}">新增事件</a>

</div>	
</body>
</html>