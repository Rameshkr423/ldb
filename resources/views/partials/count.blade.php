<div class="col-sm-12 total-data">
	<div class="row">
<!--<form class="form-inline" action="/action_page.php">
  <div class="form-group">
    <label for="start-date">Aplication Start Date</label>
    <input class="date-picker" type="text" id="start-date" name="start-date">
    <input class="date-picker" type="text" id="end-date" name="end-date">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>--> 

		<!--<div class="col-sm-7 ">
			<div class="bg-white clearfix">
				<div class="col-sm-2 date-display">
					<div class="trigger cursor-pointer">
						<input type="text" id="datepicker" style="visibility:hidden" class="date-picker-select"> 
						<p class="font-16"><p class="date-replace from-date">@php $day = \Carbon\Carbon::now(); @endphp
						{{$day->day}}</p></br>
						<div class="filter-from-date" data-value="{{$day->format('Y-m-d')}}" data-url="{{route('filtercount')}}"></div>
						<span class="font-10 month-replace from-month">{{config('api.months.'.$day->month)}} {{$day->year}}</span></p>
					</div>
					<div class="left-border-block">
						<p><p class="diff-days">7</p>
							<span class="diff-day">days</span></p>
					</div>
					<input type="text" id="datepickers" style="visibility:hidden" class="date-picker-select">
					<div class="triggers cursor-pointer">
						<p class="font-16"><p class="date-replace to-date">
						@php $week = \Carbon\Carbon::now()->subWeek(1); @endphp
						{{$week->day}}
						</p></br>
							<span class="font-10 to-month">{{config('api.months.'.$week->month)}} {{$week->year}}</span>
						</p>
					</div>	
				</div>
				<div class="col-sm-10">
					<div class="row data-rating">
						<div class="col-sm-4">
							<p class="montserratbold">Total Recieved</p>
							<h1 class="text-blue total-circle-count">
								@php $circleCount = (empty($filterCount['pending']) === false ? $filterCount['pending'] :0) + (empty($filterCount['processed']) === false ? $filterCount['processed'] : 0); @endphp
								{{$circleCount}}
							</h1>
							<p class="font-12">applications between this time period</p>
						</div>
						<div class="col-sm-4 text-center">
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
								{{$pendingPercent}}
							%</div></div></div>
							<div class="pending-circle-percent" data-val="{{$pendingProgress}}"></div>
						</div>
						<div class="col-sm-4 text-center">
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
								{{$processedPercent}}
							%</div></div></div>
							<div class="processed-circle-percent" data-val="{{$processedProgress}}"></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="col-sm-5">
			<div class="bg-white applications-data clearfix line-chart-height">
				<?php $total = (empty($count['firstMonth']) === false ? $count['firstMonth'] : 0) + (empty($count['secondMonth']) === false ? $count['secondMonth'] : 0) + (empty($count['thirdMonth']) === false ? $count['thirdMonth'] : 0)?>
				<p class="text-blue font-16">{{$total}}
				<span class="font-12 black-color">applications as of {{$day->day}}th {{config('api.months.'.$day->month)}} {{$day->year}}</span>
				<span class="pull-right"><a href="{{{route(Route::currentRouteName(), ['block' => 'resverse', 'date' =>$date['thirdMonth']->format('Y-m-d')])}}}"><i class="icon-left-open-big"></i></a><a href="{{route(Route::currentRouteName(), ['block' => 'forward', 'date' => $date['firstMonth']->format('Y-m-d')])}}"><i class="icon-right-open-big"></i></a></span>
				</p>
				<div><p>{{config('api.months.'.$date['firstMonth']->month)}}</p><p class="pull-right line-chart-count">
					@if(empty($count['firstMonth']) === false) 
						{{$count['firstMonth']}}
					@else
						0
					@endif
				</p></div>
				<?php $firstAvg = empty($total) === false ? ($count['firstMonth']/$total)*100 : 0?>
				<div id="line-progress-1" data-val="{{$firstAvg}}"></div>
				<div class="line-chart-top"><p>{{config('api.months.'.$date['secondMonth']->month)}}</p><p class="pull-right line-chart-count">
					@if(empty($count['secondMonth']) === false) 
						{{$count['secondMonth']}}
					@else
						0
					@endif
				</p></div>
				<?php $secondAvg = empty($total) === false ? ($count['secondMonth']/$total)*100 : 0?>
				<div id="line-progress-2" data-val="{{$secondAvg}}"></div>
				<div class="line-chart-top"><p>{{config('api.months.'.$date['thirdMonth']->month)}}</p><p class="pull-right line-chart-count">
					@if(empty($count['thirdMonth']) === false) 
						{{$count['thirdMonth']}}
					@else
						0
					@endif
				</p></div>
				<?php $thirdAvg = empty($total) === false ? ($count['thirdMonth']/$total)*100 : 0?>
				<div id="line-progress-3" data-val="{{$thirdAvg}}"></div>
			</div>
		</div>-->
	</div>
</div>