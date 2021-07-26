<?php

namespace Drupal\partial_date\Plugin\migrate\field;

use Drupal\migrate\Plugin\MigrationInterface;
use Drupal\migrate_drupal\Plugin\migrate\field\FieldPluginBase;

/**
 * Field Plugin for partial date migrations.
 *
 * @MigrateField(
 *   id = "partial_date",
 *   core = {7},
 *   type_map = {
 *     "partial_date" = "partial_date",
 *     "partial_date_range" = "partial_date_range",
 *   },
 *   source_module = "partial_date",
 *   destination_module = "partial_date",
 * )
 */
class PartialDate extends FieldPluginBase {
  /**
   * {@inheritdoc}
   */
  public function alterFieldMigration(MigrationInterface $migration) {
    $settings = [
      'partial_date' => [
        'plugin' => 'partial_date_field_settings',
      ],
      'partial_date_range' => [
        'plugin' => 'partial_date_range_field_settings',
      ],
    ];

    $migration->mergeProcessOfProperty('settings', $settings);
  }

  /**
   * {@inheritdoc}
   */
  public function alterFieldInstanceMigration(MigrationInterface $migration) {
    $settings = [
      'partial_date' => [
        'plugin' => 'partial_date_field_instance_settings',
      ],
      'partial_date_range' => [
        'plugin' => 'partial_date_range_field_instance_settings',
      ],
    ];

    $migration->mergeProcessOfProperty('settings', $settings);
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldFormatterMap() {
    return [
      $this->pluginId . '_default' => $this->pluginId . '_formatter',
    ];
  }

    /**
   * {@inheritdoc}
   */
  public function getFieldWidgetMap() {
    return [
      $this->pluginId => $this->pluginId . '_widget',
    ];
  }
}
