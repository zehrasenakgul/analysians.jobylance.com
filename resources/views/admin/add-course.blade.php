<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/LoggedInLayout.css">
    <link rel="stylesheet" href="./assets/css/MyFonts.css">
    <link rel="stylesheet" href="./assets/css/KursForm.css">
    <title>Document</title>
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
                    <a class="nav-link MobileBrandLogo"><img src="./assets/media/BrandLogo.svg" alt=""></a>
                </li>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link BrandLogoWeb"><img src="./assets/media/BrandLogo.svg" alt=""></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 RightLinks">
                        <li class="nav-item active">
                            <a class="nav-link RightLink NavbarNotifications" href="#">
                                <img src="./assets/media/notificationbell.svg" id="notificationbell" alt="">
                                <span class="CurrentSession_NotificationBadge">5</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <span class="nav-link RightLink NavbarProfile" href="#">
                                <img src="./assets/media/navbarpp.svg" class="CurrentSession_ProfilePicture"
                                    alt="">
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
                                                <img src="./assets/media/UploadImg.png" alt=""
                                                    class="UploadImage">
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
                <div class="KursForm-Container">
                    <div class="KursForm-Header">
                        <h1>KURS BİLGİLERİ</h1>
                    </div>
                    <div class="KursForm-Content">
                        <div class="LeftContainer">
                            <form action="" class="LeftContainer_Forms">
                                <div class="LabelledInput">
                                    <label for="CourseTitle_Input">Kurs Adı</label>
                                    <input type="text" placeholder="Kripto Piyasasında Ölçümler"
                                        name="CourseTitle_Input" id="CourseTitle_Input">
                                </div>
                                <div class="LabelledInput">
                                    <label for="Course_Description">Kurs Açıklaması</label>
                                    <textarea name="Course_Description" placeholder="Kurs içeriği açıklaması..." id="Course_Description"></textarea>
                                </div>
                                <div class="LeftContainer_Forms_Sections">
                                    <div class="Accordions">
                                        <div class="Accordion-Container" id="Accordion-Container1">
                                            <div class="Accordion-Header" onclick="expandAccordion(1)">
                                                <span class="Accordion_Section_Title">Course Overview</span>
                                                <button id="Delete_btn" onclick="deleteAccordion(1)"
                                                    type="button"><i class="fa-solid fa-trash-can"></i></button>
                                                <button type="button" id="accordion_expandToggle_btn_1"><i
                                                        class="fa-solid fa-caret-down"></i></button>
                                            </div>
                                            <div class="Accordion-Content-Container"
                                                id="Accordion-Content-Container_1">
                                                <ul class="Accordion-Content-List">
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="Accordion-Container" id="Accordion-Container2">
                                            <div class="Accordion-Header" onclick="expandAccordion(2)">
                                                <span class="Accordion_Section_Title">Course Overview</span>
                                                <button id="Delete_btn" onclick="deleteAccordion(2)"
                                                    type="button"><i class="fa-solid fa-trash-can"></i></button>
                                                <button type="button" id="accordion_expandToggle_btn_2"><i
                                                        class="fa-solid fa-caret-down"></i></button>
                                            </div>
                                            <div class="Accordion-Content-Container"
                                                id="Accordion-Content-Container_2">
                                                <ul class="Accordion-Content-List">
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="Accordion-Container" id="Accordion-Container3">
                                            <div class="Accordion-Header" onclick="expandAccordion(3)">
                                                <span class="Accordion_Section_Title">Course Overview</span>
                                                <button id="Delete_btn" onclick="deleteAccordion(3)"
                                                    type="button"><i class="fa-solid fa-trash-can"></i></button>
                                                <button type="button" id="accordion_expandToggle_btn_3"><i
                                                        class="fa-solid fa-caret-down"></i></button>
                                            </div>
                                            <div class="Accordion-Content-Container"
                                                id="Accordion-Content-Container_3">
                                                <ul class="Accordion-Content-List">
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="Accordion-Container" id="Accordion-Container4">
                                            <div class="Accordion-Header" onclick="expandAccordion(4)">
                                                <span class="Accordion_Section_Title">Course Overview</span>
                                                <button id="Delete_btn" onclick="deleteAccordion(4)"
                                                    type="button"><i class="fa-solid fa-trash-can"></i></button>
                                                <button type="button" id="accordion_expandToggle_btn_4"><i
                                                        class="fa-solid fa-caret-down"></i></button>
                                            </div>
                                            <div class="Accordion-Content-Container"
                                                id="Accordion-Content-Container_4">
                                                <ul class="Accordion-Content-List">
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>
                                                    <a href="">
                                                        <li class="accordionContent">
                                                            <span class="contentTitle">Intro</span>
                                                            <span class="contentDuration">8m 24s</span>
                                                        </li>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Accordion-Container">
                                        <button type="button">Bölüm Ekle</button>
                                    </div>
                                    <div class="New-Accordion-Container">
                                        <div class="Inputs_for_NewAccordion">
                                            <div class="LabelledInput">
                                                <label for="New_Section_Name">Yeni Bölüm Adı</label>
                                                <input type="text" name="New_Section_Name" id="New_Section_Name">
                                            </div>
                                            <div class="LabelledInput createSectionContent">
                                                <label for="New_accordionContent_title">İçerik Adı</label>
                                                <input type="text" name="New_accordionContent_title"
                                                    id="New_accordionContent_title">
                                                <label for="New_accordionContent_files">İçerik Dosyası</label>
                                                <input type="file" name="New_accordionContent_files"
                                                    id="New_accordionContent_files">
                                                <div class="d-flex" style="gap: 1em;">
                                                    <div id="add_accordionContent">İçeriği Ekle</div>
                                                    <div id="remove_accordionContent">İçeriği Sil</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 id="PreviewText">Preview</h5>
                                    <div class="Accordion-Container accordionPreview">
                                        <div class="Accordion-Header" onclick="expandAccordion(-1)">
                                            <span class="Accordion_Section_Title Title_Preview">Course Overview</span>
                                            <button type="button" id="accordion_expandToggle_btn_-1"><i
                                                    class="fa-solid fa-caret-down"></i></button>
                                        </div>
                                        <div class="Accordion-Content-Container" id="Accordion-Content-Container_-1">
                                            <ul class="Accordion-Content-List" id="Accordion-Content-List_-1">

                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="saveAccordion">
                                        Bölümü Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="RightContainer">
                            <div class="Options-Container">
                                <h3>Options</h3>
                                <div class="Options">
                                    <div class="LabelledInput">
                                        <label for="">Kategori</label>
                                        <select class="text-white border-0" name="category" id="">
                                            <option value="">Kripto</option>
                                            <option value="">Döviz</option>
                                            <option value="">NFT</option>
                                        </select>
                                    </div>
                                    <div class="LabelledInput">
                                        <label for="">Fiyat</label>
                                        <input type="text">
                                    </div>
                                    <div class="LabelledInput">
                                        <label for="">Etiketler</label>
                                        <select multiple class="text-white border-0" name="tags" id="">
                                            <option value="">Kripto</option>
                                            <option value="">Döviz</option>
                                            <option value="">NFT</option>
                                            <option value="">Kripto</option>
                                            <option value="">Döviz</option>
                                            <option value="">NFT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="Course_Intro_Video-Container">
                                <h3>Video</h3>
                                <video id="my-video" class="video-js Course_Intro_Video vjs-big-play-centered"
                                    controls preload="auto" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                    <source src="./assets/media/canli.mp4" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
                                    </p>
                                </video>
                                <div class="LabelledInput">
                                    <label for="">URL</label>
                                    <input type="text" name="url" id="">
                                </div>
                                <div class="LabelledInput">
                                    <label for="Course_Intro_Video_upload">Video Yükle</label>
                                    <input type="file" name="Course_Intro_Video_upload"
                                        id="Course_Intro_Video_upload">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="manage_Course">
                        <form action="" class="manage_Course_form">
                            <button type="submit">KURSU KAYDET</button>
                            <button type="submit">KURSU SİL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/KursForm_v1.js"></script>
    <script src="./assets/js/HesapBilgilerim.js"></script>
    <script src="./assets/js/SideNavbarPositioner.js"></script>
    <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
