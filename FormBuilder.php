<?php
  namespace FormBuilder;
  include 'Form.php';

  use FormBuilder\Form;
  class FormBuilder
  {
    public function buildContactForm()
    {
      $form = new Form("traitement.php");
      $form->addInput("Motif", "motif", null, null)
           ->addInput("Mail", "mail", true, "mail")
           ->addTextarea("Message", "message", true)
           ->addSelect("Destinataire", "destinataire", ["Administration", "Formateurs", "Réseau"])
           ->setSubmit("Valider");
           return $form;
    }
  }
