<?php /* Smarty version Smarty-3.1.19, created on 2023-01-31 12:46:52
         compiled from "/home/workingermanycrm/public_html/portal/layouts/default/templates/Portal/partials/IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205653114563d90dbcb80538-41364313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ff6ad23c9d7868beda8a48b7a427bdf715d6046' => 
    array (
      0 => '/home/workingermanycrm/public_html/portal/layouts/default/templates/Portal/partials/IndexContentBefore.tpl',
      1 => 1520251216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205653114563d90dbcb80538-41364313',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63d90dbcbefa69_64301051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63d90dbcbefa69_64301051')) {function content_63d90dbcbefa69_64301051($_smarty_tpl) {?>


<div class="navigation-controls-row">
<div ng-if="checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}
</div>
</div>
    <div class="row portal-controls-row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-8">
		<div ng-if="!checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}</div>
            <div class="btn-group btn-group-justified" ng-if="checkRecordsVisibility(filterPermissions)">
                <div class="btn-group">
                    <button type="button" translate="Mine"
                            ng-class="{'btn btn-default btn-primary':searchQ.onlymine, 'btn btn-default':!searchQ.onlymine}" ng-click="searchQ.onlymine=true"></button>
                </div>
                <div class="btn-group">
                    <button type="button" translate = "All"
                            ng-class="{'btn btn-default btn-primary':!searchQ.onlymine, 'btn btn-default':searchQ.onlymine}" ng-click="searchQ.onlymine=false"></button>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
          <div class="addbtnContainer" ng-if="isCreatable">
            <button class="btn btn-primary" ng-click="createRecord(module)">New {{ptitle}}</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          &nbsp;
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <button class="btn btn-primary" ng-if="exportEnabled" ng-csv="exportRecords(module)" csv-header="csvHeaders" add-bom="true" filename="{{filename}}.csv">{{'Export'|translate}}&nbsp;{{ptitle}}</button>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pagination-holder">
            <div class="pull-right">
                <div class="text-center">
                    <pagination
                        total-items="totalPages" max-size="3" ng-model="currentPage" ng-change="pageChanged(currentPage)" boundary-links="true">
                    </pagination>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>