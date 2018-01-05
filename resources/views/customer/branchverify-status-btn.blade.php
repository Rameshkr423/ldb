<div class="row">
	<div class="approve-section clearfix">
		@if(empty($userDetails['output']['userTransactionId']) === false)
		<ul data-trans-id="{{$userDetails['output']['userTransactionId']}}">
			<li><a href="{{route('dashboard')}}">Cancel</a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="download">Download</button></a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="download">Pass Verification</button></a></li>
			<li><a href="#"><button class="btn btn-blue-inverse status-action" status-block="download">Fail Verification</button></a></li>
		</ul>
		@endif
	</div>
</div>