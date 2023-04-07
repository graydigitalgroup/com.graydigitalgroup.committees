<?php
return [
	[
		'name' => 'SavedSearch_CommitteeRolesDashboard',
		'entity' => 'SavedSearch',
		'cleanup' => 'always',
		'update' => 'unmodified',
		'params' => [
		'version' => 4,
		'values' => [
			'name' => 'CommitteeRolesDashboard',
			'label' => 'Committee Roles',
			'form_values' => NULL,
			'mapping_id' => NULL,
			'search_custom_id' => NULL,
			'api_entity' => 'CommitteeRole',
			'api_params' => [
			'version' => 4,
			'select' => [
				'id',
				'name',
				'is_active',
			],
			'orderBy' => [],
			'where' => [],
			'groupBy' => [],
			'join' => [],
			'having' => [],
			],
			'expires_date' => NULL,
			'description' => NULL,
		],
		],
	],
	[
		'name' => 'SavedSearch_CommitteeRolesDashboard_SearchDisplay_Committee_Roles_Table',
		'entity' => 'SearchDisplay',
		'cleanup' => 'always',
		'update' => 'unmodified',
		'params' => [
		'version' => 4,
		'values' => [
			'name' => 'Committee_Roles_Table',
			'label' => 'Committee Roles Dashboard',
			'saved_search_id.name' => 'CommitteeRolesDashboard',
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
				'key' => 'id',
				'dataType' => 'Integer',
				'label' => 'ID',
				'sortable' => TRUE,
				],
				[
				'type' => 'field',
				'key' => 'name',
				'dataType' => 'String',
				'label' => 'Title',
				'sortable' => TRUE,
				],
				[
				'type' => 'field',
				'key' => 'is_active',
				'dataType' => 'Boolean',
				'label' => 'Role Is Active',
				'sortable' => TRUE,
				],
				[
				'size' => 'btn-xs',
				'links' => [
					[
					'entity' => '',
					'action' => '',
					'join' => '',
					'target' => 'crm-popup',
					'icon' => 'fa-external-link',
					'text' => 'Edit',
					'style' => 'default',
					'path' => 'civicrm/committee/role/manage#?CommitteeRole=[id]',
					'condition' => [],
					],
				],
				'type' => 'buttons',
				'alignment' => 'text-right',
				],
			],
			'actions' => TRUE,
			'classes' => [
				'table',
				'table-striped',
			],
			],
			'acl_bypass' => FALSE,
		],
		],
	],
];
