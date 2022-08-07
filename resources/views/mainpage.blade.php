@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css') }}">
        <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Mainpage.css') }}">
        <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css') }}">
    </head>

    <body>
        <div class="Body-Container">
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
                    <!-- CONTENT COMES HERE THROUGH THE SCRIPT -->
                    <div class="MainpagePost-Container">
                        <div class="MainpagePosts-Header">
                            <h1>Anasayfa</h1>
                        </div>
                        <div class="Posts">
                            <div class="CreatePost-Container Post">
                                <div class="CreatePost">
                                    <div class="PostOwnerInfo">
                                        <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                            class="PostOwner_ProfilePicture">
                                    </div>
                                    <textarea placeholder="Analysians üyeleri için içerik yazın..." name="" id="PostContentTextInput" cols="80"
                                        maxlength="250" style="resize: none;padding: 1em;" rows="3"></textarea>
                                    <span class="CharacterInput_Counter">250</span>
                                </div>
                                <div class="CreatePost_BottomContainer">
                                    <div class="Alternative_Inputs">
                                        <div class="imageUpload" title="Image/Video">
                                            <label for="image_Upload">
                                                <i class="fa-solid fa-file-image"></i>
                                            </label>
                                            <input type="file" hidden name="image_Upload" id="image_Upload">
                                        </div>
                                        <div class="LiveStreamStart" title="Live">
                                            <button type="submit">
                                                <span>LIVE <i class="fa-solid fa-circle"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="CreatePost_Btn">
                                        <button type="submit">
                                            Gönder
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="Post">
                                <div class="PostOwnerInfo">
                                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                        class="PostOwner_ProfilePicture">
                                    <div class="PostOwnerText">
                                        <h5 class="PostOwner_Username">Kripto Ege</h5>
                                        <h6 class="PostedAgo">45 minutes ago</h6>
                                    </div>
                                    <div class="dropdown" id="PostSettings-Container">
                                        <button class="btn" id="PostSettings" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-expanded="false">
                                            ...
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Gönderi Bağlantısını Kopyala</a>
                                            <a class="dropdown-item" href="#">Gönderiyi Düzenle</a>
                                            <a class="dropdown-item" href="#">Gönderiyi Sil</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="PostContent">
                                    <div class="PostContent_Textbox">
                                        <p class="PostContent_Text">Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit. Sint, id.</p>
                                    </div>
                                    <div class="PostContent_ImageContainer">
                                        <img src="{{ asset('public/talha/assets/media/PostImage.png') }}" alt=""
                                            class="PostContent_Image">
                                    </div>
                                </div>
                                <div class="PostInteractions">
                                    <div class="PostInteractionIcons_Container LikeIconContainer">
                                        <button class="" alt=""><img id="LikeIcon"
                                                src="{{ asset('public/talha/assets/media/likeIcon_Inactive.png') }}"
                                                alt=""></button>
                                        <span class="Post_LikeCount">5</span>
                                    </div>
                                    <div class="PostInteractionIcons_Container CommentIconContainer">
                                        <button alt="" onclick="showComments(1)"><img
                                                src="{{ asset('public/talha/assets/media/commentIcon.png') }}"
                                                alt="" id="CommentIcon"></button>
                                        <span class="Post_CommentCount">6</span>
                                    </div>
                                    <div class="PostInteractionIcons_Container ShareIconContainer">
                                        <button alt=""><img
                                                src="{{ asset('public/talha/assets/media/shareIcon.png') }}"
                                                alt="" id="ShareIcon"></button>
                                        <span class="Post_ShareCount">10</span>
                                    </div>
                                </div>
                                <div class="postComments" id="postComments1">
                                    <div class="createComment">
                                        <textarea placeholder="Yorumunuz en fazla 200 karakter olabilir ve yorumunuz topluluk kurallarına da uygun olmalıdır"
                                            name="commentInput" id="commentInput" maxlength="200"></textarea>
                                        <button class="postComment_btn">Gönder</button>
                                    </div>
                                    <div class="CommentsSection">
                                        <div class="postedComment" id="postedComment1">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment1" onclick="likeComment(1)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment1" onclick="editComment(1)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment1"
                                                    onclick="deleteComment(1)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                        <div class="postedComment" id="postedComment2">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment2" onclick="likeComment(2)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment2" onclick="editComment(2)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment2"
                                                    onclick="deleteComment(2)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                        <div class="postedComment" id="postedComment3">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment3" onclick="likeComment(3)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment3" onclick="editComment(3)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment3"
                                                    onclick="deleteComment(3)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                        <div class="postedComment" id="postedComment4">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment4" onclick="likeComment(4)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment4" onclick="editComment(4)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment4"
                                                    onclick="deleteComment(4)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                        <div class="postedComment" id="postedComment5">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment5" onclick="likeComment(5)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment5" onclick="editComment(5)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment5"
                                                    onclick="deleteComment(5)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                        <div class="postedComment" id="postedComment6">
                                            <div class="postedComment_ownerInfo-Container">
                                                <img src="{{ asset('public/talha/assets/media/ProfilePicture.svg') }}"
                                                    style="width: 30px;" alt=""
                                                    class="postedComment_ProfilePicture" id="postedComment_pp1">
                                                <span class="postedComment_username" id="postedComment_username1"
                                                    style="font-size: 12px;font-weight:800;">Berkay Buhlar</span>
                                            </div>
                                            <div class="postedComment-txtContainer">
                                                <p class="postedComment-txt" id="postedComment-txt1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                                                    consequatur optio ab reiciendis veniam laborum maxime delectus omnis
                                                    veritatis laboriosam libero a quidem aut, mollitia eaque placeat
                                                    suscipit officia repellat magni rem ad, deleniti sed! Fugit pariatur
                                                    quibusdam sequi at? Maxime ad explicabo cupiditate dicta suscipit. Illum
                                                    impedit omnis fugit.
                                                </p>
                                            </div>
                                            <div class="postedComment_Actions">
                                                <button class="likeComment" id="likeComment6" onclick="likeComment(6)"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                                <button class="replyComment"><i class="fa-solid fa-reply"></i></button>
                                                <button class="editComment" id="editComment6" onclick="editComment(6)"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                                <button class="deleteComment" id="deleteComment6"
                                                    onclick="deleteComment(6)"><i class="fa-solid fa-trash-can"
                                                        style="color: red;"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RightSide_Contents-Container">
                        <a href="./CanliYayin.html">
                            <div class="LiveStream_AdBox">
                                <img src="{{ asset('public/talha/assets/media/StreamView.png') }}" alt=""
                                    class="LiveStreamView">
                                <span class="LiveStream_Title">Bitcoin Portfolio Management</span>
                                <div class="LiveBadge"><span>LIVE</span></div>
                                <div class="LiveStream_Interactions_Info">
                                    <div class="TotalView">
                                        <img src="{{ asset('public/talha/assets/media/Eye.svg') }}" alt=""
                                            id="ViewIcon">
                                        <span class="ViewerNumber">150</span>
                                    </div>
                                    <div class="TotalComment">
                                        <img src="{{ asset('public/talha/assets/media/Message.svg') }}" alt=""
                                            id="CommentIcon">
                                        <span class="TotalCommentNumber">50</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="SuggestedUsers-Container">
                            <h1>Sizin için önerilerimiz</h1>
                            <div class="SuggestedUsers">
                                <div class="SuggestedUser">
                                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                        class="SuggestedUser_ProfilePicture">
                                    <div class="SuggestedUser_UsernameContainer">
                                        <span class="SuggestedUser_Username">Kripto Ege</span>
                                        <img src="{{ asset('public/talha/assets/media/ApprovedTick.svg') }}"
                                            alt="">
                                    </div>
                                    <a href="http://www.google.com" target="_blank">
                                        <button class="GozatButton">Gözat</button>
                                    </a>
                                </div>
                                <div class="SuggestedUser">
                                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                        class="SuggestedUser_ProfilePicture">
                                    <div class="SuggestedUser_UsernameContainer">
                                        <span class="SuggestedUser_Username">Kripto Ege</span>
                                        <img src="{{ asset('public/talha/assets/media/ApprovedTick.svg') }}"
                                            alt="">
                                    </div>
                                    <a href="http://www.google.com" target="_blank">
                                        <button class="GozatButton">Gözat</button>
                                    </a>
                                </div>
                                <div class="SuggestedUser">
                                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                        class="SuggestedUser_ProfilePicture">
                                    <div class="SuggestedUser_UsernameContainer">
                                        <span class="SuggestedUser_Username">Kripto Ege</span>
                                        <img src="{{ asset('public/talha/assets/media/ApprovedTick.svg') }}"
                                            alt="">
                                    </div>
                                    <a href="http://www.google.com" target="_blank">
                                        <button class="GozatButton">Gözat</button>
                                    </a>
                                </div>
                                <div class="SuggestedUser">
                                    <img src="{{ asset('public/talha/assets/media/PostOwnerPP.png') }}" alt=""
                                        class="SuggestedUser_ProfilePicture">
                                    <div class="SuggestedUser_UsernameContainer">
                                        <span class="SuggestedUser_Username">Kripto Ege</span>
                                        <img src="{{ asset('public/talha/assets/media/ApprovedTick.svg') }}"
                                            alt="">
                                    </div>
                                    <a href="http://www.google.com" target="_blank">
                                        <button class="GozatButton">Gözat</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('public/talha/assets/js/Posts.js') }}"></script>
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
@endsection
