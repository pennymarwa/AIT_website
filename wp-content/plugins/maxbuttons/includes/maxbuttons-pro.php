<?php

$url = MB()->get_plugin_url();
$img_url = $url . "images/gopro/"; 
?>
<?php
$admin = MB()->getClass('admin'); 
$page_title = __("Upgrade to Pro","maxbuttons"); 
$version = maxAdmin::getAdversion(); 

$buy_now_top = '<a class="page-title-action add-new-h2 max-btn" href="
https://maxbuttons.com/pricing/?utm_source=mbf-dash' . $version . '&utm_medium=mbf-plugin&utm_content=buy-now&utm_campaign=buy-now-top' . $version . '" target="_blank">' . __("Buy Now", "maxbuttons") . "</a>"; 

$middle_buy = "https://maxbuttons.com/pricing/?utm_source=mbf-dash$version&utm_medium=mbf-plugin&utm_content=buy-now&utm_campaign=buy-now-1selling$version"; 

$bottom_buy = "https://maxbuttons.com/pricing/?utm_source=mbf-dash$version&utm_medium=mbf-plugin&utm_content=buy-now&utm_campaign=getitnow$version"; 
 
$admin->get_header(array("title" => $page_title, "title_action" => $buy_now_top, 'action' => 'gopro' ) );



?>
   <link rel="stylesheet" type="text/css" href="<?php echo $url ?>assets/css/bootstrap.css">
   <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>   
    <div class="wrapper-inner">

        <!-- content -->
        <div class="content">
          <div class="section section1">
            <div class="container">
              <h2><?php _e("Upgrade to MaxButtons Pro - It's Only $19!","maxbuttons") ?></h2>
              <p>
                <?php _e("If you've created at least one button with MaxButtons, then you know what it can do: Unlimited colors. Rounded corners. Gradients. Text shadowing. Box shadowing.","maxbuttons"); ?>
              </p>
              <div class="rating">
                <div class="stars">
                  <img class="inline-block im-responsive" src="<?php echo $img_url ?>star.png" alt="star" />
                  <img class="inline-block im-responsive" src="<?php echo $img_url ?>star.png" alt="star" />
                  <img class="inline-block im-responsive" src="<?php echo $img_url ?>star.png" alt="star" />
                  <img class="inline-block im-responsive" src="<?php echo $img_url ?>star.png" alt="star" />
                  <img class="inline-block im-responsive" src="<?php echo $img_url ?>star.png" alt="star" />
                </div>
                <p>
                 <?php printf(__("%s out of 5 stars","maxbuttons"), '4.7'); ?>
                </p>
              </div>
              <p>
                <?php printf(__('Now you can take your buttons to the next level with MaxButtons Pro and join over %1$s 4,000 customers %2$s who have given more than 200 %1$s 5 star ratings %2$s','maxbuttons'), '<strong>', '</strong>'); ?>
              </p>
            </div>
          </div>

          <div class="section section2">
            <div class="container">
              <h2><?php _e("MaxButtons Pro Brings You Powerful Additional Features","maxbuttons"); ?></h2>
              <div class="row">
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>button-btn.png" alt="btn" />
                  </div>
                  <p>
                   <?php _e('30 Ready to Go Basic Buttons plus 10 Free Button Packs','maxbuttons'); ?>
                  </p>
                </div>
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>submit-btn.png" alt="btn" />
                  </div>
                  <p>
                   <?php _e('Two lines of Editable Text','maxbuttons') ?>
                  </p>
                </div>
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>fb-btn.png" alt="btn" />
                  </div>
                  <p>
                   <?php _e('Add an Icon to Your Buttons','maxbuttons'); ?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>font-btn.png" alt="btn" />
                  </div>
                  <p>
                    <?php _e('Font Awesome Icons','maxbuttons'); ?>
                  </p>
                </div>
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>search-btn.png" alt="btn" />
                  </div>
                  <p>
                    <?php _e('Button Search','maxbuttons'); ?>
                  </p>
                </div>
                <div class="col col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="feature">
                    <img class="img-responsive" src="<?php echo $img_url ?>analytic-btn.png" alt="btn" />
                  </div>
                  <p>
                    <?php _e('Google Analytics Event Tracking','maxbuttons'); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="section section3">
            <div class="container">
              <h2><?php _e('#1 Selling WordPress Button Plugin!','maxbuttons'); ?></h2>
              <div class="price inline-block">
                <span><?php _e('$19','maxbuttons'); ?></span>
              </div>
              <a href="<?php echo $middle_buy ?>" class="max-btn inline-block"><?php _e('Buy Now','maxbuttons'); ?></a>
            </div>
          </div>

          <div class="section section4">
            <div class="container">
              <h2><?php _e('Just Take A Look At The Types of Buttons You Can Make With MaxButtons Pro','maxbuttons'); ?></h2>
              <img class="img-responsive" src="<?php echo $img_url ?>types.png" alt="types" />
            </div>
          </div>

          <div class="section section5">
            <div class="container">
              <h2><?php _e('Purchase Professionally Designed, Production Ready Button Packs','maxbuttons'); ?></h2>
              <p>
                <?php _e('Button packs are sets of buttons with icons and settings already predefined for you, saving you loads of time. We have an ever-growing collection of button packs that you can buy and import into your website (only $5 each). You can then use those buttons as they are, or customize them to fit your needs (below are a few to get you started).','maxbuttons'); ?>
              </p>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack1.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack2.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack3.png" alt="pack" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack4.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack5.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack6.png" alt="pack" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack7.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack8.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack9.png" alt="pack" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section section6">
            <div class="container">
              <h2><?php _e('MaxButtons Pro Comes with these Free Button Packs','maxbuttons'); ?></h2>
              <p>
               <?php _e('MaxButtons Pro brings you the most Configured and Designed Social Share Collections for WordPress.  Along your ability use use our terrific button editor you can be ready out of the box or design exactly the look and feel you want.','maxbuttons'); ?>
              </p>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack10.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack11.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack12.png" alt="pack" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack13.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack14.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack15.png" alt="pack" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack16.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack17.png" alt="pack" />
                  </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                  <div class="col">
                    <img class="img-responsive" src="<?php echo $img_url ?>pack18.png" alt="pack" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section section7">
            <div class="container">
              <h2><?php _e('17 Social Share Collections Are Included') ?></h2>
              <p>
                <?php _e('MaxButtons Pro brings you the largest number of configured and designed Social Share Collections. Be ready out of the box with our Collections or use our terrific editor to get exactly the look and feel you want.','maxbuttons'); ?>
              </p>
              <div class="shares">
                <img class="img-responsive" src="<?php echo $img_url ?>share-sprite.png" alt="shares" />
              </div>
            </div>
          </div>

          <div class="section section8">
            <div class="container">
              <h2><?php _e('Get MaxButtons Pro Now!','maxbuttons'); ?></h2>
              <a href="<?php echo $bottom_buy ?>" class="max-btn"><?php _e('Get It Now','maxbuttons'); ?></a>
            </div>
          </div>
        </div>
        <!-- content -->

      </div>

    </div>
    <!-- wrapper -->
	
 
<?php $admin->get_footer(); ?> 
