<?php /* Smarty version Smarty-3.1.19, created on 2023-03-09 16:43:39
         compiled from "/home/workingermanycrm/public_html/portal/layouts/default/templates/Portal/MyProfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72484400163d23d3f873952-87345968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99483c55e5ee8b7cffbf75e021d9741161000bf9' => 
    array (
      0 => '/home/workingermanycrm/public_html/portal/layouts/default/templates/Portal/MyProfile.tpl',
      1 => 1678380218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72484400163d23d3f873952-87345968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63d23d3f894a71_38492573',
  'variables' => 
  array (
    'Perso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63d23d3f894a71_38492573')) {function content_63d23d3f894a71_38492573($_smarty_tpl) {?>

<div class="container-fluid ng-scope" ng-controller="PortalProfile_DetailView_Component">

	<div class="row">

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 leftEditContent" style="border-right:none;">
            <?php $_smarty_tpl->tpl_vars['Perso'] = new Smarty_variable(Portal_Session::get('language'), null, 0);?>
            <p style='visibility:hidden;'><?php echo $_smarty_tpl->tpl_vars['Perso']->value;?>
</p>
            
			
			<h3>{{'Personal Details'|translate}}</h3>
			<hr class="hrHeader">
			<div class="row">
				<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 leftEditContent" style="border-right:none;min-height:40%;">

					
					<img alt="Contact Picture" style="width:100%;" src="data:{{contactDetails.imagetype}};base64,{{contactDetails.imagedata}}"> 
				</div>-->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 rightEditContent" style="background:none;border-left:none;min-height:60%">
					

					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="First Name"></span>
						<span ng-mouseover="hoverEditIn('contactFirstName')" ng-mouseleave="hoverEditLeave('contactFirstName')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.firstname}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactFirstName']" class="glyphicon glyphicon-pencil" editable-text="contactDetails.firstname" onbeforesave="saveContactDetails($data,'firstname')" onhide="hoverEditLeave('contactFirstName')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Last Name"></span>
						<span ng-mouseover="hoverEditIn('contactLastName')" ng-mouseleave="hoverEditLeave('contactLastName')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.lastname}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactLastName']" class="glyphicon glyphicon-pencil"  editable-text="contactDetails.lastname" onbeforesave="saveContactDetails($data,'lastname')" onhide="hoverEditLeave('contactLastName')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Primary Email"></span>
						<span ng-mouseover="hoverEditIn('contactPrimaryEmail')" ng-mouseleave="hoverEditLeave('contactPrimaryEmail')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.email}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactPrimaryEmail']" class="glyphicon glyphicon-pencil" editable-text="contactDetails.email" onbeforesave="saveContactDetails($data,'email','email')" onhide="hoverEditLeave('contactPrimaryEmail')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Secondary Email"></span>
						<span ng-mouseover="hoverEditIn('contactSecondaryEmail')" ng-mouseleave="hoverEditLeave('contactSecondaryEmail')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.secondaryemail}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactSecondaryEmail']" class="glyphicon glyphicon-pencil" editable-text="contactDetails.secondaryemail" onbeforesave="saveContactDetails($data,'secondaryemail','email')" onhide="hoverEditLeave('contactSecondaryEmail')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Mobile Phone"></span>
						<span ng-mouseover="hoverEditIn('contactMobilePhone')" ng-mouseleave="hoverEditLeave('contactMobilePhone')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.mobile}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactMobilePhone']" class="glyphicon glyphicon-pencil" editable-text="contactDetails.mobile" onbeforesave="saveContactDetails($data,'mobile')" onhide="hoverEditLeave('contactMobilePhone')"></i></span>
					</div>
					
					<!-- Genre -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Genre"></span>
						<span ng-mouseover="hoverEditIn('contactGender')" ng-mouseleave="hoverEditLeave('contactGender')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.cf_1050}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactGender']"  editable-text="contactDetails.cf_1050" onbeforesave="saveContactDetails($data,'cf_1050')" onhide="hoverEditLeave('contactGender')"></i></span>
					</div>
					
					<!-- Metier -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Métier"></span>
						<span ng-mouseover="hoverEditIn('contactMetier')" ng-mouseleave="hoverEditLeave('contactMetier')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.cf_906}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactMetier']"  editable-text="contactDetails.cf_906" onbeforesave="saveContactDetails($data,'cf_906')" onhide="hoverEditLeave('contactMetier')"></i></span>
					</div>
					
					<!-- Adresse -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Adresse"></span>
						<span ng-mouseover="hoverEditIn('contactAdresse')" ng-mouseleave="hoverEditLeave('contactAdresse')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.mailingstreet}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactAdresse']"  editable-text="contactDetails.mailingstreet" onbeforesave="saveContactDetails($data,'mailingstreet')" onhide="hoverEditLeave('contactAdresse')"></i></span>
					</div>
					
					<!-- Code Postal -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Code Postal"></span>
						<span ng-mouseover="hoverEditIn('contactAdresse')" ng-mouseleave="hoverEditLeave('contactCodePostal')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.mailingzip}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactCodePostal']"  editable-text="contactDetails.mailingzip" onbeforesave="saveContactDetails($data,'mailingzip')" onhide="hoverEditLeave('contactCodePostal')"></i></span>
					</div>
					
					<!-- Ville -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Ville"></span>
						<span ng-mouseover="hoverEditIn('contactMailingCity')" ng-mouseleave="hoverEditLeave('contactMailingCity')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.mailingcity}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactMailingCity']"  editable-text="contactDetails.mailingcity" onbeforesave="saveContactDetails($data,'mailingcity')" onhide="hoverEditLeave('contactMailingCity')"></i></span>
					</div>
					
					<!-- Pays -->
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Pays"></span>
						<span ng-mouseover="hoverEditIn('contactPays')" ng-mouseleave="hoverEditLeave('contactPays')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.mailingcountry}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactPays']"  editable-text="contactDetails.mailingcountry" onbeforesave="saveContactDetails($data,'mailingcountry')" onhide="hoverEditLeave('contactPays')"></i></span>
					</div>
					
					
					
					<!--<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Office Phone"></span>
						<span ng-mouseover="hoverEditIn('contactOfficePhone')" ng-mouseleave="hoverEditLeave('contactOfficePhone')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{contactDetails.phone}}&nbsp;&nbsp;<i ng-show="hoverEdit['contactOfficePhone']" class="glyphicon glyphicon-pencil"  editable-text="contactDetails.phone" onbeforesave="saveContactDetails($data,'phone')" onhide="hoverEditLeave('contactOfficePhone')"></i></span>
					</div>-->
                    
                    
                        <form action="https://workingermany-crm.com/Portal_data.php" method='POST' target="_blank">
    					    <input type="hidden" value="{{contactDetails.contact_no}}" name="contact_no" >
    					    <button type="submit">Compléter mes informations</button>
    					</form>
    				<div style="display:none">	
    					<h3>N'oubliez pas de charger les documents suivants : </h3>
    					<li>1- Le diplôme officiel (diplôme) dans la langue originale ainsi qu'une photocopie certifiée conforme</li>
    					<li>2- Le relevé de notes pour l'ensemble du programme d'études dans la langue originale sous forme de photocopie certifiée conforme</li>
    					<li>3- Le certificat de fin d'études secondaires (baccalauréat) sous forme de photocopie régulière</li>
    					<li>4- Le document d'identité (passeport ou carte d'identité) sous forme de photocopie régulière</li>
    					<li>5- L’acte de naissance</li>
    					<li>6- Photo d'identité récente</li>
    					<br>
    					<a href="/portal/index.php?module=Documents"><button>Espace documents ></button></a>
					</div>
					
				</div>
			</div>


		</div>
		<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rightEditContent profile-right" style="background:none;border-left:none;padding-top:15px;">
			
			<h3>{{'Company Details'|translate}}</h3>
			<hr class="hrHeader">

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 leftEditContent" style="border-right:none;min-height:40%;">
					
					<img alt="Company Logo" style="width:100%;" src="data:{{accountDetails.imagetype}};base64,{{accountDetails.imagedata}}"> 

				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 rightEditContent" style="background:none;border-left:none;min-height:60%">
					
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Name"></span>
						<span ng-mouseover="hoverEditIn('accountName')" ng-mouseleave="hoverEditLeave('accountName')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{accountDetails.accountname}}&nbsp;&nbsp;<i ng-show="hoverEdit['accountName']" class="glyphicon glyphicon-pencil" editable-text="accountDetails.accountname" onbeforesave="saveOrganizationDetails($data,'accountname')" onhide="hoverEditLeave('accountName')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Website"></span>
						<span ng-mouseover="hoverEditIn('accountWebsite')" ng-mouseleave="hoverEditLeave('accountWebsite')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="{{accountDetails.weburl}}" target="_blank">{{accountDetails.website}}</a><i ng-show="hoverEdit['accountWebsite']" class="glyphicon glyphicon-pencil" editable-text="accountDetails.website" onbeforesave="saveOrganizationDetails($data,'website','weburl')" onhide="hoverEditLeave('accountWebsite')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Email"></span>
						<span ng-mouseover="hoverEditIn('accountEmail')" ng-mouseleave="hoverEditLeave('accountEmail')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{accountDetails.email1}}&nbsp;&nbsp;<i ng-show="hoverEdit['accountEmail']" class="glyphicon glyphicon-pencil"  editable-text="accountDetails.email1" onbeforesave="saveOrganizationDetails($data,'email1','email')" onhide="hoverEditLeave('accountEmail')"></i></span>
					</div>
					<div class="row profile-fields">
						<span class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4" translate="Phone"></span>
						<span ng-mouseover="hoverEditIn('accountPhone')" ng-mouseleave="hoverEditLeave('accountPhone')" class="text-primary col-lg-8 col-md-8 col-sm-8 col-xs-8">{{accountDetails.phone}}&nbsp;&nbsp;<i ng-show="hoverEdit['accountPhone']" class="glyphicon glyphicon-pencil"  editable-text="accountDetails.phone" onbeforesave="saveOrganizationDetails($data,'phone')" onhide="hoverEditLeave('accountPhone')"></i></span>
					</div>
					
				</div>
			</div>
		</div>-->
	</div>

</div>
<?php }} ?>
