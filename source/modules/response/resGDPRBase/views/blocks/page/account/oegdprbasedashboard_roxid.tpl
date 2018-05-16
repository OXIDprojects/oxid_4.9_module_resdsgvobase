[{block name="oegdprbase_account_delete_my_account"}]
    [{if $oView->oeGdprBaseIsUserAllowedToDeleteOwnAccount()}]
        <button id="oegdprbase_delete_my_account_button"
                class="btn btn-danger pull-left"
                data-toggle="modal"
                data-target="#oegdprbase_delete_my_account_confirmation">
            <i class="fa fa-trash"></i>
            [{oxmultilang ident="OEGDPRBASE_DELETE_MY_ACCOUNT"}]
        </button>
        [{oxscript add='
            $(window).load(function(){
                var deleteButton = $("#oegdprbase_delete_my_account_button");
                var dashboard = $("#account-dashboard");

                dashboard.after(deleteButton);
            });
         '}]
        [{include file="oegdprbasedeletemyaccountconfirmation_flow_modal.tpl"}]
    [{/if}]
[{/block}]
[{if $oView->oeGdprBaseIsUserAllowedToManageOwnReviews()}]
    <dl>
        <dt><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=oegdprbaseaccountreviewcontroller" }]">[{ oxmultilang ident="OEGDPRBASE_MY_REVIEWS" }]</a></dt>
        <dd>[{oxmultilang ident="OEGDPRBASE_MY_REVIEWS" suffix="COLON" }] [{if $oView->oeGdprBaseGetReviewAndRatingItemsCount() }][{ $oView->oeGdprBaseGetReviewAndRatingItemsCount() }][{else}]0[{/if}]</dd>
    </dl>
[{/if}]

