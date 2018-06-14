<?php

namespace Drupal\itm_lab3\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InformationBlock' block.
 *
 * @Block(
 *  id = "information_block",
 *  admin_label = @Translation("Information block"),
 * )
 */
class InformationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $timestamp = \Drupal::time()->getRequestTime();
    $format = format_date($timestamp, 'long');

    $build['Timestamp']['#markup'] = $format;
    return $build;
  }

}
