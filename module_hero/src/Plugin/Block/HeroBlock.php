<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Questions Answers for Server".
 *
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $heroes = [
      ['hero_name' => 'How many states are in the USA?', 'real_name' => '50'],
      ['hero_name' => 'How old is America?', 'real_name' => '238 years'],
      ['hero_name' => 'How many people are in the US?', 'real_name' => '324,406,583 Citizens'],
      ['hero_name' => 'Who won the 2016 Election?', 'real_name' => 'Donald Trump'],
      ['hero_name' => 'Who discovered America?', 'real_name' => 'Columbus'],
      ['hero_name' => 'What percentage of Americans vote?', 'real_name' => '59.7 percent'],
      ['hero_name' => 'When was slavery abolished in USA?', 'real_name' => 'December 6, 1865'],
      ['hero_name' => 'How many Americans died in Vietnam?', 'real_name' => '58,209 Americans']
    ];

    $table = [
      '#type' => 'table',
      '#header' => [
        $this->t('Questions'),
        $this->t('Answers'),
      ]
    ];

    foreach($heroes as $hero) {
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['hero_name'],
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name'],
        ],
      ];
    }

    return $table;
  }
}
