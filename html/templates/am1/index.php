<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap3.3.7 -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!-- bootstrap default theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/maintheme.css"/>
   </head>


   <body>
    <div class="container text-center">
      <div id="navbar" class="row">
        <div class="col-md-12 navbar navbar-expand-lg">
          <img id="logo-am" src="<?php echo $this->baseurl ?>/images/am-img/logo/logo-1-06.png">
          <img id="ham-img" src="<?php echo $this->beaseurl ?>/images/am-img/logo/social/ham_bnw.png">
          <!-- logo goes here -->
          <!-- hamburger goes here -->
        </div>
      </div>
    </div>


    <div id="main" class="container">

      <div class="jumbotron">
        <img id="jumboimg" src="<?php echo $this->beaseurl ?>/images/am-img/lg/full-bandstage.JPG">
      </div>


      <div id="bio-section" class="row">
        <div id="bio" class="col-md-6">
          <!-- contact form here -->
          <h2> BIO </h2>
          <p>
            Hard Rock/Alternative Metal, based in Indianapolis, IN. Formed in 2018, memebers consist of Alexander Michael, Kerry Mills, Bram Epstein, and Zach Rayburn.
          </p>
          <p id="booking"><strong>For booking: 317.724.0957</strong></p>
          <p id="booking"><strong>Email: imalexandermichael@gmail.com</strong></p>
          <div class="contact-form">
            <div class="form-group">
              <label for="name">Name * </label>
              <input type="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email * </label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject * </label>
              <input type="text" class="form-control" id="subject">
            </div>
            <div class="form-group">
              <label for="message">Message * </label>
              <input type="text" class="form-control" id="subject">
            </div>
            <button id="contact-btn" type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
        <div id="bio-img" class="col-md-6">
          <!-- bio filler here -->
          <img src="<?php echo $this->baseurl ?>/images/am-img/lg/band-photo4-color.jpg">
        </div>
      </div>


      <div id="img-fill" class="row">
        <div class"col-md-12">
          <!-- social filler, maybe 2 fillers?? -->
          <img id="img-fill-1" src="<?php echo $this->baseurl ?>/images/am-img/live/d-stage.JPG">
        </div>
      </div>
    </div>


    <div class="container text-center" id="footer">

      <div class="row" id="footer-social">
        <!-- social links in footer -->
        <img id="footer-img" src="<?php echo $this->baseurl ?>/images/am-img/logo/social/fblogo-black.png"/>
        <img id="footer-img" src="<?php echo $this->baseurl ?>/images/am-img/logo/social/ig-bnw.png"/>
        <img id="footer-img" src="<?php echo $this->baseurl ?>/images/am-img/logo/social/yt_icon_mono_light.png"/>
        <img id="footer-img" src="<?php echo $this->baseurl ?>/images/am-img/logo/social/spot-icon-black.png"/>
      </div>

      <div class="row" id="footer-copy">
        <!-- copyright goes here -->
        <?php echo date("Y"); ?> &copy; Alexander Michael
      </div>


    </div>
   </body>
