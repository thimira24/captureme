<!DOCTYPE html>
<html>

  <head>

    <script src="https://cdn.jsdelivr.net/npm/comlinkjs@3.0.2/umd/comlink.js"></script>
    


    <script src="js/script.js" async></script>
    
    <title id="titleCaption">Capture Me | Online Free Screen Recorder</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FY6HB1DB7S"></script>
    
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-FY6HB1DB7S');
    </script>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.webp">
    
    <!--    Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,900|Ubuntu:400,700&display=swap" rel="stylesheet">

    <!--    Bootstrap css files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!--    Custom css files-->
    <link rel="stylesheet" href="assets/css/styles.css">


    <!--    Font Awesome-->
    <script defer src="https://kit.fontawesome.com/e87d687bba.js"></script>

  
    <!--    Bootstrap js files-->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>

  <body>
  

    <?php include 'components/header.html';?>

    <section class="header-section">
      <div class="header-body">

        <!-- Body content -->
        <div class="header-body-contents" >
          <h1 class="title" >Online free screen recorder</h1>
          <p class="subtitle">Now you can simply record your screen without installing any software. <br> It's totally free. Enjoy!</p>
          <p id="warning"></p>

        </div>

        <!--Checkboxes and start recording button-->
        <div id="control-area1" class="control-area">
          <div class="row-new">
            <div class="column">
              <div data-toggle="tooltip" data-placement="bottom" title="By enabling this checkbox, ✅ you can capture microphone sound (including your voice) with your screen recording.">
                <div id="mycheckbox" class="inputGroup" role="Microphone Audio" >
                  <input type="checkbox" id="micAudioToggle" role="checkbox"/>
                  <label for="micAudioToggle" tabindex="0" role="Microphone Audio">Microphone</label>
                </div>
              </div> 
            </div>

            <div class="column">
              <div id="mycheckbox1" data-toggle="tooltip" data-placement="bottom" title="By enabling this checkbox, ✅ you can capture computer system sound with your screen recording.">
                <div class="inputGroup" role="system sound">
                  <input type="checkbox" id="audioToggle" checked role="checkbox"/>
                  <label for="audioToggle" tabindex="1" role="system sound">Computer Sound</label>
                </div>
              </div>
            </div>

            <div class="column">
              <div title="Click here to start your screen recording">
                <button id="captureBtn" class="btnPrimary" type="button" onclick="hideControlArea()" tabindex="2" role="button" name="Get started - It's Free">Get started - It's Free</button>
              </div>
            </div>
          </div>

        </div>

        <!--New recording & Download buttons-->
        <div id ="control-area-afterrec" class="control-area2">
          <div class="row">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12">
                <button id="startBtn" class="btnPrimary" type="button" style="display: none; margin:auto" tabindex="3" role="button">Start Recording</button>
                <button id="stopBtn" class="btnPrimary1" type="button" style="display: none;" tabindex="4" role="button">Stop Recording</button>
                <a id="download" href="#" style="display: none;" tabindex="5" role="link" >Download your video</a>
                <form action="index.php">
                  <button id="newRec" class="btnPrimary" style="display: none;" type="submit" tabindex="6" role="button">New recording</button>
                </form>
                
            </div>
            <div class="col-md-4 col-sm-12"></div>
          </div>  
        </div>

        <!--video preview-->
        <div class="control-area2">  
              <div id="videoBox" class="video-box">
                <video id="videoElement" autoplay muted></video>
              </div>    
        </div>
      </div>

     

    </section>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>


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

 
    <!-- footer section -->
    <?php include 'components/footer.html';?>
 
  </body>
</html>
