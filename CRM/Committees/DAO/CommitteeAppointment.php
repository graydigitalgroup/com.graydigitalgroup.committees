<?php

/**
 * DAOs provide an OOP-style facade for reading and writing database records.
 *
 * DAOs are a primary source for metadata in older versions of CiviCRM (<5.74)
 * and are required for some subsystems (such as APIv3).
 *
 * This stub provides compatibility. It is not intended to be modified in a
 * substantive way. Property annotations may be added, but are not required.
 * @property string $id 
 * @property string $contact_id 
 * @property string $committee_id 
 * @property string $committee_role_id 
 * @property string $start_date 
 * @property string $end_date 
 * @property string $eligibility_end_date 
 * @property bool|string $is_active 
 */
class CRM_Committees_DAO_CommitteeAppointment extends CRM_Committees_DAO_Base {

  /**
   * Required by older versions of CiviCRM (<5.74).
   * @var string
   */
  public static $_tableName = 'civicrm_committee_appointment';

}
