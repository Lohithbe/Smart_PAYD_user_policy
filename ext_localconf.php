<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Managementuserpolicy',
            [
                'User' => 'list, show, new, create, edit, update, delete',
                'Policy' => 'list, show, new, create, edit, update, delete',
                'Bill' => 'list, show, new, create, edit, update, delete',
                'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Userplugin',
            [
                'User' => 'new, create, list, show, edit, update, delete',
             //   'Policy' => 'list, show, new, create, edit, update, delete',
               // 'Bill' => 'list, show, new, create, edit, update, delete',
                //'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Billplugin',
            [
                //'User' => 'list, show, new, create, edit, update, delete',
                //'Policy' => 'list, show, new, create, edit, update, delete',
                'Bill' => ' new, create, list, show, edit, update, delete',
                //'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Policyplugin',
            [
                //'User' => 'list, show, new, create, edit, update, delete',
                'Policy' => ' new, create, list, show, edit, update, delete',
                //'Bill' => 'list, show, new, create, edit, update, delete',
             //   'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Vehicleplugin',
            [
               // 'User' => 'list, show, new, create, edit, update, delete',
                'Vehicle' => ' new, create, list, show, edit, update, delete'
                //'Policy' => 'list, show, new, create, edit, update, delete',
                //'Bill' => 'list, show, new, create, edit, update, delete',

            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Usershowplugin',
            [
                'User' => 'list, show, new, create, edit, update, delete',
               // 'Policy' => 'list, show, new, create, edit, update, delete',
               // 'Bill' => 'list, show, new, create, edit, update, delete',
               // 'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Showpolicyplugin',
            [
               // 'User' => 'list, show, new, create, edit, update, delete',
                'Policy' => 'list, show, new, create, edit, update, delete',
              //  'Bill' => 'list, show, new, create, edit, update, delete',
               // 'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Showvehicleplugin',
            [
                //'User' => 'list, show, new, create, edit, update, delete',
                //'Policy' => 'list, show, new, create, edit, update, delete',
                'Vehicle' => 'list, show, new, create, edit, update, delete',
                // 'Bill' => 'list, show, new, create, edit, update, delete',

            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.UserPolicy',
            'Showbillplugin',
            [
               // 'User' => 'list, show, new, create, edit, update, delete',
               // 'Policy' => 'list, show, new, create, edit, update, delete',
                'Bill' => 'list, show, new, create, edit, update, delete',
               // 'Vehicle' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'User' => 'create, update, delete',
                'Policy' => 'create, update, delete',
                'Bill' => 'create, update, delete',
                'Vehicle' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    managementuserpolicy {
                        iconIdentifier = user_policy-plugin-managementuserpolicy
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_managementuserpolicy.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_managementuserpolicy.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_managementuserpolicy
                        }
                    }
                    userplugin {
                        iconIdentifier = user_policy-plugin-userplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_userplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_userplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_userplugin
                        }
                    }
                    billplugin {
                        iconIdentifier = user_policy-plugin-billplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_billplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_billplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_billplugin
                        }
                    }
                    policyplugin {
                        iconIdentifier = user_policy-plugin-policyplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_policyplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_policyplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_policyplugin
                        }
                    }
                    vehicleplugin {
                        iconIdentifier = user_policy-plugin-vehicleplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_vehicleplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_vehicleplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_vehicleplugin
                        }
                    }
                    usershowplugin {
                        iconIdentifier = user_policy-plugin-usershowplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_usershowplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_usershowplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_usershowplugin
                        }
                    }
                    showpolicyplugin {
                        iconIdentifier = user_policy-plugin-showpolicyplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showpolicyplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showpolicyplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_showpolicyplugin
                        }
                    }
                    showvehicleplugin {
                        iconIdentifier = user_policy-plugin-showvehicleplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showvehicleplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showvehicleplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_showvehicleplugin
                        }
                    }
                    showbillplugin {
                        iconIdentifier = user_policy-plugin-showbillplugin
                        title = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showbillplugin.name
                        description = LLL:EXT:user_policy/Resources/Private/Language/locallang_db.xlf:tx_user_policy_showbillplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = userpolicy_showbillplugin
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-managementuserpolicy',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_managementuserpolicy.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-userplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_userplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-billplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_billplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-policyplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_policyplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-vehicleplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_vehicleplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-usershowplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_usershowplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-showpolicyplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_showpolicyplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-showvehicleplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_showvehicleplugin.svg']
			);
		
			$iconRegistry->registerIcon(
				'user_policy-plugin-showbillplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:user_policy/Resources/Public/Icons/user_plugin_showbillplugin.svg']
			);
		
    }
);
