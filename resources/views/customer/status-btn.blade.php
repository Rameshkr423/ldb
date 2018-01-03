@if(Route::currentRouteName() == 'dashboard')
<div class="row">
	<div class="approve-section clearfix">
		@if(empty($userDetails['output']['userTransactionId']) === false)
		<ul data-trans-id="{{$userDetails['output']['userTransactionId']}}">
			<li><a href="{{route('dashboard')}}">Cancel</a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="approve">Approve</button></a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="reject">Reject</button></a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="shortlist">Shortlist</button></a></li>
		</ul>
		@endif
	</div>
</div>
@endif