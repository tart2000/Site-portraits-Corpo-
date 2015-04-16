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
    label: Entreprise
    type: text
    width: 1/2
  companyLink:
    label: Site de l'entreprise
    type: Url
    width: 1/2
  text:
    label: Text
    type:  textarea
