<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Our example Form.
 */
class ExampleForm extends FormBase {

  /**
   * {@inheritdoc}
   */
   public function getFormId() {
     return "module_hero_exampleform";
   }

   /**
    * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state) {

     

      $form['settings']['active'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('What is Digital Forensic?'),
        '#default_value' => 1,
        '#options' => array(
          0 => $this
            ->t('Process of using scientific knowledge in analysis and presentation of evidence in court'),
          1 => $this
            ->t('
                The application of computer science and investigative procedures for a legal purpose involving the analysis of digital evidence after proper search authority, chain of custody, validation with mathematics, use of validated tools, repeatability, reporting, and possible expert presentation'),
          2 => $this
            ->t('A process where we develop and test hypotheses that answer questions about digital events'),
          3 => $this
            ->t('
                Use of science or technology in the investigation and establishment of the facts or evidence in a court of law'),
        ),
        
      );
      
        
      $form['settings1']['active1'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Does database forensic include in Digital Forensic application?'),
        '#default_value' => 2,
        '#options' => array(
          0 => $this
            ->t('True'),
          1 => $this
            ->t('False'),
         
        ),
        
      );
      
        
      $form['example_select'] = [
        '#type' => 'select',
        '#title' => $this
          ->t('What is the Primary Objectives of Digital Forensic for Business and Industry?'),
        '#options' => [
          '1' => $this
            ->t('Aviability of Service'),
          '2' => $this
            ->t('Continuity of Operation'),
          '3' => $this
            ->t('Prosecution'),
          '4' => $this
            ->t('Security'),
        ],
      ];
        
      
        
      $form['settings2']['active2'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Which of the following is NOT focus of digital forensic analysis?'),
        '#default_value' => 3,
        '#options' => array(
          0 => $this
            ->t('Authenticity'),
          1 => $this
            ->t('Comparison'),
          2 => $this
            ->t('Proving'),
          3 => $this
            ->t('Enhancement'),
        ),
        
      );
        
      $form['settings3']['active3'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Which of the following represents the step of scientific methodI- Develop hypothesis based on evidenceII- Calculate hash value of            evidenceIII- Test the hypothesis to look for additional evidence IV-make an imaging of the original evidence?'),
        '#default_value' => 4,
        '#options' => array(
          0 => $this
            ->t('All of Above'),
          1 => $this
            ->t('I & III'),
          2 => $this
            ->t('II & IV'),
          3 => $this
            ->t('II, III & IV'),
        ),
        
      );
      
        
        
      $form['example_select1'] = [
        '#type' => 'select',
        '#title' => $this
          ->t('What is the Primary Objectives of Digital Forensic for Business and Industry?'),
        '#options' => [
          '1' => $this
            ->t('Aviability of Service'),
          '2' => $this
            ->t('Continuity of Operation'),
          '3' => $this
            ->t('Prosecution'),
          '4' => $this
            ->t('Security'),
        ],
      ];
        
        
        
      $form['settings4']['active4'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('What is the Primary Objectives of Digital Forensic for Business and Industry?'),
        '#default_value' => 5,
        '#options' => array(
          0 => $this
            ->t(' 
                Availability of service'),
          1 => $this
            ->t('Continuity of operation'),
          2 => $this
            ->t('Prosecution'),
          3 => $this
            ->t('Security'),
        ),
        
      );
        
      $form['settings5']['active5'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Which of the following hold the highest value of evidence in the court?'),
        '#default_value' => 6,
        '#options' => array(
          0 => $this
            ->t('Documentary'),
          1 => $this
            ->t('Demonstrative'),
          2 => $this
            ->t('Testimonial'),
          3 => $this
            ->t('Real'),
        ),
        
      );
      
       $form['settings6']['active6'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Which of the following is FALSE?'),
        '#default_value' => 7,
        '#options' => array(
          0 => $this
            ->t('
                The digital forensic investigator must maintain absolute objectivity'),
          1 => $this
            ->t('It is the investigator’s job to determine someone’s guilt or innocence.'),
          2 => $this
            ->t('
                It is the investigator’s responsibility to accurately report the relevant facts of a case.'),
          3 => $this
            ->t('
                The investigator must maintain strict confidentiality, discussing the results of an investigation on only a “need to know” ba'),
        ),
        
      );
        
    
    

     

      $form['expiration'] = array(
        '#type' => 'date',
        '#title' => $this
          ->t('Today Date'),
        '#default_value' => array(
          'year' => 2020,
          'month' => 2,
          'day' => 15,
        ),
      );
        
        
       $form['text'] = array(
        '#type' => 'textarea',
        '#title' => $this
          ->t('Leave comments (optional)'),
      );

      $form['copy'] = array(
        '#type' => 'checkbox',
        '#title' => $this
          ->t('Send me a copy'),
      );
        
      
      $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit Test'),
    ];
    
     
     
        

      return $form;
    }

    /**
     * {@inheritdoc}
     */
     public function submitForm(array &$form, FormStateInterface $form_state) {
       drupal_set_message('Thank you for the Test.');
         
         
       drupal_set_message(
        'Your Test Score:  ' . rand(4,7)
    );
       
     }
}
