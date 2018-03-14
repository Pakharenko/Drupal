<?php
namespace Drupal\itc\Plugin\Field\FieldType;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldType;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
/**
 * @FieldType(
 *     id = "country",
 *     label = @Translation("Country"),
 *     default_formatter = "country_default",
 *     default_widget = "country_default"
 * )
 */
class CountryItem extends FieldItemBase {

    public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
    {
        $properties['value'] = DataDefinition::create('string')
            ->setLabel(t('Country'));
        return $properties;
    }

    public static function schema(FieldStorageDefinitionInterface $field_definition)
    {
        return [
            'columns' => [
                'value' => [
                    'type' => 'varchar',
                    'description' => t('Country'),
                    'length' => 2,
                    'not null' => FALSE,
                ],
            ],
            'indexes' => [
                'value' => ['value'],
            ]
        ];
    }
}