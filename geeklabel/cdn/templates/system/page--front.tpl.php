<?php
/**
 *  Custom front page.
 */
?>

<!-- START BANNER SECTION -->
<section class="section banner">
  <div class="container">
    <div class="banner--wrap">
      <div class="row">
      <?php if ($logo): ?>
        <div class="col-md-12 animated slideInDown">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>">       
        </div>
        <?php endif; ?>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 animated slideInUp">
          <?php print render($page['home_banner'])?>
        </div>         
      </div>        
    </div>
    <a href="#design" class="down--btn down--btn__pink">
      <i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i>
    </a> 
  </div><!-- /.container -->
</section>
<!-- END BANNER SECTION -->


<?php if ($page['sections']): ?>
<?php print render($page['sections'])?>
<?php endif; ?>


<!-- START SERVICE SECTION -->
<?php if ($page['services']): ?>
<section id="services" class="section section--white l-padded"> 
  <div class="container">
      <h2 class="section__title animated fadeInUp">Services</h2>

      <div class="row space-top">
      <?php print render($page['services'])?>
      </div>

      <a href="#clients" class="down--btn down--btn__black ">
        <i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i>
      </a> 
  </div><!-- /.container -->    
</section>
 <?php endif; ?>
<!-- END SERVICE SECTION -->

<!-- START CLIENTS SECTION -->

<?php
    $query_member = new EntityFieldQuery();
    $result_clients = $query_member->entityCondition('entity_type', 'node')
      ->entityCondition('bundle', 'clients')
      ->execute();
    $nodes_clients = node_load_multiple(array_keys($result_clients['node']));

    
?>
<?php if (!empty($nodes_clients)) : ?>
<section id="clients" class="section l-padded"> 
  <div class="container">
      <h2 class="section__title animated fadeInUp">Clients</h2>
      
      <div class="section__center">
        <div id="clients-slider" class="owl-carousel owl-theme animated fadeInUp hidden-sm">
        <?php foreach($nodes_clients as $client): ?>
        <div class="item text-center"><img src="<?php echo file_create_url($client->field_clientz_image['und'][0]['uri']); ?>" /></div> 
         <?php endforeach; ?>
                 
        </div>

        <div id="clients1-slider" class="owl-carousel owl-theme animated fadeInUp visible-sm">
        
          <div class="item text-center">
           <?php print render($page['clients1'])?>
                         
          </div> 

          <div class="item text-center">
          <?php print render($page['clients2'])?>
                       
          </div>                 
        </div>

        <!-- <div id="clients1-slider" class="owl-carousel owl-theme animated fadeInUp visible-sm">
          <div class="item text-center">
            <?php 
            $index = 0;
            foreach($nodes_clients as $client): ?>
              <?php 
              
              if ($index % 3 === 0): ?>
                </div><div class="item text-center">
              <?php endif ;?>
              <p><img src="<?php echo file_create_url($client->field_clientz_image['und'][0]['uri']); ?>" /></p>            
              <?php $index = $index + 1;?>
              <?php endforeach; ?>          
          </div>                 
        </div> -->
      </div>
      
      <a href="#how-to-find" class="down--btn down--btn__black">
        <i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i>
      </a>  
  </div><!-- /.container -->    
</section>
<?php endif;?>

<!-- END CLIENTS SECTION -->

<!-- START HOW TO FIND SECTION -->
    <section id="how-to-find" class="section l-padded"> 
      <div class="container-fluid">
          <h2 class="section__title animated fadeInUp">How to find us</h2>

          <div class="row">
            <div class="map-section">
              <div id="map"></div>
            </div>  
          </div>

          <a href="#contact" class="down--btn down--btn__pink">
            <i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i><i class="fa fa-angle-down"></i>
          </a> 
      </div><!-- /.container -->    
    </section>
    <!-- END HOW TO FIND SECTION -->

    <!-- START CONTACT SECTION -->
    <?php if ($page['contact']): ?>
    <section id="contact" class="section l-padded"> 
      <div class="container">
      <h2 class="section__title animated fadeInUp">Contact</h2>
      <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
           <?php print render($page['contact'])?>
          
            <div class="form-group">  
                <div class="contact--info"> 
                  <div class="hidden-xs hidden-sm">
                    <div class="contact--info__text">Or phone on: <a class="contact--info__text-link" href="tel:01923 220121">01923 220121</a></div>
                  </div>
                  <div class="visible-xs visible-sm">           
                    <div class="contact--info__text">
                      <a class="contact--info__text-link" href="tel:01923 220121"><i class="fa fa-phone"></i>01923 220121</a>
                    </div>
                    <div class="contact--info__text">
                      <a class="contact--info__text-link" href="mailto:info@compucorp.co.uk"><i class="fa fa-envelope-o"></i>info@compucorp.co.uk</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          
      </div><!-- /.container -->    
    </section>
   <?php endif; ?>
    <!-- END CONTACT SECTION -->





