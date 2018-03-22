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

        <div class="video">
          <div class="video__container">
            <h1 class="video__container--title">____________________________</h1>
          </div>
          <div><iframe class="video__vid"  src="https://www.youtube.com/embed/Dcjup4uxzEQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        </div>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
          
     </section>

      <section class="section-about">

      <div class="u-centerMe">
         <h1 class="title-secondary">Meet travesty</h1>
      </div>

        <div class="row">
          <div class="col-1-of-3">
              <div class="polaroid">
                <div class="polaroid__photo polaroid__photo--p1"><span class="polaroid__name"></span></div>
                <a href="#mod1"><div class="polaroid__photo polaroid__photo--p2">
                </div></a>
                <div class="polaroid__photo polaroid__photo--p3"></div>
                <a href="#mod2"><div class="polaroid__photo polaroid__photo--p4">
                </div></a>
              </div>
          </div>
          <div class="col-1-of-3">
              <div class="polaroid">
                <div class="polaroid__photo polaroid__photo--p5"><span class="polaroid__name">Vinnie</span></div>
                <div class="polaroid__photo polaroid__photo--p6"></div>
                <div class="polaroid__photo polaroid__photo--p7"></div>
                <a href="#mod3"><div class="polaroid__photo polaroid__photo--p8"></div></a>
              </div>
          </div>
          <div class="col-1-of-3">
              <div class="polaroid">
              <a href="#mod4"><div class="polaroid__photo polaroid__photo--p9"></div>
                <div class="polaroid__photo polaroid__photo--p10"></div></a>
                <a href="#mod5"><div class="polaroid__photo polaroid__photo--p11"></div></a>
                <div class="polaroid__photo polaroid__photo--p12"></div>
              </div>
          </div>
        </div>
      </section>

      <section class="section-ticket">

      </section>

      </main>



      <!-- Modal Sections -->

      <div class="mod" id="mod1">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">
          <div class="mod__bio">
            <p class"mod__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="mod__photo">
          <img src="https://images.pexels.com/photos/274406/pexels-photo-274406.jpeg?w=940&h=650&dpr=2&auto=compress&cs=tinysrgb" alt="Tour photo" class="mod__img">
          </div>
        </div>
      </div>

      <div class="mod" id="mod2">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">
          <div class="mod__bio">
            <p class"mod__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="mod__photo">
          <img src="https://images.pexels.com/photos/756239/pexels-photo-756239.jpeg?w=940&h=650&dpr=2&auto=compress&cs=tinysrgb" alt="Tour photo" class="mod__img">
          </div>
        </div>
      </div>

       <div class="mod" id="mod3">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">
          <div class="mod__bio">
            <p class"mod__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="mod__photo">
          <img src="https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?w=940&h=650&dpr=2&auto=compress&cs=tinysrgb" alt="Tour photo" class="mod__img">
          </div>
        </div>
      </div>

      <div class="mod" id="mod4">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">
          <div class="mod__bio">
            <p class"mod__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="mod__photo">
          <img src="https://images.pexels.com/photos/167445/pexels-photo-167445.jpeg?w=940&h=650&dpr=2&auto=compress&cs=tinysrgb" alt="Tour photo" class="mod__img">
          </div>
        </div>
      </div>

      <div class="mod" id="mod5">
        <a href="#section-about" class="mod__close">&times;</a>
        <div class="mod__content">
          <div class="mod__bio">
            <p class"mod__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="mod__photo">
          <img src="https://images.pexels.com/photos/167618/pexels-photo-167618.jpeg?w=940&h=650&dpr=2&auto=compress&cs=tinysrgb" alt="Tour photo" class="mod__img">
          </div>
        </div>
      </div>
      
    </body>
    
</html>
