ALTER TABLE `civicrm_committee`
ADD COLUMN `hl_community` VARCHAR(255) NULL COMMENT 'HigherLogic Community name.'
AFTER `activities`;
