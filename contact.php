<!DOCTYPE HTML>
<html>

<head>
  <title>DI Artes Manuais</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/colour.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">

    <!-- begin header -->
  <header>
      <div id="logo"><h1>DI<a href="#">ARTES</a>MANUAIS</h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="about.html">Meu trabalho</a></li>
          <li><a href="#">Galeria</a>
            <ul>
              <li><a href="portfolio_one.html">Artigos para casa</a></li>
              <li><a href="portfolio_two.html">Roupas e acessórios</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
        <h1>Contato</h1>
        <p></p>
        <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // David Carter at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where David Carter has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
          $to = 'enter email address here';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Nome</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Mensagem</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" /></p>
          </div>
        </form>
      </div>
      <div id="right_content">
        <img src="images/contact.jpg" width="450" height="450" title="contact" alt="contact" />
      </div>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p>Copyright &copy; 2012 PhotoArtWork2. All Rights Reserved. </p>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
