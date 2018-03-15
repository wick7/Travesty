<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='../css/app.css'/>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <header class="header">
        <div class="header__logo-box">
          <img src="images/dragon.png" alt="logo" class="header__logo">
        </div>
        <div class="header__title-box">
            <h1 class="title-primary">
              <span class="title-primary--main">travesty</span>
              <span class="title-primary--underline"></span>
            </h1>
            <a href="#" class="btn btn-white btn-animated">Tour Dates</a>
        </div>
      </header>
      <main>

      <section class="section-video">
        <!-- <div class="video">
          <div class="video__container">
          <video autoplay loop class="fillWidth">
            <source src="../images/stay/stay.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="../images/stay/stay.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
            <div class="poster hidden">
            <img src="PATH_TO_JPEG" alt="">
            </div>
          </div>
        </div> -->
      </section>

      <section class="section-about">

      <div class="u-centerMe">
         <h1 class="title-secondary">Meet travesty
        </h1>
      </div>

        <div class="row">
          <div class="col-1-of-3">
              <div class="polaroid">
                <div class="polaroid__photo polaroid__photo--p1"><span class="polaroid__name"></span></div>
                <a href="#mod1"><div class="polaroid__photo polaroid__photo--p2">sdfsdfsdfdsfsdf
                </div></a>
                <div class="polaroid__photo polaroid__photo--p3"></div>
                <a href="#mod2"><div class="polaroid__photo polaroid__photo--p4">SDFSDFSDFSD
                </div></a>
              </div>
          </div>
          <div class="col-1-of-3">
              <div class="polaroid">
                <div class="polaroid__photo polaroid__photo--p5"><span class="polaroid__name">Vinnie</span></div>
                <div class="polaroid__photo polaroid__photo--p6"></div>
                <div class="polaroid__photo polaroid__photo--p7"></div>
                <div class="polaroid__photo polaroid__photo--p8"></div>
              </div>
          </div>
          <div class="col-1-of-3">
              <div class="polaroid">
                <div class="polaroid__photo polaroid__photo--p9"></div>
                <div class="polaroid__photo polaroid__photo--p10"></div>
                <div class="polaroid__photo polaroid__photo--p11"></div>
                <div class="polaroid__photo polaroid__photo--p12"></div>
              </div>
          </div>
        </div>
      </section>
      </main>

      <div class="mod" id="mod1">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">BAND MEMBER 1</div>
      </div>

      <div class="mod" id="mod2">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">BAND MEMBER 2</div>
      </div>
      
    </body>
    
</html>
