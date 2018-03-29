<?php

namespace Drupal\commerce_product_moderation\Plugin\Action;

use Drupal\content_moderation\Plugin\Action\ModerationOptOutUnpublishNode;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Alternate action plugin that can opt-out of modifying moderated entities.
 *
 * @see \Drupal\commerce_product\Plugin\Action\PublishProduct
 */
class ModerationOptOutUnpublishProduct extends ModerationOptOutUnpublishNode {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration, $plugin_id, $plugin_definition,
      $container->get('commerce_product_moderation.moderation_information')
    );
  }

}
