Probl�me dans la requete<br> You have an error in your SQL syntax near 'and visible_jeu = '1'' at line 1<br />
<b>Warning</b>:  mysql_fetch_array(): supplied argument is not a valid MySQL result resource in <b>/home/users/infusiogames/www/admin/includes/fonctionSQL.inc.php</b> on line <b>48</b><br />
Probl�me dans la requete<br> You have an error in your SQL syntax near 'and `valider_reviews` = 1 ORDER BY date_reviews desc' at line 1<br />
<b>Warning</b>:  mysql_fetch_array(): supplied argument is not a valid MySQL result resource in <b>/home/users/infusiogames/www/admin/includes/fonctionSQL.inc.php</b> on line <b>48</b><br />
<HTML>
<HEAD>
<TITLE></TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1" />
<link href="infusio.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</HEAD>
<BODY bgcolor="#313A61" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >
<a name="top"></a>
<table width="420" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFC930">
  <tr>
    <td width="420" height="25" valign="top" bgcolor="#313A61"><br>
    </td>
  </tr>
  <tr>
    <td  bgcolor="#313A61"><img src="images/p_popup_sepadebut.gif" width="420" height="22"></td>
  </tr>
  <td valign="top"><table width="420" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="27"><div align="right"><img src="images/p0_review.gif" width="10" height="16"></div>
          </td>
          <td colspan="3"><img src="images/p_review.gif" width="208" height="16"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td rowspan="9">&nbsp;</td>
          <td><p>&nbsp;</p>
          </td>
          <td width="0" rowspan="6" align="right"></td>
          <td width="0" rowspan="6" align="right"><img src="images/spacer.gif" width="20" height="1"></td>
        </tr>
        <tr>
          <td class="rate"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><span class="rate">Rating</span><span class="newstitel"> </span><span class="gamefeatures"><br>
0&nbsp;Reviews </span></td>
        </tr>
        <tr>
          <td nowrap>
          </td>
        </tr>
        <tr>
          <td width="75">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="textbld"><img src="images/spacer.gif" width="1" height="2"></td>
        </tr>
        <tr>
          <td colspan="3" class="textbld"></td>
        </tr>
      </table>
  </td>
  </tr>
  <tr>
    <td class="gamett1"><a name="rate"></a>
</td>
  </tr>
  <tr>
  
  <td>
  <table width="420" border="0" cellspacing="0" cellpadding="0">
   
      <tr>
      
      <td width="32">&nbsp;</td>
      <td>
      <table  border="0" cellpadding="0" cellspacing="0" class="textbld">
	   <form name="formrev" method="post" action="/popup_reviews.php?1757478296">
        <tr>
          <td colspan="3" class="gamett1">Review ...</td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="15"></td>
        </tr>
        <tr>
          <td><div align="right">Name : </div>
          </td>
          <td><img src="images/spacer.gif" width="2" height="1"></td>
          <td align="left">
            <input name="pseudo_reviews" type="text" class="input">
          </td>
        </tr>
       <!-- <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
        </tr>
        <tr>
          <td><div align="right">Title :</div>
          </td>
          <td>&nbsp;</td>
          <td align="left"><input name="titre_reviews" type="text" class="input">
          </td>
        </tr> -->
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
        </tr>
        <tr>
          <td><div align="right">Email : </div>
          </td>
          <td>&nbsp;</td>
          <td align="left"><input name="mail_reviews" type="text" class="input">
          </td>
        </tr>
        <tr>
		<tr>
          <td><div align="right">Country : </div>
          </td>
          <td>&nbsp;</td>
          <td align="left">
		  <select name="country_reviews" class="input">
				  <option value="2">Australia</option>
		  		  <option value="25">Austria</option>
		  		  <option value="4">Belgium</option>
		  		  <option value="23">China</option>
		  		  <option value="5">Denmark</option>
		  		  <option value="6">Finland</option>
		  		  <option value="1">France</option>
		  		  <option value="3">Germany</option>
		  		  <option value="7">Greece</option>
		  		  <option value="8">Hong Kong</option>
		  		  <option value="31">India</option>
		  		  <option value="27">Indonesia</option>
		  		  <option value="10">Ireland</option>
		  		  <option value="9">Italy</option>
		  		  <option value="11">Malaysia</option>
		  		  <option value="40">Morocco</option>
		  		  <option value="12">Netherlands</option>
		  		  <option value="13">New Zealand</option>
		  		  <option value="14">Norway</option>
		  		  <option value="29">Philippines</option>
		  		  <option value="15">Poland</option>
		  		  <option value="16">Portugal</option>
		  		  <option value="17">Singapore</option>
		  		  <option value="30">South Africa</option>
		  		  <option value="18">Spain</option>
		  		  <option value="19">Sweden</option>
		  		  <option value="20">Switzerland</option>
		  		  <option value="21">Taiwan</option>
		  		  <option value="24">Thailand</option>
		  		  <option value="39">Turquey</option>
		  		  <option value="22">UK</option>
		  		  <option value="38">USA</option>
		  		  </select>
          </td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
        </tr>
        <tr>
          <td><div align="right">Rating : </div>
          </td>
          <td>&nbsp;</td>
          <td align="left">
            <select name="vote_reviews" class="inputred">
            <option selected  value="X" >Your Rating
            <option value="4">(4) * * * *
            <option value="3">(3) * * *
            <option value="2">(2) * *
            <option value="1">(1) *            
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
        </tr>
        <tr>
          <td valign="top"><div align="right">Comment :<br>
              </div>
          </td>
          <td>&nbsp;</td>
        <td align="left"><textarea name="comm_reviews" cols="35" rows="5" class="input"></textarea><br><span class="text">Your comments on this game only.<br> 
            <em>(English mandatory)</em></span> </td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        <td align="right"><input name="id_jeu" type="hidden" id="id_jeu" value="">
      <input name="Valider" type="hidden" id="Valider" value="Yes">
      <a href="javascript:;" onClick="//submitform();"><input type="image" src="images/bout_send_popup.gif" width="83" height="27" border="0"></a>
        </td>
        </tr>
        <tr>
          <td colspan="2"><img src="images/spacer.gif" width="80" height="1"></td>
          <td>&nbsp; 
        </td>
        </tr>
	  </form>
      </table>
      </td>
      <td width="15">&nbsp;</td>
      </tr>
 
  </table>
  </td>
  </tr>
  <tr>
    <td><blockquote>
        <div align="center" class="copyright"></div>
        <br>
&nbsp;</blockquote>
    </td>
  </tr>
  <tr>
    <td height="50" valign="top" bgcolor="#313A61"><img src="images/p_popup_sepafin.gif" width="420" height="22"></td>
  </tr>
</table>
<br><!-- phpmyvisites -->
<a href="http://www.phpmyvisites.net/" title="phpMyVisites : logiciel gratuit de mesure d'audience et de statistiques de sites Internet (licence libre GPL, logiciel en php/MySQL)" onclick="window.open(this.href);return(false);">
<script type="text/javascript">
<!--
var phpmyvisitesSite = 1;
var phpmyvisitesURL = "http://www.in-fusio.com/phpmyvisites/phpmyvisites.php";
//-->
</script>
<script type="text/javascript" src="http://www.in-fusio.com/phpmyvisites/phpmyvisites.js"></script>
<noscript>
<p>
phpMyVisites : logiciel gratuit de mesure d'audience et de statistiques de sites Internet (licence libre GPL, logiciel en php/MySQL)
<img src="http://www.in-fusio.com/phpmyvisites/phpmyvisites.php?nojs=1&amp;site=1" alt="phpMyVisites" style="border:0" />
</p>
</noscript>
</a>
<!-- /phpmyvisites --></BODY>
</HTML>
