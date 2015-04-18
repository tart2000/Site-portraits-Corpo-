<?php if(!defined('KIRBY')) exit ?>

title: Livre
pages: 
  template: portrait
files: true
fields:
  title:
    label: Titre
    type:  text
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
  text:
    label: Text
    type:  textarea
