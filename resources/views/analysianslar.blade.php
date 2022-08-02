@extends('layouts.app') 

@section('content') 


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
            <div class="AnalysiansCards" id="AnalysiansCards">
                <!-- <div class="AnalysianCard">
                    <img src="./assets/media/AnalysianProfilePicture.png" alt="" class="AnalysianProfilePicture">
                    <img src="./assets/media/CardFrame.png" id="CardFrame" alt="">
                    <div class="AnalysianCard-Textbox">
                        <span class="Analysian_Username">Kripto Erkan</span>
                        <p class="Analysian_Bio">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores quia ipsam itaque molestias natus in odit minima, dolores adipisci necessitatibus magni sit corrupti illo sequi repellendus maxime labore deserunt quaerat.</p>
                    </div>
                    <button id="ProfileGitButton">Profili Gör</button>
                    <div class="AnalysianCard-Socials">
                        <a href="" id="Analysian_Twitter_Link">
                            <img src="./assets/media/Twitter Icon.png" alt="">
                        </a>
                        <a href="" id="Analysian_Instagram_Link">
                            <img src="./assets/media/Instagram Icon.png" alt="">
                        </a>
                    </div>
                </div>  -->
            </div>
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



@endsection