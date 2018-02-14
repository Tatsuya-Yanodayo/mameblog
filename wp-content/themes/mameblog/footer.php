<footer>
  <div id="footer-wrap" class="clearfix">
    <div id="footer-left">
      <div id="about_us">
        <p>ABOUT US</p>
        <?php wp_nav_menu( array('menu' => 'about_us', 'container' => '', 'menu_id' => 'about_us_items', 'menu_class' => '')); ?>
      </div>
      <div id="link">
        <p>LINK</p>
        <?php wp_nav_menu( array('menu' => 'link', 'container' => '', 'menu_id' => 'link_items', 'menu_class' => '')); ?>
      </div>
    </div>
    <div id="footer-right">
      <div class="footer_sns_box nav-box clearfix">
        <div class="sns_button twitter">
          <a href="https://twitter.com/mame_ph" title="Tweet"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="sns_button facebook">
          <a href="https://www.facebook.com/mamimatsumoto4630" title="Facebook"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="sns_button instagram">
          <a href="https://www.instagram.com/mami_matsumoto_ph/" title="Instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <p>&copy;mami matsumoto. All rights reserved.</p>
    </div>
  </div>
  <!-- footer-wrap -->
</footer>
</body>

</html>
