<div class="col-sm-12 total-data">
	<div class="row">
			<div class="bg-white clearfix">
				<div class="col-sm-10">
					<div class="row data-rating">
						<div class="col-sm-5">
							<h4>Non - Referral Cases</h4>
							<div class="bg-white applications-data clearfix line-chart-height">
								<?php $total = ''; ?>
								<div><p>Completed Application</p><p class="pull-right line-chart-count">
									@if(empty($count['firstMonth']) === false) 
										{{$count['firstMonth']}}
									@else
										0
									@endif
								</p></div>
								<?php $firstAvg = empty($total) === false ? ($count['firstMonth']/$total)*100 : 0?>
								<div id="line-progress-1" data-val="{{$firstAvg}}"></div>

								<div class="line-chart-top"><p>Processed</p><p class="pull-right line-chart-count">
									@if(empty($count['secondMonth']) === false) 
										{{$count['secondMonth']}}
									@else
										0
									@endif
								</p></div>
								<?php $secondAvg = empty($total) === false ? ($count['secondMonth']/$total)*100 : 0?>
								<div id="line-progress-2" data-val="{{$secondAvg}}"></div>

								<div class="line-chart-top"><p>Approved</p><p class="pull-right line-chart-count">
									@if(empty($count['thirdMonth']) === false) 
										{{$count['thirdMonth']}}
									@else
										0
									@endif
								</p></div>
								<?php $thirdAvg = empty($total) === false ? ($count['thirdMonth']/$total)*100 : 0?>
								<div id="line-progress-3" data-val="{{$thirdAvg}}"></div>

								<div class="line-chart-top"><p>Rejected</p><p class="pull-right line-chart-count">
									@if(empty($count['thirdMonth']) === false) 
										{{$count['thirdMonth']}}
									@else
										0
									@endif
								</p></div>
								<?php $thirdAvg = empty($total) === false ? ($count['thirdMonth']/$total)*100 : 0?>
								<div id="line-progress-3" data-val="{{$thirdAvg}}"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>