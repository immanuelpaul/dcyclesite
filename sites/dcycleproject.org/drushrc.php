<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'mysql.aegir.koumbit.net';
$options['db_port'] = '3306';
$options['db_passwd'] = 'YAXfLUzoun';
$options['db_name'] = 'dcycleprojecto_0';
$options['db_user'] = 'dcycleprojecto_0';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.24',
      'description' => 'This platform is running Drupal 7.24',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/profiles/standard/standard.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.24',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'actions_permissions' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1354500015',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.1',
    ),
    'admin_devel' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'admin_menu' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc4',
        'project' => 'admin_menu',
        'datestamp' => '1359651687',
        'php' => '5.2.4',
      ),
      'project' => 'admin_menu',
      'version' => '7.x-3.0-rc4',
    ),
    'admin_views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/admin_views/admin_views.module',
      'name' => 'admin_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration views',
        'description' => 'Replaces all system object management pages in Drupal core with real views.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations',
        ),
        'files' => 
        array (
          0 => 'plugins/views_plugin_display_system.inc',
          1 => 'plugins/views_plugin_access_menu.inc',
          2 => 'tests/admin_views.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'admin_views',
        'datestamp' => '1368873911',
        'php' => '5.2.4',
      ),
      'project' => 'admin_views',
      'version' => '7.x-1.2',
    ),
    'advanced_help' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'advanced_help.module',
          1 => 'advanced_help.install',
        ),
        'version' => '7.x-1.0',
        'project' => 'advanced_help',
        'datestamp' => '1321022730',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.0',
    ),
    'aggregator' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'apachesolr' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/apachesolr/apachesolr.module',
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr framework',
        'description' => 'Framework for searching with Solr',
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/settings',
        'files' => 
        array (
          0 => 'apachesolr.install',
          1 => 'apachesolr.module',
          2 => 'apachesolr.admin.inc',
          3 => 'apachesolr.index.inc',
          4 => 'apachesolr.interface.inc',
          5 => 'Drupal_Apache_Solr_Service.php',
          6 => 'Apache_Solr_Document.php',
          7 => 'Solr_Base_Query.php',
          8 => 'plugins/facetapi/adapter.inc',
          9 => 'plugins/facetapi/query_type_date.inc',
          10 => 'plugins/facetapi/query_type_term.inc',
          11 => 'plugins/facetapi/query_type_numeric_range.inc',
          12 => 'plugins/facetapi/query_type_geo.inc',
          13 => 'tests/Dummy_Solr.php',
          14 => 'tests/apachesolr_base.test',
          15 => 'tests/solr_index_and_search.test',
          16 => 'tests/solr_base_query.test',
          17 => 'tests/solr_base_subquery.test',
          18 => 'tests/solr_document.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'apachesolr',
        'datestamp' => '1384712308',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.6',
    ),
    'apachesolr_access' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
      'name' => 'apachesolr_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Access',
        'description' => 'Integrates node access and other permissions with Apache Solr search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'apachesolr_access.module',
          1 => 'tests/apachesolr_access.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'apachesolr',
        'datestamp' => '1384712308',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.6',
    ),
    'apachesolr_attachments' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/apachesolr_attachments/apachesolr_attachments.module',
      'name' => 'apachesolr_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search attachments',
        'description' => 'Search file attachments with Solr',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'apachesolr_attachments.admin.inc',
          1 => 'apachesolr_attachments.install',
          2 => 'apachesolr_attachments.module',
        ),
        'version' => '7.x-1.3',
        'project' => 'apachesolr_attachments',
        'datestamp' => '1375909868',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_attachments',
      'version' => '7.x-1.3',
    ),
    'apachesolr_search' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search',
        'description' => 'Search with Solr',
        'dependencies' => 
        array (
          0 => 'search',
          1 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/search-pages',
        'files' => 
        array (
          0 => 'apachesolr_search.install',
          1 => 'apachesolr_search.module',
          2 => 'apachesolr_search.admin.inc',
          3 => 'apachesolr_search.pages.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'apachesolr',
        'datestamp' => '1384712308',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.6',
    ),
    'apps' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/apps/apps.module',
      'name' => 'apps',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apps',
        'description' => 'Provides Interface for Install Apps from A drupal app server',
        'package' => 'Distribution Management',
        'version' => '7.x-1.0-beta7',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'update',
        ),
        'files' => 
        array (
          0 => 'apps.module',
          1 => 'apps.updater.inc',
          2 => 'apps.installer.inc',
          3 => 'apps.test',
        ),
        'project' => 'apps',
        'datestamp' => '1345171003',
        'php' => '5.2.4',
      ),
      'project' => 'apps',
      'version' => '7.x-1.0-beta7',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'backup_migrate.module',
          1 => 'backup_migrate.install',
          2 => 'includes/destinations.inc',
          3 => 'includes/profiles.inc',
          4 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-2.8',
        'project' => 'backup_migrate',
        'datestamp' => '1383686305',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate',
      'version' => '7.x-2.8',
    ),
    'backup_migrate_files' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/backup_migrate_files/backup_migrate_files.module',
      'name' => 'backup_migrate_files',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate Files',
        'description' => 'Add file backup and restore support to backup and migrate.',
        'dependencies' => 
        array (
          0 => 'backup_migrate',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'backup_migrate_files.install',
          1 => 'backup_migrate_files.module',
          2 => 'includes/destinations.filesource.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'backup_migrate_files',
        'datestamp' => '1380555221',
        'php' => '5.2.4',
      ),
      'project' => 'backup_migrate_files',
      'version' => '7.x-1.x-dev',
    ),
    'basque_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/basque_services.module',
      'name' => 'basque_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Basque Services',
        'description' => 'Provide the Basque Services: Zabaldu, Bildu, Aupatu',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'block' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'blog' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'book' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'boxes' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/boxes/boxes.module',
      'name' => 'boxes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boxes',
        'description' => 'Provides exports for custom blocks and spaces integration.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'block',
        ),
        'files' => 
        array (
          0 => 'boxes.module',
          1 => 'boxes.admin.inc',
          2 => 'plugins/boxes_box.inc',
          3 => 'plugins/boxes_simple.inc',
          4 => 'plugins/spaces_controller_boxes.inc',
          5 => 'tests/boxes.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'boxes',
        'datestamp' => '1358977511',
        'php' => '5.2.4',
      ),
      'project' => 'boxes',
      'version' => '7.x-1.1',
    ),
    'bulk_export' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'captcha' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha',
        'files' => 
        array (
          0 => 'captcha.module',
          1 => 'captcha.inc',
          2 => 'captcha.admin.inc',
          3 => 'captcha.install',
          4 => 'captcha.test',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'captcha',
        'datestamp' => '1303939314',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'captcha',
      'version' => '7.x-1.0-alpha3',
    ),
    'cck' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/cck/cck.module',
      'name' => 'cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCK',
        'description' => 'Miscellaneous field functions not handled by core.',
        'package' => 'CCK',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'cck.module',
          1 => 'cck.install',
        ),
        'dependencies' => 
        array (
          0 => 'field_ui',
        ),
        'version' => '7.x-2.x-dev',
        'project' => 'cck',
        'datestamp' => '1380557700',
        'php' => '5.2.4',
      ),
      'project' => 'cck',
      'version' => '7.x-2.x-dev',
    ),
    'color' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'colorbox' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/colorbox/colorbox.module',
      'name' => 'colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorbox',
        'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
        'dependencies' => 
        array (
          0 => 'libraries (2.x)',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/media/colorbox',
        'files' => 
        array (
          0 => 'views/colorbox_handler_field_colorbox.inc',
        ),
        'version' => '7.x-2.4',
        'project' => 'colorbox',
        'datestamp' => '1365452412',
        'php' => '5.2.4',
      ),
      'project' => 'colorbox',
      'version' => '7.x-2.4',
    ),
    'comment' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'contact' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'content_migrate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/cck/modules/content_migrate/content_migrate.module',
      'name' => 'content_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Migrate',
        'description' => 'Migrate fields and field data from CCK D6 format to the D7 field format. Required to migrate data, can be disabled once all fields have been migrated.',
        'core' => '7.x',
        'package' => 'CCK',
        'files' => 
        array (
          0 => 'content_migrate.module',
          1 => 'content_migrate.api.php',
          2 => 'includes/content_migrate.admin.inc',
          3 => 'includes/content_migrate.values.inc',
          4 => 'includes/content_migrate.drush.inc',
          5 => 'modules/content_migrate.text.inc',
          6 => 'modules/content_migrate.number.inc',
          7 => 'modules/content_migrate.optionwidgets.inc',
          8 => 'modules/content_migrate.filefield.inc',
          9 => 'tests/content_migrate.test',
        ),
        'version' => '7.x-2.x-dev',
        'project' => 'cck',
        'datestamp' => '1380557700',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cck',
      'version' => '7.x-2.x-dev',
    ),
    'context' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/context.test',
          1 => 'tests/context.conditions.test',
          2 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.1',
        'project' => 'context',
        'datestamp' => '1381976667',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.1',
    ),
    'contextual' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'context_layouts' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/context_layouts_reaction_block.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'context',
        'datestamp' => '1381976667',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.1',
    ),
    'context_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.1',
        'project' => 'context',
        'datestamp' => '1381976667',
        'php' => '5.2.4',
      ),
      'project' => 'context',
      'version' => '7.x-3.1',
    ),
    'css3pie' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/css3pie/css3pie.module',
      'name' => 'css3pie',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS3PIE',
        'description' => 'Provides CSS3PIE (http://css3pie.com/) library support.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'libraries',
          1 => 'ctools',
        ),
        'configure' => 'admin/config/user-interface/css3pie',
        'version' => '7.x-2.1',
        'project' => 'css3pie',
        'datestamp' => '1332951952',
        'php' => '5.2.4',
      ),
      'project' => 'css3pie',
      'version' => '7.x-2.1',
    ),
    'ctools' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6008',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'current_search' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/facetapi/contrib/current_search/current_search.module',
      'name' => 'current_search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Current Search Blocks',
        'description' => 'Provides an interface for creating blocks containing information about the current search.',
        'dependencies' => 
        array (
          0 => 'facetapi',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/current_search/item.inc',
          1 => 'plugins/current_search/item_active.inc',
          2 => 'plugins/current_search/item_group.inc',
          3 => 'plugins/current_search/item_text.inc',
          4 => 'tests/current_search.test',
        ),
        'configure' => 'admin/config/search/current_search',
        'version' => '7.x-1.3',
        'project' => 'facetapi',
        'datestamp' => '1364861711',
        'php' => '5.2.4',
      ),
      'project' => 'facetapi',
      'version' => '7.x-1.3',
    ),
    'dashboard' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.24',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'date' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_api.test',
          1 => 'tests/date.test',
          2 => 'tests/date_field.test',
          3 => 'tests/date_validation.test',
          4 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_all_day' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_api' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_context' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_ical' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date_ical/date_ical.module',
      'name' => 'date_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date iCal',
        'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
        'package' => 'Date/Time',
        'php' => '5.3',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views (>=7.x-3.5)',
          1 => 'date_views',
          2 => 'entity',
          3 => 'libraries (>=7.x-2.0)',
          4 => 'date',
          5 => 'date_api',
        ),
        'files' => 
        array (
          0 => 'includes/date_ical_plugin_row_ical_entity.inc',
          1 => 'includes/date_ical_plugin_row_ical_fields.inc',
          2 => 'includes/date_ical_plugin_style_ical_feed.inc',
          3 => 'includes/DateiCalFeedsParser.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'date_ical',
        'datestamp' => '1384805609',
      ),
      'project' => 'date_ical',
      'version' => '7.x-3.0',
    ),
    'date_migrate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
      'name' => 'date_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Migration',
        'description' => 'Provides support for importing into date fields with the Migrate module.',
        'core' => '7.x',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'migrate',
          1 => 'date',
        ),
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'date_migrate.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'date_migrate',
          4 => 'features',
          5 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.6',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_popup' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_tools' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views_default.inc',
          5 => 'includes/date_views.views.inc',
          6 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'dblog' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'dblogin' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/dblogin/dblogin.module',
      'name' => 'dblogin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DB Login',
        'description' => 'Provide menu link to log directly into DB Admin software for this database.',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'dblogin',
        'datestamp' => '1355259704',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'dblogin',
      'version' => '7.x-1.1',
    ),
    'dcycle_deploy' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/custom/dcycle_deploy/dcycle_deploy.module',
      'name' => 'dcycle_deploy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dcycle deploy',
        'description' => 'Deploy the Dcycle website',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'dcycle_feature',
          1 => 'markdown',
          2 => 'timeago',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => '',
      'version' => NULL,
    ),
    'dcycle_feature' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/features/dcycle_feature/dcycle_feature.module',
      'name' => 'dcycle_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'dcycle_feature',
        'core' => '7.x',
        'package' => 'Features',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'admin_menu_toolbar',
          1 => 'block',
          2 => 'color',
          3 => 'comment',
          4 => 'contextual',
          5 => 'ctools',
          6 => 'dashboard',
          7 => 'dblog',
          8 => 'features',
          9 => 'field_ui',
          10 => 'file',
          11 => 'googleanalytics',
          12 => 'help',
          13 => 'i18n',
          14 => 'i18n_block',
          15 => 'i18n_menu',
          16 => 'i18n_node',
          17 => 'i18n_string',
          18 => 'i18n_translation',
          19 => 'image',
          20 => 'l10n_update',
          21 => 'link',
          22 => 'list',
          23 => 'locale',
          24 => 'markdown',
          25 => 'menu',
          26 => 'mollom',
          27 => 'node_convert',
          28 => 'number',
          29 => 'openid',
          30 => 'options',
          31 => 'overlay',
          32 => 'path',
          33 => 'pathauto',
          34 => 'rdf',
          35 => 'search',
          36 => 'shortcut',
          37 => 'strongarm',
          38 => 'taxonomy',
          39 => 'token',
          40 => 'translation',
          41 => 'update',
          42 => 'variable',
          43 => 'views',
          44 => 'views_ui',
        ),
        'ctools' => 
        array (
          0 => 'strongarm:strongarm:1',
          1 => 'views:views_default:3.0',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'filter' => 
          array (
            0 => 'markdown',
          ),
        ),
        'field' => 
        array (
          'node-article-body' => 'node-article-body',
          'node-article-field_tags' => 'node-article-field_tags',
          'node-article-field_image' => 'node-article-field_image',
          'node-faq-body' => 'node-faq-body',
          'node-feature-body' => 'node-feature-body',
          'node-feature-field_download' => 'node-feature-field_download',
          'node-feature-field_drupal_version' => 'node-feature-field_drupal_version',
          'node-feature-field_home_page' => 'node-feature-field_home_page',
          'node-feature-field_instructions' => 'node-feature-field_instructions',
          'node-feature-field_issues' => 'node-feature-field_issues',
          'node-feature-field_short_description' => 'node-feature-field_short_description',
          'node-featured_content-body' => 'node-featured_content-body',
          'node-featured_content-field_term_ref' => 'node-featured_content-field_term_ref',
          'node-page-body' => 'node-page-body',
          'node-page-field_dcycle_hidden_image' => 'node-page-field_dcycle_hidden_image',
        ),
        'filter' => 
        array (
          'filtered_html' => 'filtered_html',
          'full_html' => 'full_html',
          'plain_text' => 'plain_text',
        ),
        'language' => 
        array (
          'en' => 'en',
        ),
        'node' => 
        array (
          'article' => 'article',
          'page' => 'page',
          'faq' => 'faq',
          'feature' => 'feature',
          'featured_content' => 'featured_content',
        ),
        'taxonomy' => 
        array (
          'featured_content_location' => 'featured_content_location',
          'tags' => 'tags',
        ),
        'variable' => 
        array (
          'comment_anonymous_article' => 'comment_anonymous_article',
          'comment_anonymous_faq' => 'comment_anonymous_faq',
          'comment_anonymous_feature' => 'comment_anonymous_feature',
          'comment_anonymous_featured_content' => 'comment_anonymous_featured_content',
          'comment_anonymous_page' => 'comment_anonymous_page',
          'comment_article' => 'comment_article',
          'comment_default_mode_article' => 'comment_default_mode_article',
          'comment_default_mode_faq' => 'comment_default_mode_faq',
          'comment_default_mode_feature' => 'comment_default_mode_feature',
          'comment_default_mode_featured_content' => 'comment_default_mode_featured_content',
          'comment_default_mode_page' => 'comment_default_mode_page',
          'comment_default_per_page_article' => 'comment_default_per_page_article',
          'comment_default_per_page_faq' => 'comment_default_per_page_faq',
          'comment_default_per_page_feature' => 'comment_default_per_page_feature',
          'comment_default_per_page_featured_content' => 'comment_default_per_page_featured_content',
          'comment_default_per_page_page' => 'comment_default_per_page_page',
          'comment_faq' => 'comment_faq',
          'comment_feature' => 'comment_feature',
          'comment_featured_content' => 'comment_featured_content',
          'comment_form_location_article' => 'comment_form_location_article',
          'comment_form_location_faq' => 'comment_form_location_faq',
          'comment_form_location_feature' => 'comment_form_location_feature',
          'comment_form_location_featured_content' => 'comment_form_location_featured_content',
          'comment_form_location_page' => 'comment_form_location_page',
          'comment_page' => 'comment_page',
          'comment_preview_article' => 'comment_preview_article',
          'comment_preview_faq' => 'comment_preview_faq',
          'comment_preview_feature' => 'comment_preview_feature',
          'comment_preview_featured_content' => 'comment_preview_featured_content',
          'comment_preview_page' => 'comment_preview_page',
          'comment_subject_field_article' => 'comment_subject_field_article',
          'comment_subject_field_faq' => 'comment_subject_field_faq',
          'comment_subject_field_feature' => 'comment_subject_field_feature',
          'comment_subject_field_featured_content' => 'comment_subject_field_featured_content',
          'comment_subject_field_page' => 'comment_subject_field_page',
          'field_bundle_settings_node__article' => 'field_bundle_settings_node__article',
          'field_bundle_settings_node__faq' => 'field_bundle_settings_node__faq',
          'field_bundle_settings_node__feature' => 'field_bundle_settings_node__feature',
          'field_bundle_settings_node__featured_content' => 'field_bundle_settings_node__featured_content',
          'field_bundle_settings_node__page' => 'field_bundle_settings_node__page',
          'i18n_node_extended_article' => 'i18n_node_extended_article',
          'i18n_node_extended_faq' => 'i18n_node_extended_faq',
          'i18n_node_extended_featured_content' => 'i18n_node_extended_featured_content',
          'i18n_node_extended_page' => 'i18n_node_extended_page',
          'i18n_node_options_article' => 'i18n_node_options_article',
          'i18n_node_options_faq' => 'i18n_node_options_faq',
          'i18n_node_options_featured_content' => 'i18n_node_options_featured_content',
          'i18n_node_options_page' => 'i18n_node_options_page',
          'language_content_type_article' => 'language_content_type_article',
          'language_content_type_faq' => 'language_content_type_faq',
          'language_content_type_feature' => 'language_content_type_feature',
          'language_content_type_featured_content' => 'language_content_type_featured_content',
          'language_content_type_page' => 'language_content_type_page',
          'menu_options_article' => 'menu_options_article',
          'menu_options_faq' => 'menu_options_faq',
          'menu_options_feature' => 'menu_options_feature',
          'menu_options_featured_content' => 'menu_options_featured_content',
          'menu_options_page' => 'menu_options_page',
          'menu_parent_article' => 'menu_parent_article',
          'menu_parent_faq' => 'menu_parent_faq',
          'menu_parent_feature' => 'menu_parent_feature',
          'menu_parent_featured_content' => 'menu_parent_featured_content',
          'menu_parent_page' => 'menu_parent_page',
          'node_options_article' => 'node_options_article',
          'node_options_faq' => 'node_options_faq',
          'node_options_feature' => 'node_options_feature',
          'node_options_featured_content' => 'node_options_featured_content',
          'node_options_page' => 'node_options_page',
          'node_preview_article' => 'node_preview_article',
          'node_preview_faq' => 'node_preview_faq',
          'node_preview_feature' => 'node_preview_feature',
          'node_preview_featured_content' => 'node_preview_featured_content',
          'node_preview_page' => 'node_preview_page',
          'node_submitted_article' => 'node_submitted_article',
          'node_submitted_faq' => 'node_submitted_faq',
          'node_submitted_feature' => 'node_submitted_feature',
          'node_submitted_featured_content' => 'node_submitted_featured_content',
          'node_submitted_page' => 'node_submitted_page',
          'pathauto_blog_pattern' => 'pathauto_blog_pattern',
          'pathauto_forum_pattern' => 'pathauto_forum_pattern',
          'pathauto_node_article_pattern' => 'pathauto_node_article_pattern',
          'pathauto_node_faq_pattern' => 'pathauto_node_faq_pattern',
          'pathauto_node_featured_content_pattern' => 'pathauto_node_featured_content_pattern',
          'pathauto_node_page_pattern' => 'pathauto_node_page_pattern',
          'pathauto_node_pattern' => 'pathauto_node_pattern',
          'pathauto_punctuation_hyphen' => 'pathauto_punctuation_hyphen',
          'pathauto_taxonomy_term_featured_content_location_pattern' => 'pathauto_taxonomy_term_featured_content_location_pattern',
          'pathauto_taxonomy_term_pattern' => 'pathauto_taxonomy_term_pattern',
          'pathauto_taxonomy_term_tags_pattern' => 'pathauto_taxonomy_term_tags_pattern',
          'pathauto_user_pattern' => 'pathauto_user_pattern',
          'site_frontpage' => 'site_frontpage',
          'site_name' => 'site_name',
          'site_slogan' => 'site_slogan',
          'theme_dcycle_theme_settings' => 'theme_dcycle_theme_settings',
        ),
        'views_view' => 
        array (
          'faq' => 'faq',
          'comments' => 'comments',
          'dcycle_features' => 'dcycle_features',
          'featured_content' => 'featured_content',
        ),
        'description' => '',
        'version' => NULL,
      ),
      'platform' => -1,
      'project' => '',
      'version' => NULL,
    ),
    'devel' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'devel_generate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.3',
        'project' => 'devel',
        'datestamp' => '1338940281',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'devel',
      'version' => '7.x-1.3',
    ),
    'diff' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/diff/diff.module',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Diff',
        'description' => 'Show differences between content revisions.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'DiffEngine.php',
        ),
        'version' => '7.x-3.2',
        'project' => 'diff',
        'datestamp' => '1352784357',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'diff',
      'version' => '7.x-3.2',
    ),
    'dutch_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/dutch_services.module',
      'name' => 'dutch_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dutch Services',
        'description' => 'Provide the Dutch Services: eKudos, Hyves, Nujij',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'elements' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/elements/elements.module',
      'name' => 'elements',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Elements',
        'description' => 'Provides a library of Form API elements.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'elements.module',
          1 => 'elements.theme.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'elements',
        'datestamp' => '1370667652',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'elements',
      'version' => '7.x-1.4',
    ),
    'email' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'email.migrate.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'email',
        'datestamp' => '1346254131',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'email',
      'version' => '7.x-1.2',
    ),
    'entity' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'entity',
        'datestamp' => '1376493705',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entityreference' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
          10 => 'tests/entityreference.feeds.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.1',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'project' => 'entityreference',
      'version' => '7.x-1.1',
    ),
    'entity_autocomplete' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity_autocomplete/entity_autocomplete.module',
      'name' => 'entity_autocomplete',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Autocomplete',
        'description' => 'Provides functionalities for entity fields autocompletion, like a menu callback that autocompletes any entity that defines a label, or a ready to use form element.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/entity_autocomplete.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'entity_autocomplete',
        'datestamp' => '1355614650',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'entity_autocomplete',
      'version' => '7.x-1.0-beta3',
    ),
    'entity_token' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.2',
        'project' => 'entity',
        'datestamp' => '1376493705',
        'php' => '5.2.4',
      ),
      'project' => 'entity',
      'version' => '7.x-1.2',
    ),
    'entity_translation' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity_translation/entity_translation.module',
      'name' => 'entity_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Translation',
        'description' => 'Allows entities to be translated into different languages.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'configure' => 'admin/config/regional/entity_translation',
        'dependencies' => 
        array (
          0 => 'locale (>7.14)',
        ),
        'files' => 
        array (
          0 => 'includes/translation.handler.inc',
          1 => 'includes/translation.handler.comment.inc',
          2 => 'includes/translation.handler.node.inc',
          3 => 'includes/translation.handler.taxonomy_term.inc',
          4 => 'includes/translation.handler.user.inc',
          5 => 'tests/entity_translation.test',
          6 => 'views/entity_translation_handler_relationship.inc',
          7 => 'views/entity_translation_handler_field_translate_link.inc',
          8 => 'views/entity_translation_handler_field_label.inc',
          9 => 'views/entity_translation_handler_filter_entity_type.inc',
          10 => 'views/entity_translation_handler_filter_language.inc',
          11 => 'views/entity_translation_handler_filter_translation_exists.inc',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'entity_translation',
        'datestamp' => '1374601567',
        'php' => '5.2.4',
      ),
      'project' => 'entity_translation',
      'version' => '7.x-1.0-beta3',
    ),
    'entity_translation_i18n_menu' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
      'name' => 'entity_translation_i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Translation Menu',
        'description' => 'Allows menu items to be translated on the entity form.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_translation',
          1 => 'i18n',
          2 => 'i18n_menu',
        ),
        'files' => 
        array (
          0 => 'entity_translation_i18n_menu.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'entity_translation',
        'datestamp' => '1374601567',
        'php' => '5.2.4',
      ),
      'project' => 'entity_translation',
      'version' => '7.x-1.0-beta3',
    ),
    'entity_translation_upgrade' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
      'name' => 'entity_translation_upgrade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Translation Upgrade',
        'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
        'package' => 'Multilingual - Entity Translation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_translation',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'entity_translation',
        'datestamp' => '1374601567',
        'php' => '5.2.4',
      ),
      'project' => 'entity_translation',
      'version' => '7.x-1.0-beta3',
    ),
    'environment_indicator' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/environment_indicator/environment_indicator.module',
      'name' => 'environment_indicator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Environment indicator',
        'description' => 'Adds a color indicator for the different environments.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'scripts' => 
        array (
          0 => 'environment_indicator.js',
          1 => 'color.js',
        ),
        'files' => 
        array (
          0 => 'plugins/ctools_export_ui_environment_indicator.class.php',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'environment_indicator.css',
          ),
        ),
        'version' => '7.x-2.0',
        'project' => 'environment_indicator',
        'datestamp' => '1377024690',
        'php' => '5.2.4',
      ),
      'project' => 'environment_indicator',
      'version' => '7.x-2.0',
    ),
    'facetapi' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/facetapi/facetapi.module',
      'name' => 'facetapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Facet API',
        'description' => 'An abstracted facet API that can be used by various search backends.',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/facetapi/adapter.inc',
          1 => 'plugins/facetapi/dependency.inc',
          2 => 'plugins/facetapi/dependency_bundle.inc',
          3 => 'plugins/facetapi/dependency_role.inc',
          4 => 'plugins/facetapi/empty_behavior.inc',
          5 => 'plugins/facetapi/empty_behavior_text.inc',
          6 => 'plugins/facetapi/filter.inc',
          7 => 'plugins/facetapi/query_type.inc',
          8 => 'plugins/facetapi/url_processor.inc',
          9 => 'plugins/facetapi/url_processor_standard.inc',
          10 => 'plugins/facetapi/widget.inc',
          11 => 'plugins/facetapi/widget_links.inc',
          12 => 'tests/facetapi_test.plugins.inc',
          13 => 'tests/facetapi.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'facetapi',
        'datestamp' => '1364861711',
        'php' => '5.2.4',
      ),
      'project' => 'facetapi',
      'version' => '7.x-1.3',
    ),
    'farsi_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/farsi_services.module',
      'name' => 'farsi_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Farsi Services',
        'description' => 'Provide the Farsi services: Balatarin, Donbaleh, Friendfa, Viwio.',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'favorite_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/favorite_services.module',
      'name' => 'favorite_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Favorite Services',
        'description' => 'Add the page in your favorite, work with Chrome, Firefox, IE, Opera',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'features' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'features',
        'datestamp' => '1369094412',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'features',
      'version' => '7.x-2.0-rc1',
    ),
    'feeds' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/feeds/feeds.module',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds',
        'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'job_scheduler',
        ),
        'files' => 
        array (
          0 => 'includes/FeedsConfigurable.inc',
          1 => 'includes/FeedsImporter.inc',
          2 => 'includes/FeedsSource.inc',
          3 => 'libraries/ParserCSV.inc',
          4 => 'libraries/http_request.inc',
          5 => 'libraries/PuSHSubscriber.inc',
          6 => 'plugins/FeedsCSVParser.inc',
          7 => 'plugins/FeedsFetcher.inc',
          8 => 'plugins/FeedsFileFetcher.inc',
          9 => 'plugins/FeedsHTTPFetcher.inc',
          10 => 'plugins/FeedsNodeProcessor.inc',
          11 => 'plugins/FeedsOPMLParser.inc',
          12 => 'plugins/FeedsParser.inc',
          13 => 'plugins/FeedsPlugin.inc',
          14 => 'plugins/FeedsProcessor.inc',
          15 => 'plugins/FeedsSimplePieParser.inc',
          16 => 'plugins/FeedsSitemapParser.inc',
          17 => 'plugins/FeedsSyndicationParser.inc',
          18 => 'plugins/FeedsTermProcessor.inc',
          19 => 'plugins/FeedsUserProcessor.inc',
          20 => 'tests/feeds.test',
          21 => 'tests/feeds_date_time.test',
          22 => 'tests/feeds_mapper_date.test',
          23 => 'tests/feeds_mapper_date_multiple.test',
          24 => 'tests/feeds_mapper_field.test',
          25 => 'tests/feeds_mapper_file.test',
          26 => 'tests/feeds_mapper_path.test',
          27 => 'tests/feeds_mapper_profile.test',
          28 => 'tests/feeds_mapper.test',
          29 => 'tests/feeds_mapper_config.test',
          30 => 'tests/feeds_fetcher_file.test',
          31 => 'tests/feeds_processor_node.test',
          32 => 'tests/feeds_processor_term.test',
          33 => 'tests/feeds_processor_user.test',
          34 => 'tests/feeds_scheduler.test',
          35 => 'tests/feeds_mapper_link.test',
          36 => 'tests/feeds_mapper_taxonomy.test',
          37 => 'tests/parser_csv.test',
          38 => 'views/feeds_views_handler_argument_importer_id.inc',
          39 => 'views/feeds_views_handler_field_importer_name.inc',
          40 => 'views/feeds_views_handler_field_log_message.inc',
          41 => 'views/feeds_views_handler_field_severity.inc',
          42 => 'views/feeds_views_handler_field_source.inc',
          43 => 'views/feeds_views_handler_filter_severity.inc',
        ),
        'version' => '7.x-2.0-alpha8',
        'project' => 'feeds',
        'datestamp' => '1366671911',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-alpha8',
    ),
    'feeds_import' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'description' => 'An example of a node importer and a user importer.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'feeds_importer' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_import.test',
        ),
        'name' => 'Feeds Import',
        'package' => 'Feeds',
        'php' => '5.2.4',
        'version' => '7.x-2.0-alpha8',
        'project' => 'feeds',
        'datestamp' => '1366671911',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-alpha8',
    ),
    'feeds_news' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'feeds',
          2 => 'views',
        ),
        'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
            1 => 'views:views_default:3.0',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed',
            1 => 'opml',
          ),
          'field' => 
          array (
            0 => 'node-feed_item-field_feed_item_description',
          ),
          'node' => 
          array (
            0 => 'feed',
            1 => 'feed_item',
          ),
          'views_view' => 
          array (
            0 => 'feeds_defaults_feed_items',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_news.module',
          1 => 'feeds_news.test',
        ),
        'name' => 'Feeds News',
        'package' => 'Feeds',
        'php' => '5.2.4',
        'version' => '7.x-2.0-alpha8',
        'project' => 'feeds',
        'datestamp' => '1366671911',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-alpha8',
    ),
    'feeds_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Admin UI',
        'description' => 'Administrative UI for Feeds module.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'configure' => 'admin/structure/feeds',
        'files' => 
        array (
          0 => 'feeds_ui.test',
        ),
        'version' => '7.x-2.0-alpha8',
        'project' => 'feeds',
        'datestamp' => '1366671911',
        'php' => '5.2.4',
      ),
      'project' => 'feeds',
      'version' => '7.x-2.0-alpha8',
    ),
    'field' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'field_collection' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/field_collection/field_collection.module',
      'name' => 'field_collection',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field collection',
        'description' => 'Provides a field collection field, to which any number of fields can be attached.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'field_collection.test',
          1 => 'field_collection.info.inc',
          2 => 'views/field_collection_handler_relationship.inc',
        ),
        'configure' => 'admin/structure/field-collections',
        'package' => 'Fields',
        'version' => '7.x-1.0-beta5',
        'project' => 'field_collection',
        'datestamp' => '1356475963',
        'php' => '5.2.4',
      ),
      'project' => 'field_collection',
      'version' => '7.x-1.0-beta5',
    ),
    'field_group' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Fieldgroup',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_group.install',
          1 => 'field_group.module',
          2 => 'field_group.field_ui.inc',
          3 => 'field_group.form.inc',
          4 => 'field_group.features.inc',
          5 => 'tests/field_group.ui.test',
          6 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.3',
    ),
    'field_group_test' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/field_group/tests/field_group_test.module',
      'name' => 'field_group_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fieldgroup Test',
        'description' => 'Test module for fieldgroup',
        'core' => '7.x',
        'package' => 'Fieldgroup',
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'field_group',
      'version' => '7.x-1.3',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'field_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'file' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'file_entity' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media/file_entity/file_entity.module',
      'name' => 'file_entity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File entity',
        'description' => 'Extends Drupal file entities to be fieldable and viewable.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'file_entity.field.inc',
        ),
        'configure' => 'admin/config/media/file-types',
        'version' => '7.x-1.3',
        'project' => 'media',
        'datestamp' => '1362211819',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-1.3',
    ),
    'file_styles' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/styles/contrib/file_styles/file_styles.module',
      'name' => 'file_styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Styles',
        'description' => 'Allows preset transformation of files and media for display.',
        'package' => 'Styles',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_styles.module',
          1 => 'file_styles.admin.inc',
          2 => 'includes/styles/FileStyles.inc',
        ),
        'dependencies' => 
        array (
          0 => 'styles',
          1 => 'image',
        ),
        'version' => '7.x-2.0-alpha8',
        'project' => 'styles',
        'datestamp' => '1306964517',
        'php' => '5.2.4',
      ),
      'project' => 'styles',
      'version' => '7.x-2.0-alpha8',
    ),
    'filter' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'flag' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on entities.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'files' => 
        array (
          0 => 'includes/flag/flag_flag.inc',
          1 => 'includes/flag/flag_entity.inc',
          2 => 'includes/flag/flag_node.inc',
          3 => 'includes/flag/flag_comment.inc',
          4 => 'includes/flag/flag_user.inc',
          5 => 'includes/flag.cookie_storage.inc',
          6 => 'includes/flag.entity.inc',
          7 => 'flag.rules.inc',
          8 => 'includes/views/flag_handler_argument_entity_id.inc',
          9 => 'includes/views/flag_handler_field_ops.inc',
          10 => 'includes/views/flag_handler_field_flagged.inc',
          11 => 'includes/views/flag_handler_filter_flagged.inc',
          12 => 'includes/views/flag_handler_sort_flagged.inc',
          13 => 'includes/views/flag_handler_relationships.inc',
          14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
          15 => 'tests/flag.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'flag',
        'datestamp' => '1379063829',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.2',
    ),
    'flag_actions' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/flags/actions',
        'files' => 
        array (
          0 => 'flag.install',
          1 => 'flag_actions.module',
        ),
        'version' => '7.x-3.2',
        'project' => 'flag',
        'datestamp' => '1379063829',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.2',
    ),
    'flag_bookmark' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
      'name' => 'flag_bookmark',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag Bookmark',
        'description' => 'Provides an example bookmark flag and supporting views.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'version' => '7.x-3.2',
        'project' => 'flag',
        'datestamp' => '1379063829',
        'php' => '5.2.4',
      ),
      'project' => 'flag',
      'version' => '7.x-3.2',
    ),
    'forum' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'forward_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/forward_services.module',
      'name' => 'forward_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forward Services',
        'description' => 'Add the support for Forward module which send the link through email.',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
          1 => 'forward',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'general_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/general_services.module',
      'name' => 'general_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'General Services',
        'description' => 'Blinklist, Box, del.icio.us, Digg, Diigo, Facebook, Furl, Google Bookmark, Google Plus, Icerocket, Identi.ca, Linkedin, Mister Wong, Mixx, MySpace, Newsvine, Newskicks, Phing this, Reddit, StumbleUpon, Technorati, Twitter, Yahoo',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'geofield' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/geofield/geofield.module',
      'name' => 'geofield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Geofield',
        'description' => 'Stores geographic and location data (points, lines, and polygons).',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'geophp (>=1.7)',
          1 => 'ctools',
        ),
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'geofield.module',
          1 => 'geofield.install',
          2 => 'geofield.elements.inc',
          3 => 'geofield.widgets.inc',
          4 => 'geofield.formatters.inc',
          5 => 'geofield.openlayers.inc',
          6 => 'geofield.feeds.inc',
          7 => 'tests/geofield.test',
          8 => 'views/geofield.views.inc',
          9 => 'views/handlers/geofield_handler_sort.inc',
          10 => 'views/handlers/geofield_handler_field.inc',
          11 => 'views/handlers/geofield_handler_filter.inc',
          12 => 'views/handlers/geofield_handler_argument_proximity.inc',
          13 => 'views/proximity_plugins/geofieldProximityBase.inc',
          14 => 'views/proximity_plugins/geofieldProximityManual.inc',
          15 => 'views/proximity_plugins/geofieldProximityGeocoder.inc',
          16 => 'views/proximity_plugins/geofieldProximityEntityURL.inc',
          17 => 'views/proximity_plugins/geofieldProximityOtherGeofield.inc',
          18 => 'views/proximity_plugins/geofieldProximityCurrentUser.inc',
          19 => 'views/proximity_plugins/geofieldProximityExposedFilter.inc',
          20 => 'views/proximity_plugins/geofieldProximityContextualFilter.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'geofield',
        'datestamp' => '1384708107',
        'php' => '5.2.4',
      ),
      'project' => 'geofield',
      'version' => '7.x-2.1',
    ),
    'geofield_map' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/geofield/modules/geofield_map/geofield_map.module',
      'name' => 'geofield_map',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Geofield Map',
        'description' => 'Provides a basic mapping interface for Geofields.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'geofield',
        ),
        'files' => 
        array (
          0 => 'includes/geofield_map.views.inc',
          1 => 'includes/geofield_map_plugin_style_map.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'geofield',
        'datestamp' => '1384708107',
        'php' => '5.2.4',
      ),
      'project' => 'geofield',
      'version' => '7.x-2.1',
    ),
    'geophp' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/geophp/geophp.module',
      'name' => 'geophp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'geoPHP',
        'description' => 'Wraps the geoPHP library: advanced geometry operations in PHP',
        'core' => '7.x',
        'version' => '7.x-1.7',
        'project' => 'geophp',
        'datestamp' => '1352084822',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'geophp',
      'version' => '7.x-1.7',
    ),
    'german_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/german_services.module',
      'name' => 'german_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'German Services',
        'description' => 'Provide the German Services: Alltagz, Colivia, Icio, InfoPirat, Linkarena, MeinVZ, Mister Wong, Netselektor, Oneview, Readster, seekXL, SeoIGG, Weblinkr, Webnews, Xing, Yigg',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'geshifield' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/geshifilter/geshifield/geshifield.module',
      'name' => 'geshifield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GeSHi field',
        'description' => 'Provides a field for source code with GeSHI syntax highlighting.',
        'package' => 'Filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'geshifilter',
        ),
        'version' => '7.x-1.2',
        'project' => 'geshifilter',
        'datestamp' => '1363644913',
        'php' => '5.2.4',
      ),
      'project' => 'geshifilter',
      'version' => '7.x-1.2',
    ),
    'geshifilter' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/geshifilter/geshifilter.module',
      'name' => 'geshifilter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GeSHi Filter',
        'description' => 'Provides a filter to highlight source code using the GeSHi library (Generic Syntax Highlighter)',
        'package' => 'Filters',
        'core' => '7.x',
        'configure' => 'admin/config/content/formats/geshifilter',
        'files' => 
        array (
          0 => 'geshifilter.test',
        ),
        'dependencies' => 
        array (
          0 => 'libraries (>=2.0)',
        ),
        'version' => '7.x-1.2',
        'project' => 'geshifilter',
        'datestamp' => '1363644913',
        'php' => '5.2.4',
      ),
      'project' => 'geshifilter',
      'version' => '7.x-1.2',
    ),
    'globalredirect' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/globalredirect/globalredirect.module',
      'name' => 'globalredirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Global Redirect',
        'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
        'package' => 'Path management',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'globalredirect.test',
        ),
        'configure' => 'admin/config/system/globalredirect',
        'version' => '7.x-1.5',
        'project' => 'globalredirect',
        'datestamp' => '1339748779',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'globalredirect',
      'version' => '7.x-1.5',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/googleanalytics',
        'files' => 
        array (
          0 => 'googleanalytics.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'google_analytics',
        'datestamp' => '1301340367',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'google_analytics',
      'version' => '7.x-1.2',
    ),
    'help' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'help_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'files' => 
        array (
          0 => 'help_example.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'advanced_help',
        'datestamp' => '1321022730',
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.0',
    ),
    'hidden_captcha' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/hidden_captcha/hidden_captcha.module',
      'name' => 'hidden_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hidden CAPTCHA',
        'description' => 'The hidden CAPTCHA creates a hidden box (requires CSS) that the user must NOT fill. This is useful only to block robots.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'hidden_captcha',
        'configure' => 'admin/config/people/captcha/hidden_captcha',
        'datestamp' => '1307982415',
        'php' => '5.2.4',
      ),
      'project' => 'hidden_captcha',
      'version' => '7.x-1.0',
    ),
    'honeypot' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/honeypot/honeypot.module',
      'name' => 'honeypot',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Honeypot',
        'description' => 'Mitigates spam form submissions using the honeypot method.',
        'core' => '7.x',
        'configure' => 'admin/config/content/honeypot',
        'package' => 'Spam control',
        'files' => 
        array (
          0 => 'honeypot.test',
        ),
        'version' => '7.x-1.15',
        'project' => 'honeypot',
        'datestamp' => '1379087801',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'honeypot',
      'version' => '7.x-1.15',
    ),
    'hungarian_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/hungarian_services.module',
      'name' => 'hungarian_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hungarian Services',
        'description' => 'Provide the Hungarian Service: iWiW',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'i18n' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_object.inc',
          1 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18nviews' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18nviews/i18nviews.module',
      'name' => 'i18nviews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views translation',
        'description' => 'Translation of views strings and content selection for views. Requires Views 3.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18nviews.inc',
          1 => 'i18nviews.i18n.inc',
          2 => 'includes/i18nviews_handler_argument_taxonomy_index_tid.inc',
          3 => 'includes/i18nviews_handler_argument_taxonomy_term_name.inc',
          4 => 'includes/i18nviews_handler_argument_term_language.inc',
          5 => 'includes/i18nviews_handler_argument_term_node_tid_depth.inc',
          6 => 'includes/i18nviews_handler_field_taxonomy_term_description.inc',
          7 => 'includes/i18nviews_handler_field_taxonomy_term_language.inc',
          8 => 'includes/i18nviews_handler_field_taxonomy_term_name.inc',
          9 => 'includes/i18nviews_handler_field_term_node_tid.inc',
          10 => 'includes/i18nviews_handler_filter_field_list.inc',
          11 => 'includes/i18nviews_handler_filter_taxonomy_index_tid.inc',
          12 => 'includes/i18nviews_handler_filter_taxonomy_term_name.inc',
          13 => 'includes/i18nviews_handler_filter_taxonomy_term_language.inc',
          14 => 'includes/i18nviews_handler_filter_term_node_tid_depth.inc',
          15 => 'includes/i18nviews_plugin_argument_validate_i18n_taxonomy_term.inc',
          16 => 'includes/i18nviews_plugin_localization_i18nstrings.inc',
        ),
        'version' => '7.x-3.x-dev',
        'project' => 'i18nviews',
        'datestamp' => '1380582437',
        'php' => '5.2.4',
      ),
      'project' => 'i18nviews',
      'version' => '7.x-3.x-dev',
    ),
    'i18n_block' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_boxes' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n_boxes/i18n_boxes.module',
      'name' => 'i18n_boxes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boxes translation',
        'description' => 'Provides the ability to localize Boxes blocks.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'boxes',
          1 => 'ctools',
          2 => 'i18n_string',
        ),
        'package' => 'Multilanguage',
        'files' => 
        array (
          0 => 'i18n_boxes.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'i18n_boxes',
        'datestamp' => '1334255450',
        'php' => '5.2.4',
      ),
      'project' => 'i18n_boxes',
      'version' => '7.x-1.0',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_field' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_node' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_path' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_select' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_string' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_user' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
      'name' => 'i18n_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User mail translation',
        'description' => 'Translate emails sent from the User module.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'i18n_variable',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.10',
        'project' => 'i18n',
        'datestamp' => '1377069696',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.10',
    ),
    'image' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'image_captcha' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/image_captcha',
        'files' => 
        array (
          0 => 'image_captcha.install',
          1 => 'image_captcha.module',
          2 => 'image_captcha.admin.inc',
          3 => 'image_captcha.user.inc',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'captcha',
        'datestamp' => '1303939314',
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'captcha',
      'version' => '7.x-1.0-alpha3',
    ),
    'imce' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.7',
        'project' => 'imce',
        'datestamp' => '1359476607',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'imce',
      'version' => '7.x-1.7',
    ),
    'imce_mkdir' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/imce_mkdir/imce_mkdir.module',
      'name' => 'imce_mkdir',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Mkdir',
        'description' => 'Allows users manage directories in IMCE',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'imce',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_mkdir',
        'datestamp' => '1319103332',
        'php' => '5.2.4',
      ),
      'project' => 'imce_mkdir',
      'version' => '7.x-1.0',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1317851503',
        'php' => '5.2.4',
      ),
      'project' => 'imce_wysiwyg',
      'version' => '7.x-1.0',
    ),
    'italian_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/italian_services.module',
      'name' => 'italian_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Italian Services',
        'description' => 'Provide the Italian Services: Diggita, Meemi, OkNotizie, Segnalo.com, TechNotizie, Wikio, ZicZac',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'jcarousel' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/jcarousel/jcarousel.module',
      'name' => 'jcarousel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jCarousel',
        'description' => 'Create jQuery-based carousel rotators.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jcarousel.module',
          1 => 'includes/jcarousel.views.inc',
          2 => 'includes/jcarousel_style_plugin.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'jcarousel',
        'datestamp' => '1322116852',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jcarousel',
      'version' => '7.x-2.6',
    ),
    'job_scheduler' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler',
        'description' => 'Scheduler API',
        'files' => 
        array (
          0 => 'job_scheduler.module',
          1 => 'job_scheduler.install',
          2 => 'JobScheduler.inc',
          3 => 'JobSchedulerCronTab.inc',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'job_scheduler',
      'version' => '7.x-2.0-alpha3',
    ),
    'job_scheduler_trigger' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
      'name' => 'job_scheduler_trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler Trigger',
        'description' => 'Creates scheduler triggers that fire up at certain days, times',
        'core' => '7.x',
        'php' => '5.2',
        'dependencies' => 
        array (
          0 => 'job_scheduler',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
      ),
      'project' => 'job_scheduler',
      'version' => '7.x-2.0-alpha3',
    ),
    'l10n_client' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/l10n_client/l10n_client.module',
      'name' => 'l10n_client',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization client',
        'description' => 'Provides on-page localization',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'core' => '7.x',
        'package' => 'Multilingual',
        'configure' => 'admin/config/regional/translate/client',
        'files' => 
        array (
          0 => 'l10n_client.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'l10n_client',
        'datestamp' => '1377794199',
        'php' => '5.2.4',
      ),
      'project' => 'l10n_client',
      'version' => '7.x-1.3',
    ),
    'l10n_update' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/l10n_update/l10n_update.module',
      'name' => 'l10n_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Localization update',
        'description' => 'Provides automatic downloads and updates for translations.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'core' => '7.x',
        'package' => 'Multilingual',
        'files' => 
        array (
          0 => 'l10n_update.admin.inc',
          1 => 'l10n_update.api.php',
          2 => 'l10n_update.batch.inc',
          3 => 'l10n_update.check.inc',
          4 => 'l10n_update.drush.inc',
          5 => 'l10n_update.inc',
          6 => 'l10n_update.install',
          7 => 'l10n_update.locale.inc',
          8 => 'l10n_update.module',
          9 => 'l10n_update.parser.inc',
          10 => 'l10n_update.project.inc',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'l10n_update',
        'datestamp' => '1328563848',
        'php' => '5.2.4',
      ),
      'project' => 'l10n_update',
      'version' => '7.x-1.0-beta3',
    ),
    'libraries' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'libraries',
        'datestamp' => '1362848412',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.1',
    ),
    'lightbox2' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/lightbox2/lightbox2.module',
      'name' => 'lightbox2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Lightbox2',
        'description' => 'Enables Lightbox2 for Drupal',
        'core' => '7.x',
        'package' => 'User interface',
        'files' => 
        array (
          0 => 'lightbox2.install',
          1 => 'lightbox2.module',
          2 => 'lightbox2.formatter.inc',
          3 => 'lightbox2.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/lightbox2',
        'version' => '7.x-1.0-beta1',
        'project' => 'lightbox2',
        'datestamp' => '1318819001',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'lightbox2',
      'version' => '7.x-1.0-beta1',
    ),
    'link' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.install',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.validate.test',
          8 => 'views/link_views_handler_argument_target.inc',
          9 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'link',
        'datestamp' => '1319392535',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'link',
      'version' => '7.x-1.0',
    ),
    'list' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'locale' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'mailsystem' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/mailsystem/mailsystem.module',
      'name' => 'mailsystem',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'Mail System',
        'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
        'php' => '5.0',
        'core' => '7.x',
        'configure' => 'admin/config/system/mailsystem',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'version' => '7.x-2.34',
        'project' => 'mailsystem',
        'datestamp' => '1334082653',
      ),
      'project' => 'mailsystem',
      'version' => '7.x-2.34',
    ),
    'markdown' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/markdown/markdown.module',
      'name' => 'markdown',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Markdown filter',
        'description' => 'Allows content to be submitted using Markdown, a simple plain-text syntax that is transformed into valid XHTML.',
        'package' => 'Input filters',
        'core' => '7.x',
        'version' => '7.x-1.2',
        'project' => 'markdown',
        'datestamp' => '1376552801',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'markdown',
      'version' => '7.x-1.2',
    ),
    'masquerade' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/masquerade/masquerade.module',
      'name' => 'masquerade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Masquerade',
        'description' => 'This module allows permitted users to masquerade as other users.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'masquerade.test',
        ),
        'configure' => 'admin/config/people/masquerade',
        'version' => '7.x-1.0-rc5',
        'project' => 'masquerade',
        'datestamp' => '1351786623',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'masquerade',
      'version' => '7.x-1.0-rc5',
    ),
    'maxlength' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/maxlength/maxlength.module',
      'name' => 'maxlength',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Maxlength',
        'description' => 'Limit the number of characters in textfields and textareas and shows the amount of characters left.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'maxlength.test',
        ),
        'version' => '7.x-3.0-beta1',
        'project' => 'maxlength',
        'datestamp' => '1320841536',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'maxlength',
      'version' => '7.x-3.0-beta1',
    ),
    'media' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media/media.module',
      'name' => 'media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media',
        'description' => 'Provides the core Media API',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file_entity',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'includes/MediaReadOnlyStreamWrapper.inc',
          1 => 'test/media.types.test',
          2 => 'test/media.entity.test',
        ),
        'configure' => 'admin/config/media/browser',
        'version' => '7.x-1.3',
        'project' => 'media',
        'datestamp' => '1362211819',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-1.3',
    ),
    'media_flickr' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media_flickr/media_flickr.module',
      'name' => 'media_flickr',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Flickr',
        'description' => 'Integrates Flickr.com photos and photosets with Media.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
          1 => 'media_internet',
        ),
        'files' => 
        array (
          0 => 'media_flickr.module',
          1 => 'includes/media_flickr.admin.inc',
          2 => 'includes/media_flickr.utilities.inc',
          3 => 'includes/MediaFlickrStreamWrapper.inc',
          4 => 'includes/MediaInternetFlickrHandler.inc',
          5 => 'includes/MediaFlickrStyles.inc',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'media_flickr',
        'datestamp' => '1344959823',
        'php' => '5.2.4',
      ),
      'project' => 'media_flickr',
      'version' => '7.x-1.0-alpha3',
    ),
    'media_internet' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
      'name' => 'media_internet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Internet Sources',
        'description' => 'Provides an API for accessing media on various internet services',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'files' => 
        array (
          0 => 'media_internet.module',
        ),
        'version' => '7.x-1.3',
        'project' => 'media',
        'datestamp' => '1362211819',
        'php' => '5.2.4',
      ),
      'project' => 'media',
      'version' => '7.x-1.3',
    ),
    'media_vimeo' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
      'name' => 'media_vimeo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: Vimeo',
        'description' => 'Provides Vimeo support to the Media module.',
        'package' => 'Media',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'media_vimeo.module',
          1 => 'includes/MediaInternetVimeoHandler.inc',
          2 => 'includes/MediaVimeoStreamWrapper.inc',
          3 => 'includes/MediaVimeoStyles.inc',
          4 => 'includes/media_vimeo.formatters.inc',
          5 => 'includes/media_vimeo.styles.inc',
          6 => 'includes/media_vimeo.variables.inc',
        ),
        'dependencies' => 
        array (
          0 => 'media_internet',
        ),
        'version' => '7.x-1.0-beta5',
        'project' => 'media_vimeo',
        'datestamp' => '1332792648',
        'php' => '5.2.4',
      ),
      'project' => 'media_vimeo',
      'version' => '7.x-1.0-beta5',
    ),
    'media_youtube' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/media_youtube/media_youtube.module',
      'name' => 'media_youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media: YouTube',
        'description' => 'Provides YouTube support to the Media module.',
        'package' => 'Media',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'media_youtube.module',
          1 => 'includes/MediaInternetYouTubeHandler.inc',
          2 => 'includes/MediaYouTubeStreamWrapper.inc',
          3 => 'includes/MediaYouTubeStyles.inc',
          4 => 'includes/media_youtube.formatters.inc',
          5 => 'includes/media_youtube.styles.inc',
          6 => 'includes/media_youtube.variables.inc',
        ),
        'dependencies' => 
        array (
          0 => 'media_internet',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'media_youtube',
        'datestamp' => '1331655643',
        'php' => '5.2.4',
      ),
      'project' => 'media_youtube',
      'version' => '7.x-1.0-beta3',
    ),
    'menu' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'menu_block' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu (>7.11)',
        ),
        'files' => 
        array (
          0 => 'menu_block.module',
          1 => 'menu_block.admin.inc',
          2 => 'menu_block.follow.inc',
          3 => 'menu_block.pages.inc',
          4 => 'menu_block.sort.inc',
          5 => 'menu_block.install',
          6 => 'plugins/content_types/menu_tree/menu_tree.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block',
        'version' => '7.x-2.3',
        'project' => 'menu_block',
        'datestamp' => '1328286646',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.3',
    ),
    'menu_block_export' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/menu_block/menu_block_export.module',
      'name' => 'menu_block_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block Export',
        'description' => 'Provides export interface for Menu block module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu_block',
        ),
        'files' => 
        array (
          0 => 'menu_block_export.module',
          1 => 'menu_block_export.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block/export',
        'version' => '7.x-2.3',
        'project' => 'menu_block',
        'datestamp' => '1328286646',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.3',
    ),
    'metatag' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag.module',
      'name' => 'metatag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag',
        'description' => 'Adds support and an API to implement meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.15)',
          1 => 'ctools',
          2 => 'token',
        ),
        'configure' => 'admin/config/search/metatags',
        'files' => 
        array (
          0 => 'metatag.inc',
          1 => 'metatag.migrate.inc',
          2 => 'metatag.test',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_context' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
      'name' => 'metatag_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Context',
        'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_context.test',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_dc' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
      'name' => 'metatag_dc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core',
        'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_opengraph' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
      'name' => 'metatag_opengraph',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Open Graph',
        'description' => 'Provides support for open graph meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_panels' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
      'name' => 'metatag_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Panels',
        'description' => 'Provides Metatag integration within the Panels interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'metatag',
          2 => 'panels',
          3 => 'token',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_twitter_cards' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
      'name' => 'metatag_twitter_cards',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Twitter Cards',
        'description' => 'Provides support for Twitter\'s Card meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'metatag_views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
      'name' => 'metatag_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Views',
        'description' => 'Provides Metatag integration within the Views interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'metatag_views_plugin_display_extender_metatags.inc',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'metatag',
        'datestamp' => '1366640119',
        'php' => '5.2.4',
      ),
      'project' => 'metatag',
      'version' => '7.x-1.0-beta7',
    ),
    'mimemail' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/mimemail/mimemail.module',
      'name' => 'mimemail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail',
        'description' => 'Send MIME-encoded emails with embedded images and attachments.',
        'dependencies' => 
        array (
          0 => 'mailsystem',
        ),
        'package' => 'Mail',
        'core' => '7.x',
        'configure' => 'admin/config/system/mimemail',
        'files' => 
        array (
          0 => 'includes/mimemail.mail.inc',
          1 => 'tests/mimemail.test',
          2 => 'tests/mimemail_rules.test',
          3 => 'tests/mimemail_compress.test',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'mimemail',
        'datestamp' => '1381150945',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta1',
    ),
    'mimemail_action' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
      'name' => 'mimemail_action',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail Action',
        'description' => 'Provide actions for Mime Mail.',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
          1 => 'trigger',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta1',
        'project' => 'mimemail',
        'datestamp' => '1381150945',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta1',
    ),
    'mimemail_compress' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
      'name' => 'mimemail_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail CSS Compressor',
        'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'mimemail_compress.inc',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'mimemail',
        'datestamp' => '1381150945',
        'php' => '5.2.4',
      ),
      'project' => 'mimemail',
      'version' => '7.x-1.0-beta1',
    ),
    'mollom' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7210',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
        'core' => '7.x',
        'configure' => 'admin/config/content/mollom',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'mollom.css',
          ),
        ),
        'files' => 
        array (
          0 => 'includes/mollom.class.inc',
          1 => 'mollom.drupal.inc',
          2 => 'tests/mollom.test',
          3 => 'tests/mollom.class.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'mollom',
        'datestamp' => '1384108410',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-2.8',
    ),
    'nice_menus' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/nice_menus/nice_menus.module',
      'name' => 'nice_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nice Menus',
        'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/nice_menus',
        'version' => '7.x-2.5',
        'project' => 'nice_menus',
        'datestamp' => '1373943668',
        'php' => '5.2.4',
      ),
      'project' => 'nice_menus',
      'version' => '7.x-2.5',
    ),
    'node' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'nodequeue' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/nodequeue/nodequeue.module',
      'name' => 'nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue',
        'description' => 'Create queues which can contain nodes in arbitrary order',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'configure' => 'admin/structure/nodequeue/settings',
        'files' => 
        array (
          0 => 'includes/views/nodequeue.views.inc',
          1 => 'includes/nodequeue.actions.inc',
          2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
          3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
          4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
          5 => 'includes/views/nodequeue_handler_field_links.inc',
          6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
          7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
          8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'nodequeue',
        'datestamp' => '1316558104',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0-beta1',
    ),
    'nodequeue_generate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
      'name' => 'nodequeue_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue generate',
        'description' => 'Bulk assign nodes into queues for quickly populating a site.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'nodequeue',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'nodequeue_generate.module',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'nodequeue',
        'datestamp' => '1316558104',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0-beta1',
    ),
    'nodequeue_service' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
      'name' => 'nodequeue_service',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodequeue Service',
        'description' => 'Provides a nodequeue service.',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'nodequeue',
        ),
        'files' => 
        array (
          0 => 'nodequeue_service.inc',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'nodequeue',
        'datestamp' => '1316558104',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0-beta1',
    ),
    'node_convert' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/node_convert/node_convert.module',
      'name' => 'node_convert',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Convert',
        'description' => 'Converts one or more nodes between different node types.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node_convert.install',
          1 => 'node_convert.module',
          2 => 'node_convert.rules.inc',
          3 => 'node_convert.test',
          4 => 'includes/book.node_convert.inc',
          5 => 'includes/forum.node_convert.inc',
          6 => 'includes/panels_node.node_convert.inc',
          7 => 'includes/uc_product.node_convert.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'node_convert',
        'datestamp' => '1294719667',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'node_convert',
      'version' => '7.x-1.0',
    ),
    'number' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'og' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og.module',
      'name' => 'og',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups',
        'description' => 'API to allow associating content with groups.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'options',
          1 => 'list',
          2 => 'text',
          3 => 'entity',
          4 => 'entityreference',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og.info.inc',
          1 => 'includes/og.admin.inc',
          2 => 'includes/og.exception.inc',
          3 => 'includes/og.membership.inc',
          4 => 'includes/og.membership_type.inc',
          5 => 'includes/views/og.views.inc',
          6 => 'og.test',
          7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
          8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
          9 => 'includes/views/handlers/og_handler_field_group_member_count.inc',
          10 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
          11 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
          12 => 'includes/views/handlers/og_handler_field_user_roles.inc',
          13 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
          14 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
          15 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
          16 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
          17 => 'includes/views/handlers/og_handler_relationship.inc',
          18 => 'includes/migrate/plugins/destinations/og_membership.inc',
          19 => 'includes/migrate/7000/og_add_fields.inc',
          20 => 'includes/migrate/7000/og_content.inc',
          21 => 'includes/migrate/7000/og_group.inc',
          22 => 'includes/migrate/7000/og_user.inc',
          23 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
          24 => 'includes/migrate/7000/og_ogur.migrate.inc',
          25 => 'includes/migrate/og.migrate.inc',
          26 => 'includes/migrate/7200/og_og_membership.migrate.inc',
          27 => 'includes/migrate/7200/og_roles.migrate.inc',
          28 => 'includes/migrate/7200/og_user_roles.migrate.inc',
        ),
        'version' => '7.x-2.4',
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_access' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_access/og_access.module',
      'name' => 'og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups access control',
        'description' => 'Enable access control for private and public groups and group content.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'version' => '7.x-2.4',
        'files' => 
        array (
          0 => 'og_access.module',
          1 => 'og_access.install',
          2 => 'og_access.test',
        ),
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_context' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_context/og_context.module',
      'name' => 'og_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups context',
        'description' => 'Get a group from a viewed page.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_context.module',
          1 => 'og_context.install',
          2 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
          3 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
        ),
        'version' => '7.x-2.4',
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_example/og_example.module',
      'name' => 'og_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'entityreference_prepopulate',
          2 => 'features',
          3 => 'list',
          4 => 'message_notify',
          5 => 'og',
          6 => 'og_ui',
          7 => 'page_manager',
          8 => 'panels',
          9 => 'rules',
          10 => 'views_content',
        ),
        'description' => 'Example module to show Organic groups configuration that can be used as building block.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'page_manager:pages_default:1',
          ),
          'field' => 
          array (
            0 => 'message-og_new_content-field_node_reference',
            1 => 'node-group-body',
            2 => 'node-group-group_group',
            3 => 'node-post-body',
            4 => 'node-post-og_group_ref',
            5 => 'node-post-og_group_ref_other_groups',
          ),
          'message_type' => 
          array (
            0 => 'og_new_content',
          ),
          'node' => 
          array (
            0 => 'group',
            1 => 'post',
          ),
          'page_manager_handlers' => 
          array (
            0 => 'node_view_panel_context',
          ),
          'rules_config' => 
          array (
            0 => 'rules_og_new_content_message',
          ),
        ),
        'name' => 'OG example',
        'package' => 'Features',
        'php' => '5.2.4',
        'version' => '7.x-2.4',
        'project' => 'og',
        'datestamp' => '1384971519',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_field_access' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_field_access/og_field_access.module',
      'name' => 'og_field_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups field access',
        'description' => 'Provide field access based on group.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_field_access.module',
          1 => 'og_field_access.test',
        ),
        'version' => '7.x-2.4',
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_register' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_register/og_register.module',
      'name' => 'og_register',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups register',
        'description' => 'Allow subscribing to groups during the user registration.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'og_register.module',
          1 => 'og_register.install',
        ),
        'version' => '7.x-2.4',
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'og_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/og/og_ui/og_ui.module',
      'name' => 'og_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Organic groups UI',
        'description' => 'Organic groups UI.',
        'package' => 'Organic groups',
        'dependencies' => 
        array (
          0 => 'og',
          1 => 'views_bulk_operations',
        ),
        'core' => '7.x',
        'version' => '7.x-2.4',
        'files' => 
        array (
          0 => 'og_ui.test',
          1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
          2 => 'includes/migrate/7000/add_field.inc',
          3 => 'includes/migrate/7000/populate_field.inc',
          4 => 'includes/migrate/7000/set_roles.inc',
        ),
        'configure' => 'admin/config/group',
        'project' => 'og',
        'datestamp' => '1384971519',
        'php' => '5.2.4',
      ),
      'project' => 'og',
      'version' => '7.x-2.4',
    ),
    'openid' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.24',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'openidadmin' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openidadmin/openidadmin.module',
      'name' => 'openidadmin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Admin',
        'description' => 'Allows bulk operations for OpenID administration.',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openidadmin.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'openidadmin',
        'datestamp' => '1284569742',
        'php' => '5.2.4',
      ),
      'project' => 'openidadmin',
      'version' => '7.x-1.0',
    ),
    'openlayers' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openlayers/openlayers.module',
      'name' => 'openlayers',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenLayers',
        'description' => 'OpenLayers base API module',
        'core' => '7.x',
        'package' => 'OpenLayers',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.1)',
          1 => 'proj4js',
          2 => 'ctools',
          3 => 'file',
          4 => 'image',
        ),
        'files' => 
        array (
          0 => 'openlayers.module',
        ),
        'version' => '7.x-2.0-beta7',
        'project' => 'openlayers',
        'datestamp' => '1369677663',
      ),
      'project' => 'openlayers',
      'version' => '7.x-2.0-beta7',
    ),
    'openlayers_plus' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openlayers_plus/openlayers_plus.module',
      'name' => 'openlayers_plus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'name' => 'OpenLayers Plus',
        'dependencies' => 
        array (
          0 => 'openlayers',
        ),
        'description' => 'Additional tools and behaviors for OpenLayers',
        'package' => 'OpenLayers',
        'files' => 
        array (
          0 => 'behaviors/openlayers_plus_behavior_blockswitcher.inc',
          1 => 'behaviors/openlayers_plus_behavior_blocktoggle.inc',
          2 => 'behaviors/openlayers_plus_behavior_legend.inc',
          3 => 'behaviors/openlayers_plus_behavior_permalink.inc',
          4 => 'behaviors/openlayers_plus_behavior_popup.inc',
          5 => 'behaviors/openlayers_plus_behavior_scalepoints.inc',
          6 => 'behaviors/openlayers_plus_behavior_tooltips.inc',
          7 => 'behaviors/openlayers_plus_behavior_maptext.inc',
        ),
        'version' => '7.x-3.0-beta1',
        'project' => 'openlayers_plus',
        'datestamp' => '1374570995',
        'php' => '5.2.4',
      ),
      'project' => 'openlayers_plus',
      'version' => '7.x-3.0-beta1',
    ),
    'openlayers_test_example_feature' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openlayers/tests/features/openlayers_test_example_feature/openlayers_test_example_feature.module',
      'name' => 'openlayers_test_example_feature',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenLayers Test Example Feature',
        'description' => 'Feature to hold OpenLayers configuration example.',
        'core' => '7.x',
        'package' => 'OpenLayers',
        'php' => '5.2.4',
        'version' => '7.x-2.0-beta7',
        'project' => 'openlayers',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'field_sql_storage',
          3 => 'geofield',
          4 => 'node',
          5 => 'openlayers',
          6 => 'text',
          7 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'openlayers:openlayers_maps:1',
            1 => 'views:views_default:3.0',
          ),
          'field' => 
          array (
            0 => 'node-openlayers_example_content-body',
            1 => 'node-openlayers_example_content-field_openlayers_example_input',
          ),
          'node' => 
          array (
            0 => 'openlayers_example_content',
          ),
          'openlayers_maps' => 
          array (
            0 => 'openlayers_test_openlayers_example_map',
          ),
          'views_view' => 
          array (
            0 => 'openlayers_example_data_overlay',
            1 => 'openlayers_example_map_display_view',
          ),
        ),
        'project status url' => 'http://drupal.org/project/openlayers',
        'datestamp' => '1369677663',
      ),
      'project' => 'openlayers',
      'version' => '7.x-2.0-beta7',
    ),
    'openlayers_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openlayers/modules/openlayers_ui/openlayers_ui.module',
      'name' => 'openlayers_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenLayers UI',
        'description' => 'Provides a user interface to manage OpenLayers maps.',
        'core' => '7.x',
        'package' => 'OpenLayers',
        'dependencies' => 
        array (
          0 => 'openlayers',
        ),
        'configure' => 'admin/structure/openlayers',
        'files' => 
        array (
          0 => 'openlayers_ui.module',
        ),
        'version' => '7.x-2.0-beta7',
        'project' => 'openlayers',
        'datestamp' => '1369677663',
        'php' => '5.2.4',
      ),
      'project' => 'openlayers',
      'version' => '7.x-2.0-beta7',
    ),
    'openlayers_views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/openlayers/modules/openlayers_views/openlayers_views.module',
      'name' => 'openlayers_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenLayers Views',
        'description' => 'Provides OpenLayers Views plugins.',
        'core' => '7.x',
        'package' => 'OpenLayers',
        'dependencies' => 
        array (
          0 => 'openlayers',
          1 => 'views',
          2 => 'geophp',
        ),
        'files' => 
        array (
          0 => 'openlayers_views.module',
          1 => 'views/openlayers_views.views.inc',
          2 => 'views/openlayers_views_style_map.inc',
          3 => 'views/openlayers_views_style_data.inc',
          4 => 'views/openlayers_views_plugin_display_openlayers.inc',
          5 => 'views/openlayers_views_plugin_row_point.inc',
          6 => 'views/openlayers_views_plugin_row_bounding_box.inc',
          7 => 'views/openlayers_views_plugin_row_geometry.inc',
        ),
        'version' => '7.x-2.0-beta7',
        'project' => 'openlayers',
        'datestamp' => '1369677663',
        'php' => '5.2.4',
      ),
      'project' => 'openlayers',
      'version' => '7.x-2.0-beta7',
    ),
    'options' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'overlay' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'page_manager' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'page_title' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/page_title/page_title.module',
      'name' => 'page_title',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page Title',
        'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
        'core' => '7.x',
        'package' => 'SEO',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'page_title.module',
          1 => 'page_title.admin.inc',
          2 => 'page_title.tokens.inc',
          3 => 'page_title.test',
          4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
          5 => 'views_handler_field_node_page_title.inc',
        ),
        'configure' => 'admin/config/search/page-title',
        'version' => '7.x-2.7',
        'project' => 'page_title',
        'datestamp' => '1336556786',
        'php' => '5.2.4',
      ),
      'project' => 'page_title',
      'version' => '7.x-2.7',
    ),
    'panels' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_mini' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_node' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'path' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'pathauto' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.2',
        'project' => 'pathauto',
        'datestamp' => '1344525185',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.2',
    ),
    'pathauto_persist' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/pathauto_persist/pathauto_persist.module',
      'name' => 'pathauto_persist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pathauto persistant state',
        'description' => 'Keeps track and enforces a persistant Pathauto state per node.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'pathauto',
        ),
        'files' => 
        array (
          0 => 'pathauto_persist.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'pathauto_persist',
        'datestamp' => '1341597467',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto_persist',
      'version' => '7.x-1.3',
    ),
    'php' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'piwik' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/piwik/piwik.module',
      'name' => 'piwik',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Piwik Web analytics',
        'description' => 'Adds Piwik javascript tracking code to all your site\'s pages.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/piwik',
        'files' => 
        array (
          0 => 'piwik.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-2.4',
        'project' => 'piwik',
        'datestamp' => '1353789816',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'piwik',
      'version' => '7.x-2.4',
    ),
    'polish_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/polish_services.module',
      'name' => 'polish_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Polish Services',
        'description' => 'Provide the Polish Services: Blip, Wykop, Sledzik',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'poll' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'print' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/print/print.module',
      'name' => 'print',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Printer-friendly pages',
        'description' => 'Adds a printer-friendly version link to content and administrative pages.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'files' => 
        array (
          0 => 'print.module',
          1 => 'print.admin.inc',
          2 => 'print.pages.inc',
          3 => 'print.install',
          4 => 'print.views.inc',
          5 => 'print_join_page_counter.inc',
        ),
        'configure' => 'admin/config/user-interface/print',
        'version' => '7.x-1.2',
        'project' => 'print',
        'datestamp' => '1346768900',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-1.2',
    ),
    'print_mail' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/print/print_mail/print_mail.module',
      'name' => 'print_mail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Send by email',
        'description' => 'Provides the capability to send the web page by email',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'files' => 
        array (
          0 => 'print_mail.module',
          1 => 'print_mail.inc',
          2 => 'print_mail.admin.inc',
          3 => 'print_mail.install',
          4 => 'print_mail.views.inc',
        ),
        'configure' => 'admin/config/user-interface/print/email',
        'version' => '7.x-1.2',
        'project' => 'print',
        'datestamp' => '1346768900',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-1.2',
    ),
    'print_pdf' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/print/print_pdf/print_pdf.module',
      'name' => 'print_pdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PDF version',
        'description' => 'Adds the capability to export pages as PDF.',
        'core' => '7.x',
        'package' => 'Printer, email and PDF versions',
        'dependencies' => 
        array (
          0 => 'print',
        ),
        'files' => 
        array (
          0 => 'print_pdf.module',
          1 => 'print_pdf.admin.inc',
          2 => 'print_pdf.pages.inc',
          3 => 'print_pdf.install',
          4 => 'print_pdf.views.inc',
        ),
        'configure' => 'admin/config/user-interface/print/pdf',
        'version' => '7.x-1.2',
        'project' => 'print',
        'datestamp' => '1346768900',
        'php' => '5.2.4',
      ),
      'project' => 'print',
      'version' => '7.x-1.2',
    ),
    'print_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/print_services.module',
      'name' => 'print_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Print Services',
        'description' => 'Add the support for Print module which render the page as PDF or printable HTML',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
          1 => 'print',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'profile2' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/profile2/profile2.module',
      'name' => 'profile2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2',
        'description' => 'Supports configurable user profiles.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile2.admin.inc',
          1 => 'profile2.info.inc',
          2 => 'profile2.test',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'configure' => 'admin/structure/profiles',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'project' => 'profile2',
      'version' => '7.x-1.3',
    ),
    'profile2_i18n' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/profile2/contrib/profile2_i18n.module',
      'name' => 'profile2_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 translation',
        'description' => 'Translate profile2 types.',
        'dependencies' => 
        array (
          0 => 'profile2',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'project' => 'profile2',
      'version' => '7.x-1.3',
    ),
    'profile2_og_access' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/profile2/contrib/profile2_og_access.module',
      'name' => 'profile2_og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 group access',
        'description' => 'Adds Organic groups permissions to control profile access on the group level.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'profile2',
          1 => 'og',
        ),
        'package' => 'Organic groups',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'project' => 'profile2',
      'version' => '7.x-1.3',
    ),
    'profile2_page' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/profile2/contrib/profile2_page.module',
      'name' => 'profile2_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 pages',
        'description' => 'Adds separate pages for viewing and editing profiles.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'profile2',
        ),
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'project' => 'profile2',
      'version' => '7.x-1.3',
    ),
    'proj4js' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/proj4js/proj4js.module',
      'name' => 'proj4js',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Proj4JS',
        'description' => 'Proj4JS library loader.',
        'version' => '7.x-1.2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'libraries',
        ),
        'project' => 'proj4js',
        'datestamp' => '1363209312',
        'php' => '5.2.4',
      ),
      'project' => 'proj4js',
      'version' => '7.x-1.2',
    ),
    'publishcontent' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/publishcontent/publishcontent.module',
      'name' => 'publishcontent',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Publish Content',
        'description' => 'Adds a \'Publish\' or \'Unpublish\' link on the node edit/view pages, and a \'Publish Link\' field if the Views module is enabled.',
        'core' => '7.x',
        'configure' => 'admin/config/content/publishcontent',
        'files' => 
        array (
          0 => 'publishcontent_views_handler_field_node_link.inc',
          1 => 'tests/publishcontent.test',
        ),
        'version' => '7.x-1.2',
        'project' => 'publishcontent',
        'datestamp' => '1375566693',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'publishcontent',
      'version' => '7.x-1.2',
    ),
    'rdf' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'recaptcha' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/recaptcha/recaptcha.module',
      'name' => 'recaptcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA',
        'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'recaptcha.admin.inc',
          1 => 'recaptcha.module',
          2 => 'recaptcha.install',
        ),
        'version' => '7.x-1.10',
        'project' => 'recaptcha',
        'datestamp' => '1377803514',
        'php' => '5.2.4',
      ),
      'project' => 'recaptcha',
      'version' => '7.x-1.10',
    ),
    'recaptcha_mailhide' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/recaptcha/recaptcha_mailhide.module',
      'name' => 'recaptcha_mailhide',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA Mailhide',
        'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'recaptcha_mailhide.module',
        ),
        'version' => '7.x-1.10',
        'project' => 'recaptcha',
        'datestamp' => '1377803514',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'recaptcha',
      'version' => '7.x-1.10',
    ),
    'redirect' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/redirect/redirect.module',
      'name' => 'redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect',
        'description' => 'Allows users to redirect from old URLs to new URLs.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'redirect.module',
          1 => 'redirect.admin.inc',
          2 => 'redirect.install',
          3 => 'redirect.test',
          4 => 'views/redirect.views.inc',
          5 => 'views/redirect_handler_filter_redirect_type.inc',
          6 => 'views/redirect_handler_field_redirect_source.inc',
          7 => 'views/redirect_handler_field_redirect_redirect.inc',
          8 => 'views/redirect_handler_field_redirect_operations.inc',
          9 => 'views/redirect_handler_field_redirect_link_edit.inc',
          10 => 'views/redirect_handler_field_redirect_link_delete.inc',
        ),
        'configure' => 'admin/config/search/redirect/settings',
        'version' => '7.x-1.0-rc1',
        'project' => 'redirect',
        'datestamp' => '1347989995',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'redirect',
      'version' => '7.x-1.0-rc1',
    ),
    'rules' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'tests/rules.test',
          2 => 'includes/faces.inc',
          3 => 'includes/rules.core.inc',
          4 => 'includes/rules.event.inc',
          5 => 'includes/rules.processor.inc',
          6 => 'includes/rules.plugins.inc',
          7 => 'includes/rules.state.inc',
          8 => 'includes/rules.dispatcher.inc',
          9 => 'modules/node.eval.inc',
          10 => 'modules/php.eval.inc',
          11 => 'modules/rules_core.eval.inc',
          12 => 'modules/system.eval.inc',
          13 => 'ui/ui.controller.inc',
          14 => 'ui/ui.core.inc',
          15 => 'ui/ui.data.inc',
          16 => 'ui/ui.plugins.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.6',
        'project' => 'rules',
        'datestamp' => '1383063052',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.6',
    ),
    'rules_admin' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_admin.module',
          1 => 'rules_admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-2.6',
        'project' => 'rules',
        'datestamp' => '1383063052',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.6',
    ),
    'rules_i18n' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
      'name' => 'rules_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules translation',
        'description' => 'Allows translating rules.',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_i18n.i18n.inc',
          1 => 'rules_i18n.rules.inc',
          2 => 'rules_i18n.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'rules',
        'datestamp' => '1383063052',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.6',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_scheduler.admin.inc',
          1 => 'rules_scheduler.module',
          2 => 'rules_scheduler.install',
          3 => 'rules_scheduler.rules.inc',
          4 => 'rules_scheduler.test',
          5 => 'includes/rules_scheduler.handler.inc',
          6 => 'includes/rules_scheduler.views_default.inc',
          7 => 'includes/rules_scheduler.views.inc',
          8 => 'includes/rules_scheduler_views_filter.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'rules',
        'datestamp' => '1383063052',
        'php' => '5.2.4',
      ),
      'project' => 'rules',
      'version' => '7.x-2.6',
    ),
    'russian_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/russian_services.module',
      'name' => 'russian_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Russian Services',
        'description' => 'Provide the Russian Services (12+3): 100zakladok, Ruspace, Mister Wong, Memori, Moemesto, MyScoop, Vaau, Yandex, LinkStore, Bobrdobr, Lopas, Communizm, Newsland, News2, Smi2',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'search' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'service_links' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/service_links.module',
      'name' => 'service_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Service links',
        'description' => 'Module engine for add various service links about sharing networks to nodes.',
        'core' => '7.x',
        'package' => 'Service Links',
        'files' => 
        array (
          0 => 'service_links_handler_field_service_links.inc',
        ),
        'configure' => 'admin/config/services/service-links',
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'service_links_displays' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/plugins/service_links_displays.module',
      'name' => 'service_links_displays',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Service Links Displays',
        'description' => 'Provide the integration between Service Links and Node Displays (Display Suite)',
        'core' => '7.x',
        'package' => 'Service Links',
        'dependencies' => 
        array (
          0 => 'service_links',
          1 => 'ds',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'service_links_sprites' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/plugins/service_links_sprites.module',
      'name' => 'service_links_sprites',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Service Links Sprites',
        'description' => 'Add the ability to handle sprites with Service Links',
        'core' => '7.x',
        'package' => 'Service Links',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'configure' => 'admin/config/services/service-links',
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'shortcut' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'simplenews' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/simplenews/simplenews.module',
      'name' => 'simplenews',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simplenews',
        'description' => 'Send newsletters to subscribed email addresses.',
        'package' => 'Mail',
        'core' => '7.x',
        'configure' => 'admin/config/services/simplenews',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'test_dependencies' => 
        array (
          0 => 'i18n_taxonomy',
        ),
        'files' => 
        array (
          0 => 'tests/simplenews.test',
          1 => 'includes/simplenews.source.inc',
          2 => 'includes/views/handlers/simplenews_handler_field_newsletter_status.inc',
          3 => 'includes/views/handlers/simplenews_handler_field_newsletter_priority.inc',
          4 => 'includes/views/handlers/simplenews_handler_field_category_hyperlinks.inc',
          5 => 'includes/views/handlers/simplenews_handler_field_category_new_account.inc',
          6 => 'includes/views/handlers/simplenews_handler_field_category_opt_inout.inc',
          7 => 'includes/views/handlers/simplenews_handler_field_newsletter_send.inc',
          8 => 'includes/views/handlers/simplenews_handler_filter_newsletter_status.inc',
          9 => 'includes/views/handlers/simplenews_handler_filter_newsletter_priority.inc',
          10 => 'includes/views/handlers/simplenews_handler_filter_category_hyperlinks.inc',
          11 => 'includes/views/handlers/simplenews_handler_filter_category_new_account.inc',
          12 => 'includes/views/handlers/simplenews_handler_filter_category_opt_inout.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'simplenews',
        'datestamp' => '1381947969',
        'php' => '5.2.4',
      ),
      'project' => 'simplenews',
      'version' => '7.x-1.1',
    ),
    'simplenews_rules' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/simplenews/simplenews_rules/simplenews_rules.module',
      'name' => 'simplenews_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simplenews rules',
        'description' => 'Provides integration with Rules module for Simplenews.',
        'dependencies' => 
        array (
          0 => 'simplenews',
          1 => 'rules',
        ),
        'package' => 'Mail',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'simplenews',
        'datestamp' => '1381947969',
        'php' => '5.2.4',
      ),
      'project' => 'simplenews',
      'version' => '7.x-1.1',
    ),
    'simpletest' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/pager.test',
          22 => 'tests/password.test',
          23 => 'tests/path.test',
          24 => 'tests/registry.test',
          25 => 'tests/schema.test',
          26 => 'tests/session.test',
          27 => 'tests/tablesort.test',
          28 => 'tests/theme.test',
          29 => 'tests/unicode.test',
          30 => 'tests/update.test',
          31 => 'tests/xmlrpc.test',
          32 => 'tests/upgrade/upgrade.test',
          33 => 'tests/upgrade/upgrade.comment.test',
          34 => 'tests/upgrade/upgrade.filter.test',
          35 => 'tests/upgrade/upgrade.forum.test',
          36 => 'tests/upgrade/upgrade.locale.test',
          37 => 'tests/upgrade/upgrade.menu.test',
          38 => 'tests/upgrade/upgrade.node.test',
          39 => 'tests/upgrade/upgrade.taxonomy.test',
          40 => 'tests/upgrade/upgrade.trigger.test',
          41 => 'tests/upgrade/upgrade.translatable.test',
          42 => 'tests/upgrade/upgrade.upload.test',
          43 => 'tests/upgrade/upgrade.user.test',
          44 => 'tests/upgrade/update.aggregator.test',
          45 => 'tests/upgrade/update.trigger.test',
          46 => 'tests/upgrade/update.field.test',
          47 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'smartqueue' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/nodequeue/smartqueue.module',
      'name' => 'smartqueue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Smartqueue taxonomy',
        'description' => 'Creates a node queue for each taxonomy vocabulary',
        'package' => 'Nodequeue',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodequeue',
          1 => 'taxonomy',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'nodequeue',
        'datestamp' => '1316558104',
        'php' => '5.2.4',
      ),
      'project' => 'nodequeue',
      'version' => '7.x-2.0-beta1',
    ),
    'spanish_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/spanish_services.module',
      'name' => 'spanish_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Spanish Services',
        'description' => 'Provide the Spanish Services: Barrapunto, Fresqui, Latafanera, Meneame, Tuenti',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'standard' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'stringoverrides' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/stringoverrides/stringoverrides.module',
      'name' => 'stringoverrides',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String Overrides',
        'description' => 'Provides a quick and easy way of replacing text.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'stringoverrides.module',
          1 => 'stringoverrides.install',
          2 => 'stringoverrides.admin.inc',
        ),
        'configure' => 'admin/config/regional/stringoverrides',
        'version' => '7.x-1.8',
        'project' => 'stringoverrides',
        'datestamp' => '1304446316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'stringoverrides',
      'version' => '7.x-1.8',
    ),
    'stringoverrides_migrate' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/stringoverrides/stringoverrides_migrate.module',
      'name' => 'stringoverrides_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String Overrides Migrate',
        'description' => 'Tools for importing and exporting string override settings.',
        'dependencies' => 
        array (
          0 => 'stringoverrides',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'stringoverrides_migrate.module',
          1 => 'stringoverrides_migrate.admin.inc',
        ),
        'version' => '7.x-1.8',
        'project' => 'stringoverrides',
        'datestamp' => '1304446316',
        'php' => '5.2.4',
      ),
      'project' => 'stringoverrides',
      'version' => '7.x-1.8',
    ),
    'strongarm' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'strongarm.admin.inc',
          1 => 'strongarm.install',
          2 => 'strongarm.module',
        ),
        'version' => '7.x-2.0',
        'project' => 'strongarm',
        'datestamp' => '1339604214',
        'php' => '5.2.4',
      ),
      'project' => 'strongarm',
      'version' => '7.x-2.0',
    ),
    'styles' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/styles/styles.module',
      'name' => 'styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Styles',
        'description' => 'Bundles similar display formatters together.',
        'package' => 'Styles',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'styles.module',
          1 => 'includes/Styles.inc',
        ),
        'version' => '7.x-2.0-alpha8',
        'project' => 'styles',
        'datestamp' => '1306964517',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'styles',
      'version' => '7.x-2.0-alpha8',
    ),
    'styles_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/styles/contrib/styles_ui/styles_ui.module',
      'name' => 'styles_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Styles UI',
        'description' => 'Allows administration of the Styles modules.',
        'package' => 'Styles',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'styles_ui.admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'styles',
        ),
        'version' => '7.x-2.0-alpha8',
        'project' => 'styles',
        'datestamp' => '1306964517',
        'php' => '5.2.4',
      ),
      'project' => 'styles',
      'version' => '7.x-2.0-alpha8',
    ),
    'stylizer' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'superfish' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/superfish/superfish.module',
      'name' => 'superfish',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Superfish',
        'description' => 'jQuery Superfish plugin for your Drupal menus.',
        'package' => 'User interface',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/user-interface/superfish',
        'core' => '7.x',
        'version' => '7.x-1.9',
        'project' => 'superfish',
        'datestamp' => '1367054112',
        'php' => '5.2.4',
      ),
      'project' => 'superfish',
      'version' => '7.x-1.9',
    ),
    'swedish_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/swedish_services.module',
      'name' => 'swedish_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Swedish Services',
        'description' => 'Provide the Swedish Services: Bloggy, Pusha',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'files' => 
        array (
          0 => 'swedish_services.module',
        ),
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'syslog' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'system' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7078',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'taxonomy' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'text' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'timeago' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/modules/contrib/timeago/timeago.module',
      'name' => 'timeago',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Timeago',
        'description' => 'Converts dynamic timetamps to a \'time ago\' format using jQuery with graceful degredation.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/timeago',
        'files' => 
        array (
          0 => 'timeago.install',
          1 => 'timeago.module',
        ),
        'version' => '7.x-2.2',
        'project' => 'timeago',
        'datestamp' => '1377676923',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'timeago',
      'version' => '7.x-2.2',
    ),
    'title' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/title/title.module',
      'name' => 'title',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Title',
        'description' => 'Replaces entity legacy fields with regular fields.',
        'core' => '7.x',
        'package' => 'Fields',
        'configure' => 'admin/config/content/title',
        'dependencies' => 
        array (
          0 => 'system (>7.14)',
        ),
        'files' => 
        array (
          0 => 'title.module',
          1 => 'views/views_handler_title_field.inc',
          2 => 'tests/title.test',
        ),
        'version' => '7.x-1.0-alpha7',
        'project' => 'title',
        'datestamp' => '1363626024',
        'php' => '5.2.4',
      ),
      'project' => 'title',
      'version' => '7.x-1.0-alpha7',
    ),
    'token' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'token',
        'datestamp' => '1361665026',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.5',
    ),
    'toolbar' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.24',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'tracker' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'translation' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'transliteration' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/transliteration/transliteration.module',
      'name' => 'transliteration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Transliteration',
        'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
        'core' => '7.x',
        'configure' => 'admin/config/media/file-system',
        'version' => '7.x-3.1',
        'project' => 'transliteration',
        'datestamp' => '1338540713',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'transliteration',
      'version' => '7.x-3.1',
    ),
    'trigger' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'update' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.24',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'user' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'variable' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_admin' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_advanced' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_advanced/variable_advanced.module',
      'name' => 'variable_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable advanced',
        'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_example' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_realm' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_store' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.3',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'variable_views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'variable',
        'datestamp' => '1376034993',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.3',
    ),
    'views' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_result.inc',
          2 => 'handlers/views_handler_area_text.inc',
          3 => 'handlers/views_handler_area_text_custom.inc',
          4 => 'handlers/views_handler_area_view.inc',
          5 => 'handlers/views_handler_argument.inc',
          6 => 'handlers/views_handler_argument_date.inc',
          7 => 'handlers/views_handler_argument_formula.inc',
          8 => 'handlers/views_handler_argument_many_to_one.inc',
          9 => 'handlers/views_handler_argument_null.inc',
          10 => 'handlers/views_handler_argument_numeric.inc',
          11 => 'handlers/views_handler_argument_string.inc',
          12 => 'handlers/views_handler_argument_group_by_numeric.inc',
          13 => 'handlers/views_handler_field.inc',
          14 => 'handlers/views_handler_field_counter.inc',
          15 => 'handlers/views_handler_field_boolean.inc',
          16 => 'handlers/views_handler_field_contextual_links.inc',
          17 => 'handlers/views_handler_field_custom.inc',
          18 => 'handlers/views_handler_field_date.inc',
          19 => 'handlers/views_handler_field_entity.inc',
          20 => 'handlers/views_handler_field_markup.inc',
          21 => 'handlers/views_handler_field_math.inc',
          22 => 'handlers/views_handler_field_numeric.inc',
          23 => 'handlers/views_handler_field_prerender_list.inc',
          24 => 'handlers/views_handler_field_time_interval.inc',
          25 => 'handlers/views_handler_field_serialized.inc',
          26 => 'handlers/views_handler_field_machine_name.inc',
          27 => 'handlers/views_handler_field_url.inc',
          28 => 'handlers/views_handler_filter.inc',
          29 => 'handlers/views_handler_filter_boolean_operator.inc',
          30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          31 => 'handlers/views_handler_filter_combine.inc',
          32 => 'handlers/views_handler_filter_date.inc',
          33 => 'handlers/views_handler_filter_equality.inc',
          34 => 'handlers/views_handler_filter_entity_bundle.inc',
          35 => 'handlers/views_handler_filter_group_by_numeric.inc',
          36 => 'handlers/views_handler_filter_in_operator.inc',
          37 => 'handlers/views_handler_filter_many_to_one.inc',
          38 => 'handlers/views_handler_filter_numeric.inc',
          39 => 'handlers/views_handler_filter_string.inc',
          40 => 'handlers/views_handler_relationship.inc',
          41 => 'handlers/views_handler_relationship_groupwise_max.inc',
          42 => 'handlers/views_handler_sort.inc',
          43 => 'handlers/views_handler_sort_date.inc',
          44 => 'handlers/views_handler_sort_formula.inc',
          45 => 'handlers/views_handler_sort_group_by_numeric.inc',
          46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          47 => 'handlers/views_handler_sort_random.inc',
          48 => 'includes/base.inc',
          49 => 'includes/handlers.inc',
          50 => 'includes/plugins.inc',
          51 => 'includes/view.inc',
          52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          61 => 'modules/book/views_plugin_argument_default_book_root.inc',
          62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          63 => 'modules/comment/views_handler_field_comment.inc',
          64 => 'modules/comment/views_handler_field_comment_depth.inc',
          65 => 'modules/comment/views_handler_field_comment_link.inc',
          66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          70 => 'modules/comment/views_handler_field_comment_node_link.inc',
          71 => 'modules/comment/views_handler_field_comment_username.inc',
          72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          74 => 'modules/comment/views_handler_field_node_comment.inc',
          75 => 'modules/comment/views_handler_field_node_new_comments.inc',
          76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          79 => 'modules/comment/views_handler_filter_node_comment.inc',
          80 => 'modules/comment/views_handler_sort_comment_thread.inc',
          81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          83 => 'modules/comment/views_plugin_row_comment_rss.inc',
          84 => 'modules/comment/views_plugin_row_comment_view.inc',
          85 => 'modules/contact/views_handler_field_contact_link.inc',
          86 => 'modules/field/views_handler_field_field.inc',
          87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          88 => 'modules/field/views_handler_argument_field_list.inc',
          89 => 'modules/field/views_handler_argument_field_list_string.inc',
          90 => 'modules/field/views_handler_filter_field_list.inc',
          91 => 'modules/filter/views_handler_field_filter_format_name.inc',
          92 => 'modules/locale/views_handler_field_node_language.inc',
          93 => 'modules/locale/views_handler_filter_node_language.inc',
          94 => 'modules/locale/views_handler_argument_locale_group.inc',
          95 => 'modules/locale/views_handler_argument_locale_language.inc',
          96 => 'modules/locale/views_handler_field_locale_group.inc',
          97 => 'modules/locale/views_handler_field_locale_language.inc',
          98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          99 => 'modules/locale/views_handler_filter_locale_group.inc',
          100 => 'modules/locale/views_handler_filter_locale_language.inc',
          101 => 'modules/locale/views_handler_filter_locale_version.inc',
          102 => 'modules/node/views_handler_argument_dates_various.inc',
          103 => 'modules/node/views_handler_argument_node_language.inc',
          104 => 'modules/node/views_handler_argument_node_nid.inc',
          105 => 'modules/node/views_handler_argument_node_type.inc',
          106 => 'modules/node/views_handler_argument_node_vid.inc',
          107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          109 => 'modules/node/views_handler_field_node.inc',
          110 => 'modules/node/views_handler_field_node_link.inc',
          111 => 'modules/node/views_handler_field_node_link_delete.inc',
          112 => 'modules/node/views_handler_field_node_link_edit.inc',
          113 => 'modules/node/views_handler_field_node_revision.inc',
          114 => 'modules/node/views_handler_field_node_revision_link.inc',
          115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          117 => 'modules/node/views_handler_field_node_path.inc',
          118 => 'modules/node/views_handler_field_node_type.inc',
          119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          120 => 'modules/node/views_handler_filter_node_access.inc',
          121 => 'modules/node/views_handler_filter_node_status.inc',
          122 => 'modules/node/views_handler_filter_node_type.inc',
          123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          124 => 'modules/node/views_plugin_argument_default_node.inc',
          125 => 'modules/node/views_plugin_argument_validate_node.inc',
          126 => 'modules/node/views_plugin_row_node_rss.inc',
          127 => 'modules/node/views_plugin_row_node_view.inc',
          128 => 'modules/profile/views_handler_field_profile_date.inc',
          129 => 'modules/profile/views_handler_field_profile_list.inc',
          130 => 'modules/profile/views_handler_filter_profile_selection.inc',
          131 => 'modules/search/views_handler_argument_search.inc',
          132 => 'modules/search/views_handler_field_search_score.inc',
          133 => 'modules/search/views_handler_filter_search.inc',
          134 => 'modules/search/views_handler_sort_search_score.inc',
          135 => 'modules/search/views_plugin_row_search_view.inc',
          136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          137 => 'modules/system/views_handler_argument_file_fid.inc',
          138 => 'modules/system/views_handler_field_file.inc',
          139 => 'modules/system/views_handler_field_file_extension.inc',
          140 => 'modules/system/views_handler_field_file_filemime.inc',
          141 => 'modules/system/views_handler_field_file_uri.inc',
          142 => 'modules/system/views_handler_field_file_status.inc',
          143 => 'modules/system/views_handler_filter_file_status.inc',
          144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          160 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          161 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          162 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          163 => 'modules/system/views_handler_filter_system_type.inc',
          164 => 'modules/translation/views_handler_argument_node_tnid.inc',
          165 => 'modules/translation/views_handler_field_node_link_translate.inc',
          166 => 'modules/translation/views_handler_field_node_translation_link.inc',
          167 => 'modules/translation/views_handler_filter_node_tnid.inc',
          168 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          169 => 'modules/translation/views_handler_relationship_translation.inc',
          170 => 'modules/user/views_handler_argument_user_uid.inc',
          171 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          172 => 'modules/user/views_handler_field_user.inc',
          173 => 'modules/user/views_handler_field_user_language.inc',
          174 => 'modules/user/views_handler_field_user_link.inc',
          175 => 'modules/user/views_handler_field_user_link_cancel.inc',
          176 => 'modules/user/views_handler_field_user_link_edit.inc',
          177 => 'modules/user/views_handler_field_user_mail.inc',
          178 => 'modules/user/views_handler_field_user_name.inc',
          179 => 'modules/user/views_handler_field_user_permissions.inc',
          180 => 'modules/user/views_handler_field_user_picture.inc',
          181 => 'modules/user/views_handler_field_user_roles.inc',
          182 => 'modules/user/views_handler_filter_user_current.inc',
          183 => 'modules/user/views_handler_filter_user_name.inc',
          184 => 'modules/user/views_handler_filter_user_permissions.inc',
          185 => 'modules/user/views_handler_filter_user_roles.inc',
          186 => 'modules/user/views_plugin_argument_default_current_user.inc',
          187 => 'modules/user/views_plugin_argument_default_user.inc',
          188 => 'modules/user/views_plugin_argument_validate_user.inc',
          189 => 'modules/user/views_plugin_row_user_view.inc',
          190 => 'plugins/views_plugin_access.inc',
          191 => 'plugins/views_plugin_access_none.inc',
          192 => 'plugins/views_plugin_access_perm.inc',
          193 => 'plugins/views_plugin_access_role.inc',
          194 => 'plugins/views_plugin_argument_default.inc',
          195 => 'plugins/views_plugin_argument_default_php.inc',
          196 => 'plugins/views_plugin_argument_default_fixed.inc',
          197 => 'plugins/views_plugin_argument_default_raw.inc',
          198 => 'plugins/views_plugin_argument_validate.inc',
          199 => 'plugins/views_plugin_argument_validate_numeric.inc',
          200 => 'plugins/views_plugin_argument_validate_php.inc',
          201 => 'plugins/views_plugin_cache.inc',
          202 => 'plugins/views_plugin_cache_none.inc',
          203 => 'plugins/views_plugin_cache_time.inc',
          204 => 'plugins/views_plugin_display.inc',
          205 => 'plugins/views_plugin_display_attachment.inc',
          206 => 'plugins/views_plugin_display_block.inc',
          207 => 'plugins/views_plugin_display_default.inc',
          208 => 'plugins/views_plugin_display_embed.inc',
          209 => 'plugins/views_plugin_display_extender.inc',
          210 => 'plugins/views_plugin_display_feed.inc',
          211 => 'plugins/views_plugin_display_page.inc',
          212 => 'plugins/views_plugin_exposed_form_basic.inc',
          213 => 'plugins/views_plugin_exposed_form.inc',
          214 => 'plugins/views_plugin_exposed_form_input_required.inc',
          215 => 'plugins/views_plugin_localization_core.inc',
          216 => 'plugins/views_plugin_localization.inc',
          217 => 'plugins/views_plugin_localization_none.inc',
          218 => 'plugins/views_plugin_pager.inc',
          219 => 'plugins/views_plugin_pager_full.inc',
          220 => 'plugins/views_plugin_pager_mini.inc',
          221 => 'plugins/views_plugin_pager_none.inc',
          222 => 'plugins/views_plugin_pager_some.inc',
          223 => 'plugins/views_plugin_query.inc',
          224 => 'plugins/views_plugin_query_default.inc',
          225 => 'plugins/views_plugin_row.inc',
          226 => 'plugins/views_plugin_row_fields.inc',
          227 => 'plugins/views_plugin_row_rss_fields.inc',
          228 => 'plugins/views_plugin_style.inc',
          229 => 'plugins/views_plugin_style_default.inc',
          230 => 'plugins/views_plugin_style_grid.inc',
          231 => 'plugins/views_plugin_style_list.inc',
          232 => 'plugins/views_plugin_style_jump_menu.inc',
          233 => 'plugins/views_plugin_style_mapping.inc',
          234 => 'plugins/views_plugin_style_rss.inc',
          235 => 'plugins/views_plugin_style_summary.inc',
          236 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          237 => 'plugins/views_plugin_style_summary_unformatted.inc',
          238 => 'plugins/views_plugin_style_table.inc',
          239 => 'tests/handlers/views_handler_area_text.test',
          240 => 'tests/handlers/views_handler_argument_null.test',
          241 => 'tests/handlers/views_handler_argument_string.test',
          242 => 'tests/handlers/views_handler_field.test',
          243 => 'tests/handlers/views_handler_field_boolean.test',
          244 => 'tests/handlers/views_handler_field_custom.test',
          245 => 'tests/handlers/views_handler_field_counter.test',
          246 => 'tests/handlers/views_handler_field_date.test',
          247 => 'tests/handlers/views_handler_field_file_size.test',
          248 => 'tests/handlers/views_handler_field_math.test',
          249 => 'tests/handlers/views_handler_field_url.test',
          250 => 'tests/handlers/views_handler_field_xss.test',
          251 => 'tests/handlers/views_handler_filter_combine.test',
          252 => 'tests/handlers/views_handler_filter_date.test',
          253 => 'tests/handlers/views_handler_filter_equality.test',
          254 => 'tests/handlers/views_handler_filter_in_operator.test',
          255 => 'tests/handlers/views_handler_filter_numeric.test',
          256 => 'tests/handlers/views_handler_filter_string.test',
          257 => 'tests/handlers/views_handler_sort_random.test',
          258 => 'tests/handlers/views_handler_sort_date.test',
          259 => 'tests/handlers/views_handler_sort.test',
          260 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          261 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          262 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          263 => 'tests/plugins/views_plugin_display.test',
          264 => 'tests/styles/views_plugin_style_jump_menu.test',
          265 => 'tests/styles/views_plugin_style.test',
          266 => 'tests/styles/views_plugin_style_base.test',
          267 => 'tests/styles/views_plugin_style_mapping.test',
          268 => 'tests/styles/views_plugin_style_unformatted.test',
          269 => 'tests/views_access.test',
          270 => 'tests/views_analyze.test',
          271 => 'tests/views_basic.test',
          272 => 'tests/views_argument_default.test',
          273 => 'tests/views_argument_validator.test',
          274 => 'tests/views_exposed_form.test',
          275 => 'tests/field/views_fieldapi.test',
          276 => 'tests/views_glossary.test',
          277 => 'tests/views_groupby.test',
          278 => 'tests/views_handlers.test',
          279 => 'tests/views_module.test',
          280 => 'tests/views_pager.test',
          281 => 'tests/views_plugin_localization_test.inc',
          282 => 'tests/views_translatable.test',
          283 => 'tests/views_query.test',
          284 => 'tests/views_upgrade.test',
          285 => 'tests/views_test.views_default.inc',
          286 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          287 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          288 => 'tests/node/views_node_revision_relations.test',
          289 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          290 => 'tests/user/views_handler_field_user_name.test',
          291 => 'tests/user/views_user_argument_default.test',
          292 => 'tests/user/views_user_argument_validate.test',
          293 => 'tests/user/views_user.test',
          294 => 'tests/views_cache.test',
          295 => 'tests/views_view.test',
          296 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.7',
        'project' => 'views',
        'datestamp' => '1365499236',
      ),
      'project' => 'views',
      'version' => '7.x-3.7',
    ),
    'views_boxes' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views_boxes/views_boxes.module',
      'name' => 'views_boxes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Boxes',
        'description' => 'Provides configurable views through boxes.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'boxes',
          2 => 'views',
          3 => 'entity_autocomplete',
        ),
        'files' => 
        array (
          0 => 'views_boxes.module',
          1 => 'plugins/views_boxes_context_list.inc',
          2 => 'handlers/views_boxes_handler_argument_limit.inc',
          3 => 'handlers/views_boxes_handler_filter_sort.inc',
        ),
        'version' => '7.x-1.0-beta8',
        'project' => 'views_boxes',
        'datestamp' => '1329171345',
        'php' => '5.2.4',
      ),
      'project' => 'views_boxes',
      'version' => '7.x-1.0-beta8',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_bulk_operations',
        'datestamp' => '1354500015',
        'php' => '5.2.4',
      ),
      'project' => 'views_bulk_operations',
      'version' => '7.x-3.1',
    ),
    'views_content' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'ctools',
        'datestamp' => '1365013512',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.3',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow.module',
          1 => 'theme/views_slideshow.theme.inc',
          2 => 'views_slideshow.views.inc',
          3 => 'views_slideshow_plugin_style_slideshow.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589616',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0',
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow_cycle.module',
          1 => 'views_slideshow_cycle.views_slideshow.inc',
          2 => 'theme/views_slideshow_cycle.theme.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589616',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0',
    ),
    'views_ui' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.7',
        'project' => 'views',
        'datestamp' => '1365499236',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.7',
    ),
    'webform' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_field_webform_status.inc',
          8 => 'views/webform_handler_filter_is_draft.inc',
          9 => 'views/webform_handler_filter_webform_status.inc',
          10 => 'views/webform.views.inc',
          11 => 'tests/components.test',
          12 => 'tests/permissions.test',
          13 => 'tests/submission.test',
          14 => 'tests/webform.test',
        ),
        'version' => '7.x-3.19',
        'project' => 'webform',
        'datestamp' => '1369860079',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'webform',
      'version' => '7.x-3.19',
    ),
    'widget_services' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/service_links/services/widget_services.module',
      'name' => 'widget_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Widget Services',
        'description' => 'Facebook Like, Facebook Share, Google Plus One, Linkedin Share Button, Pinterest, Twitter',
        'core' => '7.x',
        'package' => 'Service Links - Services',
        'dependencies' => 
        array (
          0 => 'service_links',
        ),
        'version' => '7.x-2.2',
        'project' => 'service_links',
        'datestamp' => '1370849155',
        'php' => '5.2.4',
      ),
      'project' => 'service_links',
      'version' => '7.x-2.2',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'wysiwyg',
        'datestamp' => '1349213776',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'wysiwyg',
      'version' => '7.x-2.2',
    ),
    'xmlsitemap' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
      'name' => 'xmlsitemap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap',
        'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap.module',
          1 => 'xmlsitemap.inc',
          2 => 'xmlsitemap.admin.inc',
          3 => 'xmlsitemap.drush.inc',
          4 => 'xmlsitemap.generate.inc',
          5 => 'xmlsitemap.xmlsitemap.inc',
          6 => 'xmlsitemap.pages.inc',
          7 => 'xmlsitemap.install',
          8 => 'xmlsitemap.test',
        ),
        'recommends' => 
        array (
          0 => 'robotstxt',
        ),
        'configure' => 'admin/config/search/xmlsitemap',
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_custom' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
      'name' => 'xmlsitemap_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap custom',
        'description' => 'Adds user configurable links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_custom.module',
          1 => 'xmlsitemap_custom.admin.inc',
          2 => 'xmlsitemap_custom.install',
          3 => 'xmlsitemap_custom.test',
        ),
        'configure' => 'admin/config/search/xmlsitemap/custom',
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_engines' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
      'name' => 'xmlsitemap_engines',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap engines',
        'description' => 'Submit the sitemap to search engines.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_engines.module',
          1 => 'xmlsitemap_engines.admin.inc',
          2 => 'xmlsitemap_engines.install',
          3 => 'tests/xmlsitemap_engines.test',
        ),
        'recommends' => 
        array (
          0 => 'site_verify',
        ),
        'configure' => 'admin/config/search/xmlsitemap/engines',
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_i18n' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
      'name' => 'xmlsitemap_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap internationalization',
        'description' => 'Enables multilingual XML sitemaps.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'i18n',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_i18n.module',
          1 => 'xmlsitemap_i18n.test',
        ),
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_menu' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
      'name' => 'xmlsitemap_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap menu',
        'description' => 'Adds menu item links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'menu',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_menu.module',
          1 => 'xmlsitemap_menu.install',
          2 => 'xmlsitemap_menu.test',
        ),
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_node' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
      'name' => 'xmlsitemap_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap node',
        'description' => 'Adds content links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_node.module',
          1 => 'xmlsitemap_node.install',
          2 => 'xmlsitemap_node.test',
        ),
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_taxonomy' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
      'name' => 'xmlsitemap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap taxonomy',
        'description' => 'Add taxonomy term links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_taxonomy.module',
          1 => 'xmlsitemap_taxonomy.install',
          2 => 'xmlsitemap_taxonomy.test',
        ),
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
    'xmlsitemap_user' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
      'name' => 'xmlsitemap_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap user',
        'description' => 'Adds user profile links to the sitemap.',
        'package' => 'XML sitemap',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap_user.module',
          1 => 'xmlsitemap_user.install',
          2 => 'xmlsitemap_user.test',
        ),
        'version' => '7.x-2.0-rc2',
        'project' => 'xmlsitemap',
        'datestamp' => '1354926579',
        'php' => '5.2.4',
      ),
      'project' => 'xmlsitemap',
      'version' => '7.x-2.0-rc2',
    ),
  ),
  'themes' => 
  array (
    'adaptivetheme' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/themes/adaptivetheme/at_core/adaptivetheme.info',
      'name' => 'adaptivetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Core',
        'description' => 'AT Core is the framework that drives the responsive layout system and provides an extensive set of tools for theme development. You do not need to enable this theme. Use the provided AT Subtheme to get started.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at.layout.css',
          ),
        ),
        'unset_core' => 
        array (
          'modules/aggregator/aggregator.css' => 'aggregator.css',
          'modules/block/block.css' => 'block.css',
          'modules/book/book.css' => 'book.css',
          'modules/color/color.css' => 'color.css',
          'modules/comment/comment.css' => 'comment.css',
          'modules/contextual/contextual.css' => 'contextual.css',
          'modules/dashboard/dashboard.css' => 'dashboard.css',
          'modules/dblog/dblog.css' => 'dblog.css',
          'modules/field/theme/field.css' => 'field.css',
          'modules/field_ui/field_ui.css' => 'field_ui.css',
          'modules/file/file.css' => 'file.css',
          'modules/filter/filter.css' => 'filter.css',
          'modules/forum/forum.css' => 'forum.css',
          'modules/help/help.css' => 'help.css',
          'modules/image/image.admin.css' => 'image.admin.css',
          'modules/image/image.css' => 'image.css',
          'modules/locale/locale.css' => 'locale.css',
          'modules/menu/menu.css' => 'menu.css',
          'modules/node/node.css' => 'node.css',
          'modules/openid/openid.css' => 'openid.css',
          'modules/poll/poll.css' => 'poll.css',
          'modules/profile/profile.css' => 'profile.css',
          'modules/search/search.css' => 'search.css',
          'modules/shortcut/shortcut.admin.css' => 'shortcut.admin.css',
          'modules/shortcut/shortcut.css' => 'shortcut.css',
          'modules/simpletest/simpletest.css' => 'simpletest.css',
          'modules/system/system.admin.css' => 'system.admin.css',
          'modules/system/system.base.css' => 'system.base.css',
          'modules/system/system.maintenance.css' => 'system.maintenance.css',
          'modules/system/system.menus.css' => 'system.menus.css',
          'modules/system/system.messages.css' => 'system.messages.css',
          'modules/system/system.theme.css' => 'system.theme.css',
          'modules/taxonomy/taxonomy.css' => 'taxonomy.css',
          'modules/toolbar/toolbar.css' => 'toolbar.css',
          'modules/tracker/tracker.css' => 'tracker.css',
          'modules/update/update.css' => 'update.css',
          'modules/user/user.css' => 'user.css',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'plugins' => 
        array (
          'page_layout' => 
          array (
            'layouts' => 'layouts/core',
          ),
          'panels' => 
          array (
            'layouts' => 'layouts/panels',
          ),
        ),
        'settings' => 
        array (
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_max_width_unit' => 'px',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_set_max_width' => '0',
          'tablet_landscape_max_width' => '960',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one-col-vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_max_width_unit' => 'px',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_set_max_width' => '0',
          'tablet_portrait_max_width' => '780',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_max_width_unit' => 'px',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_set_max_width' => '0',
          'smartphone_landscape_max_width' => '520',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-uc',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => '',
          'apple_touch_icon_path_m' => '',
          'apple_touch_icon_path_h' => '',
          'custom_css' => '',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'adaptivetheme_admin' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/themes/adaptivetheme/at_admin/adaptivetheme_admin.info',
      'name' => 'adaptivetheme_admin',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Admin',
        'description' => 'A better admin theme for Drupal 7. Clean, calm, invisible. Includes left and right sidebars, Overlay support and all AT\'s theme setting goodies.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at_admin.css',
          ),
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => 'px',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '180',
          'bigscreen_sidebar_second' => '180',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1330',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '0',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'main_menu_font' => 'mmf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'base_font_size' => '1em',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-uc',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '1',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '1',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'favicon',
          3 => 'main_menu',
          4 => 'secondary_menu',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'adaptivetheme_subtheme' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/all/themes/adaptivetheme/at_subtheme/adaptivetheme_subtheme.info',
      'name' => 'adaptivetheme_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Subtheme',
        'description' => 'Copy this subtheme to get started - see the <b><a href="http://adaptivethemes.com/documentation/adaptivethemes-documentation" target="_blank" title="Adaptivethemes.com - Rocking the hardest since 2006">documentation</a></b> for guidence or the included README. Drush users can generate a new theme using the command: drush adaptivetheme. If you need help please use the <b><a href="http://drupal.org/project/issues/adaptivetheme" target="_blank">issue queue</a></b> or ask in the IRC channel: <b><a href="irc://irc.freenode.net/drupal-adaptivetheme">#drupal-adaptivetheme</a></b>.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/global.base.css',
            1 => 'css/global.styles.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'main_menu',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'bartik' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'dark_elegant' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/themes/dark_elegant/dark_elegant.info',
      'name' => 'dark_elegant',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dark Elegant',
        'description' => 'Dark Elegant is a premium Drupal 7 theme. Developed by <a href="http://www.devsaran.com">Devsaran.com</a>.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/superfish.js',
          1 => 'js/custom.js',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'First Sidebar',
          'search_block' => 'Search Block',
          'header' => 'Header',
          'preface_first' => 'Preface First',
          'preface_middle' => 'Preface Middle',
          'preface_last' => 'Preface Last',
          'content_top' => 'Content Top',
          'content' => 'Content',
          'help' => 'Help',
          'footer' => 'Footer',
          'footer_first' => 'First Bottom',
          'footer_second' => 'Second Bottom',
          'footer_third' => 'Third Bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'main_menu',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'sidebar_layout' => 'right_sidebar',
          'slideshow_display' => '1',
          'breadcrumbs' => '1',
          'slide1_head' => 'Sample product',
          'slide2_head' => 'Sample service',
          'slide3_head' => 'Contact us',
          'slide1_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt elit, sed do eiusmod tempor...',
          'slide2_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do Lorem ipsum dolor sit amet irure dolor in reprehenderit...',
          'slide3_desc' => 'Duis aute irure dolor in reprehenderit inLorem ipsum dolor sit amet, consectetur do Lorem ipsum dolor sit amet irure...',
          'slide1_url' => 'node/1',
          'slide2_url' => 'node/2',
          'slide3_url' => 'node/3',
          'intro_text' => 'A Elegant Drupal Theme from <a href=\'http://www.devsaran.com\'>Devsaran</a>.',
        ),
        'version' => '7.x-1.1',
        'project' => 'dark_elegant',
        'datestamp' => '1378142540',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'dark_elegant',
      'version' => '7.x-1.1',
    ),
    'dcycle_theme' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/themes/dcycle_theme/dcycle_theme.info',
      'name' => 'dcycle_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'screenshot' => 'screenshot.png',
        'name' => 'Zen Sub-theme Starter Kit',
        'description' => 'Read the <a href="http://drupal.org/node/873778">online docs</a> or the included README.txt on how to create a theme with Zen.',
        'core' => '7.x',
        'base theme' => 'zen',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.menus.css',
            1 => 'css/normalize.css',
            2 => 'css/wireframes.css',
            3 => 'css/layouts/responsive-sidebars.css',
            4 => 'css/page-backgrounds.css',
            5 => 'css/tabs.css',
            6 => 'css/pages.css',
            7 => 'css/blocks.css',
            8 => 'css/navigation.css',
            9 => 'css/views-styles.css',
            10 => 'css/nodes.css',
            11 => 'css/comments.css',
            12 => 'css/forms.css',
            13 => 'css/fields.css',
            14 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'navigation' => 'Navigation bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'favicon',
          6 => 'main_menu',
          7 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '1',
          'zen_breadcrumb_title' => '0',
          'zen_skip_link_anchor' => 'main-menu',
          'zen_skip_link_text' => 'Jump to navigation',
          'zen_html5_respond_meta' => 
          array (
            0 => 'respond',
            1 => 'html5',
            2 => 'meta',
          ),
          'zen_rebuild_registry' => '1',
          'zen_wireframes' => '0',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => '',
      'version' => NULL,
    ),
    'garland' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'seven' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'stark' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.24',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => '7.24',
    ),
    'zen' => 
    array (
      'filename' => '/srv/aegir/platforms/drupal-7-2013.11.21-prod/sites/dcycleproject.org/themes/zen/zen.info',
      'name' => 'zen',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zen',
        'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="http://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
        'screenshot' => 'zen-internals/screenshot.png',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.menus.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'navigation' => 'Navigation bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '1',
          'zen_breadcrumb_title' => '0',
          'zen_layout' => 'zen-responsive-sidebars',
          'zen_skip_link_anchor' => 'main-menu',
          'zen_skip_link_text' => 'Jump to navigation',
          'zen_html5_respond_meta' => 
          array (
            0 => 'respond',
            1 => 'html5',
            2 => 'meta',
          ),
          'zen_rebuild_registry' => '0',
          'zen_wireframes' => '0',
        ),
        'version' => '7.x-5.1',
        'project' => 'zen',
        'datestamp' => '1337337097',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'platform' => -1,
      'project' => 'zen',
      'version' => '7.x-5.1',
    ),
  ),
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
