<?php

/**
 * @file
 * Contains a recipe for generating realistic dummy content.
 */
class cii_devel_realistic_dummy_content_recipe extends RealisticDummyContentAPIRecipe {
  function _Run_() {
    $this->NewEntities('node', 'article', 100, array('kill' => TRUE));
  }
}
