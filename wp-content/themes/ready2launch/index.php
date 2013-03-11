<?php 
global $options;
foreach ($options as $value) {
if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } }
/*<?php bloginfo('name'); ?>*/
get_header();
?>
  <div id="rocket">
    <div id="block">
      <div id="block-text"><h1><?php echo $rdy_title_content; ?></h1>
        <p>
          <span class="alt-heading"><img src="http://www.seventhheavensalon.net/wp-content/uploads/2013/02/Seventhheavenlogo-1.png" border=0 alt="Seventh Heaven Salon"</span>
        </p>
        <p>
          <span class="text"><?php $content = $rdy_text_content;
                  $replace[1] = '/
                  /';
                  $replacement[1] = '<br />';
                  $content = preg_replace($replace,$replacement,$content);
                  echo $content;
                  ?>
          </span>
        </p>
        <div id="contact">
          <div id="contact-left">
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="<?php echo $rdy_left_text; ?>" class="twitter" /><a href="<?php echo $rdy_left_link; ?>"><?php echo $rdy_left_text; ?></a>
          </div>
          <div id="contact-right">
            <a href="<?php echo $rdy_right_link; ?>"><?php echo $rdy_right_text; ?></a><img src="<?php bloginfo('template_directory'); ?>/images/mail.png" alt="<?php echo $rdy_right_text; ?>" class="mail" />
          </div>
        </div>
        <h2 class="second-head"><?php echo $rdy_second_heading; ?></h2>
        <?php include "$rdy_count_mail.html";?>
      </div>
    </div>
    </div>  
<?php 
get_footer();
?>