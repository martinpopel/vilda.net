<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content="Portfolio and basic information about me, Vilém Zouhar (Vilda).">
  <meta name="keywords" content="Vilém Zouhar, ViliX64, ViliX, Programmer, Freelancer, Portfolio, Student, Mathematics, MFF, HTML, CSS, XML, JavaScript, C++, C#">
  <meta name="author" content="Vilém Zouhar">
  <link rel='stylesheet' type='text/css'  href='css/text.css'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>Vilda | Vilém Zouhar</title>
  <meta name="viewport" content="width=device-width">
</head>

<body style='padding-top: 50px; padding-bottom: 100px; background-color: #F0F0F0;'>
  <div id='whole' style='max-width: 910px; margin:auto;'>
    <div id='menu' style='display: inline-block; max-width: 200px; margin-right: 20px; vertical-align: top;'>
      <header id='name' style='margin-left: 20px; margin-top: 20px;'>Vilém Zouhar</header>
      <img src='src/portrait.webp' alt='portrait' style='width: 120px; margin-left: 15px; margin-top: 10px;'>
      <nav>
        <ul>
          <li><a class='a_0' href='?p=about'>About</a></li>
          <li><a class='a_0' href='?p=portfolio'>Portfolio</a></li>
        </ul>
      </nav>
    </div>
    <main id='container' style='display: inline-block; max-width: 700px; min-width: 300px;'>
      <div style='width: 100%'>
        <?php
            $allowed = array('about', 'portfolio');
            if(in_array($_GET['p'], $allowed) )
                echo file_get_contents("pages/". $_GET['p'] . ".html");
            else
                echo file_get_contents("pages/about.html");
        ?>
      </div>    
    </main>
  </div>
  
  <!-- Loads Mukta:400 -->
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Mukta:400' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
</body>
</html>
