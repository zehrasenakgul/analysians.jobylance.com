@extends('layouts.app')

@section('content')
    <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Gruplar.css') }}">
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
                        <span class="SideNavbar-Link_LinkName">Anasayfa</span>
                    </div>
                </a>
                <a href="/gruplar" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Groups.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName"  style="color: #9531C0;">Gruplar</span>
                    </div>
                </a>
                <a href="/creators" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Analysianlar.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Analysisanslar</span>
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
       <div class="GroupsChatPage-Container">
        <!--Asıl grup ayarları bu editGrouptan yapılacak.önceden aşağıdaki groupsettings olan containerda yaparız diye planlamıştım ama düzenleme için ayrı screen gerektiğinden bu yenisini yaptım
        EDİT İÇİN -> EditGroup_Container    ama Grup bilgileri ve düzenleme ekranına giriş için ->  GroupSettings_Container
        -->
        <div class="EditGroup_Container">
            <div class="EditGroup-Header">
                <h1>GRUBU DÜZENLE</h1>
                <i id="closeEditScreen" class="fa-solid fa-xmark"></i>
            </div>
            <form action="" class="EditGroupForm">
                <div class="EditGrouForm_Inputs LabelledInput" id="editGroupPhoto_div">
                    <label for="EditProfilePictures"><div id="editGroupPhoto_btn">FOTOĞRAF YÜKLE</div></label>
                    <input type="file" name="EditProfilePictures" id="EditProfilePictures" style="visibility:hidden;">
                    <img id="newGroupPhoto" src="{{ asset('public/talha/assets/media/GroupPicture.png') }}" alt="">
                </div>
                <div class="EditGrouForm_Inputs LabelledInput">
                    <label for="EditGroupName">Grup Adı</label>
                    <input type="text" name="EditGroupName" id="EditGroupName">
                </div>
                <div class="EditGrouForm_Inputs LabelledInput">
                    <label for="editGroupDescription">Grup Açıklaması</label>
                    <textarea name="editGroupDescription" id="editGroupDescription" maxlength="250" cols="1" rows="1"></textarea>
                </div>
                <button type="submit" id="saveEditsBtn">AYARLARI KAYDET</button>
            </form>
        </div>
        <button class="Go2Groups">
            <i class="fa-solid fa-bars"></i>
        </button>
            <div class="Groups-Container">
                <div class="Groups-Header">
                    <img id="GroupsHeaderimg" src="{{ asset('public/talha/assets/media/GruplarHead.svg') }}" alt="">
                    <span class="headerimg_Mobile">GRUPLAR</span>
                </div>
                <div class="Groups">
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Boom Boom</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Longest Name for A Group Will be This</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                    <div class="Group" title="Berkay Buhlar">
                        <button type="submit">
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Group_ProfilePicture">
                                <span class="Group_Name">Elmalı Tech</span>
                            </div>
                            <div class="Group_UnreadMessages-Container">
                            <span class="Group_UnreadMessages_Count">3</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="ChatBox">
                <div class="Chatbox-Header">
                    <div class="ChatInfo-Container">
                        <div class="d-flex align-items-center" style="gap:1em;">
                            <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="CurrentChat_Group_ProfilePicture">
                            <div class="ChatInfo-txt">
                                <h3>Analysians</h3>
                                <span>#analysians</span>
                            </div>
                        </div>
                    </div>
                    <button id="GroupSettings_Btn"><i class="fa-solid fa-circle-info"></i></button>
                </div>
                <div class="Chat">
                    <div class="Messages_of_Date">
                        <div class="Chat_Message-Container">
                            <div class="Chat_Message_ProfilePicture-Container">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Chat_Message_ProfilePicture">
                            </div>
                            <div class="Chat_Message_Content-Container">
                                <div class="dropdown" id="messageSettings-Container">
                                    <button class="btn" id="messageSettings" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-menu stngs_menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Mesajı Kopyala</a>
                                      <a class="dropdown-item" href="#">Mesajı Benden Sil</a>
                                      <a class="dropdown-item" href="#">Mesajı Herkesten Sil</a>
                                    </div>
                                  </div>
                                <div class="Chat_Message-Content">
                                    <img class="Chat_Message_Img" style="display: none;" src="" alt="">
                                    <div class="Chat_Message_Text-Container">
                                        <span class="Chat_Message_Text">Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aperiam ea nobis, neque qui blanditiis repudiandae, illum, provident officia a itaque. Excepturi quis reiciendis autem! Itaque, consequatur. Ex eius itaque deserunt omnis voluptatum asperiores maiores, sit enim rerum, provident totam iste rem eos earum nemo error eligendi eum a accusantium. ipsum dolor sit amet consectetur, adipisicing elit. Aut, delectus.</span>
                                    </div>
                                </div>
                                <div class="Chat_Message_Voicemsg-Container">
                                    <audio src="" class="Chat_Message_Voicemsg"></audio>
                                </div>
                            </div>
                        </div>
                        <div class="Chat_Message-Container">
                            <div class="Chat_Message_ProfilePicture-Container">
                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt="" class="Chat_Message_ProfilePicture">
                            </div>
                            <div class="Chat_Message_Content-Container">
                                <div class="dropdown" id="messageSettings-Container">
                                    <button class="btn" id="messageSettings" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-menu stngs_menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Mesajı Kopyala</a>
                                      <a class="dropdown-item" href="#">Mesajı Benden Sil</a>
                                      <a class="dropdown-item" href="#">Mesajı Herkesten Sil</a>
                                    </div>
                                  </div>
                                <div class="Chat_Message-Content">
                                    <img class="Chat_Message_Img" src="{{ asset('public/talha/assets/media/LiveStream.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Chatbox_Inputs">
                    <div class="MediaInputs">
                            <label for="Media_Input" id="MediaInput"><i class="fa-solid fa-plus"></i></label>
                            <input type="file" hidden name="Media_Input" id="Media_Input">
                        <div class="MediaTypes_Container">

                        </div>
                    </div>
                    <div class="MessageInput-Container">
                        <textarea cols="3" name="messageInput" id="messageInput"></textarea>
                        <i id="emojiBtn"></i>
                    </div>  
                    <div class="SendMessage">
                        <button type="submit" id="SendMessage"><i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="GroupSettings_Container">
                <div class="GroupInfo_Container">
                    <div class="GroupInfo-Header">
                        <button id="GroupInfo_EditProfile"><i class="fa-solid fa-pen-to-square"></i></button>
                        <div class="GroupInfo-Header UpperSide">
                            <div class="Group_pp_Frame">
                              <img src="{{ asset('public/talha/assets/media/GroupPicture.png') }}" alt="" class="GroupProfilePicture">
                            </div>
                            <div class="GroupTitle_Cont">
                                <h4 class="GroupInfo_GroupName">Core Team</h4>
                            </div>
                            <span class="GroupInfo_CreatedBy">Created by Super Admin, <span class="GroupInfo_CreatedDate">01/01/01</span></span>
                        </div>
                        <div class="GroupInfo_Description_Section">
                            <h6>Açıklama :</h6>
                            <span class="GroupInfo_Description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non cumque error veritatis rerum quisquam ipsa nesciunt exercitationem ratione reiciendis harum!</span>
                        </div>
                    </div>  
                </div>
                <div class="twoTabContainer">
                    <div class="twoTabContainer_Tabs">
                        <div class="Tab activeTab" onclick="ChangeActivity(1)" id="UyelerTab_btn"><span>Üyeler</span></div>
                        <div class="Tab" onclick="ChangeActivity(2)" id="Medyalar_btn"><span>Medyalar</span></div>
                    </div>
                    <div class="MembersTab memberstab_open">
                        <div class="Member">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" style="width: 50px" alt="" class="MemberProfilePicture">
                                <div class="d-flex" style="flex-direction: column;">
                                    <span class="Member_Username">Berkay Buhlar</span>
                                    <span class="Member_Title">member</span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm member_options" type="button" data-toggle="dropdown" aria-expanded="false">
                                  ...
                                </button>
                                <div class="dropdown-menu stngs_menu">
                                    <a class="dropdown-item" href="#">Kullanıcı Admin Yap</a>
                                    <a class="dropdown-item" href="#">Kullanıcıyı Sil</a>
                                </div>
                              </div>
                        </div>
                            <div class="Member">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" style="width: 50px" alt="" class="MemberProfilePicture">
                                <div class="d-flex" style="flex-direction: column;">
                                    <span class="Member_Username">Berkay Buhlar</span>
                                    <span class="Member_Title">member</span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm member_options" type="button" data-toggle="dropdown" aria-expanded="false">
                                  ...
                                </button>
                                <div class="dropdown-menu stngs_menu">
                                    <a class="dropdown-item" href="#">Kullanıcı Admin Yap</a>
                                    <a class="dropdown-item" href="#">Kullanıcıyı Sil</a>
                                </div>
                              </div>
                        </div>
                        <div class="Member">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" style="width: 50px" alt="" class="MemberProfilePicture">
                                <div class="d-flex" style="flex-direction: column;">
                                    <span class="Member_Username">Berkay Buhlar</span>
                                    <span class="Member_Title">member</span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-sm member_options" type="button" data-toggle="dropdown" aria-expanded="false">
                                  ...
                                </button>
                                <div class="dropdown-menu stngs_menu">
                                    <a class="dropdown-item" href="#">Kullanıcı Admin Yap</a>
                                    <a class="dropdown-item" href="#">Kullanıcıyı Sil</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="MediaTab">
                        <div class="MediaTab_imgs">
                            <img src=".{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" class="rounded float-left" alt="...">
                            <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" class="rounded float-left" alt="...">
                            <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}" class="rounded float-left" alt="...">
                        </div>
                        <button id="MoreMedia">Daha Fazla Göster</button>
                    </div>
                    <!-- <div class="DocsTab">
                        <div class="DocsTab_imgs">
                            <img src="./assets/media/EgitimPicture.png" class="rounded float-left" alt="...">
                            <img src="./assets/media/EgitimPicture.png" class="rounded float-left" alt="...">
                            <img src="./assets/media/EgitimPicture.png" class="rounded float-left" alt="...">
                        </div>
                        <button id="MoreMedia">Daha Fazla Göster</button>
                    </div> -->
                </div>
                <div class="LastButtons">
                    <button>Grubu Sil</button>
                </div>
            </div>
       </div>
    </div>
</div>
    </div>
    <script src="{{ asset('public/talha/assets/js/Gruplar.js') }}"></script>
    <script src="{{ asset('public/talha/assets/js/HesapBilgilerim.js') }}"></script>
    <script src="{{ asset('public/talha/assets/js/SideNavbarPositioner.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>


@endsection