<link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.css')}}">


<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.css')}}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('assets/js/jquery.datetimepicker.js')}}"></script>
<script src="{{asset('assets/js/jquery.datetimepicker.js')}}"></script>
 
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('history') }}">首頁</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('history') }}">全部場次</a></li>
		<li><a href="{{ URL::to('history/create') }}">新增場次</a>		
	</ul>
</nav>
