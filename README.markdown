# themeBlueprintPlugin #

Blueprint CSS Grid Framework theme under symfony sfThemePlugin, is based on
[Blueprint CSS Grid Framework](http://www.blueprintcss.org/).

It claims to be a strong start point for projects.

## Requirement ##

**sfThemePlugin**

<http://www.symfony-project.org/plugins/sfTheme2Plugin>

*From sfTheme2Plugin README*

*Because a dead plugin named sfThemePlugin is parked at the symfony-project site,
this package is just a placeholder for the real sfThemePlugin which is located at
<http://github.com/weaverryan/sfThemePlugin>.*

While waiting [weaverryan pull requests on sfThemePlugi](http://github.com/weaverryan/sfThemePlugin)
to be accepted, you must use my fork:

  * Instaling Requirement

*Via personal symfony package hosted on GitHub*

        ./symfony plugin:install http://github.com/downloads/rafaelgou/sfThemePlugin/sfThemePlugin-1.0.0.tgz

*Via GitHub*

        cd /path_to_symfony_project/
        git submodule add git://github.com/rafaelgou/sfThemePlugin.git plugins/sfThemePlugin
        cd plugins/sfThemePlugin
        git submodule init
        git submodule update

  * Activate the plugin in the `config/ProjectConfiguration.class.php` (if not instaled via package)

        class ProjectConfiguration extends sfProjectConfiguration
        {
          public function setup()
          {
            $this->enablePlugins(array(
              'sfThemePlugin',
              '...'
            ));
          }
        }

  * Publish assets for the plugin (if not instaled via package)

        ./symfony plugin:publish-assets

  * Clear Cache (if not instaled via package)

        ./symfony cc

## Instalation ##

  * Install the plugin (via a package)

        ./symfony plugin:install themeBlueprintPlugin

  * Install the plugin (via a GitHub)

        cd /path_to_symfony_project/
        git submodule add git://github.com/rafaelgou/sfThemePlugin.git plugins/themeBlueprintPlugin
        git submodule init
        git submodule update

  * Activate the plugin in the `config/ProjectConfiguration.class.php` (if not instaled via package)

          [php]
          class ProjectConfiguration extends sfProjectConfiguration
          {
            public function setup()
            {
              $this->enablePlugins(array(
                'sfThemePlugin',
                'themeBlueprintPlugin',
                '...'
              ));
            }
          }

  * Publish assets for the plugin (if not instaled via package)

        ./symfony plugin:publish-assets

  * Clear Cache (if not instaled via package)

        ./symfony cc

  * Optionally, activate the demo module in `apps/YOUR_APPLICATION/config/settings.yml`

        all:
          .settings:
            enabled_modules: [default, ( ...other stuff ), theme_blueprint_demo]

And you can access it with `http://www.your_symfony_domain.com/theme_blueprint_demo` and
the XHTML Test Page in `http://www.your_symfony_domain.com/theme_blueprint_demo/xhtmlTestPage`.

## Using themeBlueprintPlugin ##

It's important start reading sfThemePlugin documentation:
<http://www.symfony-project.org/plugins/sfTheme2Plugin/0_8_0?tab=plugin_readme>

###Activating blueprint theme###

Edit your `apps/YOUR_APPLICATION/config/settings.yml`

        all:
          theme:
            controller_options:
              default_theme:   blueprint

And it's done.

### Themes avaliables in the package###

**Fixed Layouts**

  * blueprint - *Blueprint Default (950px Left Sidebar)*
  * blueprint-950px-left-sidebar - *Blueprint 950px Left Sidebar*
  * blueprint-990px-left-sidebar - *Blueprint 990px Left Sidebar*
  * blueprint-1190px-left-sidebar - *Blueprint 1190px Left Sidebar*
  * blueprint-1270px-left-sidebar - *Blueprint 1270px Left Sidebar*
  * blueprint-950px-right-sidebar - *Blueprint 950px Right Sidebar*
  * blueprint-990px-right-sidebar - *Blueprint 990px Right Sidebar*
  * blueprint-1190px-right-sidebar - *Blueprint 1190px Right Sidebar*
  * blueprint-1270px-right-sidebar - *Blueprint 1270px Right Sidebar*
  * blueprint-950px-one-column - *Blueprint 950px One Column*
  * blueprint-990px-one-column - *Blueprint 990px One Column*
  * blueprint-1190px-one-column - *Blueprint 1190px One Column*
  * blueprint-1270px-one-column - *Blueprint 1270px One Column*
  * blueprint-950px-three-column - *Blueprint 950px Three Column*
  * blueprint-990px-three-column - *Blueprint 990px Three Column*
  * blueprint-1190px-three-column - *Blueprint 1190px Three Column*
  * blueprint-1270px-three-column - *Blueprint 1270px Three Column*

**Liquid Layouts**

  * blueprint-liquidgrid-80%-left-sidebar - *Blueprint Liquid 80% Left Sidebar*
  * blueprint-liquidgrid-90%-left-sidebar - *Blueprint Liquid 90% Left Sidebar*
  * blueprint-liquidgrid-98%-left-sidebar - *Blueprint Liquid 98% Left Sidebar*
  * blueprint-liquidgrid-100%-left-sidebar - *Blueprint Liquid 100% Left Sidebar*
  * blueprint-liquidgrid-80%-right-sidebar - *Blueprint Liquid 80% Right Sidebar*
  * blueprint-liquidgrid-90%-right-sidebar - *Blueprint Liquid 90% Right Sidebar*
  * blueprint-liquidgrid-98%-right-sidebar - *Blueprint Liquid 98% Right Sidebar*
  * blueprint-liquidgrid-100%-right-sidebar - *Blueprint Liquid 100% Right Sidebar*
  * blueprint-liquidgrid-80%-one-column - *Blueprint Liquid 80% One Column*
  * blueprint-liquidgrid-90%-one-column - *Blueprint Liquid 90% One Column*
  * blueprint-liquidgrid-98%-one-column - *Blueprint Liquid 98% One Column*
  * blueprint-liquidgrid-100%-one-column - *Blueprint Liquid 100% One Column*
  * blueprint-liquidgrid-80%-three-column - *Blueprint Liquid 80% Three Column*
  * blueprint-liquidgrid-90%-three-column - *Blueprint Liquid 90% Three Column*
  * blueprint-liquidgrid-98%-three-column - *Blueprint Liquid 98% Three Column*
  * blueprint-liquidgrid-100%-three-column - *Blueprint Liquid 100% Three Column*

## Demo ##

Demo can be viewed on:

<http://symfony.rgou.net> or <http://rgou.net/symfony>
