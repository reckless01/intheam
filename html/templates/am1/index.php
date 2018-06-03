<?php defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
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

      <div class="container">
        <div id="navbar" class="row">
          <div id="logo" class="col-lg-1">
            <img id="logoam" src="<?php echo $this->baseurl ?>/images/am-img/logo/logo-1-06.png">

          </div>
          <div id="social" class="col-lg-11">
            <img id="socialimg" src="<?php echo $this->beaseurl ?>/images/am-img/logo/social/hamburger_BnW.svg">

          </div>
        </div>


        <div id="jumbo" class="jumbotron">
          <img id="jumboimg" src="<?php echo $this->beaseurl ?>/images/am-img/lg/IMG_0105.jpg">

        </div>


        <div class="row">
          <div id="bio" class="col-lg-6">
            <h2> BIO </h2>
              <p>
                Hard Rock/Alternative Meta band based in Indianapolis, Indiana. Formed in 2018, memebers consist of Alexander Michael, Kerry Mills, Bram Epstein, Zach Rayburn.
              </p>
              <p id="booking"><strong>For booking: 317.724.0957</strong></p>
              <p id="booking"><strong>Email: imalexandermichael@gmail.com</strong></p>
              <div id="contact">
                <form id="contact-form" method="post" action="contact.php" role="form">
                  <div class="messages"></div>
                    <div class="controls">

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="form_name">Name *</label>
                                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Firstname is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="form_email">Email *</label>
                                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="subject">Subject *</label>
                                <textarea id="subject" name="subject" placeholder="Subject:"></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="form_message">Message *</label>
                                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <input type="submit" id="btn-send" value="Send message">
                          </div>
                      </div>
                      <div id="text-muted" class="row">
                          <div class="col-md-12">
                              <p id="text-muted"><strong>*</strong> These fields are required.</p>
                          </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div id="bioimg" class="col-lg-6">
              <img src="<?php echo $this->baseurl ?>/images/am-img/lg/IMG_0111.jpg">

            </div>
          </div>
        <div id="imgfill" class="row">
          <div class="col-lg-6">
            <img src="<?php echo $this->baseurl ?>/images/am-img/a/IMG_0102.jpg">
          </div>
          <div class="col-lg-6">
            <img src="<?php echo $this->baseurl ?>/images/am-img/a/IMG_0061.jpg">
          </div>

        </div>


        <div class="row">
          <div class="col-lg-6">

          </div>
          <div class="col-lg-6">

          </div>

        </div>
        <div class="row">
          <div class="col-lg-6">

          </div>
          <div class="col-lg-6">

          </div>

        </div>


        <div class id="footer" class="row">
          <div class="col-lg-6">

          </div>
          <div class="col-lg-6">

          </div>

        </div>
      </div>

    </body>
</html>
