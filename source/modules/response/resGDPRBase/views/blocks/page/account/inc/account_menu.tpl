[{$smarty.block.parent}]
[{if $oViewConf->oeGdprBaseIsUserAllowedToManageOwnReviews()}]
    [{block name="oegdprbase_account_manage_reviews"}]
        [{if $oViewConf->getActiveTheme() == 'azure'}]
            [{include file="oegdprbaseaccountreviewaccount_menu_azure.tpl"}]
        [{else}]
            [{include file="oegdprbaseaccountreviewaccount_menu_flow.tpl" }]
        [{/if}]
    [{/block}]
[{/if}]