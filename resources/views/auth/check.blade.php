@guest
	@if (Route::has('login'))
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			</li>
		@endif

		@if (Route::has('register'))
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			</li>
		@endif
	@else
		<li class="nav-item dropdown" style="margin-top: -21px;">
			<a id="navbarDropdown" class="dropdown-toggle" role="button" data-toggle="dropdown">
				{{ Auth::user()->name }}
			</a>

			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
				<a style="width: 0px; height: 0px;" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</div>
		</li>
@endguest