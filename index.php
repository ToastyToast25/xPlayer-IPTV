<?php 
include("Xtream_api.php"); 
// Do not remove or won't work
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("inc/head.php"); ?>
   </head>
   <body onselectstart="return false" oncontextmenu="return false" ondragstart="return false">
      <!-- LOGIN -->
      <div id="login" class="container-fluid standard-bg">
         <!-- HEADER -->
         <div class="row header-top">
            <div class="col-lg-3 col-md-6 col-sm-12">
               <a class="main-logo" href="index.php"><img style="height:180px;" src="assets/<?php echo $template; ?>/img/logo-player.png" class="main-logo" alt="<?php echo IPTV_NAME; ?>" title="<?php echo IPTV_NAME; ?>"></a>
            </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
               
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="right-center">
               <?php if(ENABLE_TEST == 1) { ?>
                  <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">Free Test Now</button>
               <?php } ?>
               </div>
            </div>
         </div>
         <!-- MENU -->
         <div class="row home-mega-menu ">
            <div class="col-md-12">
               
            </div>
         </div>
         <!-- LOGIN -->
         <div class="row">
            <div class="container">
               <section class="registration col-lg-12 col-md-12">
                  <div class="row secBg">
                     <div class="large-12 columns">
                        <div class="login-register-content">
                           <div class="row">
                              <div class="col-md-12 text-center login-header">
                                 <h2 class="title main-head-title"><?php echo HOME_WELCOME; ?></h2>
                                 <p><?php echo HOME_WELCOME_TEXT; ?></p>
                              </div>
                              
                              <div class="col-md-12 login-header">
        <?php if($_GET['sess'] == 'teste') { ?>
        <div class="alert alert-danger"><b>AN ERROR OCCURRED</b> Sorry, you have already requested a test in our system.</div>                         
        <?php } ?>
        <?php if($_GET['sess'] == 'block') { ?>
        <div class="alert alert-danger"><b>USER BLOCKED</b> Sorry, your user is blocked or expired. Please contact support.</div> 
        <?php } ?>
        <?php if($_GET['sess'] == 'erro') { ?>
        <div class="alert alert-danger"><b>INVALID DATA</b> Sorry, it was not possible to log in, data not found in the system.</div> 
        <?php } ?>      
                            
                              </div>
                              <div class="clearfix spacer"></div>
                            
                              <div class="col-md-6">
                      <div class="register-form">
                         <h2 class="title main-head-title"><?php echo HOME_TXT_LOGIN; ?></h2>
                         <form method="POST" action="">
                         <input type="hidden" name="op" value="login"/>
                         <label><?php echo HOME_TXT_USER; ?></label>
                                       <div class="input-group">
                                          <span class="fa fa-user login-inputicon"></span>
                                          <input type="text" style="color:#000000;" name="username" required>
                                       </div>
                                       <label><?php echo HOME_TXT_PASS; ?></label>
                                       <div class="input-group">
                                          <span class="fa fa-lock login-inputicon"></span>
                                          <input type="password" style="color:#000000;" name="password" required> 
                                       </div>
                                       
                                       <div class="login-btn-box">
                                          <button class="access-btn" type="submit"><?php echo HOME_BUTTON_LOGIN; ?></button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            
         </div>
      </div>
      <!-- FOOTER -->
      <div id="footer" class="container-fluid footer-background">
         <div class="container">
            <footer>
              <?php include("inc/footer.php"); ?>
            </footer>
         </div>
      </div>

      <?php include("inc/scripts.php"); ?>
      
      <!-- MODAL -->
      <?php if(ENABLE_TEST == 1) { ?>
      <div id="enquirypopup" class="modal fade in " role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content row">
               <div class="modal-header custom-modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h2 class="icon"><?php echo HOME_TXT_TEST; ?></h2>
                  <p><?php echo HOME_TXT_TEST_DESC; ?><br> for <?php echo HOURS; ?> <?php echo HOME_TXT_HOURS; ?></p>
               </div>
               <div class="modal-body">
                  <form name="info_form" class="form-inline" action="" method="POST">
                  <input type="hidden" name="op" value="create_test">
                     <div class="form-group col-sm-12">
                        <input type="text" style="color:#000000;" class="form-control" name="name" id="name" placeholder="<?php echo HOME_FIELD_NAME; ?>" required>
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="email" style="color:#000000;" class="form-control" name="email" id="email" placeholder="<?php echo HOME_FIELD_EMAIL; ?>" required>
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="text" style="color:#000000;" class="form-control" name="wa" id="wa" placeholder="<?php echo HOME_FIELD_WA; ?>">
                     </div>
                     <div class="form-group col-sm-12">
                        <button class="subscribe-btn pull-right" type="submit" title="Send"><?php echo HOME_BUTTON_TEST; ?></button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </body>
</html>

