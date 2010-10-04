<div id="footer">

    <div id="footer-widget-area">

      <div id="footer-widget-area-first">
        <ul>
          <li class="widget-container widget_categories">
            <h3 class="widget-title"><?php echo __('Recent Topics', '', 'blueprint') ?></h3>
            <ul>
              <li><a href="">Lorem ipsum dolor sit amet 1</a></li>
              <li><a href="">Lorem ipsum dolor sit amet 2</a></li>
              <li><a href="">Lorem ipsum dolor sit amet 3</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- #footer-widget-area-first -->

      <div id="footer-widget-area-second">
        <ul>
          <li class="widget-container widget_categories">
            <h3 class="widget-title"><?php echo __('Pages', '', 'blueprint') ?></h3>
            <ul>
              <li>
                <a href="<?php echo url_for('@homepage') ?>" title="<?php echo __('Home', '', 'blueprint') ?>"><?php echo __('Home', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/index') ?>" title="<?php echo __('Blog', '', 'blueprint') ?>"><?php echo __('Blog', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="" title="<?php echo __('Settings', '', 'blueprint') ?>"><?php echo __('Settings', '', 'blueprint') ?></a>
                <ul class='children'>
                  <li>
                    <a href="" title="<?php echo __('Users', '', 'blueprint') ?>"><?php echo __('Users', '', 'blueprint') ?></a>
                  </li>
                  <li>
                    <a href="" title="<?php echo __('Preferences', '', 'blueprint') ?>"><?php echo __('Preferences', '', 'blueprint') ?></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="" title="<?php echo __('About', '', 'blueprint') ?>"><?php echo __('About', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="" title="<?php echo __('Help', '', 'blueprint') ?>"><?php echo __('Help', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/xhtmlTestPage') ?>" title="<?php echo __('XHTML Test Page', '', 'blueprint') ?>"><?php echo __('XHTML Test Page', '', 'blueprint') ?></a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- #footer-widget-area-second -->

      <div id="footer-widget-area-third">
        <ul>
          <li class="widget-container widget_categories">
            <h3 class="widget-title"><?php echo __('Recent Topics', '', 'blueprint') ?></h3>
            <ul>
              <li><a href="">Lorem ipsum dolor sit amet 1</a></li>
              <li><a href="">Lorem ipsum dolor sit amet 2</a></li>
              <li><a href="">Lorem ipsum dolor sit amet 3</a></li>
            </ul>
          </li>

          <li class="widget-container widget_categories">
            <h3 class="widget-title"><?php echo __('Archives', '', 'blueprint') ?></h3>
            <ul>
              <li><a href=""><?php echo __('June', '', 'blueprint') ?> 2010</a></li>
              <li><a href=""><?php echo __('July', '', 'blueprint') ?> 2010</a></li>
              <li><a href=""><?php echo __('August', '', 'blueprint') ?> 2010</a></li>
            </ul>
          </li>

        </ul>
      </div><!-- #footer-widget-area-third -->

    </div><!-- #footer-widget-area -->

    <hr/>
    
    <div id="footer-info">

      <div id="site-info">
        <a href="<?php url_for('@homepage', true) ?>" title="<?php echo __($sf_response->getTitle(), '') ?>"><?php echo __($sf_response->getTitle(), '') ?></a>
      </div><!-- #site-info -->

      <div id="site-generator">
        <?php echo __('Powered by', '', 'blueprint') ?><br/>
        <a href="http://wordpress.org/">WordPress</a> <?php echo __('and', '', 'blueprint') ?>
        <a href="http://www.symfony-project.org/" style="background:none; padding-left: 0">symfony, The PHP Framework</a><br/>
        <a href="http://www.symfony-project.org/plugins/themeBlueprintPlugin" style="background:none; padding-left: 0">Blueprint Theme</a>
        <?php echo __('by', '', 'blueprint') ?> <a href="http://tech.rgou.net" style="background:none; padding-left: 0">Rafael Goulart</a>
      </div><!-- #site-generator -->

    </div><!-- #footer-info -->

</div><!-- #footer -->

</div><!-- #wrapper -->

  </body>
</html>
