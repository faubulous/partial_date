<?php

namespace Drupal\partial_date\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Configure field instance settings for partial date ranges.
 *
 * @MigrateProcessPlugin(
 *   id = "partial_date_range_field_instance_settings"
 * )
 */
class PartialDateRangeFieldInstanceSettings extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $type = $row->getSourceProperty('type');

    if($type == "partial_date_range") {
    }

    return $value;
  }

}
