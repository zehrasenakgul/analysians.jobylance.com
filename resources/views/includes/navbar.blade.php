<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('public/talha/assets/css/Layout.css') }}">
<div class="Navi-Container">






    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="form-inline my-2 my-lg-0 searchbarform">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <div class="MobileBrandLogoContainer">
          <li class="nav-item">
            <a class="nav-link MobileBrandLogo"><img src="{{ asset('public/talha/assets/media/BrandLogo.svg')}}"  alt="/"></a>
          </li>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link BrandLogoWeb"><img src="{{ asset('public/talha/assets/media/BrandLogo.svg')}}" alt="/"></a>
          </li>
        </ul>

    	<ul class="navbar-nav ml-auto">
					@guest
					<!-- Login Register kısımları -->
					<li class="nav-item mr-1">
						<a @if (request()->is('/') && $settings->home_style == 0 || request()->route()->named('profile') || request()->is('creators') || request()->is('creators/*') || request()->is('category/*') || request()->is('p/*') || request()->is('blog') || request()->is('blog/post/*') || request()->is('shop') || request()->is('shop/product/*')) data-toggle="modal" data-target="#loginFormModal" @endif class="nav-link login-btn @if ($settings->registration_active == '0')  btn btn-main btn-primary pr-3 pl-3 @endif" href="{{$settings->home_style == 0 ? url('login') : url('/')}}">
							Giriş Yap
						</a>
					</li>

					@if ($settings->registration_active == '1')
					<li class="nav-item" >
						<a @if (request()->is('/') && $settings->home_style == 0 || request()->route()->named('profile') || request()->is('creators') || request()->is('creators/*') || request()->is('category/*') || request()->is('p/*') || request()->is('blog') || request()->is('blog/post/*') || request()->is('shop') || request()->is('shop/product/*')) data-toggle="modal" data-target="#loginFormModal" @endif class="toggleRegister nav-link btn btn-main pr-3 pl-3 btn-arrow btn-arrow-sm" href="{{$settings->home_style == 0 ? url('') : url('/')}}">
							Kayıt Ol
						</a>
					</li>
							<!-- Login Register kısımları bitiş-->
				@endif

			@else

				<!-- ============ Menu Mobile ============-->

				@if (auth()->user()->role == 'admin')
					<li class="nav-item dropdown d-lg-none mt-2 border-bottom">
						<a href="{{url('panel/admin')}}" class="nav-link px-2 link-menu-mobile py-1">
							<div>
								<i class="bi bi-speedometer2 mr-2"></i>
								<span class="d-lg-none">{{trans('admin.admin')}}</span>
							</div>
						</a>
					</li>
				@endif

				<li class="nav-item dropdown d-lg-none @if (auth()->user()->role != 'admin') mt-2 @endif">
					<a href="{{url(auth()->user()->username)}}" class="nav-link px-2 link-menu-mobile py-1 url-user">
						<div>
							<img src="{{Helper::getFile(config('path.avatar').auth()->user()->avatar)}}" alt="User" class="rounded-circle avatarUser mr-1" width="20" height="20">
							<span class="d-lg-none">{{ auth()->user()->verified_id == 'yes' ? trans('general.my_page') : trans('users.my_profile') }}</span>
						</div>
					</a>
				</li>

				@if (auth()->user()->verified_id == 'yes')
				<li class="nav-item dropdown d-lg-none">
					<a href="{{url('dashboard')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="bi bi-speedometer2 mr-2"></i>
							<span class="d-lg-none">{{ trans('admin.dashboard') }}</span>
						</div>
						</a>
				</li>

				<li class="nav-item dropdown d-lg-none">
					<a href="{{url('my/posts')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-feather mr-2"></i>
							<span class="d-lg-none">{{ trans('general.my_posts') }}</span>
						</div>
						</a>
				</li>
			@endif

			<li class="nav-item dropdown d-lg-none border-bottom">
				<a href="{{url('my/bookmarks')}}" class="nav-link px-2 link-menu-mobile py-1">
					<div>
						<i class="feather icon-bookmark mr-2"></i>
						<span class="d-lg-none">{{ trans('general.bookmarks') }}</span>
					</div>
				</a>
			</li>

			@if (auth()->user()->verified_id == 'yes' || $settings->referral_system == 'on' || auth()->user()->balance != 0.00)
				<li class="nav-item dropdown d-lg-none">
					<a class="nav-link px-2 link-menu-mobile py-1 balance">
						<div>
							<i class="iconmoon icon-Dollar mr-2"></i>
							<span class="d-lg-none balance">{{ trans('general.balance') }}: {{Helper::amountFormatDecimal(auth()->user()->balance)}}</span>
						</div>
					</a>
				</li>
				@endif

				@if ($settings->disable_wallet == 'on' && auth()->user()->wallet != 0.00 || $settings->disable_wallet == 'off')
					<li class="nav-item dropdown d-lg-none border-bottom">
						<a @if ($settings->disable_wallet == 'off') href="{{url('my/wallet')}}" @endif class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="iconmoon icon-Wallet mr-2"></i>
							{{ trans('general.wallet') }}: <span class="balanceWallet">{{Helper::userWallet()}}</span>
						</div>
						</a>
					</li>
				@endif

				@if (auth()->user()->verified_id == 'yes')
				<li class="nav-item dropdown d-lg-none">
					<a href="{{url('my/subscribers')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-users mr-2"></i>
							<span class="d-lg-none">{{ trans('users.my_subscribers') }}</span>
						</div>
					</a>
				</li>
				@endif

				<li class="nav-item dropdown d-lg-none">
					<a href="{{url('my/subscriptions')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-user-check mr-2"></i>
							<span class="d-lg-none">{{ trans('users.my_subscriptions') }}</span>
						</div>
					</a>
				</li>

					<li class="nav-item dropdown d-lg-none border-bottom">
						<a href="{{url('my/purchases')}}" class="nav-link px-2 link-menu-mobile py-1">
							<div>
								<i class="bi bi-bag-check mr-2"></i>
								<span class="d-lg-none">{{ trans('general.purchased') }}</span>
							</div>
						</a>
					</li>

				@if (auth()->user()->verified_id == 'no' && auth()->user()->verified_id != 'reject')
				<li class="nav-item dropdown d-lg-none">
					<a href="{{url('settings/verify/account')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-star mr-2"></i>
							<span class="d-lg-none">{{ trans('general.become_creator') }}</span>
						</div>
					</a>
				</li>
			@endif

				<li class="nav-item dropdown d-lg-none">
					<a href="{{auth()->user()->dark_mode == 'off' ? url('mode/dark') : url('mode/light')}}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-{{ auth()->user()->dark_mode == 'off' ? 'moon' : 'sun'  }} mr-2"></i>
							<span class="d-lg-none">{{ auth()->user()->dark_mode == 'off' ? trans('general.dark_mode') : trans('general.light_mode') }}</span>
						</div>
					</a>
				</li>

				<li class="nav-item dropdown d-lg-none mb-2">
					<a href="{{ url('logout') }}" class="nav-link px-2 link-menu-mobile py-1">
						<div>
							<i class="feather icon-log-out mr-2"></i>
							<span class="d-lg-none">{{ trans('auth.logout') }}</span>
						</div>
					</a>
				</li>
				<!-- =========== End Menu Mobile ============-->

                    		<!-- Navbarın aşağıya menü olarak oturan kısmı -->



				<li class="nav-item dropdown d-lg-block d-none">
					<a href="{{url('notifications')}}" class="nav-link px-2" title="{{ trans('general.notifications') }}">

						<span class="noti_notifications notify @if (auth()->user()->notifications()->where('status', '0')->count()) d-block @endif">
							{{ auth()->user()->notifications()->where('status', '0')->count() }}
							</span>

						<i class="far fa-bell icon-navbar"></i>
						<span class="d-lg-none align-middle ml-1">{{ trans('general.notifications') }}</span>
					</a>
				</li>
            		<!-- Navbarın aşağıya menü olarak oturan kısmı bitiş-->
				<li class="nav-item dropdown d-lg-block d-none">
					<a class="nav-link" href="#" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown">
						<img src="{{Helper::getFile(config('path.avatar').auth()->user()->avatar)}}" alt="User" class="rounded-circle avatarUser mr-1" width="28" height="28">
						<span class="d-lg-none">{{auth()->user()->first_name}}</span>

					</a>

				</li>
		<!-- Bizim yaptığımız çıkış yap butonu -->
			<li class="nav-item active">
            <a class="nav-link RightLink" id="RightLink2" href="/logout">Çıkış Yap</a>
          </li>

					@endguest

				</ul>



      </div>
    </nav>
  </div>


