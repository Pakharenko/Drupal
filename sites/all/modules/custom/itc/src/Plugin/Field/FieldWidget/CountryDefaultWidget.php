<?php

namespace Drupal\itc\Plugin\Field\FieldWidget;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @FieldWidget(
 *     id = "country_default",
 *     label = @Translation("Country default"),
 *     field_types = {
 *          "country"
 *     }
 * )
 */
class CountryDefaultWidget extends WidgetBase {

    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state)
    {
        $elements = [];
        $elements['value'] = [
            '#type' => 'select',
            '#options' => \Drupal::service('country_manager')->getList(),
            '#title' => t('Select country')
        ];
        return $elements;
    }
}