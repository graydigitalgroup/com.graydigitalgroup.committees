<?php
use CRM_Committees_ExtensionUtil as E;
return [
  'name' => 'CommitteeRole',
  'table' => 'civicrm_committee_role',
  'class' => 'CRM_Committees_DAO_CommitteeRole',
  'getInfo' => fn() => [
    'title' => E::ts('Committee Role'),
    'title_plural' => E::ts('Committee Roles'),
    'description' => E::ts('Used to identify the role in which an appointment is defined for a contact.'),
    'log' => TRUE,
    'label_field' => 'name',
  ],
  'getPaths' => fn() => [
    'add' => 'civicrm/committee/role/manage',
    'edit' => 'civicrm/committee/role/manage#?CommitteeRole=[id]',
    'delete' => 'civicrm/committee/role/manage?reset=1&action=delete&id=[id]',
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique CommitteeRole ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'name' => [
      'title' => E::ts('Role Name'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'required' => TRUE,
      'localizable' => TRUE,
      'description' => E::ts('Committee Role (e.g. Chair)'),
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'label' => E::ts('Title'),
      ],
    ],
    'is_active' => [
      'title' => E::ts('Role Is Active'),
      'sql_type' => 'boolean',
      'input_type' => 'CheckBox',
      'description' => E::ts('Is this committee role enabled?'),
      'default' => FALSE,
    ],
  ],
];
