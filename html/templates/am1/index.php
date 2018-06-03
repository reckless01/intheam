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
     <!-- custom -->
     <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/maintheme.css" type="text/css" />
   </head>
    <body>
      <!-- main container -->
      <div class='main_container'>
        <!-- header -->
        <div class='header'>Header</div>
          <!-- mid container - includes main content area and right sidebar -->
          <div class='mid_container'>
            <!-- main content area -->
            <div class='main_content_area'>
              <jdoc:include type="modules" name="position-3" style="xhtml" />
              <jdoc:include type="message" />
              <jdoc:include type="component" />
              <jdoc:include type="modules" name="position-2" style="none" />
            </div>
            <!-- right sidebar -->
            <div style='clear:both;'></div>
          </div>
          <!-- footer -->
          <div class='footer'>
            Footer
        </div>
      </div>






    </body>
</html>
