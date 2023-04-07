<?php
// phpcs:disable
use CRM_Committees_ExtensionUtil as E;
use \Symfony\Component\EventDispatcher\EventSubscriberInterface;
// phpcs:enable

class CRM_Committees_BAO_Committee extends CRM_Committees_DAO_Committee implements EventSubscriberInterface {

	public static function getSubscribedEvents() {
		return [
			'hook_civicrm_pre::Committee' => 'pre_committee',
			'hook_civicrm_post::Committee' => 'pre_committee',
		];
	}

	public static function pre_committee(Civi\Core\Event\GenericHookEvent $event) {
		// error_log( 'pre_committee: ' . print_r( $event, true ) );
	}

	public static function post_committee(string $op, string $objectName, int $objectId, &$objectRef) {
		// error_log( 'post_committee: ' . print_r( $op, true ) );
	}

  /**
   * Create a new Committee based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Committees_DAO_Committee|NULL
   */
  /*
  public static function create($params) {
    $className = 'CRM_Committees_DAO_Committee';
    $entityName = 'Committee';
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
