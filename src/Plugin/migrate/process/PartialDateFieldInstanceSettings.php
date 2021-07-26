<?php

namespace Drupal\partial_date\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Configure field instance settings for partial dates.
 *
 * @MigrateProcessPlugin(
 *   id = "partial_date_field_instance_settings"
 * )
 */
class PartialDateFieldInstanceSettings extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    return $value;
  }

}
