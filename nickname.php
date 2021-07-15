<?php

require_once 'nickname.civix.php';
// phpcs:disable
use CRM_Nickname_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function nickname_civicrm_config(&$config) {
  _nickname_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function nickname_civicrm_xmlMenu(&$files) {
  _nickname_civix_civicrm_xmlMenu($files);
}

function nickname_civicrm_buildForm(&$formName, &$form) {
  if ($formName == 'CRM_Contact_Form_Contact') {
    unset($form->_elements[$form->_elementIndex['nick_name']], $form->_elementIndex['nick_name']);
  }
  if ($formName == 'CRM_Contact_Form_Inline_ContactInfo') {
    CRM_Core_Resources::singleton()->addScript("
      CRM.$(function($) {
        $('#nick_name').parent().parent().hide();
      });
    ");
  }
}

function nickname_civicrm_pageRun( &$page ) {
  if (get_class($page) == 'CRM_Contact_Page_View_Summary') {
    CRM_Core_Resources::singleton()->addScript("
      CRM.$(function($) {
        $('.crm-contact-nick_name').parent().hide();
      });
    ");
  }
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function nickname_civicrm_install() {
  _nickname_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function nickname_civicrm_postInstall() {
  _nickname_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function nickname_civicrm_uninstall() {
  _nickname_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function nickname_civicrm_enable() {
  _nickname_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function nickname_civicrm_disable() {
  _nickname_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function nickname_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _nickname_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function nickname_civicrm_managed(&$entities) {
  _nickname_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function nickname_civicrm_caseTypes(&$caseTypes) {
  _nickname_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function nickname_civicrm_angularModules(&$angularModules) {
  _nickname_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function nickname_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _nickname_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function nickname_civicrm_entityTypes(&$entityTypes) {
  _nickname_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function nickname_civicrm_themes(&$themes) {
  _nickname_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function nickname_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function nickname_civicrm_navigationMenu(&$menu) {
//  _nickname_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _nickname_civix_navigationMenu($menu);
//}
