<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Magazee HTML5 Template Mo</title>
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/templatemo-style.css"> 

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>
  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="container">

    <!-- 1st section -->
    <section class="row tm-section">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
        <div class="tm-flex-center p-5 tm-bg-color-primary tm-section-min-h">
          <h1 class="tm-text-color-white tm-site-name"><img src="./img/BMW-Logo.png" alt="" width="300" height="300">
          </h1>
            <table style="border: 2px solid black">
                <tr>
                <th>name</th>
                </tr>
                
                @foreach ($names as $name) 
                    <tr>
                        <td>{{$name->name}}</td>
                    </tr>
                @endforeach    
            </table>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="tm-flex-center p-5">
          <q class="tm-quote tm-text-color-gray">Premium will increasingly be defined in terms
            of sustentability and environmental compatibility - Norbert reithofer</q>
        </div>
      </div>
    </section>

    <!-- 2nd section -->
    <section class="row tm-section tm-col-md-reverse">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="tm-flex-center p-5">
          <div class="tm-md-flex-center">
            <h2 class="tm-text-color-primary mb-4">Name the car</h2>
            <p class="mb-4">year: </p>
            <p class="mb-4">Price: </p>
            <p class="mb-4">Colors: </p>
            <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
        <div class="tm-flex-center p-5 tm-bg-color-primary">
          <div class="tm-max-w-400 tm-flex-center tm-flex-col">
            <img src="img/image-04.jpg" alt="Image" class="rounded-circle mb-4">
            <p class="tm-text-color-white small tm-font-thin mb-0">Description: </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 3rd Section -->
    <section class="row tm-section tm-mb-30">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
        <img src="img/image-01.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="tm-flex-center p-5">
          <div class="tm-flex-center tm-flex-col">
            <h2 class="tm-align-left">Loerm ipsum dolor sit amet</h2>
            <p>This is one-page HTML5 template that you can use for any purpose. Please tell your friends about <a
                href="https://www.facebook.com/templatemo" target="_parent">TemplateMo</a> website. Thank you.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- 4rd Section -->
    <section class="row tm-section tm-col-md-reverse">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="tm-flex-center p-5">
          <div class="tm-md-flex-center">
            <h2 class="tm-text-color-primary mb-4">Fusce ac enim at justo</h2>
            <p class="mb-4">Pellentesque sagittis feugiat massa, vitae blandit elit dictum in. Nam eleifend nunc dui,
              sed cusus justo molestie id. Vestibulum vel sagittis justo.</p>
            <a href="#" class="btn btn-primary float-lg-right tm-md-align-center">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
        <div class="tm-flex-center p-5 tm-bg-color-primary">
          <div class="tm-max-w-400 tm-flex-center tm-flex-col">
            <img src="img/image-04.jpg" alt="Image" class="rounded-circle mb-4">
            <p class="tm-text-color-white small tm-font-thin mb-0">Nullam eleifend, ipsum eu aliquet fermentum , odio
              urna dignissim ante, semper maximus libero nisl non nibh.</p>
          </div>
        </div>
      </div>
    </section>

    <!--5rd section-->
    <section class="row tm-section tm-mb-30">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
        <img src="img/image-01.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="tm-flex-center p-5">
          <div class="tm-flex-center tm-flex-col">
            <h2 class="tm-align-left">Loerm ipsum dolor sit amet</h2>
            <p>This is one-page HTML5 template that you can use for any purpose. Please tell your friends about <a
                href="https://www.facebook.com/templatemo" target="_parent">TemplateMo</a> website. Thank you.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- 6th Section -->
    <section class="row">
      <div class="col-lg-12 tm-form-header pl-5 pr-5">
        <h2 class="tm-container-inner tm-text-color-white">Developed by julioDevI</h2>
      </div>

      <div class="col-lg-12 tm-bg-color-gray tm-text-color-white tm-font-thin tm-form-footer">
        <div class="row tm-container-inner">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="tm-footer-info-box">
              <h4>Credits and conclusion</h4>
              <address>
                This site was made with
                the purpose of studying,<br>
                non-profit<br>
              </address>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="tm-footer-info-box">
              <p>Website made with<br>
                images from the<br>
                bmw website<br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center small tm-copyright-text mb-0">Copyright &copy; <span class="tm-current-year">2018</span>
          Your Company Name | Designed by <a href="http://templatemo.com" class="tm-text-color-gray"
            target="_parent">Template Mo</a></p>
      </div>
    </div>
  </div>
  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>

</html>