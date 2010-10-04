<?php
$themes = sfContext::getInstance()
            ->getConfiguration()
            ->getPluginConfiguration('sfThemePlugin')
            ->getThemeManager()->getAvailableThemes();

?>
          <li>
            <a href="" title="<?php echo __('Theme Switcher', '', 'blueprint') ?>"><?php echo __('Theme Switcher', '', 'blueprint') ?></a>
            <ul class='children'>
              <li>
                <a href="?sf_theme=clear" title="<?php echo __('Reset Theme', '', 'blueprint') ?>">[ <?php echo __('Reset Theme', '', 'blueprint') ?> ]</a>
              </li>
<?php foreach ($themes as $theme_key => $theme) : ?>
              <li>
                <a href="?sf_theme=<?php echo $theme_key ?>"
                   title="<?php echo $theme['description'] ?>">
                  <?php echo $theme['description'] ?>
                </a>
              </li>
<?php endforeach; ?>
            </ul>
          </li>
