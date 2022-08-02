@extends('layouts.app')

@section('Analysianslar') {{$title}} -@endsection

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Analysianlar.css') }}">

</head>
<body>
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
                        <span class="SideNavbar-Link_LinkName" ">Anasayfa</span>
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
                        <span class="SideNavbar-Link_LinkName"style="color: #9531C0;">Analysian'lar</span>
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
    

<!---->
<div class="WebpageContent">
    <div class="PageContent-Container">
        <div class="SideNavbarDummy">
        </div>
        <div class="Analysians-Container">
            <div class="Analysians-Header">
                <span>Tüm Analysian'lar</span>
                <input placeholder="Analysian Ara" type="search" name="" id="AnalysianSearch">
            </div>
         
         <section class="section section-sm">
    <div class="analysiansContainer">
      <div class="row justify-content-center text-center mb-sm">
  
      </div>

<div class="row justify-content-center">




@if( $users->total() != 0 )
          <div class="col-md-9 mb-4">
            <div class="row">

              @foreach ($users as $response)
              <div class="col-md-4 mb-4">
                @include('includes.listing-creators')
              </div><!-- end col-md-4 -->
              @endforeach

              @if($users->hasPages())
                <div class="w-100 d-block">
                  {{ $users->onEachSide(0)->appends(['q' => request('q')])->links() }}
                </div>
              @endif
            </div><!-- row -->
          </div><!-- col-md-9 -->

        @else
          <div class="col-md-9">
            <div class="my-5 text-center no-updates">
              <span class="btn-block mb-3">
                <i class="fa fa-user-slash ico-no-result"></i>
              </span>
            <h4 class="font-weight-light">{{trans('Bir sonuç bulunamadı!')}}</h4>
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
         
            <div class="Pagination" id="Pagination">
                
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="{{ asset('public/talha/assets/js/HesapBilgilerim.js') }}"></script>
    <script src="{{ asset('public/talha/assets/js/SideNavbarPositioner.js') }}"></script>
    <script src="{{ asset('public/talha/assets/js/Analysianlar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
  
  
  
@endsection
