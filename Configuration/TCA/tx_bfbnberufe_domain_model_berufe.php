<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe',
        'label' => 'bezeichnung',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
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
        ],
        'searchFields' => 'bezeichnung',
        'iconfile' => 'EXT:bfbn_berufe/Resources/Public/Icons/tx_bfbnberufe_domain_model_berufe.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, ausb_abu, ausb_gh, ausb_s, ausb_t, ausb_w, ausb_gh_stern, ausb_s_stern, ausb_w_stern',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, ausb_abu, ausb_gh, ausb_s, ausb_t, ausb_w, ausb_gh_stern, ausb_s_stern, ausb_w_stern, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
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
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
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
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
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
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'bezeichnung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.bezeichnung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'ausb_abu' => [
            'exclude' => true,
            'label' => 'LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbnberufe_domain_model_berufe.ausb_abu',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
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
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
