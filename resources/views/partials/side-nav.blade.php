<div class="flex-item col-sm-2 clearfix ldb-tabs">
	<div class="row ldb-logo">
		<img src="/img/cm-logo.png">
	</div>
	<div class="row">
		<div class="ldb-main-tabs">
			<ul class="nav nav-pills">
				@if(canAccess('dashboard'))
				<li class="@if(Route::currentRouteName() == 'dashboard') active @endif"><a href="{{{ route('dashboard') }}}" class="@if(Route::currentRouteName() === 'dashboard') current @endif"><i class="icon-home-outline"></i>Home</a></li>
				@endif
				@if(canAccess('processed'))
				<li class="@if(Route::currentRouteName() == 'processed') active @endif"><a href="{{{ route('processed') }}}" class="@if(Route::currentRouteName() === 'processed') current @endif"><i class="icon-lightbulb"></i>Processed</a></li>
				@endif
				@if(canAccess('export'))
				<li class="@if(Route::currentRouteName() == 'export') active @endif"><a href="{{{ route('export') }}}" class="@if(Route::currentRouteName() === 'export') current @endif"><i class="icon-export"></i>Export</a></li>
				@endif
				@if(canAccess('upload'))
				<li class="@if(Route::currentRouteName() == 'upload') active @endif"><a href="{{route('upload')}}"><i class="icon-upload-cloud-outline"></i>Upload</a></li>
				@endif
				@if(canAccess('permissions'))
				<li class="@if(Route::currentRouteName() == 'permissions') active @endif"><a href="{{{ route('permissionlist') }}}"><i class="icon-upload-cloud-outline"></i>User Permissions</a></li>
				@endif
				@if(canAccess('roles'))
				<li class="@if(Route::currentRouteName() == 'roles') active @endif"><a href="{{{ route('rolelist') }}}"><i class="icon-upload-cloud-outline"></i>User Roles</a></li>
				@endif
				@if(canAccess('executives'))
				<li class="@if(Route::currentRouteName() == 'executives') active @endif"><a href="{{{ route('executivelist') }}}"><i class="icon-upload-cloud-outline"></i>Lender Executives</a></li>
				@endif
				<li><a href="{{{ route('logout') }}}"><i class="icon-logout"></i>Logout</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="contact-box">
			<div class="assistance">
				<p class="text-center">For assistance</p>
				<div class="media">
					<div class="media-left">
						<i class="icon-volume-control-phone"></i>
					</div>
					<div class="media-body media-middle">
						<p>Call us anytime</p>
						<p>+91 444224 0800</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<i class="icon-doc-text"></i>
					</div>
					<div class="media-body media-middle">
						<p>Learning Center</p>
					</div>
				</div>
				<button class="mailer"><i class=" icon-mail"></i> Product Manager</button>
			</div>
		</div>
	</div>
</div>