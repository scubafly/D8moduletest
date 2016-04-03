<?php
/**
@file
Contains \Drupal\lg_base\Controller\FirstController.
 */

namespace Drupal\lg_base\Controller;

use Drupal\Core\Controller\ControllerBase;

class LgBaseController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}
