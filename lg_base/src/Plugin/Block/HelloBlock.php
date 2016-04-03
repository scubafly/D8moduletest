<?php
/**
 * @file
 * Contains \Drupal\first_module\Plugin\Block\HelloBlock.
 */

namespace Drupal\lg_base\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */
class HelloBlock extends BlockBase {
 /**
  * {@inheritdoc}
  */
 public function build() {
   return array(
     '#markup' => rand(1, 020202),
     '#cache' => array(
       // https://www.drupal.org/developing/api/8/cache/tags
       // node:5, invalidate this cache when node 5 is invalidated.
       // Config item or custom string.
       // Everything gets invalidated with this tag when another cached item is
       // wiht the same tag is invalidated.
       'tags' => ['block_view'],
       // https://www.drupal.org/developing/api/8/cache/contexts
       // For example if this needs to be cache per user set it to user.
       // Or user.roles or user.role:rolename or language etc.
       'contexts' => [],
       // https://www.drupal.org/developing/api/8/cache/max-age
       // In seconds or Cache::PERMANENT.
       // PERMANED does not invalidate.
       'max-age' => 60,
     ),
   );
 }

}
