<div id="business-info" class="tab-pane fade in active">
	<div class="row">
		@if(canAccess('business-information'))
		<div class="col-sm-5">
			<div class="small-box">
				<div class="sb-header text-center ">
					<h5><b>Business Information</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent general-info">
						<p>
							@if(empty($userDetails['transactions']['user']['firstName']) === false && empty($userDetails['transactions']['user']['lastName']) === false) 
							<label for="name">Company Name</label>
								{{$userDetails['transactions']['user']['firstName']}} {{$userDetails['transactions']['user']['lastName']}}
							@endif
						</p>
						<p>
							<label for="date-of-birth">Type of Ownership</label>
						</p>
						<p>
							<label for="address">Date of Incorporation</label>
						</p>
						<p>
							<label for="tenure-of-residence">Nature of Business</label>
						</p>
						<p>
							<label for="existing-customer">Business Address</label>
						</p>
						<p>
							<label for="sbi-account-no">Shop and Establishment Certificate</label>
						</p>
						<p>
							<label for="tenure-of-relationship">Experience in line of Trade</label>
						</p>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if(canAccess('sbi-account-number'))
		<div class="col-sm-3">
			<div class="small-box">
				<div class="sb-header text-center">
					<h5><b>Business PAN</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent general-info">
						<p>
							@if(empty($userDetails['output']['generalProfile']['collegeName']) === false) 
								{{$userDetails['output']['generalProfile']['collegeName']}}
							@endif
							<span class="text-green pull-right">
								@if(empty($userDetails['output']['generalProfile']['collegeDegree']) === false)
									{{$userDetails['output']['generalProfile']['collegeDegree']}}
								@endif
								@if(empty($userDetails['output']['generalProfile']['collegeTier']) === false)
									Tier {{$userDetails['output']['generalProfile']['collegeTier']}}
								@endif
							</span>
						</p>
						<p>
							@if(empty($userDetails['output']['generalProfile']['pgCollegeName']) === false) 
								{{$userDetails['output']['generalProfile']['pgCollegeName']}}
							@endif
							<span class="text-green pull-right">
								@if(empty($userDetails['output']['generalProfile']['pgCollegeDegree']) === false)
									{{$userDetails['output']['generalProfile']['pgCollegeDegree']}}
								@endif
								@if(empty($userDetails['output']['generalProfile']['pgCollegeTier']) === false)
									Tier {{$userDetails['output']['generalProfile']['pgCollegeTier']}}
								@endif
							</span>
						</p>
						<p>
							@if(empty($userDetails['output']['generalProfile']['highSchool']) === false) 
								{{$userDetails['output']['generalProfile']['highSchool']}}
							<span class="text-gold pull-right">
								@if(empty($userDetails['output']['generalProfile']['schoolDegree']) === false) 
									{{$userDetails['output']['generalProfile']['schoolDegree']}}
								@else
								High school 
								@endif
							</span>
							@endif
						</p>
						<p>
							@if(empty($userDetails['output']['generalProfile']['highSchool']) === true && empty($userDetails['output']['generalProfile']['pgCollegeName']) === true && empty($userDetails['output']['generalProfile']['collegeName']) === true)
								<span class="text-green pull-right">
									NA
								</span>
							@endif
							
						</p>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if(canAccess('other-information'))
		<div class="col-sm-3">
			<div class="small-box">
				<div class="sb-header text-center">
					<h5><b>Income Information</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent">
						<div class="sb-subcontent general-info">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>	
	@include('customer.status-btn')
</div>