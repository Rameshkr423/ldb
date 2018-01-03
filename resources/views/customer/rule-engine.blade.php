<div id="rule-englog" class="tab-pane fade">
	<div class="row">
		<div class="col-sm-4">
			<div class="small-box">
				<div class="sb-header">
					<h5><b>Overall Report</b></h5>
				</div>
				<div class="sb-content">
					<div class="sb-subcontent">
						<div class="col-sm-6">
							<?php $failedCount = 0; $passedCount = 0; $totalCount = 0;?>
							@if(empty($userDetails['ruleEngineResponse']) === false)
								@foreach($userDetails['ruleEngineResponse'] as $innerKey=>$innerValue)
									@if (empty($innerValue['status']) === false)
										@if(strtolower($innerValue['status']) == "fail")
											<?php $failedCount++; ?>
										@endif
										@if(strtolower($innerValue['status']) == "pass")
											<?php $passedCount++; ?>
										@endif
										<?php $totalCount++; ?>
									@endif
								@endforeach
								@if($failedCount > 0)
									<div class="col-sm-4">
										<span class="grade"><i class="icon-cancel-circled text-red"></i></span>
									</div>
									<div class="col-sm-4 rule-status-txt">
										<div class="text-red font-16" style="padding: 10px 30px;">Failed</div>
									</div>
								@elseif($passedCount == $totalCount)
									<div class="col-sm-4">
										<span class="grade"><i class="icon-ok-circle"></i></span>
									</div>
									<div class="col-sm-4 rule-status-txt">
										<div class="text-green font-16" style="padding: 10px 30px;">Passed</div>
									</div>
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<div class="rl-report">
								@if($failedCount > 0) 
									<span class="grade"> {{ $failedCount }} </span> 
								@else  
									<span class="grade"> {{ $passedCount }} </span> 
								@endif 
								/
								<span> {{ $totalCount }} </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="rl-log">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="col-sm-4">Criteria</th>
							<th class="col-sm-3">Output</th>
							<th class="col-sm-5">Reason</th>
						</tr>
					</thead>
					<tbody>
						@if($totalCount > 0)
							@foreach($userDetails['ruleEngineResponse'] as $key=>$value)
							<tr>
								<td><b>{{ $key }}</b></td>
								<td>
								@if (empty($value['status']) === false)
									@if(strtolower($value['status']) == "pass")
										<span class="text-green">{{ $value['status'] }}</span>
									@else
										<span class="text-red">{{ $value['status'] }}</span>
									@endif
								@endif
								</td>
								<td style="text-align: left !important;">
								<ul>
								@if(empty($value['message']) === false)
									@if(is_array($value['message']))
										@foreach($value['message'] as $innerKey=>$innerValue)
											@if(empty($innerValue) === false)
												@if (strpos($innerValue, 'Pass') !== false)
												<li>{{ str_replace(array("<b> Pass </b>","Pass"),"", $innerValue) }} <b> Pass </b></li>
												@elseif (strpos($innerValue, 'Fail') !== false)
												<li>{{ str_replace(array("<b> Fail </b>","Fail"), "", $innerValue) }} <b> Fail </b></li>
												@else
												<li> {{ $innerValue }} </li>
												@endif
											@endif
										@endforeach
									@else 
										<li>{{ $value['message'] }}</li>
									@endif
								@endif
								<ul>
								</td>
							</tr>
							@endforeach
						@else
						<tr>
							No Logs Found !
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@include('customer.status-btn')
</div>