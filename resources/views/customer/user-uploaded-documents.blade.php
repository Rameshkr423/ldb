<?php $documents = array('Aadhar Document', 'Passport Document', 'Voter Id Document');
?>
<div id="user-uploaded-documents" class="tab-pane fade">
	<div class="row">
	<div class="col-sm-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>S. No</th>
						<th>Name of the Documents</th>
					</tr>
				</thead>
					<tbody>
						@if(empty($documents) === false)
							@foreach($documents as $key=>$value)
								<tr>
									<td>
										<span>{{ ++$key }}</span>
									</td>
									<td>
										<span>{{ $value }}</span>
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
	</div>	
	@include('customer.status-btn')
</div>
