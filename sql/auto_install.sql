-- +--------------------------------------------------------------------+
-- | Copyright CiviCRM LLC. All rights reserved.                        |
-- |                                                                    |
-- | This work is published under the GNU AGPLv3 license with some      |
-- | permitted exceptions and without any warranty. For full license    |
-- | and copyright information, see https://civicrm.org/licensing       |
-- +--------------------------------------------------------------------+
--
-- Generated from schema.tpl
-- DO NOT EDIT.  Generated by CRM_Core_CodeGen
--
-- /*******************************************************
-- *
-- * Clean up the existing tables - this section generated from drop.tpl
-- *
-- *******************************************************/

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_committee_appointment`;
DROP TABLE IF EXISTS `civicrm_committee_role`;
DROP TABLE IF EXISTS `civicrm_committee`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_committee
-- *
-- * Collection of Committees.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_committee` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Committee ID',
  `name` varchar(255) NOT NULL COMMENT 'Committee Name (e.g. Communications)',
  `summary` text COMMENT 'Brief summary of the committee. Text and html allowed. Displayed on Committee pages to describe what this committee is.',
  `activities` text COMMENT 'Activities for the committee. Text and html allowed. Displayed on Committee pages to denote the activities involved with this committee.',
  `is_active` tinyint DEFAULT 0 COMMENT 'Is this committee enabled?',
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB;

-- /*******************************************************
-- *
-- * civicrm_committee_role
-- *
-- * Used to identify the role in which an appointment is defined for a contact.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_committee_role` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique CommitteeRole ID',
  `name` varchar(255) NOT NULL COMMENT 'Committee Role (e.g. Chair)',
  `is_active` tinyint DEFAULT 0 COMMENT 'Is this committee role enabled?',
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB;

-- /*******************************************************
-- *
-- * civicrm_committee_appointment
-- *
-- * Committee appointments for contacts.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_committee_appointment` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique CommitteeAppointment ID',
  `contact_id` int unsigned NOT NULL COMMENT 'FK to Contact',
  `committee_id` int unsigned NOT NULL COMMENT 'FK to Committee',
  `committee_role_id` int unsigned COMMENT 'FK to Committee Role',
  `start_date` date DEFAULT NULL COMMENT 'Date the appointment starts.',
  `end_date` date DEFAULT NULL COMMENT 'Date the appointment ends.',
  `eligibility_end_date` date DEFAULT NULL COMMENT 'The full term date the appointment woud run through.',
  `is_active` tinyint DEFAULT 0 COMMENT 'Is this committee appointment enabled?',
  PRIMARY KEY (`id`),
  CONSTRAINT FK_civicrm_committee_appointment_contact_id FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact`(`id`) ON DELETE CASCADE,
  CONSTRAINT FK_civicrm_committee_appointment_committee_id FOREIGN KEY (`committee_id`) REFERENCES `civicrm_committee`(`id`) ON DELETE CASCADE,
  CONSTRAINT FK_civicrm_committee_appointment_committee_role_id FOREIGN KEY (`committee_role_id`) REFERENCES `civicrm_committee_role`(`id`) ON DELETE CASCADE
)
ENGINE=InnoDB;
