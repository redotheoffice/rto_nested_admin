<?php

require_once dirname(__FILE__).'/../../lib/symfony/1.2/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    // for compatibility / remove and enable only the plugins you want
    $this->enableAllPluginsExcept(array('sfPropelPlugin', 'sfCompat10Plugin'));
    // $this->enablePlugins(array('sfDoctrinePlugin'));
    // $this->disablePlugins(array('sfPropelPlugin'));
    
    // use trunk version of sfDoctrine
    // sfConfig::set('sfDoctrinePlugin_doctrine_lib_path', sfConfig::get('sf_lib_dir') . '/../../lib/doctrine/trunk/lib/Doctrine.php');
  }
}
