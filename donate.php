

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/npm/comlinkjs@3.0.2/umd/comlink.js"></script>

    <title id="titleCaption">Buy me a cofee | CaptureMe Online Free Screen Recorder</title>

    <meta property="og:title" content="CaptureMe - Online Free Screen Recorder">
    <meta property="og:url" content="http://www.captureme.online/">
    <meta property="og:description" content="Now you can simply record your screen without installing any software. CaptureMe is totally free. instantly capture your meetings, lectures, presentations, games, and more. Enjoy!">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/CaptureMe.png">

    <meta name="googlebot" content="notranslate"/>
    <meta name="google" content="nopagereadaloud"/>
    <meta name="google" content="nositelinkssearchbox"/>

    <meta name="author" content="captureme.online"/>
    <meta name="keywords" content="Free Online Screen Recorder - No download and install required. You can seamlessly record your screen with audio">
    <meta name="title" content="CaptureMe - Online Free Screen Recorder">
    <meta name="description" content="Now you can simply record your screen without installing any software. CaptureMe is totally free. instantly capture your meetings, lectures, presentations, games, and more. Enjoy!">

    <link rel="icon" type="image/x-icon" href="assets/images/logo.webp">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FY6HB1DB7S"></script>
    
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-FY6HB1DB7S');
    </script>


    <!--    Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,900|Ubuntu:400,700&display=swap" rel="stylesheet">
    <!--    Bootstrap css files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <!--    Custom css files-->
    <link rel="stylesheet" href="assets/css/styles.css">
    

    <!--    Font Awesome-->
    <script defer src="https://kit.fontawesome.com/e87d687bba.js"></script>
    <!--    Bootstrap js files-->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



</head>

<body>

     <!-- Nav Bar -->
     <?php include 'components/header.html';?>

    <section class="privacy-section">

    <h1 class="feature-title">Donate to Capture<span class="brand-me">Me.</span></h1>
    <p class="subtitle">By contributing you’ll help ensure it stays that way and <br> contributes towards future development.</p>
    <br>
    <div class="img-donation">
  
    <img src="assets/images/img-donate.svg" alt="donation image heart with hand">
    <br> <br> <br>
    <a href="https://www.buymeacoffee.com/thimira" target="_blank">Make a donation</a>
    </div>

    </section>
 
   <!-- footer section -->
   <?php include 'components/footer.html';?>

   <!-- Messenger Chat Plugin Code -->
   <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
 var chatbox = document.getElementById('fb-customer-chat');
 chatbox.setAttribute("page_id", "104246969024787");
 chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
 window.fbAsyncInit = function() {
  FB.init({
  xfbml            : true,
  version          : 'v14.0'
   });
 };

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>