@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">事件管理</a></li>
			<li><a href="#tab-meta-data" data-toggle="tab">Meta data</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Blog Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($history)){{ URL::to('admin/histories/' . $history->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
				<div class="form-group {{{ $errors->has('history') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="history">事件</label>
						<input class="form-control" type="text" name="history" id="history" value="{{{ Input::old('history', isset($history) ? $history->history : null) }}}" />
						{{{ $errors->first('history', '<span class="help-block">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post title -->

				<!-- Time -->
				<div class="form-group {{{ $errors->has('time') ? 'error' : '' }}}">
					<div class="col-md-12">
						<label class="control-label" for="time">發生時間</label><br>
						<input type="text" name="datetimepicker" id="datetimepicker" value="{{{ Input::old('datetimepicker', isset($history) ? $history->datetimepicker : null) }}}"/>
						{{{ $errors->first('datetimepicker', '<span class="help-block">:message</span>') }}}
					</div>					
				</div>					
				<!-- ./ Time -->

				<!-- Content -->
				<div class="form-group {{{ $errors->has('other_edit') ? 'has-error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="other_edit">是否開放他人編輯</label>
                        <input type='checkbox' name="other_edit">
						{{{ Input::old('other_edit', isset($history) ? $history->other_edit : null) }}}
						{{{ $errors->first('other_edit', '<span class="help-block">:message</span>') }}}
					</div>
				</div>
				<!-- ./ content -->
			</div>
			<!-- ./ general tab -->
			<BR>
			<BR>
			<!-- Meta Data tab -->
			<div class="tab-pane" id="tab-meta-data">
				<!-- Meta Title -->
				<div class="form-group {{{ $errors->has('meta-title') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="meta-title">Meta Title</label>
						<input class="form-control" type="text" name="meta-title" id="meta-title" value="{{{ Input::old('meta-title', isset($history) ? $history->meta_title : null) }}}" />
						{{{ $errors->first('meta-title', '<span class="help-block">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta title -->

				<!-- Meta Description -->
				<div class="form-group {{{ $errors->has('meta-description') ? 'error' : '' }}}">
					<div class="col-md-12 controls">
                        <label class="control-label" for="meta-description">Meta Description</label>
						<input class="form-control" type="text" name="meta-description" id="meta-description" value="{{{ Input::old('meta-description', isset($history) ? $history->meta_description : null) }}}" />
						{{{ $errors->first('meta-description', '<span class="help-block">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta description -->

				<!-- Meta Keywords -->
				<div class="form-group {{{ $errors->has('meta-keywords') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="meta-keywords">Meta Keywords</label>
						<input class="form-control" type="text" name="meta-keywords" id="meta-keywords" value="{{{ Input::old('meta-keywords', isset($history) ? $history->meta_keywords : null) }}}" />
						{{{ $errors->first('meta-keywords', '<span class="help-block">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta keywords -->
			</div>
			<!-- ./ meta data tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-12">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
