    <div id="nav">
        <ul>
          <li>
            <a href="<?php echo url_for('@homepage') ?>" title="<?php echo __('Home', '', 'blueprint') ?>"><?php echo __('Home', '', 'blueprint') ?></a>
          </li>
          <li>
            <a href="<?php echo url_for('theme_blueprint_demo/index') ?>" title="<?php echo __('Sample', '', 'blueprint') ?>"><?php echo __('Sample', '', 'blueprint') ?></a>
            <ul class='children'>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/index') ?>" title="<?php echo __('Index', '', 'blueprint') ?>"><?php echo __('Index', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/sample')?>" title="<?php echo __('Sample page', '', 'blueprint') ?>"><?php echo __('Sample page', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/grid')?>" title="<?php echo __('Grid', '', 'blueprint') ?>"><?php echo __('Grid', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/elements')?>" title="<?php echo __('Typography', '', 'blueprint') ?>"><?php echo __('Typography', '', 'blueprint') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_blueprint_demo/forms')?>" title="<?php echo __('Forms', '', 'blueprint') ?>"><?php echo __('Forms', '', 'blueprint') ?></a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo url_for('theme_blueprint_demo/xhtmlTestPage') ?>" title="<?php echo __('XHTML Test Page', '', 'blueprint') ?>"><?php echo __('XHTML Test Page', '', 'blueprint') ?></a>
          </li>
<?php include_theme_partial('nav_themes') ?>
        </ul>
    </div><!-- #access -->