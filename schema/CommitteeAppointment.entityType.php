<?php
use CRM_Committees_ExtensionUtil as E;
return [
  'name' => 'CommitteeAppointment',
  'table' => 'civicrm_committee_appointment',
  'class' => 'CRM_Committees_DAO_CommitteeAppointment',
  'getInfo' => fn() => [
    'title' => E::ts('Committee Appointment'),
    'title_plural' => E::ts('Committee Appointments'),
    'description' => E::ts('Committee appointments for contacts.'),
    'log' => TRUE,
  ],
  'getPaths' => fn() => [
    'add' => 'civicrm/committee/appointment/manage',
    'edit' => 'civicrm/committee/appointment/manage#?CommitteeAppointment=[id]',
    'delete' => 'civicrm/committee/appointment/manage?reset=1&action=delete&id=[id]',
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique CommitteeAppointment ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'contact_id' => [
      'title' => E::ts('Contact ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'required' => TRUE,
      'description' => E::ts('FK to Contact'),
      'input_attrs' => [
        'label' => E::ts('Contact'),
        'filter' => [
          'contact_type' => 'Individual',
        ],
      ],
      'entity_reference' => [
        'entity' => 'Contact',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
    'committee_id' => [
      'title' => E::ts('Committee ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'required' => TRUE,
      'description' => E::ts('FK to Committee'),
      'entity_reference' => [
        'entity' => 'Committee',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
    'committee_role_id' => [
      'title' => E::ts('Committee Role ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => E::ts('FK to Committee Role'),
      'entity_reference' => [
        'entity' => 'CommitteeRole',
        'key' => 'id',
        'on_delete' => 'CASCADE',
      ],
    ],
    'start_date' => [
      'title' => E::ts('Appointment Start Date'),
      'sql_type' => 'date',
      'input_type' => 'Select Date',
      'description' => E::ts('Date the appointment starts.'),
      'default' => NULL,
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'format_type' => 'activityDate',
      ],
    ],
    'end_date' => [
      'title' => E::ts('Annual Appointment End Date'),
      'sql_type' => 'date',
      'input_type' => 'Select Date',
      'description' => E::ts('Date the appointment ends.'),
      'default' => NULL,
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'format_type' => 'activityDate',
      ],
    ],
    'eligibility_end_date' => [
      'title' => E::ts('Eligibility End Date'),
      'sql_type' => 'date',
      'input_type' => 'Select Date',
      'description' => E::ts('The full term date the appointment woud run through.'),
      'default' => NULL,
      'usage' => [
        'import',
        'export',
        'duplicate_matching',
      ],
      'input_attrs' => [
        'format_type' => 'activityDate',
      ],
    ],
    'is_active' => [
      'title' => E::ts('Appointment Is Active'),
      'sql_type' => 'boolean',
      'input_type' => 'CheckBox',
      'description' => E::ts('Is this committee appointment enabled?'),
      'default' => FALSE,
    ],
  ],
];
