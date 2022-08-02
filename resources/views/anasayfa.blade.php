@extends('layouts.app') 

@section('content') 
    <script src="https://kit.fontawesome.com/5c8ab9083f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Layout.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Anasayfa.css') }}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css') }}">
    <title>Analysian</title>
</head>
<body>
  <!--GENEL SAYFANIN CONTAINERI-->
    <div class = "Welcoming-Container">
          <!--GIRISTEKI DEVRE ARKA PLANLI KISIM-->
        <div class="container-fluid WebpageContent">
            <div class="Left-Box">
              <h1 id="LeftHeader">Teknik Analiz Dünyasına Hoş Geldiniz!</h1>
              <a href="/signup">
                <div class="button" id="button1">
                  <h3>Hemen Başlayın</h3>
                  <img
                    style="
                      position: absolute;
                      right: 1.5em;
                      top: 1.6em;width: 10px;" src="{{ asset('public/talha/assets/media/RightArrow4Button.svg') }}"> 
                </img>
                </div>
              </a>
              <div class="button" id="button2">
                <h3>Analysian’lara Gözat</h3>
                <img
                style="
                  position: absolute;
                  right: 1.5em;
                  top: 1.6em;width: 10px;" src="{{ asset('public/talha/assets/media/RightArrow4Button.svg') }}"> 
            </img>
              </div>
            </div>
            <div class="Right-Box">
              <img id="RightBoxCards_Png" src="{{ asset('public/talha/assets/media/MainpageCards.png') }}" alt="" />
            </div>
          </div>
          <div class="SimpleBanner">
            <span id="SimpleBannerTxt">Analysians’da bir topluluğa katılın ve Trade yeteneklerinizi geliştirin.</span>
            <button type="submit" class="JoinUs_Buttons">
              <img src="{{ asset('public/talha/assets/media/buttonicon.png') }}" alt="">
              <span class="buttontxt">Hemen Başlayın</span>
            </button>
          </div>
          <!--BEYAZ KISIM-->
          <div class="White-Register-Container">
            <h1>Teknik Analizde farklı bir bakış açısı:</h1>
            <p style="color:black;">
              Sizin için seçtiğimiz Analistler gibi siz de bir <span id="AnalysianText"style="color :#4C1A61;font-weight:bold;font-size : 1.5em">Analysian</span> olun.
            </p>
            <button type="submit" id="WhitePageBtn" class="JoinUs_Buttons">
              <img src="{{ asset('public/talha/assets/media/buttonicon.png') }}" alt="">
              <span class="buttontxt">Hemen Başlayın</span>
            </button>
          </div>
          <div class="BG-Implement">
            <div class="dot">
              <img src='{{ asset('public/talha/assets/media/dot.png') }}' alt="" />
            </div>
  
            <!--BEYAZ RENKLI BILGI KUTULARI-->
            <div class="SumCards">
              <div class="SumInfoBox" id='SumInfoBox1'>
                  <img src='{{ asset('public/talha/assets/media/database.png') }}' alt="" class="SumInfoBoxIcon" />
                  <div class="SumInfoBox-TextContainer">
                      <h1>Ticaretinizi Analysians ile Kolaylaştırın</h1>
                      <p>Alanında uzman teknik analistler ile Trade yeteneğinize farklı bir boyut katın. 
      Üstelik aradığınız her şey tek bir platformda.</p>
                  </div>
              </div>
              <div class="SumInfoBox" id='SumInfoBox2'>
                  <img src='{{ asset('public/talha/assets/media/doc.png') }}' alt="" class="SumInfoBoxIcon" />
                  <div class="SumInfoBox-TextContainer">
                      <h1>Güvenli ve Sağlıklı Bilgi Alışverişi</h1>
                      <p>Teknik Analist ile mümkün olan tüm iletişim kanallarından erişim teknolojisi sunuyoruz, üstelik bilgi kirliliğinden arınmış bir şekilde....</p>
                  </div>
              </div>
              <div class="SumInfoBox" id="SumInfoBox3">
                  <img src='{{ asset('public/talha/assets/media/chart.png') }}' alt="" class="SumInfoBoxIcon" />
                  <div class="SumInfoBox-TextContainer">
                      <h1>Uzman Teknik Analistler ile Trade Yapın</h1>
                      <p>Uzman Analistlerin bilgi birikiminden faydalanmak ve siz de onlar gibi Trade yapmak ister misiniz? Hemen bize katılın…</p>
                  </div>
              </div>
          </div>
  
          <!--HAKKIMIZDA BOLUMU-->
          <div class="About-Containers" id="AboutContainer1">
              <div class="Container1TextBox">
                <h1>Trade ile ilgili aradığınız her bilgi tek bir Platformda!</h1>
                <span id="AboutContainer1Paragraph">Sosyal Medyanın bilgi kirliliğinden arındırılmış hali ile tarzına uygun <br> Analysian’ı seç ve Trade yeteneklerini geliştirmeye başla.</span>
                <button type="submit" class="JoinUs_Buttons">
                  <img src="{{ asset('public/talha/assets/media/buttonicon.png') }}" alt="">
                  <span id="buttontxt">Hemen Başlayın</span>
                </button>
              </div>
              <img class="AboutContent" src='{{ asset('public/talha/assets/media/1.png') }}' alt="" />
            </div>
            <div class="About-Containers">
                <img class="AboutContent" src='{{ asset('public/talha/assets/media/2.png') }}' alt="" />
            <div class="Container2TextBox">
              <h1 id='container2header'>Analysians Nedir?</h1>
              <span id='container2paragraph'>Analysians, alanında uzman Teknik Analistleri tek bir çatı altında toplayan bir platformdur. Üstelik bir Teknik Analistin, trade yaparken topluluğu ile rahat iletişimi kurmasını sağlayan altyapı ile her şey çok daha kolay.</span>
            <div class="CounterBoxes">
              <div class="CounterBox">
                <span class="CountingNumbers">1000+</span>
                <span class="CountingMaterial">Toplam Kullanıcı Sayısı</span>
              </div>
              <div class="CounterBox">
              <span class="CountingNumbers">1000+</span>
                <span class="CountingMaterial" id="CountingMat2">İçerik Üreten Analysian</span>
              </div>
              <div class="CounterBox">
              <span class="CountingNumbers">1000+</span>
                <span class="CountingMaterial">Toplam Paylaşılan Analiz</span>
              </div>
            </div>
            </div>
            </div>
            <div class="About-Containers" id="About-Container3">
              <div class="Container3TextBox">
                <h1>Sizin için özenle</h1>
                <span class="AboutContainerParagraphs">Sosyal medyada her zaman birçok bilgi kirliliği mevcut. Biz bu bilgi kirliliğini ortadan kaldırarak sizler için özenle seçtiğimiz teknik analistlerden en doğru bilgileri ve trade yöntemlerini sizinle buluşturuyoruz.</span>
                <button type="submit" class="JoinUs_Buttons">
                  <img src="{{ asset('public/talha/assets/media/buttonicon.png') }}" alt="">
                  <span class="buttontxt">Hemen Başlayın</span>
                </button>
              </div>
            <img  class="AboutContent"src='{{ asset('public/talha/assets/media/3.png') }}' alt="" />
            </div>
            <div class="About-Containers" id="About-Container4" style="flex-direction: row-reverse;">
              <div class="Container4TextBox">
                <span>En doğru kararı vermeniz için</span>              
                <p class="AboutContainerParagraphs" id="P4">Sitemizi diğer platformlardan ayıran en önemli<br>özelliklerinden biri kullanıcı dostu olmasıdır.<br>Platformda başarılı analistleri tek<br>bir yerde görmeniz, size uygun Analisti karar vermede<br>kolaylık 
                sağlayacaktır. Bu sayede en doğru seçimi<br>kolay bir şekilde yapabileceksiniz.</p>
              </div>
            <img class="AboutContent" src='{{ asset('public/talha/assets/media/4.png') }}' alt="" />
            </div>
            <div class="About-Containers" id="About-ContainerLast">
              <div class="Container5TextBox">
                <span>Sizin için her şeyi düşündük</span>
                <p class="AboutContainerParagraphs">Trade yaparken aynı zamanda topluluğunda olduğunuz Analistinizin eğitimlerini, canlı yayınlarını ve paylaştığı tüm gönderileri tek bir panelden kolay bir şekilde takip edebileceksiniz. Kısacası Teknik Analist ile Topluluğu arasında mümkün olan en iyi iletişimi sağlayacağımıza eminiz.</p>
              </div>
              <div class="RegisterBox">
                  <div class="RegisterBox-Container">
                      <h1>Hemen Analysians'a Katılın,<br> Trade Yeteneklerinizi Geliştirin</h1>
                      <button type="submit" id="RegisterNowButton">Hemen Kaydol</button>
              </div>
              </div>
          </div>
  
          <!--SUGGESTED ANALYSIAN CARDS-->
            <div class="SuggestedAnalysians-Container">
              <div class="SuggestedAnalysians-Header">
                <h1>Sizin için önerilen bazı Analysian’lar:</h1>
                <a href="" class="see_all_analysians">Hepsini Gör</a>
              </div>
              <div class="SuggestedAnalysians_Cards">
                <div class="SuggestedUsers_Card">
                  <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
                  <div class="CardText">
                  <span class="Username">Olya Bondevera</span>
                  <span class="UserTitle">Analysians</span>
                  <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
                  </div>
                  <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
              </div>
              <div class="SuggestedUsers_Card">
                <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
                <div class="CardText">
                <span class="Username">Olya Bondevera</span>
                <span class="UserTitle">Analysians</span>
                <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
                </div>
                <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
            </div>
            <div class="SuggestedUsers_Card">
              <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
              <div class="CardText">
              <span class="Username">Olya Bondevera</span>
              <span class="UserTitle">Analysians</span>
              <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
              </div>
              <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
          </div>
          <div class="SuggestedUsers_Card">
            <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
            <div class="CardText">
            <span class="Username">Olya Bondevera</span>
            <span class="UserTitle">Analysians</span>
            <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
            </div>
            <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
        </div>
        <div class="SuggestedUsers_Card">
          <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
          <div class="CardText">
          <span class="Username">Olya Bondevera</span>
          <span class="UserTitle">Analysians</span>
          <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
          </div>
          <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
      </div>
      <div class="SuggestedUsers_Card">
        <img src='{{ asset('public/talha/assets/media/monkepp.svg') }}' alt="" class="UserProfilePicture" />
        <div class="CardText">
        <span class="Username">Olya Bondevera</span>
        <span class="UserTitle">Analysians</span>
        <span class="Followers"><img src='{{ asset('public/talha/assets/media/followericon.png') }}'/>Nick Rybak and 317 others</span>
        </div>
        <button type="submit" class="SuggestedUser-CardButton">Topluluğa Katıl</button>
    </div>
            </div>
            
        </div>
        
        
      <div class="RegisterBox-Cont">
        <div class="RegisterBox RegisterBoxLast">
          <div class="RegisterBox-Container">
            <h1>Hemen Analysian'a Katılın,<br> Trade Yeteneklerini Geliştir</h1>
            <button type="submit" id="RegisterNowButton">Hemen Kaydol</button>
          </div>
        </div>
      </div>
        
        
        
        
        
        
        <!--FOOTER-->
        
        <div class="container-fluid Footer-Container">
        <div class="CompanySummary">
          <h1 class="FooterHeaders">Analysians</h1>
          <p class="FooterTexts">
            Analysians, alanında uzman Teknik Analistleri aynı çatı altında
            birleştiren, ticaretiniz için aradığınız her bilgiyi
            bulabileceğiniz finansal bir sosyal medyadır
          </p>
        </div>
        <div class="WebLinks">
          <h2 class="FooterHeaders">Şirket Hakkında</h2>
          <a href="" class="WebLink">Hakkımızda</a>
          <a href="" class="WebLink">Şartlar</a>
          <a href="" class="WebLink">Gizlilik Sözleşmesi</a>
          <a href="" class="WebLink">Nasıl Çalışır?</a>
        </div>
        <div class="SocialMediaLinks">
          <h2 class="FooterHeaders">Sosyal Medya</h2>
          <img src="{{ asset('public/talha/assets/media/twitter.png') }}" alt="" id="TwitterIcon" />
          <img src="{{ asset('public/talha/assets/media/instagram.png') }}" alt="" id="InstagramIcon" />
        </div>
      </div>
<!--FOOTER-->

    </div>
    </div>
      
    <script>
      </script>
    <script src="{{ asset('public/talha/assets/js/ScrollAgent.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>









@endsection