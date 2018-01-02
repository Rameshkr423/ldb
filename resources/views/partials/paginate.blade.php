@if(empty($lastTransaction) === false)
	@if($page1 == 0 && count($collections) < 10)
	@else
	<div class="paginate col-sm-4 paginate-left">
	    <ul class="pager">
	    	<li class="@if($page1 == 0) disabled @endif"><a href="{{route(Route::currentRouteName(),['page' => $page1])}}" rel="prev">«</a></li> 
	    	<li class="@if(count($collections) < 10) disabled @endif"><a href="{{route(Route::currentRouteName(),['page' => $page2])}}" rel="next">»</a></li>
	    </ul>
	</div>
	@endif
@endif