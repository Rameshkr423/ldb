<div id="general-info" class="tab-pane fade in active">
	<div class="row">
		@if(canAccess('personal-information'))
		<div class="col-sm-5">
			<div class="small-box">
				<div class="sb-header">
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
				<div class="sb-header">
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
		@if(canAccess('aadhaar-number'))
		<div class="col-sm-3">
			<div class="small-box">
				<div class="sb-header">
					<h5><b>Aadhaar Number</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent">
						<span class="grade">
							@if(empty($userDetails['output']['generalProfile']['networkDepth']) === false) 
								{{$userDetails['output']['generalProfile']['networkDepth']}}
							@else 
								NA
							@endif
						</span>
						<div class="network-depth">
							<div class="row">
								<div class="col-sm-4">
									<p>
										<i class="icon-linkedin-circled ln-color">
										</i> 
										@if(empty($userDetails['output']['generalProfile']['connections']['linkedin']) === false) 
											{{$userDetails['output']['generalProfile']['connections']['linkedin']}}@if($userDetails['output']['generalProfile']['connections']['linkedin'] >= 500)
												{{'+'}}
											@endif
										@endif
									</p>
								</div>
								<div class="col-sm-4">
									<p>
										<i class="icon-facebook-circled fb-color">
										</i>
										@if(empty($userDetails['output']['generalProfile']['connections']['facebook']) === false) 
											{{$userDetails['output']['generalProfile']['connections']['facebook']}}
										@endif
									</p>
								</div>
								<div class="col-sm-4">
									<p>
										<i class="icon-google-plus-circle gplus-color">						
										</i>
										@if(empty($userDetails['output']['generalProfile']['connections']['gplus']) === false) 
											{{$userDetails['output']['generalProfile']['connections']['gplus']}}
										@endif
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
	<!--<div class="row">
		<div class="col-sm-4">
			<div class="row">
				@if(canAccess('key-highlights'))
				<div class="col-sm-12">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Key Highlights</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent general-info">
								<p class="mg-bt-5">Breaks in Employement</p>
								<p class="grade-small text-green mg-bt-5">
									@if(empty($userDetails['output']['generalProfile']['breaksInEmplyment']) === false && strtolower($userDetails['output']['generalProfile']['breaksInEmplyment']) != 'not available')
										@if(strtolower($userDetails['output']['generalProfile']['breaksInEmplyment']) == 'yes')
											Yes
										@else
											No
										@endif
									@else 
										NA
									@endif
								</p>
								<p class="mg-bt-5">Breaks in Education</p>
								<p class="grade-small text-green mg-bt-5">
									@if(empty($userDetails['output']['generalProfile']['breaksInEducation']) === false && strtolower($userDetails['output']['generalProfile']['breaksInEducation']) != 'not available')
										@if(strtolower($userDetails['output']['generalProfile']['breaksInEducation']) == 'yes')
											Yes
										@else
											No
										@endif
									@else 
										NA
									@endif
								</p>
							</div>
						</div>
					</div>
				</div>
				@endif
				@if(canAccess('account-information'))
				<div class="col-sm-12">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Account Information</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent general-info">
								<p class="mg-bt-5">Highest balance</p>
								<p class="grade-small text-green mg-bt-5">
									@if(empty($userDetails['output']) === false && empty($userDetails['output']['generalProfile']['highestBalance']) === false && strtolower($userDetails['output']['generalProfile']['highestBalance']) != 'not available')
										Rs.{{$userDetails['output']['generalProfile']['highestBalance']}}
									@else
										NA
									@endif
								</p>
								<p class="mg-bt-5">Largest Credit</p>
								<p class="grade-small text-gold mg-bt-5">
									@if(empty($userDetails['output']['generalProfile']['largestCredit']) === false && strtolower($userDetails['output']['generalProfile']['largestCredit']) != 'not available')
										Rs.{{$userDetails['output']['generalProfile']['largestCredit']}}
									@else
										NA
									@endif
								</p>
							</div>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
		<div class="col-sm-8">
			<div class="row">
				@if(canAccess('employement-details'))
				<div class="col-sm-6">
					<div class="mid-box general-info-midbox">
						<div class="midbox-header clearfix">
							<div class="row">
								<div class="col-sm-12">
									<h5><b>Employement Details</b></h5>
								</div>
							</div>
						</div>
						<div class="midbox-content clearfix">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<p>Current Employer</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<p class="pull-right">
												<strong>
													@if(empty($userDetails['output']['generalProfile']['currentEmployer']) === false) 
														{{trim($userDetails['output']['generalProfile']['currentEmployer'])}}
													@endif
												</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<p>Past Employer</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<p class="pull-right">
												<strong>
													@if(empty($userDetails['output']['generalProfile']['pastEmployer']) === false) 
														{{trim($userDetails['output']['generalProfile']['pastEmployer'])}}
													@endif
												</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<p>Status of Current Employment</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<p class="pull-right">
												<strong>
													@if(empty($userDetails['output']['generalProfile']['currentEmployerStatus']) === false) 
														{{$userDetails['output']['generalProfile']['currentEmployerStatus']}}
													@endif
												</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<p>Employment Type</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<p class="pull-right">
												<strong>
													@if(empty($userDetails['output']['generalProfile']['employmentType']) === false) 
														{{$userDetails['output']['generalProfile']['employmentType']}}
													@endif
												</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<p>Date of Incorporation</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<p class="pull-right">
												<strong>
													@if(empty($userDetails['output']['generalProfile']['dateOfIncorporation']) === false) 
														{{$userDetails['output']['generalProfile']['dateOfIncorporation']}}
													@endif
												</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@if(canAccess('credit-report'))
				<div class="col-sm-6">
					<div class="mid-box general-info-midbox">
						<div class="midbox-header clearfix">
							<div class="row">
								<div class="col-sm-12">
									<h5><b>Credit Report</b></h5>
								</div>
							</div>
						</div>
						<div class="text-center">
							<h3>Equifax Score</h3>
							<p>
								@if(empty($userDetails['output']['generalProfile']['bureauReportDate']) === false)
									as of {{Carbon\Carbon::parse($userDetails['output']['generalProfile']['bureauReportDate'])->format('M d')}}th
								@else
									as of Jan 6th
								@endif
								
							</p>
							<p class="text-green">
								@if(empty($userDetails['output']['generalProfile']['bureauScore']) === false) 
									<?php $roundScore = $userDetails['output']['generalProfile']['bureauScore']/10;?>
									<div class="credit-score" data-val="{{$roundScore}}"></div>
									{{$userDetails['output']['generalProfile']['bureauScore']}}
								@endif points
							</p>
							<div id="line-progress-4"></div>
							<p class="text-green">Healthy Credit Score</p>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		@if(canAccess('wallet-user'))
			@if(empty($userDetails['output']['generalProfile']['mobileData']['walletUser']) === false && strtolower($userDetails['output']['generalProfile']['mobileData']['walletUser']) != 'not available')
			<div class="col-sm-4">
				<div class="small-box">
					<div class="sb-header">
						<h5><b>Wallet User</b></h5>
					</div>
					<div class="sb-content">
						<div class="sb-subcontent">
							<div class="col-sm-12">
								<span class="grade">
									@if(strtolower($userDetails['output']['generalProfile']['mobileData']['walletUser']) == 'yes')
										Yes
									@else
										No
									@endif
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
		@endif
		@if(canAccess('e-com-option'))
			@if(empty($userDetails['output']['generalProfile']['mobileData']['eCommOption']) === false && strtolower($userDetails['output']['generalProfile']['mobileData']['eCommOption']) != 'not available')
				<div class="col-sm-4">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Preferred E-com option</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent">
								<div class="col-sm-12">
									<span class="grade">
										@if(strtolower($userDetails['output']['generalProfile']['mobileData']['eCommOption']) == 'yes')
											Yes
										@else
											No
										@endif
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
		@if(canAccess('air-traveller'))
			@if(empty($userDetails['output']['generalProfile']['mobileData']['airTraveller']) === false && strtolower($userDetails['output']['generalProfile']['mobileData']['airTraveller']) != 'not available')
				<div class="col-sm-4">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Air Traveller</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent">
								<div class="col-sm-12">
									<span class="grade">
										@if(strtolower($userDetails['output']['generalProfile']['mobileData']['airTraveller']) == 'yes')
											Yes
										@else
											No
										@endif
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
	</div>
	<div class="row">
		@if(canAccess('service-disconnections'))
			@if(empty($userDetails['output']['intent']['serviceDisconnection']) === false && strtolower($userDetails['output']['intent']['serviceDisconnection']) != 'not available')
				<div class="col-sm-4">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Service Disconnections</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent">
								<div class="col-sm-12">
									<span class="grade">
										@if(strtolower($userDetails['output']['intent']['serviceDisconnection']) == 'yes')
											Yes
										@else
											No
										@endif
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
		@if(canAccess('associated-banks'))
			@if(empty($userDetails['output']['generalProfile']['mobileData']['associatedWithBanks']) === false && is_array($userDetails['output']['generalProfile']['mobileData']['associatedWithBanks']))
				<div class="col-sm-4">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Associated Banks</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent">
								<div class="col-sm-12">
									<span class="grade">
										<ul class="associated-banks">
											@foreach($userDetails['output']['generalProfile']['mobileData']['associatedWithBanks'] as $key=>$value)
												<li><button class="btn btn-blue-inverse">{{$value}}</button></li>
											@endforeach
										</ul>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
		@if(canAccess('low-balance-date'))
			@if(empty($userDetails['output']['generalProfile']['mobileData']['lowBalanceDate']) === false && strtolower($userDetails['output']['generalProfile']['mobileData']['lowBalanceDate']) != 'not available')
				<div class="col-sm-4">
					<div class="small-box">
						<div class="sb-header">
							<h5><b>Low Balance Date</b></h5>
						</div>
						<div class="sb-content">
							<div class="sb-subcontent">
								<div class="col-sm-12">
									<p class="font-16">
										On a Average over 3 months {{$userDetails['output']['generalProfile']['mobileData']['lowBalanceDate']}}th of every month
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
	</div>-->
	@include('customer.status-btn')
</div>