@extends('layouts.dashboard')

@section('content')
<div class="flex-item col-sm-10 clearfix">
	<div class="row">
		<div class="ldb-container clearfix">
		@include('partials.notifications')
		@include('partials.count')
		@include('partials.overall-data')
		@include('partials.line-chart-data')
		@include('partials.filter')
		<div class="col-sm-12">
			<table class="table table-striped idscore-table font-13">
				<thead>
					<tr>
						<th>Reference Number</th>
						<th>Name</th>
						<th>Application Start Date</th>
						<th>Age of Application</th>
						<th>Platform Number</th>
						<th>Branch Verification Decision</th>
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
								<td></span>Pilot</span></td>
								<td>
									<span class="text-red">
										@if(empty($collection['transactionStatus']) === false) 
											{{$collection['transactionStatus']}}
										@endif
									</span>
								</td>
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