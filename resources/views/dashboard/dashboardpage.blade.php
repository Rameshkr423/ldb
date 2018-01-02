@extends('layouts.dashboard')

@section('dummy')
	@include('partials.test')
@endsection

@section('content')
<div class="flex-item col-sm-10 clearfix">
	<div class="row">
		<div class="ldb-container clearfix">
		@include('partials.notifications')
		@include('partials.count')
		@include('partials.filter')
		<div class="col-sm-12">
			<table class="table table-striped idscore-table font-13">
				<thead>
					<tr>
						<th>Reference Number</th>
						<th>Customer Name</th>
						<th>Time stamp</th>
						<th>Overall Score</th>
						<th>Stability Score</th>
						<th>Intent Score</th>
						<th>ID Score</th>
						<th>Contactability Score</th>
						<th>Input Score</th>
						<th>Status</th>
						<th>Approve</th>
						<th>Reject</th>
						<th>Shortlist</th>
					</tr>
				</thead>
					<tbody>
					@if(count($collections) > 0)
						@foreach($collections as $key=>$collection)
							<tr data-trans-id="{{$collection['_id']}}" >
								<td>
									@if(empty($collection['yesBankRefKey']) === false)
										{{$collection['yesBankRefKey']}}
									@elseif(empty($collection['referenceNumber']) === false) 
										{{$collection['referenceNumber']}}
									@endif
								</td>
								<td>
									@if(empty($collection['user']['firstName']) === false && empty($collection['user']['lastName']) === false) 
										{!! Html::link(route('useredit', [ 'id' => $collection['_id']]), $collection['user']['fullName'],array('class' => 'a-color')) !!}
									@endif
								</td>
								<td>
									@if(empty($collection['created_at']) === false) 
										{{$collection['created_at']}}
									@endif
								</td>
								<td>
									@if(empty($collection['score']['overallGrade']) === false) 
										{{$collection['score']['overallGrade']}}
									@endif
								</td>
								<td>
									@if(empty($collection['score']['stabilityGrade']) === false) 
										{{$collection['score']['stabilityGrade']}}
									@endif
								</td>
								<td>
									@if(empty($collection['score']['intentGrade']) === false) 
										{{$collection['score']['intentGrade']}}
									@endif
								</td>
								<td>
									@if(empty($collection['score']['idGrade']) === false) 
										{{$collection['score']['idGrade']}}
									@endif
								</td>
								<td>
									@if(empty($collection['score']['contactibilityGrade']) === false) 
										{{$collection['score']['contactibilityGrade']}}
									@endif
								</td>
								<td>
									@if(empty($collection['is_auto']) === false) 
										{{{'Auto'}}}
									@else
										{{{'Manual'}}}
									@endif
								</td>
								<td>
									<span class="text-red">
										@if(empty($collection['transactionStatus']) === false) 
											{{$collection['transactionStatus']}}
										@endif
									</span>
								</td>
								<td></ins></span><a href="#"><span><i class="icon-ok-circle text-green font-16 status-action" status-block="approve"></i></span></a></td>
								<td><a href="#"><span><i class="icon-cancel-circled text-gray font-16 status-action" status-block="reject"></i></span></a></td>
								<td><a href="#"><span><i class="icon-pause-circled text-gold font-16 status-action" status-block="shortlist"></i></span></a></td>
							</tr>
						@endforeach
					@endif
					</tbody>
				</table>
			</div>
			@include('partials.paginate')
		</div>
	</div>
</div>
@endsection