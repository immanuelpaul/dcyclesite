;****************************************
; General
;****************************************

; Description
; A drush makefile for Drupal core.

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Core
;****************************************

; Checking for new updates at:
; https://github.com/pressflow/7/tags
; https://drupal.org/project/drupal

; Pressflow
projects[drupal][type] = core
projects[drupal][download][type] = git
projects[drupal][download][url] = git://github.com/pressflow/7.git
projects[drupal][download][tag] = pressflow-7.23
; Patching Pressflow 7.23 with Drupal 7.24
; https://drupal.org/node/2140967
projects[drupal][patch][2140967] = http://drupal.org/files/issues/diff-7.23-7.24.patch

; To use the standard core from drupal.org instead,
; uncomment the line below and comment out the lines above.
;projects[drupal][version] = 7.24

;****************************************
; Patches
;****************************************

; Improvements to the core file robots.txt in Drupal
; https://drupal.org/node/1317338#comment-5146596
; If this patch does not work anymore on a new version of Drupal, we should remake it.
projects[drupal][patch][1317338] = http://drupal.org/files/robots.txt.drupal-7.4.patch

; Enforce not using core module statistics
; https://drupal.org/node/2007316#comment-7474460
; If this patch does not work anymore on a new version of Drupal, we should remake it.
projects[drupal][patch][2007316] = http://drupal.org/files/2007316-remove-core-module-statistics-d7.patch

; Empty $account->roles causes a sql error in user_access
; https://drupal.org/node/777116#comment-4283336
projects[drupal][patch][777116] = http://drupal.org/files/issues/777116-no-roles-error.patch

; ACL support for D7
; https://drupal.org/node/1798242
; ./sites/default/files directory permission check is incorrect during install AND status report
; https://drupal.org/node/944582#comment-5872786
projects[drupal][patch][944582] = http://drupal.org/files/d7-944582-59-do-not-test.patch

; node_access integrity constraint violation on module_invoke_all
; https://drupal.org/node/1865072#comment-6841614
;projects[drupal][patch][1865072] = https://drupal.org/files/1865072-node_insert_save_d7.patch

;****************************************
; End
;****************************************
;****************************************
; General
;****************************************

; Description
; A drush makefile for "Apache Solr Search Integration" (apachesolr).

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Core
;****************************************

projects[apachesolr][subdir] = contrib
projects[apachesolr][version] = 1.6

projects[apachesolr_attachments][subdir] = contrib
projects[apachesolr_attachments][version] = 1.3

;****************************************
; End
;****************************************
;****************************************
; General
;****************************************

; Description
; A drush makefile for Drupal geographical modules.

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Modules
;****************************************

projects[geofield][subdir] = contrib
projects[geofield][version] = 2.1

projects[geophp][subdir] = contrib
projects[geophp][version] = 1.7

projects[openlayers][subdir] = contrib
projects[openlayers][version] = 2.0-beta7

projects[openlayers_plus][subdir] = contrib
projects[openlayers_plus][version] = 3.0-beta1

projects[proj4js][subdir] = contrib
projects[proj4js][version] = 1.2

;****************************************
; End
;****************************************
;****************************************
; General
;****************************************

; Description
; A drush makefile for "Localized Drupal Distribution" (l10n_install).

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Profile
;****************************************

; Checking for new updates at:
; http://drupal.org/project/l10n_install
; http://drupalcode.org/project/l10n_install.git/tags

projects[l10n_install][type] = profile
projects[l10n_install][download][type] = git
projects[l10n_install][download][url] = git://git.drupal.org/project/l10n_install.git
projects[l10n_install][download][tag] = 7.x-1.0-beta26

;****************************************
; End
;****************************************
;****************************************
; General
;****************************************

; Description
; A drush makefile for Drupal modules.

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Modules
;****************************************

projects[admin_menu][subdir] = contrib
projects[admin_menu][version] = 3.0-rc4

projects[admin_views][subdir] = contrib
projects[admin_views][version] = 1.2

projects[advanced_help][subdir] = contrib
projects[advanced_help][version] = 1.0

projects[apps][subdir] = contrib
projects[apps][version] = 1.0-beta7

projects[backup_migrate][subdir] = contrib
projects[backup_migrate][version] = 2.8

projects[backup_migrate_files][subdir] = contrib
projects[backup_migrate_files][version] = 1.x-dev

projects[boxes][subdir] = contrib
projects[boxes][version] = 1.1

projects[captcha][subdir] = contrib
projects[captcha][version] = 1.0

projects[cck][subdir] = contrib
projects[cck][version] = 2.x-dev

projects[colorbox][subdir] = contrib
projects[colorbox][version] = 2.4
; Colorbox library download URL
; https://drupal.org/node/1901374
; https://drupal.org/node/1991874
libraries[kplatforms_colorbox][directory_name] = colorbox
libraries[kplatforms_colorbox][download][type] = git
libraries[kplatforms_colorbox][download][url] = https://github.com/jackmoore/colorbox.git

projects[context][subdir] = contrib
projects[context][version] = 3.1

projects[css3pie][subdir] = contrib
projects[css3pie][version] = 2.1
libraries[kplatforms_pie][directory_name] = PIE
libraries[kplatforms_pie][download][type] = get
libraries[kplatforms_pie][download][url] = https://github.com/lojjic/PIE/archive/1.0.0.zip

projects[ctools][subdir] = contrib
projects[ctools][version] = 1.3

projects[date][subdir] = contrib
projects[date][version] = 2.6

projects[date_ical][subdir] = contrib
projects[date_ical][version] = 3.0

projects[dblogin][subdir] = contrib
projects[dblogin][version] = 1.1

projects[diff][subdir] = contrib
projects[diff][version] = 3.2

projects[elements][subdir] = contrib
projects[elements][version] = 1.4

projects[email][subdir] = contrib
projects[email][version] = 1.2

projects[entity][subdir] = contrib
projects[entity][version] = 1.2

projects[entityreference][subdir] = contrib
projects[entityreference][version] = 1.1
; https://drupal.org/node/1858402
; People seems to be able to disable a Field module which still has fields, and core seems to call field hooks on disabled modules
; https://drupal.org/node/1459540#comment-6810146
projects[entityreference][patch][1459540] = https://drupal.org/files/entityreference-1459540-47-workaround-fatal-error.patch

projects[entity_autocomplete][subdir] = contrib
projects[entity_autocomplete][version] = 1.0-beta3

projects[entity_translation][subdir] = contrib
projects[entity_translation][version] = 1.0-beta3

projects[environment_indicator][subdir] = contrib
projects[environment_indicator][version] = 2.0

projects[facetapi][subdir] = contrib
projects[facetapi][version] = 1.3

projects[features][subdir] = contrib
projects[features][version] = 2.0

projects[feeds][subdir] = contrib
projects[feeds][version] = 2.0-alpha8

projects[field_collection][subdir] = contrib
projects[field_collection][version] = 1.0-beta5

projects[field_group][subdir] = contrib
projects[field_group][version] = 1.3

projects[flag][subdir] = contrib
projects[flag][version] = 3.2

projects[geshifilter][subdir] = contrib
projects[geshifilter][version] = 1.2
; Remove libraries module from make file
; https://drupal.org/node/1948852
projects[geshifilter][patch][1948852] = http://drupal.org/files/1948852_make_example_3.patch
libraries[kplatforms_geshi][directory_name] = geshi
libraries[kplatforms_geshi][download][type] = svn
libraries[kplatforms_geshi][download][url] = https://svn.code.sf.net/p/geshi/code/branches/RELEASE_1_0_X_STABLE/geshi-1.0.X/src/
; GeSHi Puppet language definition
;libraries[kplatforms_geshi_puppet][destination] = libraries/geshi
;libraries[kplatforms_geshi_puppet][directory_name] = geshi
;libraries[kplatforms_geshi_puppet][download][type] = get
;libraries[kplatforms_geshi_puppet][download][url] = https://raw.github.com/jasonhancock/geshi-language-files/7fd7a709d857f74b78d42990a2381a45eeb93429/puppet.php
;libraries[kplatforms_geshi_puppet][overwrite] = TRUE
; ^
; "[overwrite] = TRUE" in makefile with Drush 5 overwrites instead of merging as in Drush make 2.3
; https://drupal.org/node/2131945

projects[globalredirect][subdir] = contrib
projects[globalredirect][version] = 1.5

projects[google_analytics][subdir] = contrib
projects[google_analytics][version] = 1.4

projects[hidden_captcha][subdir] = contrib
projects[hidden_captcha][version] = 1.0

projects[honeypot][subdir] = contrib
projects[honeypot][version] = 1.15

projects[i18n][subdir] = contrib
projects[i18n][version] = 1.10

projects[i18n_boxes][subdir] = contrib
projects[i18n_boxes][version] = 1.0

projects[i18nviews][subdir] = contrib
projects[i18nviews][version] = 3.x-dev

projects[imce][subdir] = contrib
projects[imce][version] = 1.7

projects[imce_mkdir][subdir] = contrib
projects[imce_mkdir][version] = 1.0

projects[imce_wysiwyg][subdir] = contrib
projects[imce_wysiwyg][version] = 1.0

projects[jcarousel][subdir] = contrib
projects[jcarousel][version] = 2.6

projects[job_scheduler][subdir] = contrib
projects[job_scheduler][version] = 2.0-alpha3

projects[l10n_client][subdir] = contrib
projects[l10n_client][version] = 1.3

projects[l10n_update][subdir] = contrib
projects[l10n_update][version] = 1.0-beta3
; Integrity constraint violation during Aegir installation
; http://drupal.org/node/1567372#comment-5970052
projects[l10n_update][patch][1567372] = http://drupal.org/files/1567372-l10n_update-aegir.patch

projects[libraries][subdir] = contrib
projects[libraries][version] = 2.1

projects[lightbox2][subdir] = contrib
projects[lightbox2][version] = 1.0-beta1

projects[link][subdir] = contrib
projects[link][version] = 1.1
; 'title_value' in 'link_field_update_instance' undefined
; http://drupal.org/node/1914286#comment-7055150
projects[link][patch][1914286] = https://drupal.org/files/Fixed_title_value_in_link_field_update_instance_undefined-1914286-3.patch

projects[mailsystem][subdir] = contrib
projects[mailsystem][version] = 2.34

projects[markdown][subdir] = contrib
projects[markdown][version] = 1.2

projects[masquerade][subdir] = contrib
projects[masquerade][version] = 1.0-rc5

projects[maxlength][subdir] = contrib
projects[maxlength][version] = 3.0-beta1

projects[media][subdir] = contrib
projects[media][version] = 1.3

projects[media_flickr][subdir] = contrib
projects[media_flickr][version] = 1.0-alpha3

projects[media_vimeo][subdir] = contrib
projects[media_vimeo][version] = 1.0-beta5

projects[media_youtube][subdir] = contrib
projects[media_youtube][version] = 1.0-beta3

projects[menu_block][subdir] = contrib
projects[menu_block][version] = 2.3

projects[metatag][subdir] = contrib
projects[metatag][version] = 1.0-beta7

projects[mimemail][subdir] = contrib
projects[mimemail][version] = 1.0-beta1

projects[mollom][subdir] = contrib
projects[mollom][version] = 2.8

projects[nice_menus][subdir] = contrib
projects[nice_menus][version] = 2.5

projects[nodequeue][subdir] = contrib
projects[nodequeue][version] = 2.0-beta1

projects[og][subdir] = contrib
projects[og][version] = 2.4

projects[openidadmin][subdir] = contrib
projects[openidadmin][version] = 1.0

projects[page_title][subdir] = contrib
projects[page_title][version] = 2.7

projects[panels][subdir] = contrib
projects[panels][version] = 3.3

projects[pathauto][subdir] = contrib
projects[pathauto][version] = 1.2

projects[pathauto_persist][subdir] = contrib
projects[pathauto_persist][version] = 1.3

projects[piwik][subdir] = contrib
projects[piwik][version] = 2.4

projects[print][subdir] = contrib
projects[print][version] = 1.2

projects[profile2][subdir] = contrib
projects[profile2][version] = 1.3

projects[publishcontent][subdir] = contrib
projects[publishcontent][version] = 1.2

projects[recaptcha][subdir] = contrib
projects[recaptcha][version] = 1.10

projects[redirect][subdir] = contrib
projects[redirect][version] = 1.0-rc1

projects[rules][subdir] = contrib
projects[rules][version] = 2.6

projects[service_links][subdir] = contrib
projects[service_links][version] = 2.2

projects[simplenews][subdir] = contrib
projects[simplenews][version] = 1.1

projects[stringoverrides][subdir] = contrib
projects[stringoverrides][version] = 1.8

projects[strongarm][subdir] = contrib
projects[strongarm][version] = 2.0

projects[styles][subdir] = contrib
projects[styles][version] = 2.0-alpha8

projects[superfish][subdir] = contrib
projects[superfish][version] = 1.9

projects[title][subdir] = contrib
projects[title][version] = 1.0-alpha7

projects[token][subdir] = contrib
projects[token][version] = 1.5

projects[transliteration][subdir] = contrib
projects[transliteration][version] = 3.1

projects[variable][subdir] = contrib
projects[variable][version] = 2.3

projects[views][subdir] = contrib
projects[views][version] = 3.7

projects[views_boxes][subdir] = contrib
projects[views_boxes][version] = 1.0-beta8

projects[views_bulk_operations][subdir] = contrib
projects[views_bulk_operations][version] = 3.1

projects[views_slideshow][subdir] = contrib
projects[views_slideshow][version] = 3.0
libraries[kplatforms_jquery_cycle][directory_name] = jquery.cycle
libraries[kplatforms_jquery_cycle][download][type] = get
libraries[kplatforms_jquery_cycle][download][url] = https://raw.github.com/malsup/cycle/master/jquery.cycle.all.js
libraries[kplatforms_json2][directory_name] = json2
libraries[kplatforms_json2][download][type] = get
libraries[kplatforms_json2][download][url] = https://raw.github.com/douglascrockford/JSON-js/master/json2.js

projects[webform][subdir] = contrib
projects[webform][version] = 3.19

projects[wysiwyg][subdir] = contrib
projects[wysiwyg][version] = 2.2
; patch wysiwyg for htauth sites
; https://drupal.org/node/1980850
; https://drupal.org/node/1802394#comment-6556656
projects[wysiwyg][patch][1802394] = http://drupal.org/files/wysiwyg-1802394-4.patch
libraries[kplatforms_ckeditor][directory_name] = ckeditor
libraries[kplatforms_ckeditor][download][type] = svn
libraries[kplatforms_ckeditor][download][url] = http://svn.ckeditor.com/CKEditor/releases/stable/
libraries[kplatforms_tinymce][directory_name] = tinymce
libraries[kplatforms_tinymce][download][type] = get
libraries[kplatforms_tinymce][download][url] = https://github.com/downloads/tinymce/tinymce/tinymce_3.4.9_jquery.zip
;libraries[kplatforms_tinymce_fr][directory_name] = tinymce
;libraries[kplatforms_tinymce_fr][download][type] = get
;libraries[kplatforms_tinymce_fr][download][url] = http://www.tinymce.com/i18n3x/index.php%3Fctrl%3Dexport%26act%3Dzip%26la%5B%5D%3Dfr%26pr_id%3D7%26la_export%3Djs
;libraries[kplatforms_tinymce_fr][overwrite] = TRUE
; ^
; "[overwrite] = TRUE" in makefile with Drush 5 overwrites instead of merging as in Drush make 2.3
; https://drupal.org/node/2131945

projects[xmlsitemap][subdir] = contrib
projects[xmlsitemap][version] = 2.0-rc2

;****************************************
; End
;****************************************
;****************************************
; General
;****************************************

; Description
; A drush makefile for Drupal themes.

; drush make API version
api = 2

; Drupal core
core = 7.x

;****************************************
; Themes
;****************************************

projects[adaptivetheme][version] = 3.1

projects[zen][version] = 5.4

;****************************************
; End
;****************************************
