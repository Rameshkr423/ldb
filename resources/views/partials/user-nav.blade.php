<div class="ldb-header clearfix">
	<div class="col-sm-2 text-center">
		<img class="user-logo" src="@if(empty($userDetails['facebook']['userDetails']['pictureUrl']) === false) {{{$userDetails['facebook']['userDetails']['pictureUrl']}}} @elseif(empty($userDetails['linkedIn']['liProfile']['pictureUrls']) === false && empty($userDetails['linkedIn']['liProfile']['pictureUrls'][0]) === false) {{{$userDetails['linkedIn']['liProfile']['pictureUrls'][0]}}} @elseif(empty($userDetails['gplus']['gpUserDetails']['pictureUrl']) === false) {{{$userDetails['gplus']['gpUserDetails']['pictureUrl']}}} @elseif(empty($userDetails['gplus']['gpUserDetails']['profileImage']) === false) {{{$userDetails['gplus']['gpUserDetails']['profileImage']}}} @else /img/person.jpeg @endif">
	</div>
	<div class="col-sm-10">
		<div class="user-details col-sm-10">
			<h2>
			@if(empty($userDetails['transactions']['user']['firstName']) === false && empty($userDetails['transactions']['user']['lastName']) === false)
				{{$userDetails['transactions']['user']['firstName']}} {{$userDetails['transactions']['user']['lastName']}}
			@endif
			 | Customer Score : <span class="text-green">
			@if(empty($userDetails['transactions']['score']['overallGrade']) === false)
				{{$userDetails['transactions']['score']['overallGrade']}}
			@endif
			 </span> | Status : 
			 @if(empty($userDetails['transactions']['transactionStatus']) === false)
			 	{{$userDetails['transactions']['transactionStatus']}}
			 @endif
			 <span class="text-red">
			 	
			 </span></h2>
			<p>
			@if(empty($userDetails['transactions']['user']['emailId']) === false)
				{{$userDetails['transactions']['user']['emailId']}} 
			@endif
			 | Reference Number : 
			 <span class="text-blue">
			 @if(empty($userDetails['transactions']['referenceNumber']) === false)
			 	{{$userDetails['transactions']['referenceNumber']}}
			 @endif
			  </span> | 
			 @if(empty($userDetails['transactions']['created_at']) === false)
			 @php
			 	$time = date("g:i a", strtotime($userDetails['transactions']['created_at']));
			 	$date = Carbon\Carbon::parse($userDetails['transactions']['created_at'])->format('d-m-Y');
			 @endphp
			 	{{$date}} {{$time}}
			 @endif
			  </p>
			<div class="social-connect-report">
				<span>
					<i class="icon-linkedin-circled ln-color"></i>
					@if(empty($userDetails['output']['generalProfile']['connections']['linkedin']) === false)
						<i class="icon-ok-circle text-green"></i>
					@endif
				</span>
				<span>
					<i class="icon-facebook-circled fb-color"></i>
					@if(empty($userDetails['facebook']['userDetails']['name']) === false)
						<i class="icon-ok-circle text-green"></i>
					@endif
				</span>
				<span>
					<i class="icon-google-plus-circle gplus-color"></i>
					@if(empty($userDetails['gplus']['gpUserDetails']['displayName']) === false)
						<i class="icon-ok-circle text-green"></i>
					@endif
				</span>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="ldb-tab-inner">
			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#general-info">GENERAL INFORMATION</a></li>
				@if(canAccess('rule-engine-view'))
				<li><a data-toggle="pill" href="#rule-englog">RULE ENGINE</a></li>
				@endif
				<li><a data-toggle="pill" href="#stablity">STABLITY</a></li>
				<li><a data-toggle="pill" href="#ability">ABILITY</a></li>
				<li><a data-toggle="pill" href="#indent">INTENT</a></li>
				<li><a data-toggle="pill" href="#contactabilty">CONTACTABILTY</a></li>
				<li><a data-toggle="pill" href="#id-score">ID SCORE</a></li>
				<li><a data-toggle="pill" href="#other">OTHER</a></li>
				@if(canAccess('json-view'))
					<li><a data-toggle="pill" href="#final-result">JSON RESULT</a></li>
				@endif
			</ul>
		</div>
	</div>
</div>