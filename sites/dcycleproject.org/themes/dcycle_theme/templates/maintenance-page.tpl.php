<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>New Dcycle coming soon.</title>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex, nofollow">
    <style>

      body {
        background: #B0C4DE;
      }
      #h1-wrapper {
        display: table;
        position: absolute;
        width: 95%;
        height: 95%;
      }
      h1 {
        padding: 10%;
        color: #2F4F4F;
        display: table-cell;
        vertical-align: middle;
        font-family: 'Geo', sans-serif;
        text-transform: uppercase;
        font-size: 3em;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <div id="h1-wrapper">
      <h1>
        New&nbsp;Dcycle coming&nbsp;soon.
      </h1>
    </div>
  </body>
</html>