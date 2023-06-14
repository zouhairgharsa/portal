<?php /* Smarty version Smarty-3.1.19, created on 2019-01-04 16:21:48
         compiled from "/home/crmfideconsultin/public_html/portal/layouts/default/templates/Portal/partials/IndexContentAfter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9159550445c2f881cc682e2-37163656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142f2104f50141d56051a91f63ce24d1fbb575d5' => 
    array (
      0 => '/home/crmfideconsultin/public_html/portal/layouts/default/templates/Portal/partials/IndexContentAfter.tpl',
      1 => 1520247616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9159550445c2f881cc682e2-37163656',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2f881ccb6e12_31607121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2f881ccb6e12_31607121')) {function content_5c2f881ccb6e12_31607121($_smarty_tpl) {?>


    <script type="text/ng-template" id="createRecordModal.template">
        <form class="form form-vertical"  novalidate="novalidate" name="createForm">
        <div class="modal-header">
        <button type="button" class="close" ng-click="cancel()" title="Close">&times;</button>
        <h4 class="modal-title" ng-show="editRecord.id">Edit Ticket - {{editRecord.ticket_title}}</h4>
        <h4 class="modal-title" ng-show="!editRecord.id">{{'Add New'|translate}} {{moduleUiLabel}}</h4>
        </div>
        <div class="modal-body" scroll-me="{'height':'350px'}">
          <div class="form-group" ng-class="{'has-error':createForm.titleLabel.$error.required && submit}" ng-if="!disabledFields[labelField]">
          <label>{{recordTitleLabel}}<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="titleLabel" ng-model="data[labelField]" required="true" required>
          </div>
          <div class="form-group">
          <div class="row" style="margin-bottom:10px;" ng-repeat="editables in fields">
          <div class="col-sm-6 col-md-6 col-lg-6" ng-repeat="editable in editables">
          <ng-switch on="editable.type.name">
          <div ng-switch-when="picklist">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger mandatory-label">*</span>
          <select  class="form-control" name="name" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}" ng-options="picklistValue.value as picklistValue.label for picklistValue in editable.type.picklistValues">
          </select>
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="multipicklist">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger mandatory-label">*</span>
          <ui-select multiple name="name" ng-model="data[$parent.editable.name]"  ng-required="{{editable.mandatory}}" portal-select>
          <ui-select-match>{{$item.label}}</ui-select-match>
          <ui-select-choices repeat="picklistValue in editable.type.picklistValues|propsFilter: {label: $select.search,value: $select.search} track by picklistValue.label">
          {{picklistValue.label}}
          </ui-select-choices>
          </ui-select>
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="string">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="text" name="name" class="form-control" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="integer">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required && submit) || innerForm.name.$error.pattern}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="double" name="name" class="form-control" ng-model-options="{updateOn:'blur'}" ng-pattern="/^[\-\+\ ]?\d+$/" ng-trim="false" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">
          </ng-form>
          <span ng-show="innerForm.name.$error.pattern" class="text-danger pull-right" translate="Please enter a integer value."></span>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="skype">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="text" name="name" class="form-control" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="email">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required && submit) || innerForm.name.$error.pattern}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="text" name="name" ng-model-options="{updateOn:'blur'}" ng-pattern='/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/' class="form-control" ng-trim="false" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">
          </ng-form>
          <span ng-show="innerForm.name.$error.pattern" class="text-danger pull-right" translate="Please enter a valid E-mail address."></span>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="double">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required && submit) || innerForm.name.$error.pattern}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="double"  name="name" ng-model-options="{updateOn:'blur'}" ng-pattern="/^-?\d*(\.\d*)?$/" class="form-control" ng-model="data[$parent.editable.name]" ng-trim="false" ng-required="{{editable.mandatory}}">
          </ng-form>
          <span ng-show="innerForm.name.$error.pattern" class="text-danger pull-right" translate="Please enter integer value."></span>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="phone">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error  mandatory-label">*</span>
          <input type="text" name="name"  class="form-control" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="time">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <p class="input-group timepicker">
          <input type="text" class="form-control" name="name" timepicker-popup  minute-step="15" hour-step="1" ng-model="data[$parent.editable.name]" is-open="timemodel[$parent.editable.name]" enable-date="false" show-meridian="true" ng-required="{{editable.mandatory}}" show-button-bar="false" portal-time>
          <span class="input-group-btn">
          <button type="button" class="btn btn-default" ng-click="openTimePicker($event,$parent.editable.name)"><i class="glyphicon glyphicon-time"></i></button>
          </span>
          </p>
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="currency">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required && submit) || innerForm.name.$error.pattern}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" name="name" ng-model-options="{updateOn:'blur'}" ng-pattern="/^\d*\.?\d*$/" class="form-control" ng-model="data[$parent.editable.name]" ng-trim="false" ng-required="{{editable.mandatory}}">
          </div>
          <span  ng-show="innerForm.name.$error.pattern" class="text-danger pull-right field-error" translate="Please enter positive numbers."></span>
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="date">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <p class="input-group datepicker">
          <input type="text"  class="form-control" name="name" datepicker-popup="yyyy-MM-dd"  show-weeks="false" ng-model="data[$parent.editable.name]"  is-open="datemodel[$parent.editable.name]" min-date="minDates[data.$parent.editable.name]"  close-text="Close" ng-required="{{editable.mandatory}}" show-button-bar="false" close-on-date-selection="true"  portal-date>
          <span class="input-group-btn">
          <button type="button" class="btn btn-default" ng-click="openDatePicker($event,$parent.editable.name)"><i class="glyphicon glyphicon-calendar"></i></button>
          </span>
          </p>
          </ng-form>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="url">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required && submit) || innerForm.name.$error.url}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="url" name="name"  class="form-control" ng-model-options="{updateOn:'blur'}" ng-model="data[$parent.editable.name]" ng-trim="false" ng-required="{{editable.mandatory}}">
          </ng-form>
          <span ng-show="innerForm.name.$error.url" class="text-danger pull-right field-error" translate="Please enter a valid Url."></span>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="boolean">
          <div class="checkbox" style="padding:10px;margin-top:20px;">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <div style="font-weight:bold;margin-left:10px;">
          <input type="checkbox" name="name" style="cursor:pointer;" ng-model="data[$parent.editable.name]" ng-required="{{editable.mandatory}}">{{editable.label}}<span ng-show="{{editable.mandatory}}" class="text-danger mandatory-label">*</span>
          </div>
          </ng-form>
          </div>
          </div>
          <ng-switch on="editable.type.name">
          <div ng-switch-when="reference">
          <ng-form name="innerForm" ng-class="{'has-error':(innerForm.name.$error.required || innerForm.name.$error.editable)  && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger field-error mandatory-label">*</span>
          <input type="text" name="name" ng-model="data[$parent.editable.name]" typeahead="record as record.label for record in fetchReferenceRecords(editable.type.refersTo[0],$viewValue)"  typeahead-min-length="3" typeahead-wait-ms="10" typeahead-editable="false" class="form-control" placeholder="{{'Type 3 characters'|translate}}" typeahead-loading="loadingRecords" ng-required="{{editable.mandatory}}" ng-trim="false">
          <i ng-show="loadingRecords" class="glyphicon glyphicon-refresh"></i>
          </ng-form>
          <span ng-show="innerForm.name.$error.editable && submit" class="text-danger pull-right field-error" translate="Record not found."></span>
          </div>
          </div>
          </div>
          <div class="row" ng-if="textFieldsEnabled">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" ng-repeat="editable in editableText">
          <div class="form-group">
          <ng-form name="innerForm" ng-class="{'has-error':innerForm.name.$error.required && submit}">
          <label>{{editable.label}}</label><span ng-show="{{editable.mandatory}}" class="text-danger mandatory-label">*</span>
          <textarea msd-elastic class="form-control" name="name" style="resize:none;height:100px;" ng-model="data[editable.name]" ng-required="{{editable.mandatory}}"></textarea>
          </ng-form>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" ng-click="cancel()" translate="Cancel"></button>
        <button type="submit" class="btn btn-success"   ng-click="save(createForm.$valid)" translate="Save"></button>
        </div>
        </form>
    </script>

<?php }} ?>
