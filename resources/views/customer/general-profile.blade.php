<div id="general-info" class="tab-pane fade in active">
	<div class="row">
		@if(canAccess('personal-information'))
		<div class="col-sm-5">
			<div class="small-box">
				<div class="sb-header text-center ">
					<h5><b>Personal Information</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent general-info">
						<p>
							@if(empty($userDetails['transactions']['user']['firstName']) === false && empty($userDetails['transactions']['user']['lastName']) === false) 
							<label for="name">Name</label>
								{{$userDetails['transactions']['user']['firstName']}} {{$userDetails['transactions']['user']['lastName']}}
							@endif
						</p>
						<p>
							<label for="date-of-birth">Date of Birth</label>
						</p>
						<p>
							<label for="address">Address</label>
						</p>
						<p>
							<label for="tenure-of-residence">Tenure of residence at current address</label>
						</p>
						<p>
							<label for="existing-customer">Existing SBI customer</label>
						</p>
						<p>
							<label for="sbi-account-no">SBI Account Number</label>
						</p>
						<p>
							<label for="tenure-of-relationship">Tenure of relationship with SBI</label>
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
					<h5><b>SBI Account Number/CIF Number</b></h5>
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
					<h5><b>Other Information</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent">
						<div class="sb-subcontent general-info">
							<p>
								<label for="date-of-birth">Date of Birth</label>
							</p>
							<p>
								<label for="address">Address</label>
							</p>
							<p>
								<label for="tenure-of-residence">Tenure of residence at current address</label>
							</p>
							<p>
								<label for="existing-customer">Existing SBI customer</label>
							</p>
							<p>
								<label for="sbi-account-no">SBI Account Number</label>
							</p>
							<p>
								<label for="tenure-of-relationship">Tenure of relationship with SBI</label>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
	<div class="row">
		<div class="well well-sm center"> Know More >> </div>
	</div>	
	@include('customer.status-btn')
</div>