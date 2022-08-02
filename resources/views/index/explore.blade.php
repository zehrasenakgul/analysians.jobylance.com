@extends('layouts.app')

@section('content')




 <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Mainpage.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css')}}">


   
   
   
    <div class="Body-Container">
          <div class="SideNavbar">
            <div class="CurrentSession_Account">
               <img class="rounded-circle mr-2" src="{{Helper::getFile(config('path.avatar').auth()->user()->avatar)}}" width="60" height="60">
                <div class="CurrentSession_Account_Textbox">
                    <h5>{{auth()->user()->name}}</h5>
                    <a href="{{url(auth()->user()->username)}}"><span class="CurrentSession_ProfiliGoruntule">Profili Görüntüle</span></a>
                </div>
            </div>
            <div class="SideNavbar-Links">
                <a href="/" class="SideNavbar-Link">
                    <div class="SideNavbar-Link scrollhere">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Homepage.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName" style="color: #9531C0;">Anasayfa</span>
                    </div>
                </a>
                <a href="/gruplar" class="SideNavbar-Link">
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
                <a href="/dashboard" class="SideNavbar-Link" style="color: #9531C0;">
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
            <!---->
        <div class="WebpageContent">
            <div class="PageContent-Container">
                    <div class="SideNavbarDummy">
                    </div>
                <!-- CONTENT COMES HERE THROUGH THE SCRIPT -->
                <div class="MainpagePost-Container">
                    <div class="MainpagePosts-Header">
                        <h1>Anasayfa</h1>
                    </div>
                    <div class="Posts">


        @if (auth()->user()->verified_id == 'yes')
          @include('includes.form-post')
        @endif

          @if($updates->total() != 0)

            @php
          		$counterPosts = ($updates->total() - $settings->number_posts_show);
          	@endphp

          <div class="grid-updates position-relative" id="updatesPaginator">
              @include('includes.updates')
          </div>

        @else
          <div class="grid-updates position-relative" id="updatesPaginator"></div>

        <div class="my-5 text-center no-updates">
          <span class="btn-block mb-3">
            <i class="fa fa-photo-video ico-no-result"></i>
          </span>
        <h4 class="font-weight-light">{{trans('general.no_posts_posted')}}</h4>
        </div>

        @endif
        
        
           
                    </div>
                </div>
                    <div class="RightSide_Contents-Container">

                        <div class="SuggestedUsers-Container">
                            <h1>Sizin için önerilerimiz</h1>
                                <div class="SuggestedUsers">
                            



                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@if (session('noty_error'))
  <script type="text/javascript">
   swal({
     title: "{{ trans('general.error_oops') }}",
     text: "{{ trans('general.already_sent_report') }}",
     type: "error",
     confirmButtonText: "{{ trans('users.ok') }}"
     });
     </script>
@endif

@if (session('noty_success'))
<script type="text/javascript">
     swal({
       title: "{{ trans('general.thanks') }}",
       text: "{{ trans('general.reported_success') }}",
       type: "success",
       confirmButtonText: "{{ trans('users.ok') }}"
       });
       </script>
 @endif

 @if (session('success_verify'))
 <script type="text/javascript">
    swal({
      title: "{{ trans('general.welcome') }}",
      text: "{{ trans('users.account_validated') }}",
      type: "success",
      confirmButtonText: "{{ trans('users.ok') }}"
      });
      </script>
   @endif

   @if (session('error_verify'))
   <script type="text/javascript">
    swal({
      title: "{{ trans('general.error_oops') }}",
      text: "{{ trans('users.code_not_valid') }}",
      type: "error",
      confirmButtonText: "{{ trans('users.ok') }}"
      });
      </script>
   @endif


@endsection
