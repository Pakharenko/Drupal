<?php

namespace Drupal\itc\Plugin\Field\FieldFormatter;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * @FieldFormatter(
 *     id = "country_default",
 *     label = @Translation("Country"),
 *     field_types = {
 *          "country"
 *     }
 * )
 */
class CountryDefaultFormatter extends FormatterBase {

    public function viewElements(FieldItemListInterface $items, $langcode)
    {
        $elements = [];
        $countries = \Drupal::service('country_manager')->getList();
        foreach ($items as $delta => $item){
            if(isset($countries[$item->value])){
                $elements[$delta] = [
                    '#type' => 'markup',
                    '#markup' => '<h2>'.$countries[$item->value].'</h2>'
                ];
            }
        }
        return $elements;
    }
}