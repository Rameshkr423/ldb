@extends('layouts.dashboard')

@section('content')
<div class="flex-item col-sm-10 clearfix">
	<div class="row">
		<div class="ldb-container clearfix">
		
		@include('partials.count')
		@include('partials.totalanalysis')
		@include('partials.filter')
		@include('partials.line-chart-data')
		
		
	</div>
	<div>

		<span>Click here to see your branch details {!! Html::link(route('getLogin'), 'Login') !!}</span>
	</div>
</div>
@endsection