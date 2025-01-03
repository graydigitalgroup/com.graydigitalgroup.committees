<?php
use CRM_Committees_ExtensionUtil as E;
return [
  'name' => 'Committee',
  'table' => 'civicrm_committee',
  'class' => 'CRM_Committees_DAO_Committee',
  'getInfo' => fn() => [
    'title' => E::ts('Committee'),
    'title_plural' => E::ts('Committees'),
    'description' => E::ts('Collection of Committees.'),
    'log' => TRUE,
    'label_field' => 'name',
  ],
  'getPaths' => fn() => [
    'add' => 'civicrm/committee/manage',
    'edit' => 'civicrm/committee/manage#?Committee=[id]',
    'delete' => 'civicrm/committee/manage?reset=1&action=delete&id=[id]',
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique Committee ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'name' => [
      'title' => E::ts('Committee Name'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'required' => TRUE,
      'localizable' => TRUE,
      'description' => E::ts('Committee Name (e.g. Communications)'),
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'label' => E::ts('Title'),
      ],
    ],
    'summary' => [
      'title' => E::ts('Committee Summary'),
      'sql_type' => 'text',
      'input_type' => 'TextArea',
      'localizable' => TRUE,
      'description' => E::ts('Brief summary of the committee. Text and html allowed. Displayed on Committee pages to describe what this committee is.'),
      'input_attrs' => [
        'label' => E::ts('Summary'),
        'rows' => 4,
        'cols' => 60,
      ],
    ],
    'activities' => [
      'title' => E::ts('Committee Activities'),
      'sql_type' => 'text',
      'input_type' => 'TextArea',
      'localizable' => TRUE,
      'description' => E::ts('Activities for the committee. Text and html allowed. Displayed on Committee pages to denote the activities involved with this committee.'),
      'input_attrs' => [
        'label' => E::ts('Activities'),
        'rows' => 4,
        'cols' => 60,
      ],
    ],
    'hl_community' => [
      'title' => E::ts('HL Community'),
      'sql_type' => 'varchar(255)',
      'input_type' => 'Text',
      'required' => TRUE,
      'localizable' => TRUE,
      'description' => E::ts('Community name on HigherLogic.'),
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'label' => E::ts('HL Community'),
      ],
    ],
    'is_active' => [
      'title' => E::ts('Committee Is Active'),
      'sql_type' => 'boolean',
      'input_type' => 'CheckBox',
      'description' => E::ts('Is this committee enabled?'),
      'default' => FALSE,
    ],
  ],
];
