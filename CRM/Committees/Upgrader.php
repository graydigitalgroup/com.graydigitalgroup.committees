<?php

// phpcs:disable
use CRM_Committees_ExtensionUtil as E;
// phpcs:enable

/**
 * Collection of upgrade steps.
 */
class CRM_Committees_Upgrader extends CRM_Extension_Upgrader_Base
{
  // By convention, functions that look like "function upgrade_NNNN()" are
  // upgrade tasks. They are executed in order (like Drupal's hook_update_N).

  /**
   * Upgrade Committee appointment table to add new column.
   *
   * @return TRUE on success
   * @throws CRM_Core_Exception
   */
  public function upgrade_100(): bool
  {
      $this->ctx->log->info('Applying update 100 - alter civicrm_committee_appointment table');
      $this->executeSqlFile('sql/upgrade_100.sql');
      return true;
  }

  /**
   * Upgrade Committee table to add new column.
   *
   * @return TRUE on success
   * @throws CRM_Core_Exception
   */
  public function upgrade_1000(): bool
    {
      $this->ctx->log->info('Applying update 1000 - Adding HL Community column');
      $this->executeSqlFile('sql/upgrade_1000.sql');
      return true;
  }
}
