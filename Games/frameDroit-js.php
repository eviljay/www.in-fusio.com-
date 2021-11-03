<html><head><title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="styleArt.css">
<style type="text/css">
<!--
.menuDroul {  font-family: Arial; font-size: 8pt; color: #FFFFFF; line-height: 115%}
-->
</style>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>


<SCRIPT LANGUAGE="JavaScript">

var menu=new CreerMenu("Choose category","centre","");
// CreerMenu(Titre de la liste dÈroulante,target,carac)
//   target=nom de la frame ou "self" si c'est la fenetre elle meme, "new" pour une nouvelle fenÍtre
//   carac=caracteres ý afficher devant les lignes ayant un lien
// Pour ajouter les liens dans les listes, utiliser menu.Add
// Menu.Add(profondeur d'arborescence, texte, page ý charger)
menu.Add(1,"………………………………","");
menu.Add(1,"ExEn","");
menu.Add(1,"………………………………","");
menu.Add(3,"All categories","centre.php?exen=1");

menu.Add(3,"ADVENTURE","centre.php?exen=1&categorie=ADVENTURE");menu.Add(3,"ARCADE","centre.php?exen=1&categorie=ARCADE");menu.Add(3,"CLASSICS","centre.php?exen=1&categorie=CLASSICS");menu.Add(3,"FIGHTING","centre.php?exen=1&categorie=FIGHTING");menu.Add(3,"PUZZLE","centre.php?exen=1&categorie=PUZZLE");menu.Add(3,"RACING","centre.php?exen=1&categorie=RACING");menu.Add(3,"SHOOTING","centre.php?exen=1&categorie=SHOOTING");menu.Add(3,"SPORTS","centre.php?exen=1&categorie=SPORTS");
menu.Add(1,"………………………………","");
menu.Add(1,"Other games","");
menu.Add(1,"………………………………","");
menu.Add(3,"WAP","centre.php?exen=0&categorie=WAP");
menu.Add(4,"Top Games","centre.php?exen=0&categorie=WAP+-+Top+Games");
menu.Add(4,"Others","centre.php?exen=0&categorie=WAP+-+Others");

function CreerMenu(titre,target,carac) {
	this.nb=0;this.titre=titre;this.target=target;this.carac=carac;
	this.Add=AddObjet;
	this.Aff=AffMenu;
}
function AddObjet(deep,txt,page) {
	var rub = new Object;
	rub.deep=deep;
	rub.txt=txt;
	rub.page=page;
	this[this.nb]=rub;
	this.nb++;
}
function space(i) {var Z="";for (var j=1;j<i;j++){Z+="&nbsp;&nbsp;&nbsp;&nbsp;";}return Z}
function AffMenu() {
	var Z="<FORM name='mf'>";var z="";
	Z+="<SELECT size=-2 name='tjs' style='background-color:#660066' onChange='Clic(this.form);' class='menuDroul';><OPTION>"+this.titre+"</OPTION>";
	for (var i=0;i<this.nb;i++) {
		z=""; if ((this[i].page!="")&&(this[i].page!=null)) {z=this.carac}
		Z+="<OPTION value='"+this[i].page+"'>"+space(this[i].deep)+z+this[i].txt+"</OPTION>"
	}
	Z+="</SELECT>";
	Z+="</FORM>";
Z+="</SPAN>";
	document.write(Z);
}
function Clic(f){
	var i=f.elements["tjs"].selectedIndex-1;
	if (i>=0) {
		var page=menu[i].page;
		if ((page!="")&&(page!=null)) {
			if (menu.target=="self") {window.location=page}
			else if (menu.target=="new") {window.open(page,'newf','scrollbars=yes')}
			else {parent.frames[menu.target].window.location=page}
		}
	}
}
</SCRIPT>




</head>

<body bgcolor="#FFFFFF" background="illus-games/fond2FrameDroit2.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100" border="0" cellspacing="0" cellpadding="O" class="texte">
  <tr align="left" valign="top"> 
    <td><!-- <img src="../getimage.php?get=imagedroite&b=gameportfolio2main&r=1" border="0"> --><img src="illus-games/fondFrameDroitok.jpg" width="1800" height="250"></td>
  </tr>
</table>
<span id="Layer1" style="position:absolute; left:0px; top:200px; width:192px; height:31px; z-index:1"> 
<table width="194" border="0" cellspacing="0" cellpadding="10" class="menuDroul">
  <tr align="center" valign="middle"> 
    <td width="168"> 
      <script language="JavaScript">
	menu.Aff();
</script>
    </td>
  </tr>
</table>
</span> 
</body>
</html>
