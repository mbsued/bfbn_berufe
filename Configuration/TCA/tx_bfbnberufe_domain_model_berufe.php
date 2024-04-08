<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe',
        'label' => 'bezeichnung',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
			'fe_group' => 'fe_group',			
        ],
        'searchFields' => 'bezeichnung',
        'iconfile' => 'EXT:bfbn_berufe/Resources/Public/Icons/tx_bfbnberufe_domain_model_berufe.svg'
    ],
    'interface' => [        
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, ausb_abu, ausb_gh, ausb_s, ausb_t, ausb_w, ausb_gh_stern, ausb_s_stern, ausb_w_stern, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime, fe_group'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    0 => [
                        'label' => '',
                        'value' => 0,
                    ],
                ],
                'foreign_table' => 'tx_bfbnberufe_domain_model_berufe',
                'foreign_table_where' => 'AND {#tx_bfbnberufe_domain_model_berufe}.{#pid}=###CURRENT_PID### AND {#tx_bfbnberufe_domain_model_berufe}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime', 
                'format' => 'datetime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'fe_group' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    0 => [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        'value' => -1,
                    ],
                    1 => [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        'value' => -2,
                    ],
                    2 => [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        'value' => '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
        'bezeichnung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.bezeichnung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true',
            ],
        ],
        'ausb_abu' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_abu',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_gh' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_gh',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_s' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_s',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_t' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_t',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_w' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_w',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_gh_stern' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_gh_stern',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_s_stern' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_s_stern',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ausb_w_stern' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_w_stern',
            'config' => [
                'type' => 'check',
				'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
