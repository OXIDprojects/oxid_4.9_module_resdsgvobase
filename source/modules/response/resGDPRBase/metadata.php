<?php
/**
 * This file is part of OXID eSales GDPR base module.
 *
 * OXID eSales GDPR base module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales GDPR base module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales GDPR base module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'resGDPRBase',
    'title' => array(
        'de' => '<img src="../modules/response/resGDPRBase/out/pictures/response_logo_modul.png"> RESPONSE GmbH GDPR Base',
        'en' => '<img src="../modules/response/resGDPRBase/out/pictures/response_logo_modul.png"> RESPONSE GmbH GDPR Base',
    ),
    'description' => array(
        'de' => 'Das Modul stellt Basisfunktionalit&auml;t f&uuml;r die Datenschutz-Grundverordnung (DSGVO) bereit.<br /> Original von <a href="https://github.com/OXID-eSales/gdpr-base-module/" target="_blank">OXID eSales</a>, angepasst für die Version 4.9 von der <a href="https://www.response-gmbh.de" target="_blank">RESPONSE GmbH</a>.',
        'en' => 'This module provides the basic functionality for the European General Data Protection Regulation (GDPR)',
    ),
    'thumbnail' => 'out/pictures/resmodule.png',
    'version' => '1.0.0',
    'author' => 'OXID eSales AG, RESPONSE GmbH',
    'url' => 'https://www.response-gmbh.de/',
    'email' => 'response@response-gmbh.de',
    'extend' => array(
        'suggest' => 'response/resGDPRBase/controllers/oegdprbaserecommend',
        'account' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_password' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_newsletter' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_user' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_order' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_noticelist' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_wishlist' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_downloads' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'account_recommlist' => 'response/resGDPRBase/controllers/oegdprbaseaccount',
        'compare' => 'response/resGDPRBase/controllers/oegdprbasecompare',
        'oxcmp_user' => 'response/resGDPRBase/components/oegdprbaseoxcmp_user',
        'oxrating' => 'response/resGDPRBase/models/oegdprbaseoxrating',
        'oxreview' => 'response/resGDPRBase/models/oegdprbaseoxreview',
        'oxuser' => 'response/resGDPRBase/models/oegdprbaseoxuser',
        'oxviewconfig' => 'response/resGDPRBase/core/oegdprbaseviewconfig',
    ),
    'files' => array(
        'oegdprbasemodule' => 'response/resGDPRBase/core/oegdprbasemodule.php',
        'oegdprbaseaccountreviewcontroller' => 'response/resGDPRBase/controllers/oegdprbaseaccountreviewcontroller.php',

        //Internal
        'oegdprbasecontainer' => 'response/resGDPRBase/internal/common/oegdprbasecontainer.php',
        'oegdprbaseentrydoesnotexistdaoexception' => 'response/resGDPRBase/internal/common/exception/oegdprbaseentrydoesnotexistdaoexception.php',
        'oegdprbaseinvalidobjectiddaoexception' => 'response/resGDPRBase/internal/common/exception/oegdprbaseinvalidobjectiddaoexception.php',
        'oegdprbaseproductratingbridge' => 'response/resGDPRBase/internal/review/bridge/oegdprbaseproductratingbridge.php',
        'oegdprbaseuserratingbridge' => 'response/resGDPRBase/internal/review/bridge/oegdprbaseuserratingbridge.php',
        'oegdprbaseuserreviewandratingbridge' => 'response/resGDPRBase/internal/review/bridge/oegdprbaseuserreviewandratingbridge.php',
        'oegdprbaseuserreviewbridge' => 'response/resGDPRBase/internal/review/bridge/oegdprbaseuserreviewbridge.php',
        'oegdprbaseproductratingdao' => 'response/resGDPRBase/internal/review/dao/oegdprbaseproductratingdao.php',
        'oegdprbaseratingdao' => 'response/resGDPRBase/internal/review/dao/oegdprbaseratingdao.php',
        'oegdprbasereviewdao' => 'response/resGDPRBase/internal/review/dao/oegdprbasereviewdao.php',
        'oegdprbaseproductrating' => 'response/resGDPRBase/internal/review/dataobject/oegdprbaseproductrating.php',
        'oegdprbaserating' => 'response/resGDPRBase/internal/review/dataobject/oegdprbaserating.php',
        'oegdprbasereview' => 'response/resGDPRBase/internal/review/dataobject/oegdprbasereview.php',
        'oegdprbaseratingpermissionexception' => 'response/resGDPRBase/internal/review/exception/oegdprbaseratingpermissionexception.php',
        'oegdprbasereviewandratingobjecttypeexception' => 'response/resGDPRBase/internal/review/exception/oegdprbasereviewandratingobjecttypeexception.php',
        'oegdprbasereviewpermissionexception' => 'response/resGDPRBase/internal/review/exception/oegdprbasereviewpermissionexception.php',
        'oegdprbaseproductratingservice' => 'response/resGDPRBase/internal/review/service/oegdprbaseproductratingservice.php',
        'oegdprbaseratingcalculatorservice' => 'response/resGDPRBase/internal/review/service/oegdprbaseratingcalculatorservice.php',
        'oegdprbasereviewandratingmergingservice' => 'response/resGDPRBase/internal/review/service/oegdprbasereviewandratingmergingservice.php',
        'oegdprbaseuserratingservice' => 'response/resGDPRBase/internal/review/service/oegdprbaseuserratingservice.php',
        'oegdprbaseuserreviewandratingservice' => 'response/resGDPRBase/internal/review/service/oegdprbaseuserreviewandratingservice.php',
        'oegdprbaseuserreviewservice' => 'response/resGDPRBase/internal/review/service/oegdprbaseuserreviewservice.php',
        'oegdprbasereviewservicefactory' => 'response/resGDPRBase/internal/review/servicefactory/oegdprbasereviewservicefactory.php',
        'oegdprbasereviewandrating' => 'response/resGDPRBase/internal/review/viewdataobject/oegdprbasereviewandrating.php',
    ),
    'templates' => array(
        'oegdprbasedashboard_azure.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbasedashboard_azure.tpl',
        'oegdprbasedashboard_flow.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbasedashboard_flow.tpl',
        'oegdprbaseaccountreviewaccount_menu_azure.tpl' => 'response/resGDPRBase/views/blocks/page/account/inc/oegdprbaseaccountreviewaccount_menu_azure.tpl',
        'oegdprbaseaccountreviewaccount_menu_flow.tpl' => 'response/resGDPRBase/views/blocks/page/account/inc/oegdprbaseaccountreviewaccount_menu_flow.tpl',
        'oegdprbasedeletemyaccountconfirmation_azure_modal.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbasedeletemyaccountconfirmation_azure_modal.tpl',
        'oegdprbasedeletemyaccountconfirmation_flow_modal.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbasedeletemyaccountconfirmation_flow_modal.tpl',
        'oegdprbaseaccountreviewcontroller.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbaseaccountreviewcontroller.tpl',
        'oegdprbaseaccountreviewcontroller_azure.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbaseaccountreviewcontroller_azure.tpl',
        'oegdprbaseaccountreviewcontroller_flow.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbaseaccountreviewcontroller_flow.tpl',
        'oegdprbaseaccountreviewcontroller_confirmation_azure.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbaseaccountreviewcontroller_confirmation_azure.tpl',
        'oegdprbaseaccountreviewcontroller_confirmation_flow.tpl' => 'response/resGDPRBase/views/blocks/page/account/oegdprbaseaccountreviewcontroller_confirmation_flow.tpl',
    ),
    'blocks' => array(
        array('template' => 'layout/base.tpl', 'block' => 'base_style', 'file' => '/views/blocks/layout/base.tpl'),
        array('template' => 'form/fieldset/user_shipping.tpl', 'block' => 'form_user_shipping_address_select', 'file' => '/views/blocks/form/fieldset/user_shipping.tpl'),
        array('template' => 'form/user.tpl', 'block' => 'user', 'file' => '/views/blocks/form/delete_shipping_address_modal.tpl'),
        array('template' => 'form/user_checkout_change.tpl', 'block' => 'user_checkout_change', 'file' => '/views/blocks/form/delete_shipping_address_modal.tpl'),
        array('template' => 'form/user_checkout_noregistration.tpl', 'block' => 'user_checkout_noregistration', 'file' => '/views/blocks/form/delete_shipping_address_modal.tpl'),
        array('template' => 'form/user_checkout_registration.tpl', 'block' => 'user_checkout_registration', 'file' => '/views/blocks/form/delete_shipping_address_modal.tpl'),
        array('template' => 'page/account/dashboard.tpl', 'block' => 'account_dashboard_col2', 'file' => '/views/blocks/page/account/dashboard.tpl'),
        array('template' => 'page/account/inc/account_menu.tpl', 'block' => 'account_menu', 'file' => '/views/blocks/page/account/inc/account_menu.tpl'),
        array('template' => 'page/details/inc/productmain.tpl', 'block' => 'details_productmain_productlinks', 'file' => '/views/blocks/page/details/inc/productmain.tpl'),
    ),
    'settings' => array(
        array(
            'group' => 'oegdprbase_account_settings',
            'name' => 'blOeGdprBaseAllowUsersToDeleteTheirAccount',
            'type' => 'bool',
            'value' => 'false'
        ),
        array(
            'group' => 'oegdprbase_account_settings',
            'name' => 'blOeGdprBaseAllowUsersToManageReviews',
            'type' => 'bool',
            'value' => 'false'
        ),
        array(
            'group' => 'oegdprbase_recommendation_settings',
            'name' => 'blOeGdprBaseAllowRecommendArticle',
            'type' => 'bool',
            'value' => 'true'
        ),
    )
);
