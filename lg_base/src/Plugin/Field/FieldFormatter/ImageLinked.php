<?php

/**
 * @file
 * Contains \Drupal\lg_base\Plugin\Field\FieldFormatter\ImageLinked.
 */

namespace Drupal\lg_base\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;

/**
 * Plugin implementation of the 'image_linked' formatter.
 *
 * @FieldFormatter(
 *   id = "image_linked",
 *   label = @Translation("Image with a link"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */
class ImageLinked extends ImageFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = parent::viewElements($items, $langcode);
    foreach ($elements as &$element) {
      $element['#theme'] = 'image_linked_formatter';
    }

    return $elements;
  }

}
