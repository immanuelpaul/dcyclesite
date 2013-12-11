<?php 

/**
 * @file
 * Functions by Dcycle continuous integration.
 */

/**
 * tests to run on drush dcycle-test dcycle_deploy
 */
function dcycle_deploy_dcycle_test() {
  return array(
    'commands' => array(
      'Clear cache' => array(
        'commands' => array(
          'drush cc all',
        ),
        'expect-no-response' => TRUE,
      ),
      'Run Simpletests' => array(
        'commands' => array(
          // cc all because otherwise the environment might not
          // pick up new tests in the MyModule group
          'drush test-run dcyclesite',
        ),
        'fail' => array(
          'grep' => array(
            '/[1-9] fails/',
            '/[1-9][0-9]* fails/',
            '/[1-9] exceptions/',
            '/[1-9][0-9]* exceptions/',
          ),
        ),
      ),
      'Run Code Review' => array(
        'commands' => array(
          'drush coder-review --minor --comment dcycle_deploy dcyclesite',
        ),
        'fail' => array(
          'grep' => array(
            '/[1-9] normal warnings/',
            '/[1-9][0-9]* normal warnings/',
            '/[1-9] minor warnings/',
            '/[1-9][0-9]* minor warnings/',
          ),
        ),
        'expect-no-response' => TRUE,
      ),
    ),
  );
}
