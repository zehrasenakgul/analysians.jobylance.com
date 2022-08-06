<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/DashboardMenuLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/HesapBilgilerim.css') }}">
</head>

<body>
    <div class="Body-Container">
        <div class="Navi-Container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline my-2 my-lg-0 searchbarform">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <li class="nav-item">
                    <a class="nav-link MobileBrandLogo"><img
                            src="{{ asset('public/talha/assets/media/BrandLogo.svg') }}" alt=""></a>
                </li>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link BrandLogoWeb"><img
                                    src="{{ asset('public/talha/assets/media/BrandLogo.svg') }}" alt=""></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 RightLinks">
                        <li class="nav-item active">
                            <a class="nav-link RightLink NavbarNotifications" href="#">
                                <img src="{{ asset('public/talha/assets/media/notificationbell.svg') }}"
                                    id="notificationbell" alt="">
                                <span class="CurrentSession_NotificationBadge">5</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <span class="nav-link RightLink NavbarProfile" href="#">
                                <img src="{{ asset('public/talha/assets/media/navbarpp.svg') }}"
                                    class="CurrentSession_ProfilePicture" alt="">
                                <span class="CurrentSession_Username NavbarProfileMenu">Kripto Ege</span>
                                <div class="CurrentSession_HesapBilgilerim">
                                    <div class="Header">
                                        <span>Hesap Bilgilerim</span>
                                        <div class="CloseCross">
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </div>
                                    <div class="CurrentSession_HesapBilgilerim_ProfilePicture-Container">
                                        <div class="dropdown">
                                            <button class="btn" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <img src="{{ asset('public/talha/assets/media/UploadImg.png') }}"
                                                    alt="" class="UploadImage">
                                            </button>
                                            <div class="dropdown-menu" id="PhotoDropdownMenu"
                                                aria-labelledby="dropdownMenuButton">
                                                <div class="dropdown-item photo_upload_component">
                                                    <label for="photo_upload" style="cursor: pointer;">Fotoğraf
                                                        Yükle</label>
                                                    <input type="file" name="photo_upload"
                                                        style="visibility: hidden;" id="photo_upload"
                                                        class="dropdown-item">
                                                </div>
                                                <a class="dropdown-item" href="#">Fotoğraf Sil</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="InputRow">
                                        <div class="LabelledInput">
                                            <label for="">Kullanıcı Adı</label>
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="LabelledInput">
                                            <label for="">Ad Soyad</label>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="InputRow">
                                        <div class="LabelledInput">
                                            <label for="">E-mail</label>
                                            <input type="email" name="" id="">
                                        </div>
                                        <div class="LabelledInput">
                                            <label for="">İl/İlçe</label>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="InputRow">
                                        <div class="LabelledInput">
                                            <label for="">Şifre</label>
                                            <input type="password" name="" id="">
                                        </div>
                                        <div class="LabelledInput">
                                            <label for="">Ülke</label>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="InputRow">
                                        <button type="submit">Düzenle</button>
                                    </div>
                                </div>
                            </span>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link RightLink" id="RightLink2" href="#">Çıkış Yap</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="SideNavbar-Links">
            <a href="{{ url('/') }}"class="SideNavbar-Link">
                <div class="SideNavbar-Link scrollhere">
                    <img src="{{ asset('public/talha/assets/media/SideNavbar/Homepage.png') }}" alt=""
                        class="SideNavbar-Link_Icon">
                    <span class="SideNavbar-Link_LinkName">Anasayfa</span>
                </div>
            </a>
            <a href="{{ url('/gruplar') }}" class="SideNavbar-Link">
                <div class="SideNavbar-Link">
                    <img src="{{ asset('public/talha/assets/media/SideNavbar/Groups.png') }}" alt=""
                        class="SideNavbar-Link_Icon">
                    <span class="SideNavbar-Link_LinkName">Gruplar</span>
                </div>
            </a>
            <a href="{{ url('/creators') }}" class="SideNavbar-Link">
                <div class="SideNavbar-Link">
                    <img src="{{ asset('public/talha/assets/media/SideNavbar/Analysianlar.png') }}" alt=""
                        class="SideNavbar-Link_Icon">
                    <span class="SideNavbar-Link_LinkName">Analysian'lar</span>
                </div>
            </a>
            @if (auth()->user()->verified_id == 'yes')
                <a href="/dashboard" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Dashboard.png') }}" alt=""
                            class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Dashboard</span>
                    </div>
                </a>
            @endif
            <a href="./Egitimler.html" class="SideNavbar-Link">
                <div class="SideNavbar-Link">
                    <img src="{{ asset('public/talha/assets/media/SideNavbar/Egitimler.png') }}" alt=""
                        class="SideNavbar-Link_Icon">
                    <span class="SideNavbar-Link_LinkName">Egitimler</span>
                </div>
            </a>
            <a href="./Destek.html" class="SideNavbar-Link">
                <div class="SideNavbar-Link">
                    <img src="{{ asset('public/talha/assets/media/SideNavbar/Destek.png') }}" alt=""
                        class="SideNavbar-Link_Icon">
                    <span class="SideNavbar-Link_LinkName">Destek</span>
                </div>
            </a>
        </div>
        <!---->
        <div class="WebpageContent">
            <div class="PageContent-Container">
                <div class="SideNavbarDummy">
                </div>
                <div class="DashboardMenu">
                    <h1 class="DashboardHeader">Dashboard</h1>
                    <div class="DashboardLinks">
                        <a class="DashboardLink" href="#">Profil Özetim</a>
                        <a class="DashboardLink" href="#">Kazançlarım</a>
                        <a class="DashboardLink" href="./Iceriklerim.html">İçeriklerim</a>
                        <a class="DashboardLink" href="./Indirimler.html">İndirimler</a>
                        <a class="DashboardLink" href="./HesapBilgilerim.html" style="color: #9531c0">Hesap
                            Bilgilerim</a>
                    </div>
                </div>
                <div class="DashboardMenuDummy" style="color: transparent">hey</div>
                <div class="HesapBilgilerim-Container">
                    <span class="HesapBilgilerim-Header">Hesap Bilgilerim</span>
                    <div class="ProfilePicture-Container">
                        <img src="{{ asset('public/talha/assets/media/HesabimPP.png') }}" alt=""
                            class="HesapBilgilerim_ProfilePicture">
                    </div>
                    <div class="HesapBilgilerim">
                        <div class="InputRow">
                            <div class="LabelledInput">
                                <label for="">Kullanıcı Adı</label>
                                <input type="text" placeholder="" name="" id=""
                                    class="HesapBilgilerim_Username">
                            </div>
                            <div class="LabelledInput">
                                <label for="">Doğum Tarihi</label>
                                <input type="date" placeholder="" name="" id=""
                                    class="HesapBilgilerim_Birthday">
                            </div>
                        </div>
                        <div class="LabelledInput">
                            <label for="">Ad Soyad</label>
                            <input type="text" placeholder="" name="" id=""
                                class="HesapBilgilerim_NameSurname">
                        </div>
                        <div class="LabelledInput">
                            <label for="">T.C No</label>
                            <input type="text" placeholder="" name="" id=""
                                class="HesapBilgilerim_TCKN">
                        </div>
                        <div class="InputRowQuiplet">
                            <div class="InputRow">
                                <div class="LabelledInput">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="" name="" id=""
                                        class="HesapBilgilerim_Email">
                                </div>
                                <div class="LabelledInput">
                                    <label for="">Telefon Numarası</label>
                                    <input type="text" placeholder="" name="" id=""
                                        class="HesapBilgilerim_TelNo">
                                </div>
                            </div>
                            <div class="InputRow">
                                <div class="LabelledInput">
                                    <label for="">Ülke</label>
                                    <input type="text" placeholder="" name="" id=""
                                        class="HesapBilgilerim_Country">
                                </div>
                                <div class="LabelledInput">
                                    <label for="">İl/İlçe</label>
                                    <input type="text" placeholder="" name="" id=""
                                        class="HesapBilgilerim_City/District">
                                </div>
                            </div>
                        </div>
                        <div class="LabelledInput">
                            <label for="">Adres</label>
                            <input type="text" placeholder="" name="" id=""
                                class="HesapBilgilerim_Adress">
                        </div>
                        <div class="InputRow">
                            <div class="LabelledInput">
                                <label for="">IBAN</label>
                                <input type="text" placeholder="" name="" id=""
                                    class="HesapBilgilerim_IBAN">
                            </div>
                            <div class="LabelledInput">
                                <label for="">Hesap Sahibi</label>
                                <input type="text" placeholder="" name="" id=""
                                    class="HesapBilgilerim_AccountOwnerNameSurname">
                            </div>
                        </div>
                    </div>
                    <div class="HesapBilgilerimButtons">
                        <button type="submit" id="SifreDegistirButtonu">Şifreni Değiştir</button>
                        <button type="submit" id="DuzenleButtonu">Düzenle</button>
                    </div>
                </div>
                <div class="ProfileBio-Container">
                    <div class="d-flex align-items-center profileinfo">
                        <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                            class="ProfileBio_ProfilePicture">
                        <div class="">
                            <h5 class="ProfileBio_Username">Kripto Ege</h5>
                            <span class="ProfileBio_UserTitle">Analysian</span>
                        </div>
                    </div>
                    <div class="ProfileBio">
                        <span>Ben Kimim?</span>
                        <p class="Biography">Lorem ipsum dolor sit, amet consectetur Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Harum ad nulla maxime maiores ea reprehenderit vel, voluptate
                            laboriosam excepturi eaque nobis vero animi quidem assumenda praesentium incidunt reiciendis
                            non optio voluptates. Excepturi molestias accusantium saepe. Reprehenderit quam, maxime
                            vitae cupiditate labore, eius possimus id at officiis autem magnam maiores dicta!
                            adipisicing elit. Alias quaerat, illum asperiores voluptas quas accusamus vel sint magni
                            veniam. Sapiente molestiae enim laborum vitae possimus earum deleniti ducimus impedit
                            aliquid, autem sunt. Ut asperiores iure numquam atque aliquid, illum repudiandae ex
                            inventore molestias rerum voluptas deserunt explicabo aut beatae dolorum?</p>
                    </div>
                    <div class="ProfileInteractions">
                        <span class="Followers_Amount">150 Üye Sayısı</span>
                        <span class="Likes_Amount">3500 Beğeni</span>
                    </div>
                    <div class="EditProfile">
                        <i class="fa-solid fa-gear"></i>
                        <span>Edit Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/talha/assets/js/HesapBilgilerim.js') }}"></script>
    <script src="{{ asset('public/talha/assets/js/SideNavbarPositioner.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
