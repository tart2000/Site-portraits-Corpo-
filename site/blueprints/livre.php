<?php if(!defined('KIRBY')) exit ?>

title: Livre
pages: 
  template: portrait
files: true
fields:
  title:
    label: Titre
    type:  text
  baseline: 
    label: Baseline
    type: text
  parution:
    label: Date de parution
    type:  date
    width: 1/2
  embbedLink: 
    label: Embed link
    type: Url
    width: 1/2
  client: 
    label: Client 
    type: text 
    width: 1/2
  clientLink: 
    label: Lien client
    type: Url
    width: 1/2
  trad: 
    label: Traduction (Prénom, Nom)
    type: text 
    width: 1/2
  tradlink:
    label: Lien du traducteur
    type: Url 
    width: 1/2
  design: 
    label: Design 
    type: text
    width:1/2
  designLink: 
    label: Lien du concepteur
    type: Url
    width: 1/2
  text:
    label: Text
    type:  textarea
