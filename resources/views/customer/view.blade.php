@extends('layouts.dashboard')

@section('content') 
<div class="flex-item col-sm-10 clearfix">
	<div class="row">
		<div class="ldb-container clearfix">
		@include('partials.user-nav')
		<div class="ldb-content clearfix">
			@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-block text-center alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					@if(is_array($message)) @foreach ($message as $m) {{ $m }} @endforeach
					@else {{ $message }} @endif
				</div>
			@endif
		</div>
		<div class="ldb-content clearfix">
			<div class="col-sm-12">
				<div class="tab-content">
					@include('customer.general-profile')
					@include('customer.business-profile')
					@include('customer.rule-engine')
					@include('customer.user-uploaded-documents')
					@include('customer.branch-verification-decision')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection