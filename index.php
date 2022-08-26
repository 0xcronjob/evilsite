<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Evil.Site / Home</title>

    <link href="style/evil.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body class="ns">
    <div id="main-container">
            <pre class="evilsite ns">
▓█████    ██▒   █▓    ██▓    ██▓                 ██████     ██▓   ▄▄▄█████▓   ▓█████ 
▓█   ▀▓   ██░   █▒   ▓██▒   ▓██▒               ▒██    ▒    ▓██▒▓     ██▒ ▓▒   ▓█   ▀ 
▒███      ▓██  █▒░   ▒██▒   ▒██░               ░ ▓██▄      ▒██▒▒    ▓██░ ▒░   ▒███   
▒▓█  ▄     ▒██ █░░   ░██░   ▒██░                 ▒   ██▒   ░██░░    ▓██▓ ░    ▒▓█  ▄ 
░▒████▒     ▒▀█░     ░██░   ░██████▒    ██▓    ▒██████▒▒   ░██░     ▒██▒ ░    ░▒████▒
░░ ▒░ ░     ░ ▐░     ░▓     ░ ▒░▓  ░    ▒▓▒    ▒ ▒▓▒ ▒ ░   ░▓       ▒ ░░      ░░ ▒░ ░
 ░ ░  ░     ░ ░░      ▒ ░   ░ ░ ▒  ░           ░ ░▒  ░ ░    ▒ ░       ░        ░ ░  ░
   ░          ░░      ▒ ░     ░ ░              ░  ░  ░      ▒ ░     ░            ░   
   ░  ░        ░      ░         ░                    ░      ░                    ░  ░
                                                                          
</pre>
    <div id="navbar-contained" style="display: block;">
        <ul class="nav">
            <li><a href="../" class="selected">home</a></li>
            <li><a href="news/" class="">news</a></li>
            <li><a href="~/" class="">sites</a></li>
            <li><a href="services/" class="">services</a></li>
            <li><a href="donate/" class="">donate</a></li>
            <li><a href="policy/" class="">policy</a></li>
        </ul>
        <div id="navbar-scrolling">
            <p class="marquee">
                <span class="scroll">
<?php
  $directory = '/home/';
  $filecount = 0;
  $files = glob($directory . "*");

  if ( $files !== false )
  {
  $filecount = count( $files );
  }
?>
                    Welcome to evil.site, we currently host <?=$filecount?> websites on our service. Check out <a href="~/request.php">request page</a> to get a site. We also have an <a href="https://evil.pm">XMPP</a> service :)
                </span>
                <span></span>
            </p>  
        </div>
      </div>
      <div class="content-wrap flex">
        <div id="content-container" style="flex-grow: 1;">
          <div class="wrapper">
            <h1 class="wrapper-header">Welcome to evil.site! Here is a little about us</h1>
            <p class="wrapper-p">
              Evil.site is a free and private webhosting. We allow anything to be hosted within reason<br>
              We keep no data on users and the only thing required is an SSH key for logging in<br>
              We offer multiple other privacy and data saving services for free and public use<br>
              We plan to make privacy mainstream
            </p>
          </div>
          <hr class="wrapper-seperator">
          <div class="wrapper">
            <h1 class="wrapper-header">Contact evil.site staff</h1>
            <p class="wrapper-p">
              XMPP: <span class="ys">request@evil.pm</span> - For requesting webhosting<br>
              EMAIL: <span class="ys">evil.site@disroot.org</span> - For requesting webhosting<br>
              For legal enquires contact us here:  email : evilsite ' @ ' protonmail.com<br>
              For government SR we have a 100% transparancy report, non negotionable<br>
            </p>
          </div>
        </div>


        <div id="right-sidebar" style="display: block;">
          <div class="sidebar-wrapper">  
            <h1 class="wrapper-header">
              Evil's features
            </h1>
            <ul>
              <li>Javascript Free</li>
              <li>Privacy orientated</li>
              <li>Fast connection</li>
              <li>SSH access</li>
              <li>No censorship</li>
            </ul>
          </div>
          <hr class="wrapper-seperator">
          <div class="sidebar-wrapper">  
            <h1 class="wrapper-header">
              Quick navigation
            </h1>
            <ul>
	      <li><a href="https://evil.pm">XMPP</a></li>
              <li><a href="https://nitter.evil.site">Nitter</a></li>
              <li><a href="https://bin.evil.site">Pirvatebin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
