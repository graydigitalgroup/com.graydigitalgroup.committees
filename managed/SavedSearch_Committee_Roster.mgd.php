<?php
use CRM_Committees_ExtensionUtil as E;
return [
  [
    'name' => 'SavedSearch_Committee_Roster',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Committee_Roster',
        'label' => E::ts('Committee Roster'),
        'api_entity' => 'CommitteeAppointment',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'contact_id.display_name',
            'CommitteeAppointment_Contact_contact_id_01_Contact_Email_contact_id_01.email',
            'CommitteeAppointment_Contact_contact_id_01_Contact_Membership_contact_id_01.membership_type_id:label',
            'committee_id.name',
            'committee_role_id.name',
            'CommitteeAppointment_Contact_contact_id_01.gender_id:label',
            'CommitteeAppointment_Contact_contact_id_01.Demographics.Race_Ethnicity:label',
            'CommitteeAppointment_Contact_contact_id_01.age_years',
            'CommitteeAppointment_Contact_contact_id_01.Additional_Information.Is_Fellow',
            'CommitteeAppointment_Contact_contact_id_01.Additional_Information.Neuro_Specialties',
          ],
          'orderBy' => [],
          'where' => [
              [
                'is_active',
                '=',
                TRUE,
              ],
          ],
          'groupBy' => [],
          'join' => [
            [
              'Contact AS CommitteeAppointment_Contact_contact_id_01',
              'INNER',
              [
                'contact_id',
                '=',
                'CommitteeAppointment_Contact_contact_id_01.id',
              ],
            ],
            [
              'Membership AS CommitteeAppointment_Contact_contact_id_01_Contact_Membership_contact_id_01',
              'INNER',
              [
                'CommitteeAppointment_Contact_contact_id_01.id',
                '=',
                'CommitteeAppointment_Contact_contact_id_01_Contact_Membership_contact_id_01.contact_id',
              ],
              [
                'CommitteeAppointment_Contact_contact_id_01_Contact_Membership_contact_id_01.membership_type_id:name',
                'IN',
                [
                  'Active',
                  'Emeritus',
                  'Junior',
                  'Central Office',
                ],
              ],
            ],
            [
              'Email AS CommitteeAppointment_Contact_contact_id_01_Contact_Email_contact_id_01',
              'INNER',
              [
                'CommitteeAppointment_Contact_contact_id_01.id',
                '=',
                'CommitteeAppointment_Contact_contact_id_01_Contact_Email_contact_id_01.contact_id',
              ],
              [
                'CommitteeAppointment_Contact_contact_id_01_Contact_Email_contact_id_01.is_primary',
                '=',
                TRUE,
              ],
            ],
          ],
          'having' => [],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Committee_Roster_SearchDisplay_Committee_Roster',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Committee_Roster',
        'label' => E::ts('Committee Roster'),
        'saved_search_id.name' => 'Committee_Roster',
        'type' => 'table',
        'settings' => [
          'description' => NULL,
          'sort' => [],
          'limit' => 50,
          'pager' => [],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'contact_id.display_name',
              'dataType' => 'String',
              'label' => E::ts('Name'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01_Contact_Email_contact_id_01.email',
              'dataType' => 'String',
              'label' => E::ts('Email'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01_Contact_Membership_contact_id_01.membership_type_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Member Type'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'committee_id.name',
              'dataType' => 'String',
              'label' => E::ts('Active Committee'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'committee_role_id.name',
              'dataType' => 'String',
              'label' => E::ts('Role'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01.gender_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Gender'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01.Demographics.Race_Ethnicity:label',
              'dataType' => 'String',
              'label' => E::ts('Race/Ethnicity'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01.age_years',
              'dataType' => 'Integer',
              'label' => E::ts('Age'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01.Additional_Information.Is_Fellow',
              'dataType' => 'Boolean',
              'label' => E::ts('Fellow Status'),
              'sortable' => TRUE,
              'rewrite' => '',
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Contact_contact_id_01.Additional_Information.Neuro_Specialties:label',
              'dataType' => 'String',
              'label' => E::ts('Specialty Area(s)'),
              'sortable' => TRUE,
            ],
          ],
          'actions' => TRUE,
          'classes' => [
            'table',
            'table-striped',
          ],
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
