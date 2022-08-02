@extends('layouts.app')

@section('title'){{ $user->hide_name == 'yes' ? $mediaTitle.$user->username : $mediaTitle.$user->name }} -@endsection
  @section('description_custom'){{$mediaTitle.$user->username}} - {{strip_tags($user->story)}}@endsection

  @section('css')
  <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Mainpage.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css')}}">
        <link rel="stylesheet" href="{{ asset('public/talha/assets/css/ProfiliGoruntule.css') }}">

  <meta property="og:type" content="website" />
  <meta property="og:image:width" content="200"/>
  <meta property="og:image:height" content="200"/>

  <!-- Current locale and alternate locales -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:locale:alternate" content="es_ES" />

  <!-- Og Meta Tags -->
  <link rel="canonical" href="{{url($user->username.$media)}}"/>
  <meta property="og:site_name" content="{{ $user->hide_name == 'yes' ? $user->username : $user->name }} - {{$settings->title}}"/>
  <meta property="og:url" content="{{url($user->username.$media)}}"/>
  <meta property="og:image" content="{{Helper::getFile(config('path.avatar').$user->avatar)}}"/>

  <meta property="og:title" content="{{ $user->hide_name == 'yes' ? $user->username : $user->name }} - {{$settings->title}}"/>
  <meta property="og:description" content="{{strip_tags($user->story)}}"/>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="{{Helper::getFile(config('path.avatar').$user->avatar)}}" />
  <meta name="twitter:title" content="{{ $user->hide_name == 'yes' ? $user->username : $user->name }}" />
  <meta name="twitter:description" content="{{strip_tags($user->story)}}"/>

  <script type="text/javascript">
      var profile_id = {{$user->id}};
      var sort_post_by_type_media = "{!!$sortPostByTypeMedia!!}";
  </script>
  @endsection

@section('content')


      <div class="SideNavbar">
            <div class="CurrentSession_Account">
               <img class="rounded-circle mr-2" src="{{Helper::getFile(config('path.avatar').auth()->user()->avatar)}}" width="60" height="60">
                <div class="CurrentSession_Account_Textbox">
                    <h5>{{auth()->user()->name}}</h5>
                    <a href="{{url(auth()->user()->username)}}"><span class="CurrentSession_ProfiliGoruntule" style="color: #9531C0;">Profili Görüntüle</span></a>
                </div>
            </div>
            <div class="SideNavbar-Links">
                <a href="/" class="SideNavbar-Link">
                    <div class="SideNavbar-Link scrollhere">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Homepage.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName" >Anasayfa</span>
                    </div>
                </a>
                <a href="./Gruplar.html" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Groups.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Gruplar</span>
                    </div>
                </a>
                            <a href="/creators" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Analysianlar.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Analysian'lar</span>
                    </div>
                </a>
                  @if (auth()->user()->verified_id == 'yes')
                <a href="/dashboard" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Dashboard.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Dashboard</span>
                    </div>
                </a>
                @endif
                <a href="./Egitimler.html" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Egitimler.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Egitimler</span>
                    </div>
                </a>
                <a href="./Destek.html" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Destek.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Destek</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="yeniContainer">
            <div class="jumbotron jumbotron-cover-user home m-0 position-relative" style="padding: @if ($user->cover != '') @if (request()->path() == $user->username) 240px @else 125px @endif @else 125px @endif 0; background: #505050 @if ($user->cover != '') url('{{Helper::getFile(config('path.cover').$user->cover)}}') no-repeat center center; background-size: cover; @endif">
  @if (auth()->check() && auth()->user()->status == 'active' && auth()->id() == $user->id)




    <div class="progress-upload-cover"></div>

    <form action="{{url('upload/cover')}}" method="POST" id="formCover" accept-charset="UTF-8" enctype="multipart/form-data">
      @csrf
    <input type="file" name="image" id="uploadCover" accept="image/*" class="visibility-hidden">
  </form>

  <button class="btn btn-cover-upload" id="coverFile" onclick="$('#uploadCover').trigger('click');">
    <i class="fa fa-camera mr-1"></i>  <span class="d-none d-lg-inline">{{trans('general.change_cover')}}</span>
  </button>
@endif
</div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="w-100 text-center py-4 img-profile-user">

          <div @if ($user->isLive() && auth()->check() && auth()->id() != $user->id) data-url="{{ url('live', $user->username) }}" @endif class="text-center position-relative @if ($user->isLive() && auth()->check() && auth()->id() != $user->id) avatar-wrap-live liveLink @else avatar-wrap @endif shadow @if (auth()->check() && auth()->id() != $user->id && Cache::has('is-online-' . $user->id) && $user->active_status_online == 'yes' || auth()->guest() && Cache::has('is-online-' . $user->id) && $user->active_status_online == 'yes') user-online-profile overflow-visible @elseif (auth()->check() && auth()->id() != $user->id && !Cache::has('is-online-' . $user->id) && $user->active_status_online == 'yes' || auth()->guest() && !Cache::has('is-online-' . $user->id) && $user->active_status_online == 'yes') user-offline-profile overflow-visible @endif">

            @if (auth()->check() && auth()->id() != $user->id && $user->isLive())
              <span class="live-span">{{ trans('general.live') }}</span>
              <div class="live-pulse"></div>
            @endif


            <div class="progress-upload">0%</div>

            @if (auth()->check() && auth()->user()->status == 'active' && auth()->id() == $user->id)

              <form action="{{url('upload/avatar')}}" method="POST" id="formAvatar" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
              <input type="file" name="avatar" id="uploadAvatar" accept="image/*" class="visibility-hidden">
            </form>

            <a href="javascript:;" class="position-absolute button-avatar-upload" id="avatar_file">
              <i class="fa fa-camera"></i>
            </a>
          @endif
            <img src="{{Helper::getFile(config('path.avatar').$user->avatar)}}" width="150" height="150" alt="{{$user->hide_name == 'yes' ? $user->username : $user->name}}" class="rounded-circle img-user mb-2 avatarUser @if (auth()->check() && auth()->id() != $user->id && $user->isLive()) border-0 @endif">
          </div><!-- avatar-wrap -->

          <div class="media-body">
            <h4 class="mt-1">
              {{$user->hide_name == 'yes' ? $user->username : $user->name}}

              @if ($user->verified_id == 'yes')
              <small class="verified" title="{{trans('general.verified_account')}}" data-toggle="tooltip" data-placement="top">
                <i class="bi bi-patch-check-fill"></i>
              </small>
            @endif

            @if ($user->featured == 'yes')
              <small class="text-featured" title="{{trans('users.creator_featured')}}" data-toggle="tooltip" data-placement="top">
              <i class="fas fa fa-award"></i>
            </small>
          @endif
          </h4>

            <p>
            <span>
              @if (! Cache::has('is-online-' . $user->id) && $user->hide_last_seen == 'no')
              <span class="w-100 d-block">
                <small>{{ trans('general.active') }}</small>
                <small class="timeAgo"data="{{ date('c', strtotime($user->last_seen ?? $user->date)) }}"></small>
               </span>
               @endif

              @if ($user->profession != '' && $user->verified_id == 'yes')
                {{$user->profession}}
              @endif
          </span>
            </p>

            @if (auth()->check() && auth()->id() != $user->id)
            <div class="text-center">
              <button type="button" class="btn e-none btn-link text-danger p-0 mr-2" data-toggle="modal" data-target="#reportCreator">
                <small><i class="fas fa-flag mr-1"></i> {{trans('Kullanıcıyı Bildir')}}</small>
              </button>

              @if (auth()->user()->isRestricted($user->id))
                <button type="button" class="btn e-none btn-link text-danger removeRestriction p-0" data-user="{{$user->id}}" id="restrictUser">
                  <small><i class="fas fa-ban mr-1"></i> {{trans('Engeli Kaldır')}}</small>
                </button>

              @else
                <button type="button" class="btn e-none btn-link text-danger p-0" data-user="{{$user->id}}" id="restrictUser">
                  <small><i class="fas fa-ban mr-1"></i> {{trans('Engelle')}}</small>
                </button>
              @endif
              
            </div>
          @endif

          </div><!-- media-body -->
        </div><!-- media -->

        @if ($user->verified_id == 'yes')
        <ul class="nav nav-profile justify-content-center nav-fill">

          <li class="nav-link @if (request()->path() == $user->username)active @endif navbar-user-mobile">
            <small class="btn-block sm-btn-size">{{$user->updates()->count()}}</small>
              <a href="{{request()->path() == $user->username ? 'javascript:;' : url($user->username)}}" title="{{trans('general.posts')}}"><i class="feather icon-file-text"></i> <span class="d-lg-inline-block d-none">{{trans('general.posts')}}</span></a>
            </li>

            <li class="nav-link @if (request()->path() == $user->username.'/photos')active @endif navbar-user-mobile">
              <small class="btn-block sm-btn-size">{{$user->media()->where('media.image', '<>', '')->count()}}</small>
              <a href="{{request()->path() == $user->username.'/photos' ? 'javascript:;' : url($user->username, 'photos')}}" title="{{trans('general.photos')}}"><i class="feather icon-image"></i> <span class="d-lg-inline-block d-none">{{trans('general.photos')}}</span></a>
            </li>

            <li class="nav-link @if (request()->path() == $user->username.'/videos')active @endif navbar-user-mobile">
              <small class="btn-block sm-btn-size">{{$user->media()->where('media.video', '<>', '')->orWhere('media.video_embed', '<>', '')->where('media.user_id', $user->id)->count()}}</small>
              <a href="{{request()->path() == $user->username.'/videos' ? 'javascript:;' : url($user->username, 'videos')}}" title="{{trans('general.video')}}"><i class="feather icon-video"></i> <span class="d-lg-inline-block d-none">{{trans('general.videos')}}</span></a>
              </li>

            <li class="nav-link @if (request()->path() == $user->username.'/audio')active @endif navbar-user-mobile">
              <small class="btn-block sm-btn-size">{{$user->media()->where('media.music', '<>', '')->count()}}</small>
              <a href="{{request()->path() == $user->username.'/audio' ? 'javascript:;' : url($user->username, 'audio')}}" title="{{trans('general.audio')}}"><i class="feather icon-mic"></i> <span class="d-lg-inline-block d-none">{{trans('general.audio')}}</span></a>
            </li>

            @if ($settings->shop || ! $settings->shop && $userProducts->count() != 0)
                <li class="nav-link @if (request()->path() == $user->username.'/shop')active @endif navbar-user-mobile">
                  <small class="btn-block sm-btn-size">{{$user->products()->whereStatus('1')->count()}}</small>
                  <a href="{{request()->path() == $user->username.'/shop' ? 'javascript:;' : url($user->username, 'shop')}}" title="{{trans('general.shop')}}"><i class="feather icon-shopping-bag"></i> <span class="d-lg-inline-block d-none">{{trans('general.shop')}}</span></a>
                </li>
          @endif

          @if ($user->media()->where('media.file', '<>', '')->count() != 0)
            <li class="nav-link @if (request()->path() == $user->username.'/files')active @endif navbar-user-mobile">
              <small class="btn-block sm-btn-size">{{$user->media()->where('media.file', '<>', '')->count()}}</small>
              <a href="{{request()->path() == $user->username.'/files' ? 'javascript:;' : url($user->username, 'files')}}" title="{{trans('general.files')}}"><i class="far fa-file-archive"></i> <span class="d-lg-inline-block d-none">{{trans('general.files')}}</span></a>
            </li>
          @endif

        </ul>
      @endif

      </div><!-- col-lg-12 -->
    </div><!-- row -->
  </div><!-- container -->

  @if ($user->verified_id == 'yes' && request('media') != 'shop')
  <div class="container py-4 pb-5">
    <div class="row">
      <div class="col-lg-4 mb-3">

        <button type="button" class="btn-arrow-expand btn btn-outline-primary btn-block mb-2 d-lg-none text-word-break font-weight-bold" type="button" data-toggle="collapse" data-target="#navbarUserHome" aria-controls="navbarCollapse" aria-expanded="false">
      		{{trans('users.about_me')}} <i class="fas fa-chevron-down ml-2"></i>
      	</button>

      <div class="sticky-top navbar-collapse collapse d-lg-block" id="navbarUserHome">
        <div class="card mb-3 rounded-large shadow-large">
          <div class="card-body">
            <h6 class="card-title">{{ trans('users.about_me') }}</h6>
            <p class="card-text position-relative">

              @if ($likeCount != 0 || $subscriptionsActive != 0)
              <span class="btn-block">
                @if ($likeCount != 0)
                <small class="mr-2"><i class="far fa-heart mr-1"></i> {{ $likeCount }} {{ __('general.likes') }}</small>
                @endif

                @if ($subscriptionsActive != 0 && $user->hide_count_subscribers == 'no')
                    <small><i class="feather icon-users mr-1"></i> {{ Helper::formatNumber($subscriptionsActive) }} {{ trans_choice('general.subscribers', $subscriptionsActive) }}</small>
                @endif
              </span>
            @endif

              @if (isset($user->country()->country_name) && $user->hide_my_country == 'no')
              <small class="btn-block">
                <i class="feather icon-map-pin mr-1"></i> {{$user->country()->country_name}}
              </small>
              @endif

              <small class="btn-block m-0 mb-1">
                <i class="far fa-user-circle mr-1"></i> {{ trans('general.member_since') }} {{ Helper::formatDate($user->date) }}
              </small>

              @if ($user->show_my_birthdate == 'yes')
                <small class="btn-block m-0 mb-1">
                  <i class="far fa-calendar-alt mr-1"></i> {{ trans('general.birthdate') }} {{ Helper::formatDate($user->birthdate) }} ({{ \Carbon\Carbon::parse($user->birthdate)->age }} {{ __('general.years') }})
                </small>
              @endif


            @if ($user->verified_id == 'yes')
              <span class="update-text">
                {!! Helper::checkText($user->story)  !!}
              </span>
            @endif
            </p>

              @if ($user->website != '')
                <div class="d-block mb-1 text-truncate">
                  <a href="{{$user->website}}" title="{{$user->website}}" target="_blank" class="text-muted share-btn-user"><i class="fa fa-link mr-1"></i> {{Helper::removeHTPP($user->website)}}</a>
                </div>
              @endif

              @if ($user->facebook != '')
                <a href="{{$user->facebook}}" title="{{$user->facebook}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-facebook mr-2"></i></a>
              @endif

              @if ($user->twitter != '')
                <a href="{{$user->twitter}}" title="{{$user->twitter}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-twitter mr-2"></i></a>
              @endif

              @if ($user->instagram != '')
                <a href="{{$user->instagram}}" title="{{$user->instagram}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-instagram mr-2"></i></a>
              @endif

              @if ($user->youtube != '')
                <a href="{{$user->youtube}}" title="{{$user->youtube}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-youtube mr-2"></i></a>
              @endif

              @if ($user->pinterest != '')
                <a href="{{$user->pinterest}}" title="{{$user->pinterest}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-pinterest-p mr-2"></i></a>
              @endif

              @if ($user->github != '')
                <a href="{{$user->github}}" title="{{$user->github}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-github mr-2"></i></a>
              @endif

              @if ($user->snapchat != '')
                <a href="{{$user->snapchat}}" title="{{$user->snapchat}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-snapchat mr-2"></i></a>
              @endif

              @if ($user->tiktok != '')
                <a href="{{$user->tiktok}}" title="{{$user->tiktok}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-tiktok mr-2"></i></a>
              @endif

              @if ($user->telegram != '')
                <a href="{{$user->telegram}}" title="{{$user->telegram}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-telegram mr-2"></i></a>
              @endif

              @if ($user->twitch != '')
                <a href="{{$user->twitch}}" title="{{$user->twitch}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-twitch mr-2"></i></a>
              @endif

              @if ($user->discord != '')
                <a href="{{$user->discord}}" title="{{$user->discord}}" target="_blank" class="text-muted share-btn-user"><i class="bi bi-discord mr-2"></i></a>
              @endif

              @if ($user->vk != '')
                <a href="{{$user->vk}}" title="{{$user->vk}}" target="_blank" class="text-muted share-btn-user"><i class="fab fa-vk mr-2"></i></a>
              @endif

              @if ($user->categories_id != '0' && $user->categories_id != '' && $user->verified_id == 'yes')
              <div class="w-100 mt-2">

              @foreach (Categories::where('mode','on')->orderBy('name')->get() as $category)
                @foreach ($categories as $categoryKey)
                  @if ($categoryKey == $category->id)
                  <a href="{{url('category', $category->slug)}}" class="button-white-sm mb-2">
                    #{{ Lang::has('categories.' . $category->slug) ? __('categories.' . $category->slug) : $category->name }}
                  </a>
                @endif
                @endforeach
            @endforeach

              </div>
            @endif
            
            
                <div class="Content_Header2">
        <img src="{{ asset('public/talha/assets/media/EgitimHead2.png') }}" alt="">
        <span>Gruplar</span>
    </div>
    <div class="Groups">
        <div class="Group">
            <img src="{{ asset('public/talha/assets/media/GroupPicture.png') }}" class="GroupPicture" alt="">
            <span class="GroupName">Kripto Ege Whatsapp</span>
        </div>
        <div class="Group">
            <img src="{{ asset('public/talha/assets/media/GroupPicture.png') }}" class="GroupPicture" alt="">
            <span class="GroupName">Kripto Ege Fan</span>
        </div>
        <div class="Group">
            <img src="{{ asset('public/talha/assets/media/GroupPicture.png') }}" class="GroupPicture" alt="">
            <span class="GroupName">Kriptoo</span>
        </div>
        
    </div>
    
    
    
     <div class="Content_Header">
        <img src="{{ asset('public/talha/assets/media/EgitimlerCam.png') }}" alt="">
        <span>Eğitimleri</span>
    </div>
    <div class="Contents">
        <div class="Content">
            <div class="CourseOwner_Info">
                <img src="{{ asset('public/talha/assets/media/CourseOwner.png') }}" alt="" class="CourseOwner_ProfilePicture">
                <span class="CourseOwner_Username">Kripto Ege</span>
            </div>
            <div class="TotalTimeBadge">156dk</div>
            <div class="CourseNameContainer">
                <span class="CourseOwner_CourseName">Kripto Paralarda Chain Sistemi</span>
            </div>
        </div>
        <div class="Content">
            <div class="Content">
                <div class="CourseOwner_Info">
                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="CourseOwner_ProfilePicture">
                    <span class="CourseOwner_Username">Kripto Ege</span>
                </div>
                <div class="TotalTimeBadge">156dk</div>
                <div class="CourseNameContainer">
                    <span class="CourseOwner_CourseName">Kripto Paralarda Chain Sistemi</span>
                </div>
            </div>
    
    
    
            
            
            
            
            
            
          </div><!-- card-body -->
        </div><!-- card -->


        </div><!-- navbar-collapse -->
      </div><!-- col-lg-4 -->


      </div><!-- row -->
    </div><!-- container -->
          <div class="col-lg-8 wrap-post">

        @if (auth()->check()
            && auth()->id() == $user->id
            && ! $userPlanMonthlyActive
            && auth()->user()->free_subscription == 'no'
            )
        <div class="alert alert-danger mb-3">
                 <ul class="list-unstyled m-0">
                   <li><i class="fa fa-exclamation-triangle"></i> {{trans('general.alert_not_subscription')}} <a href="{{url('settings/subscription')}}" class="text-white link-border">{{trans('general.activate')}}</a></li>
                 </ul>
               </div>
               @endif

        @if (auth()->check()
            && auth()->id() == $user->id
            && request()->path() == $user->username
            && auth()->user()->verified_id != 'reject'
            )
          @include('includes.form-post')
        @endif

        @if ($updates->count() == 0 && $findPostPinned->count() == 0)
            <div class="grid-updates"></div>

            <div class="my-5 text-center no-updates">
              <span class="btn-block mb-3">
                <i class="fa fa-photo-video ico-no-result"></i>
              </span>
            <h4 class="font-weight-light">{{trans('general.no_posts_posted')}}</h4>
            </div>
          @else

            @php
              $counterPosts = ($updates->total() - $settings->number_posts_show);
            @endphp

            @if (! request()->get('sort') && $updates->total() > $settings->number_posts_show || request()->get('sort'))
            <div class="w-100 d-flex @if (request()->get('sort') && request()->get('sort') <> 'oldest')justify-content-between @else justify-content-end @endif align-items-center mb-3 px-lg-0 px-3">

              @if (request()->get('sort') && request()->get('sort') <> 'oldest')
                <small>
                  <strong>{{ __('general.results') }} {{ $updates->total() }}</strong>
                </small>
              @endif

          
          </div>
        @endif

            <div class="grid-updates position-relative" id="updatesPaginator">

              @if ($findPostPinned && ! request('media'))
                @include('includes.updates', ['updates' => $findPostPinned])
              @endif

              @include('includes.updates')
            </div>
          @endif
      </div>
  @endif

  @if ($user->verified_id == 'yes' && request('media') == 'shop')
    <div class="container py-5">

      @if ($userProducts->count() != 0)
      <div class="@if (auth()->check() && auth()->user()->verified_id == 'yes' && $user->id == auth()->id())d-flex justify-content-between align-items-center @else d-block @endif mb-3 text-right">

        @if (auth()->check() && auth()->user()->verified_id == 'yes' && $user->id == auth()->id())
        <div>
          @if ($settings->digital_product_sale && ! $settings->custom_content)
            <a class="btn btn-primary" href="{{ url('add/product') }}">
              <i class="bi-plus"></i> <span class="d-lg-inline-block d-none">{{ __('general.add_product') }}</span>
            </a>

          @elseif (! $settings->digital_product_sale && $settings->custom_content)
            <a class="btn btn-primary" href="{{ url('add/custom/content') }}">
              <i class="bi-plus"></i> <span class="d-lg-inline-block d-none">{{ __('general.add_custom_content') }}</span>
            </a>

          @else
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addItemForm">
              <i class="bi-plus"></i> <span class="d-lg-inline-block d-none">{{ __('general.add_new') }}</span>
            </a>
          @endif
        </div>
      @endif

        <div>
          <i class="bi-filter-right mr-1"></i>

          <select class="ml-2 custom-select w-auto" id="filter">
              <option @if (! request()->get('sort')) selected @endif value="{{url($user->username).'/shop'}}">{{trans('general.latest')}}</option>
              <option @if (request()->get('sort') == 'oldest') selected @endif value="{{url($user->username).'/shop?sort=oldest'}}">{{trans('general.oldest')}}</option>
              <option @if (request()->get('sort') == 'priceMin') selected @endif value="{{url($user->username).'/shop?sort=priceMin'}}">{{trans('general.lowest_price')}}</option>
              <option @if (request()->get('sort') == 'priceMax') selected @endif value="{{url($user->username).'/shop?sort=priceMax'}}">{{trans('general.highest_price')}}</option>
              <option @if (request()->get('sort') == 'digital') selected @endif value="{{url($user->username).'/shop?sort=digital'}}">{{trans('general.digital_products')}}</option>
              <option @if (request()->get('sort') == 'custom') selected @endif value="{{url($user->username).'/shop?sort=custom'}}">{{trans('general.custom_content')}}</option>
            </select>
        </div>
      </div>
    @endif

      <div class="row">

        @if ($userProducts->count() != 0)

          @foreach ($userProducts as $product)
          <div class="col-md-4 mb-4">
            @include('shop.listing-products')
          </div><!-- end col-md-4 -->
          @endforeach

          @if ($userProducts->hasPages())
            <div class="w-100 d-block">
              {{ $userProducts->onEachSide(0)->appends(['sort' => request('sort')])->links() }}
            </div>
          @endif

        @else

          <div class="my-5 text-center no-updates w-100">
            <span class="btn-block mb-3">
              <i class="feather icon-shopping-bag ico-no-result"></i>
            </span>
          <h4 class="font-weight-light">{{trans('general.no_results_found')}}</h4>

          <div class="mt-3">
            @if ($settings->digital_product_sale && ! $settings->custom_content)
              <a class="btn btn-primary" href="{{ url('add/product') }}">
                <i class="bi-plus"></i> {{ __('general.add_product') }}
              </a>

            @elseif (! $settings->digital_product_sale && $settings->custom_content)
              <a class="btn btn-primary" href="{{ url('add/custom/content') }}">
                <i class="bi-plus"></i> {{ __('general.add_custom_content') }}
              </a>

            @else
              <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addItemForm">
                <i class="bi-plus"></i> {{ __('general.add_new') }}
              </a>
            @endif
          </div>

          </div>

        @endif
      </div>
    </div><!-- container -->

    @includeWhen(auth()->check() && auth()->user()->verified_id == 'yes', 'shop.modal-add-item')

  @endif


    @if (auth()->check() && auth()->id() != $user->id)
    <div class="modal fade modalReport" id="reportCreator" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title font-weight-light" id="modal-title-default"><i class="fas fa-flag mr-1"></i> {{trans('general.report_user')}}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i>
            </button>
          </div>
     <!-- form start -->
     <form method="POST" action="{{url('report/creator', $user->id)}}" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          <!-- Start Form Group -->
          <div class="form-group">
            <label>{{trans('admin.please_reason')}}</label>
              <select name="reason" class="form-control custom-select">
               <option value="spoofing">{{trans('admin.spoofing')}}</option>
                  <option value="copyright">{{trans('admin.copyright')}}</option>
                  <option value="privacy_issue">{{trans('admin.privacy_issue')}}</option>
                  <option value="violent_sexual">{{trans('admin.violent_sexual_content')}}</option>
                  <option value="spam">{{trans('general.spam')}}</option>
                  <option value="fraud">{{trans('general.fraud')}}</option>
                  <option value="under_age">{{trans('general.under_age')}}</option>
                </select>
                </div><!-- /.form-group-->
            </div><!-- Modal body -->

           <div class="modal-footer">
             <button type="button" class="btn border text-white" data-dismiss="modal">{{trans('admin.cancel')}}</button>
             <button type="submit" class="btn btn-xs btn-white sendReport ml-auto"><i></i> {{trans('general.report_user')}}</button>
           </div>

           </form>
          </div><!-- Modal content -->
        </div><!-- Modal dialog -->
      </div><!-- Modal reportCreator -->
    @endif

    @if (auth()->check() && auth()->id() != $user->id && ! $checkSubscription  && $user->verified_id == 'yes')

    @if ($user->free_subscription == 'no')
    <div class="modal fade" id="subscriptionForm" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-white shadow border-0">
              <div class="card-header pb-2 border-0 position-relative" style="height: 100px; background: {{$settings->color_default}} @if ($user->cover != '')  url('{{Helper::getFile(config('path.cover').$user->cover)}}') no-repeat center center @endif; background-size: cover;">

              </div>
              <div class="card-body px-lg-5 py-lg-5 position-relative">

                <div class="text-muted text-center mb-3 position-relative modal-offset">
                  <img src="{{Helper::getFile(config('path.avatar').$user->avatar)}}" width="100" alt="{{$user->hide_name == 'yes' ? $user->username : $user->name}}" class="avatar-modal rounded-circle mb-1">
                  <h6 class="font-weight-light">
                    {!! trans('general.subscribe_month', ['price' => '<span class="font-weight-bold">'.Helper::amountFormatDecimal($user->plan('monthly', 'price'), true).'</span>']) !!} {{trans('general.unlocked_content')}} {{$user->hide_name == 'yes' ? $user->username : $user->name}}
                  </h6>
                </div>

                @if ($updates->total() == 0 && $findPostPinned->count() == 0)
                  <div class="alert alert-warning fade show small" role="alert">
                    <i class="fa fa-exclamation-triangle mr-1"></i> {{ $user->first_name }} {{ trans('general.not_posted_any_content') }}
                  </div>
                @endif

                <div class="text-center text-muted mb-2">
                  <h5>{{trans('general.what_will_you_get')}}</h5>
                </div>

                <ul class="list-unstyled">
                  <li><i class="fa fa-check mr-2 @if (auth()->user()->dark_mode == 'on') text-white @else text-primary @endif"></i> {{trans('general.full_access_content')}}</li>
                  <li><i class="fa fa-check mr-2 @if (auth()->user()->dark_mode == 'on') text-white @else text-primary @endif"></i> {{trans('general.direct_message_with_this_user')}}</li>
                  <li><i class="fa fa-check mr-2 @if (auth()->user()->dark_mode == 'on') text-white @else text-primary @endif"></i> {{trans('general.cancel_subscription_any_time')}}</li>
                </ul>

                <div class="text-center text-muted mb-2 @if ($allPayment->count() == 1) d-none @endif">
                  <small><i class="far fa-credit-card mr-1"></i> {{trans('general.choose_payment_gateway')}}</small>
                </div>

                <form method="post" action="{{url('buy/subscription')}}" id="formSubscription">
                  @csrf

                  <input type="hidden" name="id" value="{{$user->id}}"  />
                  <input name="interval" value="monthly" id="plan-monthly" class="d-none" type="radio">

                  @foreach ($plans as $plan)
                    <input name="interval" value="{{ $plan->interval }}" id="plan-{{ $plan->interval }}" class="d-none" type="radio">
                  @endforeach

                  @foreach ($allPayment as $payment)

                    @php

                    if ($payment->recurrent == 'no') {
                      $recurrent = '<br><small>'.trans('general.non_recurring').'</small>';
                    } else if ($payment->id == 1) {
                      $recurrent = '<br><small>'.trans('general.redirected_to_paypal_website').'</small>';
                    } else {
                      $recurrent = '<br><small>'.trans('general.automatically_renewed').' ('.$payment->name.')</small>';
                    }

                    if ($payment->type == 'card' ) {
                      $paymentName = '<i class="far fa-credit-card mr-1"></i> '.trans('general.debit_credit_card').$recurrent;
                    } else if ($payment->id == 1) {
                      $paymentName = '<img src="'.url('public/img/payments', auth()->user()->dark_mode == 'off' ? $payment->logo : 'paypal-white.png').'" width="70"/> <small class="w-100 d-block">'.trans('general.redirected_to_paypal_website').'</small>';
                    } else {
                      $paymentName = '<img src="'.url('public/img/payments', $payment->logo).'" width="70"/>'.$recurrent;
                    }

                    @endphp

                    <div class="custom-control custom-radio mb-3">
                      <input name="payment_gateway" value="{{$payment->id}}" id="radio{{$payment->id}}" @if ($allPayment->count() == 1 && Helper::userWallet('balance') == 0) checked @endif class="custom-control-input" type="radio">
                      <label class="custom-control-label" for="radio{{$payment->id}}">
                        <span><strong>{!!$paymentName!!}</strong></span>
                      </label>
                    </div>

                    @if ($payment->name == 'Stripe' && ! auth()->user()->pm_type != '')
                      <div id="stripeContainer" class="@if ($allPayment->count() == 1 && $payment->name == 'Stripe')d-block @else display-none @endif">
                      <a href="{{ url('settings/payments/card') }}" class="btn btn-secondary btn-sm mb-3 w-100">
                        <i class="far fa-credit-card mr-2"></i>
                        {{ trans('general.add_payment_card') }}
                      </a>
                      </div>
                    @endif

                    @if ($payment->name == 'Paystack' && ! auth()->user()->paystack_authorization_code)
                      <div id="paystackContainer" class="@if ($allPayment->count() == 1 && $payment->name == 'Paystack')d-block @else display-none @endif">
                      <a href="{{ url('my/cards') }}" class="btn btn-secondary btn-sm mb-3 w-100">
                        <i class="far fa-credit-card mr-2"></i>
                        {{ trans('general.add_payment_card') }}
                      </a>
                      </div>
                    @endif

                  @endforeach

                  @if ($settings->disable_wallet == 'on' && Helper::userWallet('balance') != 0 || $settings->disable_wallet == 'off')
                  <div class="custom-control custom-radio mb-3">
                    <input name="payment_gateway" @if (Helper::userWallet('balance') == 0) disabled @endif value="wallet" id="radio0" class="custom-control-input" type="radio">
                    <label class="custom-control-label" for="radio0">
                      <span>
                        <strong>
                        <i class="fas fa-wallet mr-1 icon-sm-radio"></i> {{ __('general.wallet') }}
                        <span class="w-100 d-block font-weight-light">
                          {{ __('general.available_balance') }}: <span class="font-weight-bold mr-1">{{Helper::userWallet()}}</span>

                          @if (Helper::userWallet('balance') != 0 && $settings->wallet_format != 'real_money')
                            <i class="bi bi-info-circle text-muted" data-toggle="tooltip" data-placement="top" title="{{Helper::equivalentMoney($settings->wallet_format)}}"></i>
                          @endif

                          @if (Helper::userWallet('balance') == 0)
                          <a href="{{ url('my/wallet') }}" class="link-border">{{ __('general.recharge') }}</a>
                        @endif
                        </span>
                        <span class="w-100 d-block small">{{ trans('general.automatically_renewed_wallet') }}</span>
                      </strong>
                      </span>
                    </label>
                  </div>
                @endif

                  <div class="alert alert-danger display-none" id="error">
                      <ul class="list-unstyled m-0" id="showErrors"></ul>
                    </div>

                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" name="agree_terms" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>{{trans('general.i_agree_with')}} <a href="{{$settings->link_terms}}" target="_blank">{{trans('admin.terms_conditions')}}</a></span>
                    </label>
                  </div>

                  @if (auth()->user()->isTaxable()->count())
                  <ul class="list-group list-group-flush border-dashed-radius mt-3">
                  	@foreach (auth()->user()->isTaxable() as $tax)
                  		<li class="list-group-item py-1 list-taxes">
                  	    <div class="row">
                  	      <div class="col">
                  	        <small>{{ $tax->name }} {{ $tax->percentage }}% {{ trans('general.applied_price') }}</small>
                  	      </div>
                  	    </div>
                  	  </li>
                  	@endforeach
                  </ul>
                @endif

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4 w-100 subscriptionBtn" onclick="$('#plan-monthly').trigger('click');">
                      <i></i> {{trans('general.subscribe_month', ['price' => Helper::amountFormatDecimal($user->plan('monthly', 'price'), true)])}}
                    </button>

                    @if ($plans->count())
                      <a class="d-block my-3 btn-arrow-expand-bi" data-toggle="collapse" href="#collapseSubscriptionBundles" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="bi bi-box mr-1"></i> {{ trans('general.subscription_bundles') }} <i class="bi bi-chevron-down transition-icon"></i>
                      </a>

                      <div class="collapse" id="collapseSubscriptionBundles">
                        @foreach ($plans as $plan)
                          <button type="submit" class="btn btn-primary mt-2 w-100 subscriptionBtn" onclick="$('#plan-{{$plan->interval}}').trigger('click');">
                            <i></i> {{trans('general.subscribe_'.$plan->interval, ['price' => Helper::amountFormatDecimal($plan->price, true)])}}
                          </button>

                          @if (Helper::calculateSubscriptionDiscount($plan->interval, $user->plan('monthly', 'price'), $plan->price) > 0)
                            <small class="@if (auth()->user()->dark_mode == 'on') text-white @else text-success @endif subscriptionDiscount">
                              <em>{{ Helper::calculateSubscriptionDiscount($plan->interval, $user->plan('monthly', 'price'), $plan->price) }}% {{ trans('general.discount') }}  </em>
                            </small>
                          @endif

                        @endforeach
                      </div>

                    @endif

                    <div class="w-100 mt-2">
                      <button type="button" class="btn e-none p-0" data-dismiss="modal">{{trans('admin.cancel')}}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Modal Subscription -->
    @endif

    <!-- Subscription Free -->
    <div class="modal fade" id="subscriptionFreeForm" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-white shadow border-0">
              <div class="card-header pb-2 border-0 position-relative" style="height: 100px; background: {{$settings->color_default}} @if ($user->cover != '')  url('{{Helper::getFile(config('path.cover').$user->cover)}}') no-repeat center center @endif; background-size: cover;">

              </div>
              <div class="card-body px-lg-5 py-lg-5 position-relative">

                <div class="text-muted text-center mb-3 position-relative modal-offset">
                  <img src="{{Helper::getFile(config('path.avatar').$user->avatar)}}" width="100" alt="{{$user->hide_name == 'yes' ? $user->username : $user->name}}" class="avatar-modal rounded-circle mb-1">
                  <h6 class="font-weight-light">
                    {{trans('general.subscribe_free_content') }} {{$user->hide_name == 'yes' ? $user->username : $user->name}}
                  </h6>
                </div>

                @if ($updates->total() == 0 && $findPostPinned->count() == 0)
                  <div class="alert alert-warning fade show small" role="alert">
                    <i class="fa fa-exclamation-triangle mr-1"></i> {{ $user->first_name }} {{ trans('general.not_posted_any_content') }}
                  </div>
                @endif

                <div class="text-center text-muted mb-2">
                  <h5>{{trans('general.what_will_you_get')}}</h5>
                </div>

                <ul class="list-unstyled">
                  <li><i class="fa fa-check mr-2 text-primary"></i> {{trans('general.full_access_content')}}</li>
                  <li><i class="fa fa-check mr-2 text-primary"></i> {{trans('general.direct_message_with_this_user')}}</li>
                  <li><i class="fa fa-check mr-2 text-primary"></i> {{trans('general.cancel_subscription_any_time')}}</li>
                </ul>

                <div class="w-100 text-center">
                  <a href="javascript:void(0);" data-id="{{ $user->id }}" id="subscribeFree" class="btn btn-primary btn-profile mr-1">
                    <i class="feather icon-user-plus mr-1"></i> {{trans('general.subscribe_for_free')}}
                  </a>
                  <div class="w-100 mt-2">
                    <button type="button" class="btn e-none p-0" data-dismiss="modal">{{trans('admin.cancel')}}</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Modal Subscription Free -->
        </div>

  @endif
@endsection

@section('javascript')

@if (auth()->check() && auth()->id() == $user->id)
<script src="{{ asset('public/js/upload-avatar-cover.js') }}?v={{$settings->version}}"></script>
@endif

<script type="text/javascript">

@auth
$('.subsPayPal').on('click', function() {

  $(this).blur();
  var expiration = $(this).attr('data-expiration');
  swal({
    title: "{{ trans('general.unsubscribe') }}",
    text: "{{ trans('general.cancel_subscription_paypal') }} " + expiration,
    type: "info",
    confirmButtonText: "{{ trans('users.ok') }}"
    });
});

$('.subsCCBill').on('click', function() {

  $(this).blur();
  var expiration = $(this).attr('data-expiration');
  swal({
    html: true,
    title: "{{ trans('general.unsubscribe') }}",
    text: "{!! trans('general.cancel_subscription_ccbill', ['ccbill' => '<a href=\'https://support.ccbill.com/\' target=\'_blank\'>https://support.ccbill.com</a>']) !!} " + expiration,
    type: "info",
    confirmButtonText: "{{ trans('users.ok') }}"
    });
});
@endauth

 @if (session('noty_error'))
   		swal({
   			title: "{{ trans('general.error_oops') }}",
   			text: "{{ trans('general.already_sent_report') }}",
   			type: "error",
   			confirmButtonText: "{{ trans('users.ok') }}"
   			});
  		 @endif

  @if (session('noty_success'))
   		swal({
   			title: "{{ trans('general.thanks') }}",
   			text: "{{ trans('general.reported_success') }}",
   			type: "success",
   			confirmButtonText: "{{ trans('users.ok') }}"
   			});
  @endif

  $('.dropdown-menu.d-menu').on({
      "click":function(e){
        e.stopPropagation();
      }
  });

  @if (session('subscription_success'))
     swal({
       html:true,
       title: "{{ trans('general.congratulations') }}",
       text: "{!! session('subscription_success') !!}",
       type: "success",
       confirmButtonText: "{{ trans('users.ok') }}"
       });
    @endif

    @if (session('subscription_cancel'))
     swal({
       title: "{{ trans('general.canceled') }}",
       text: "{{ session('subscription_cancel') }}",
       type: "error",
       confirmButtonText: "{{ trans('users.ok') }}"
       });
    @endif

    @if (session('success_verify'))
    	swal({
    		title: "{{ trans('general.welcome') }}",
    		text: "{{ trans('users.account_validated') }}",
    		type: "success",
    		confirmButtonText: "{{ trans('users.ok') }}"
    		});
    	 @endif

    	 @if (session('error_verify'))
    	swal({
    		title: "{{ trans('general.error_oops') }}",
    		text: "{{ trans('users.code_not_valid') }}",
    		type: "error",
    		confirmButtonText: "{{ trans('users.ok') }}"
    		});
    	 @endif
</script>
@endsection
@php session()->forget('subscription_cancel') @endphp
@php session()->forget('subscription_success') @endphp
