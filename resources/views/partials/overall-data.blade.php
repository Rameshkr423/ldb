<div class="col-sm-12 total-data">
	<div class="row">
			<div class="bg-white clearfix">
				<div class="col-sm-10">
					<div class="row data-rating">
						<div class="col-sm-4">
							<p class="montserratbold">Total Application Recieved</p>
							<h1 class="text-blue total-circle-count">
								@php $circleCount = (empty($filterCount['pending']) === false ? $filterCount['pending'] :0) + (empty($filterCount['processed']) === false ? $filterCount['processed'] : 0); @endphp
								{{$circleCount}}
							</h1>
						</div>
						<div class="col-sm-2 text-center">
							<p class="circle-graph-text">Processed</p>
							<div id="processed-circle"><div class="sale-content"><div class="rate progress-circle processed-circle-count">
							@if(empty($filterCount['processed']) === false)
								{{$filterCount['processed']}}
							@else
								0
							@endif
							</div><div class="rate progress-percent">
							@php  
								if(empty($circleCount) === false) {
									$processedPercent = ($filterCount['processed']/$circleCount) * 100 ;
									$processedPercent = number_format($processedPercent, 2, '.', '');
								} else {
									$processedPercent = 0;
								}
								$processedProgress = empty($processedPercent) === false ? $processedPercent/100 : 0;
							@endphp
							</div></div></div>
							<div class="processed-circle-percent" data-val="{{$processedProgress}}"></div>
						</div>
						<div class="col-sm-2 text-center">
							<p class="circle-graph-text">Pending</p>
							<div id="pending-circle"><div class="sale-content"><div class="rate progress-circle pending-circle-count">
							@if(empty($filterCount['pending']) === false)
								{{$filterCount['pending']}}
							@else
								0
							@endif
							</div><div class="rate progress-percent">
							@php 
								if(empty($circleCount) === false) {
									$pendingPercent = ($filterCount['pending']/$circleCount) * 100 ;
									$pendingPercent = number_format($pendingPercent, 2, '.', '');
								} else {
									$pendingPercent = 0;
								}

								$pendingProgress = empty($pendingPercent) === false ? $pendingPercent/100 : 0;
							@endphp
							</div></div></div>
							<div class="pending-circle-percent" data-val="{{$pendingProgress}}"></div>
						</div>
						<div class="col-sm-2 text-center">
							<p class="circle-graph-text">Approved</p>
							<div id="approved-circle"><div class="sale-content"><div class="rate progress-circle approved-circle-count">
							@if(empty($filterCount['approved']) === false)
								{{$filterCount['approved']}}
							@else
								0
							@endif
							</div><div class="rate progress-percent">
							@php 
								if(empty($circleCount) === false) {
									$pendingPercent = ($filterCount['approved']/$circleCount) * 100 ;
									$pendingPercent = number_format($pendingPercent, 2, '.', '');
								} else {
									$pendingPercent = 0;
								}

								$pendingProgress = empty($pendingPercent) === false ? $pendingPercent/100 : 0;
							@endphp
								</div></div></div>
							<div class="approved-circle-percent" data-val="{{$pendingProgress}}"></div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
