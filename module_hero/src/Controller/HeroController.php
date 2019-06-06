<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * This is our hero controller.
 */
class HeroController extends ControllerBase {

  public function heroList() {

   $heroes = [
      ['hero_name' => 'What is Digital Forensic?', 'real_name' => 'The application of computer science and investigative procedures for a legal purpose involving the analysis of digital evidence after proper search authority, chain of custody, validation with mathematics, use of validated tools, repeatability, reporting, and possible expert presentation'],
       
      ['hero_name' => 'Does database forensic include in Digital Forensic application?', 'real_name' => 'True'],
       
      ['hero_name' => 'Which of the following is NOT focus of digital forensic analysis?', 'real_name' => 'Enhancement'],
       
      ['hero_name' => 'Which of the following represents the step of scientific methodI- Develop hypothesis based on evidenceII-        Calculate hash value of evidenceIII- Test the hypothesis to look for additional evidence IV-make an imaging of the          original evidence?', 'real_name' => 'All Above'],
       
      ['hero_name' => 'What is the Primary Objectives of Digital Forensic for Business and Industry?', 'real_name' => 'Security'],
      ['hero_name' => 'Which of the following hold the highest value of evidence in the court?', 'real_name' => 'Real'],
      ['hero_name' => 'Which of the following is FALSE?', 'real_name' => 'The digital forensic investigator must maintain absolute objectivity'],
      ['hero_name' => 'What is the Primary Objectives of Digital Forensic for Business and Industry', 'real_name' => 'Security']
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
