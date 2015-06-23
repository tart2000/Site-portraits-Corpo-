<?php if(!defined('KIRBY')) exit ?>

title: Portrait
pages: 
  template : portrait_en
files:
  sortable: true
fields:
  title:
    label: Nom
    type:  text
  company:
    label: Titre
    type: text
    width: 1/2
  companyLink:
    label: Site de l'entreprise
    type: Url
    width: 1/2
  programme:
    label: Programme
    type: text
  baseline: 
    label: Baseline
    type: textarea
  text:
    label: Text
    type:  textarea
  credit: 
    label: Crédit photo (Prénom Nom)
    type: text

