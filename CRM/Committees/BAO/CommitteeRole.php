<?php
// phpcs:disable
use CRM_Committees_ExtensionUtil as E;
// phpcs:enable

class CRM_Committees_BAO_CommitteeRole extends CRM_Committees_DAO_CommitteeRole {

  /**
   * Create a new CommitteeRole based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Committees_DAO_CommitteeRole|NULL
   */
  /*
  public static function create($params) {
    $className = 'CRM_Committees_DAO_CommitteeRole';
    $entityName = 'CommitteeRole';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  }
  */

}
