<?php

use CRM_Committees_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_HL_Community',
    'entity' => 'SavedSearch',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'HL_Community',
        'label' => E::ts('HL Community'),
        'form_values' => null,
        'mapping_id' => null,
        'search_custom_id' => null,
        'api_entity' => 'CommitteeAppointment',
        'api_params' => [
          'version' => 4,
          'select' => [
            'contact_id',
            'CommitteeAppointment_Committee_committee_id_01.hl_community',
            'committee_id',
            'end_date',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [
            [
              'Committee AS CommitteeAppointment_Committee_committee_id_01',
              'INNER',
              [
                'committee_id',
                '=',
                'CommitteeAppointment_Committee_committee_id_01.id',
              ],
              [
                'CommitteeAppointment_Committee_committee_id_01.hl_community',
                'IS NOT EMPTY',
              ],
              [
                'CommitteeAppointment_Committee_committee_id_01.is_active',
                '=',
                true,
              ],
              [
                "is_active",
                "=",
                true
              ],
            ],
          ],
          'having' => [],
        ],
        'expires_date' => null,
        'description' => null,
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_HL_Community_SearchDisplay_Committee_Appointments_Table_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'HL_Community_Data',
        'label' => E::ts('HL Community Data'),
        'saved_search_id.name' => 'HL_Community',
        'type' => 'table',
        'settings' => [
          'description' => null,
          'sort' => [],
          'limit' => 50,
          'pager' => [],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'contact_id',
              'dataType' => 'Integer',
              'label' => E::ts('Constitid'),
              'sortable' => true,
            ],
            [
              'type' => 'field',
              'key' => 'CommitteeAppointment_Committee_committee_id_01.hl_community',
              'dataType' => 'String',
              'label' => E::ts('Community'),
              'sortable' => true,
            ],
            [
              'type' => 'field',
              'key' => 'committee_id',
              'dataType' => 'Integer',
              'label' => E::ts('CommunityType'),
              'sortable' => true,
              'rewrite' => "{if \$communityType <> 'Yes'}Committee{else}{/if}",
            ],
            [
              'type' => 'field',
              'key' => 'end_date',
              'dataType' => 'Date',
              'label' => E::ts('enddate'),
              'sortable' => true,
              'rewrite' => "{if \$enddate eq 'Yes'}[end_date]{else}{/if}",
            ],
          ],
          'actions' => true,
          'classes' => [
            'table',
            'table-striped',
          ],
        ],
        'acl_bypass' => false,
      ],
      'match' => [
        'name',
        'saved_search_id',
      ],
    ],
  ],
];
