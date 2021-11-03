<HTML>
<HEAD>
<TITLE>in-fusio - The mobile game connection</TITLE>
<meta HTTP-EQIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<SCRIPT LANGUAGE="JavaScript" SRC="../javascript.js"></script>
<!-- Terminer script de préchargement --> 
<script language="JavaScript">
<!--
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_showHideLayers() { //v3.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function MM_timelineStop(tmLnName) { //v1.2
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  if (tmLnName == null)  //stop all
    for (var i=0; i<document.MM_Time.length; i++) document.MM_Time[i].ID = null;
  else document.MM_Time[tmLnName].ID = null; //stop one
}

function MM_timelinePlay(tmLnName, myID) { //v1.2
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (myID == null) { myID = ++tmLn.ID; firstTime=true;}//if new call, incr ID
  if (myID == tmLn.ID) { //if Im newest
    setTimeout('MM_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
    fNew = ++tmLn.curFrame;
    for (i=0; i<tmLn.length; i++) {
      sprite = tmLn[i];
      if (sprite.charAt(0) == 's') {
        if (sprite.obj) {
          numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
          if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {//in range
            keyFrm=1;
            for (j=0; j<sprite.values.length; j++) {
              props = sprite.values[j]; 
              if (numKeyFr != props.length) {
                if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
              } else {
                while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                  if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                  else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
        } } } } }
      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
  } }
}

function MM_timelineGoto(tmLnName, fNew, numGotos) { //v2.0
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,lastKeyFr,propNum,theObj;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (numGotos != null)
    if (tmLn.gotoCount == null) tmLn.gotoCount = 1;
    else if (tmLn.gotoCount++ >= numGotos) {tmLn.gotoCount=0; return}
  jmpFwd = (fNew > tmLn.curFrame);
  for (i = 0; i < tmLn.length; i++) {
    sprite = (jmpFwd)? tmLn[i] : tmLn[(tmLn.length-1)-i]; //count bkwds if jumping back
    if (sprite.charAt(0) == "s") {
      numKeyFr = sprite.keyFrames.length;
      firstKeyFr = sprite.keyFrames[0];
      lastKeyFr = sprite.keyFrames[numKeyFr - 1];
      if ((jmpFwd && fNew<firstKeyFr) || (!jmpFwd && lastKeyFr<fNew)) continue; //skip if untouchd
      for (keyFrm=1; keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]; keyFrm++);
      for (j=0; j<sprite.values.length; j++) {
        props = sprite.values[j];
        if (numKeyFr == props.length) propNum = keyFrm-1 //keyframes only
        else propNum = Math.min(Math.max(0,fNew-firstKeyFr),props.length-1); //or keep in legal range
        if (sprite.obj != null) {
          if (props.prop2 == null) sprite.obj[props.prop] = props[propNum];
          else        sprite.obj[props.prop2][props.prop] = props[propNum];
      } }
    } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
  }
  tmLn.curFrame = fNew;
  if (tmLn.ID == 0) eval('MM_timelinePlay(tmLnName)');
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_initTimelines() {
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(47);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("behavior");
    document.MM_Time[0][0].frame = 1;
    document.MM_Time[0][0].value = "MM_showHideLayers('bonhomeFR','','hide','bonhomesunday','','hide','bonhometmobil','','hide','bonhometelstart','','hide','GOLO','','hide','b12','','hide','w1','','hide','W2','','hide','W3','','hide','W4','','hide','W5','','hide','W6','','hide','W7','','hide','W8','','hide','W9','','hide','W10','','hide','W11','','hide','W12','','hide','W13','','hide','W14','','hide','W15','','hide','W16','','hide','W17','','hide','W18','','hide','W19','','hide','W20','','hide','W21','','hide');MM_timelineStop()";
    document.MM_Time[0][1] = new String("behavior");
    document.MM_Time[0][1].frame = 4;
    document.MM_Time[0][1].value = "MM_timelinePlay('Timeline1')";
    document.MM_Time[0][2] = new String("behavior");
    document.MM_Time[0][2].frame = 90;
    document.MM_Time[0][2].value = "MM_timelineStop('Timeline1')";
    document.MM_Time[0][3] = new String("sprite");
    document.MM_Time[0][3].slot = 1;
    if (ns)
        document.MM_Time[0][3].obj = document["w1"];
    else
        document.MM_Time[0][3].obj = document.all ? document.all["w1"] : null;
    document.MM_Time[0][3].keyFrames = new Array(6, 90);
    document.MM_Time[0][3].values = new Array(3);
    document.MM_Time[0][3].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][3].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][3].values[0].prop2 = "style";
    document.MM_Time[0][3].values[1] = new Array(352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352,352);
    document.MM_Time[0][3].values[1].prop = "left";
    document.MM_Time[0][3].values[2] = new Array(427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427,427);
    document.MM_Time[0][3].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][3].values[1].prop2 = "style";
        document.MM_Time[0][3].values[2].prop2 = "style";
    }
    document.MM_Time[0][4] = new String("sprite");
    document.MM_Time[0][4].slot = 2;
    if (ns)
        document.MM_Time[0][4].obj = document["W2"];
    else
        document.MM_Time[0][4].obj = document.all ? document.all["W2"] : null;
    document.MM_Time[0][4].keyFrames = new Array(7, 90);
    document.MM_Time[0][4].values = new Array(1);
    document.MM_Time[0][4].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][4].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][4].values[0].prop2 = "style";
    document.MM_Time[0][5] = new String("sprite");
    document.MM_Time[0][5].slot = 3;
    if (ns)
        document.MM_Time[0][5].obj = document["W3"];
    else
        document.MM_Time[0][5].obj = document.all ? document.all["W3"] : null;
    document.MM_Time[0][5].keyFrames = new Array(9, 90);
    document.MM_Time[0][5].values = new Array(1);
    document.MM_Time[0][5].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][5].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][5].values[0].prop2 = "style";
    document.MM_Time[0][6] = new String("sprite");
    document.MM_Time[0][6].slot = 4;
    if (ns)
        document.MM_Time[0][6].obj = document["W4"];
    else
        document.MM_Time[0][6].obj = document.all ? document.all["W4"] : null;
    document.MM_Time[0][6].keyFrames = new Array(10, 90);
    document.MM_Time[0][6].values = new Array(3);
    document.MM_Time[0][6].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][6].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][6].values[0].prop2 = "style";
    document.MM_Time[0][6].values[1] = new Array(402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402,402);
    document.MM_Time[0][6].values[1].prop = "left";
    document.MM_Time[0][6].values[2] = new Array(475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475);
    document.MM_Time[0][6].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][6].values[1].prop2 = "style";
        document.MM_Time[0][6].values[2].prop2 = "style";
    }
    document.MM_Time[0][7] = new String("sprite");
    document.MM_Time[0][7].slot = 5;
    if (ns)
        document.MM_Time[0][7].obj = document["W5"];
    else
        document.MM_Time[0][7].obj = document.all ? document.all["W5"] : null;
    document.MM_Time[0][7].keyFrames = new Array(12, 90);
    document.MM_Time[0][7].values = new Array(3);
    document.MM_Time[0][7].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][7].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][7].values[0].prop2 = "style";
    document.MM_Time[0][7].values[1] = new Array(463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463,463);
    document.MM_Time[0][7].values[1].prop = "left";
    document.MM_Time[0][7].values[2] = new Array(516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516,516);
    document.MM_Time[0][7].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][7].values[1].prop2 = "style";
        document.MM_Time[0][7].values[2].prop2 = "style";
    }
    document.MM_Time[0][8] = new String("sprite");
    document.MM_Time[0][8].slot = 6;
    if (ns)
        document.MM_Time[0][8].obj = document["W6"];
    else
        document.MM_Time[0][8].obj = document.all ? document.all["W6"] : null;
    document.MM_Time[0][8].keyFrames = new Array(13, 90);
    document.MM_Time[0][8].values = new Array(3);
    document.MM_Time[0][8].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][8].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][8].values[0].prop2 = "style";
    document.MM_Time[0][8].values[1] = new Array(599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599,599);
    document.MM_Time[0][8].values[1].prop = "left";
    document.MM_Time[0][8].values[2] = new Array(388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388,388);
    document.MM_Time[0][8].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][8].values[1].prop2 = "style";
        document.MM_Time[0][8].values[2].prop2 = "style";
    }
    document.MM_Time[0][9] = new String("sprite");
    document.MM_Time[0][9].slot = 7;
    if (ns)
        document.MM_Time[0][9].obj = document["W7"];
    else
        document.MM_Time[0][9].obj = document.all ? document.all["W7"] : null;
    document.MM_Time[0][9].keyFrames = new Array(15, 90);
    document.MM_Time[0][9].values = new Array(3);
    document.MM_Time[0][9].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][9].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][9].values[0].prop2 = "style";
    document.MM_Time[0][9].values[1] = new Array(554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554,554);
    document.MM_Time[0][9].values[1].prop = "left";
    document.MM_Time[0][9].values[2] = new Array(412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412,412);
    document.MM_Time[0][9].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][9].values[1].prop2 = "style";
        document.MM_Time[0][9].values[2].prop2 = "style";
    }
    document.MM_Time[0][10] = new String("sprite");
    document.MM_Time[0][10].slot = 8;
    if (ns)
        document.MM_Time[0][10].obj = document["W8"];
    else
        document.MM_Time[0][10].obj = document.all ? document.all["W8"] : null;
    document.MM_Time[0][10].keyFrames = new Array(16, 90);
    document.MM_Time[0][10].values = new Array(3);
    document.MM_Time[0][10].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][10].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][10].values[0].prop2 = "style";
    document.MM_Time[0][10].values[1] = new Array(588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588,588);
    document.MM_Time[0][10].values[1].prop = "left";
    document.MM_Time[0][10].values[2] = new Array(515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515,515);
    document.MM_Time[0][10].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][10].values[1].prop2 = "style";
        document.MM_Time[0][10].values[2].prop2 = "style";
    }
    document.MM_Time[0][11] = new String("sprite");
    document.MM_Time[0][11].slot = 9;
    if (ns)
        document.MM_Time[0][11].obj = document["W9"];
    else
        document.MM_Time[0][11].obj = document.all ? document.all["W9"] : null;
    document.MM_Time[0][11].keyFrames = new Array(18, 90);
    document.MM_Time[0][11].values = new Array(1);
    document.MM_Time[0][11].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][11].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][11].values[0].prop2 = "style";
    document.MM_Time[0][12] = new String("sprite");
    document.MM_Time[0][12].slot = 10;
    if (ns)
        document.MM_Time[0][12].obj = document["W10"];
    else
        document.MM_Time[0][12].obj = document.all ? document.all["W10"] : null;
    document.MM_Time[0][12].keyFrames = new Array(19, 90);
    document.MM_Time[0][12].values = new Array(3);
    document.MM_Time[0][12].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][12].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][12].values[0].prop2 = "style";
    document.MM_Time[0][12].values[1] = new Array(547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547,547);
    document.MM_Time[0][12].values[1].prop = "left";
    document.MM_Time[0][12].values[2] = new Array(465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465,465);
    document.MM_Time[0][12].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][12].values[1].prop2 = "style";
        document.MM_Time[0][12].values[2].prop2 = "style";
    }
    document.MM_Time[0][13] = new String("sprite");
    document.MM_Time[0][13].slot = 11;
    if (ns)
        document.MM_Time[0][13].obj = document["W11"];
    else
        document.MM_Time[0][13].obj = document.all ? document.all["W11"] : null;
    document.MM_Time[0][13].keyFrames = new Array(21, 90);
    document.MM_Time[0][13].values = new Array(3);
    document.MM_Time[0][13].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][13].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][13].values[0].prop2 = "style";
    document.MM_Time[0][13].values[1] = new Array(389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389,389);
    document.MM_Time[0][13].values[1].prop = "left";
    document.MM_Time[0][13].values[2] = new Array(514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514,514);
    document.MM_Time[0][13].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][13].values[1].prop2 = "style";
        document.MM_Time[0][13].values[2].prop2 = "style";
    }
    document.MM_Time[0][14] = new String("sprite");
    document.MM_Time[0][14].slot = 12;
    if (ns)
        document.MM_Time[0][14].obj = document["W12"];
    else
        document.MM_Time[0][14].obj = document.all ? document.all["W12"] : null;
    document.MM_Time[0][14].keyFrames = new Array(22, 90);
    document.MM_Time[0][14].values = new Array(3);
    document.MM_Time[0][14].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][14].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][14].values[0].prop2 = "style";
    document.MM_Time[0][14].values[1] = new Array(470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470);
    document.MM_Time[0][14].values[1].prop = "left";
    document.MM_Time[0][14].values[2] = new Array(473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473,473);
    document.MM_Time[0][14].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][14].values[1].prop2 = "style";
        document.MM_Time[0][14].values[2].prop2 = "style";
    }
    document.MM_Time[0][15] = new String("sprite");
    document.MM_Time[0][15].slot = 13;
    if (ns)
        document.MM_Time[0][15].obj = document["W13"];
    else
        document.MM_Time[0][15].obj = document.all ? document.all["W13"] : null;
    document.MM_Time[0][15].keyFrames = new Array(24, 90);
    document.MM_Time[0][15].values = new Array(3);
    document.MM_Time[0][15].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][15].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][15].values[0].prop2 = "style";
    document.MM_Time[0][15].values[1] = new Array(475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475,475);
    document.MM_Time[0][15].values[1].prop = "left";
    document.MM_Time[0][15].values[2] = new Array(384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384,384);
    document.MM_Time[0][15].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][15].values[1].prop2 = "style";
        document.MM_Time[0][15].values[2].prop2 = "style";
    }
    document.MM_Time[0][16] = new String("sprite");
    document.MM_Time[0][16].slot = 14;
    if (ns)
        document.MM_Time[0][16].obj = document["W14"];
    else
        document.MM_Time[0][16].obj = document.all ? document.all["W14"] : null;
    document.MM_Time[0][16].keyFrames = new Array(25, 90);
    document.MM_Time[0][16].values = new Array(1);
    document.MM_Time[0][16].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][16].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][16].values[0].prop2 = "style";
    document.MM_Time[0][17] = new String("sprite");
    document.MM_Time[0][17].slot = 15;
    if (ns)
        document.MM_Time[0][17].obj = document["W15"];
    else
        document.MM_Time[0][17].obj = document.all ? document.all["W15"] : null;
    document.MM_Time[0][17].keyFrames = new Array(27, 90);
    document.MM_Time[0][17].values = new Array(1);
    document.MM_Time[0][17].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][17].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][17].values[0].prop2 = "style";
    document.MM_Time[0][18] = new String("sprite");
    document.MM_Time[0][18].slot = 16;
    if (ns)
        document.MM_Time[0][18].obj = document["W16"];
    else
        document.MM_Time[0][18].obj = document.all ? document.all["W16"] : null;
    document.MM_Time[0][18].keyFrames = new Array(28, 90);
    document.MM_Time[0][18].values = new Array(1);
    document.MM_Time[0][18].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][18].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][18].values[0].prop2 = "style";
    document.MM_Time[0][19] = new String("sprite");
    document.MM_Time[0][19].slot = 17;
    if (ns)
        document.MM_Time[0][19].obj = document["W17"];
    else
        document.MM_Time[0][19].obj = document.all ? document.all["W17"] : null;
    document.MM_Time[0][19].keyFrames = new Array(30, 90);
    document.MM_Time[0][19].values = new Array(0);
    document.MM_Time[0][20] = new String("sprite");
    document.MM_Time[0][20].slot = 18;
    if (ns)
        document.MM_Time[0][20].obj = document["W18"];
    else
        document.MM_Time[0][20].obj = document.all ? document.all["W18"] : null;
    document.MM_Time[0][20].keyFrames = new Array(31, 90);
    document.MM_Time[0][20].values = new Array(3);
    document.MM_Time[0][20].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][20].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][20].values[0].prop2 = "style";
    document.MM_Time[0][20].values[1] = new Array(323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323,323);
    document.MM_Time[0][20].values[1].prop = "left";
    document.MM_Time[0][20].values[2] = new Array(390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390,390);
    document.MM_Time[0][20].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][20].values[1].prop2 = "style";
        document.MM_Time[0][20].values[2].prop2 = "style";
    }
    document.MM_Time[0][21] = new String("sprite");
    document.MM_Time[0][21].slot = 19;
    if (ns)
        document.MM_Time[0][21].obj = document["W19"];
    else
        document.MM_Time[0][21].obj = document.all ? document.all["W19"] : null;
    document.MM_Time[0][21].keyFrames = new Array(33, 90);
    document.MM_Time[0][21].values = new Array(3);
    document.MM_Time[0][21].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][21].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][21].values[0].prop2 = "style";
    document.MM_Time[0][21].values[1] = new Array(360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360,360);
    document.MM_Time[0][21].values[1].prop = "left";
    document.MM_Time[0][21].values[2] = new Array(379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379,379);
    document.MM_Time[0][21].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][21].values[1].prop2 = "style";
        document.MM_Time[0][21].values[2].prop2 = "style";
    }
    document.MM_Time[0][22] = new String("sprite");
    document.MM_Time[0][22].slot = 20;
    if (ns)
        document.MM_Time[0][22].obj = document["W20"];
    else
        document.MM_Time[0][22].obj = document.all ? document.all["W20"] : null;
    document.MM_Time[0][22].keyFrames = new Array(34, 90);
    document.MM_Time[0][22].values = new Array(3);
    document.MM_Time[0][22].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][22].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][22].values[0].prop2 = "style";
    document.MM_Time[0][22].values[1] = new Array(493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493,493);
    document.MM_Time[0][22].values[1].prop = "left";
    document.MM_Time[0][22].values[2] = new Array(426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426,426);
    document.MM_Time[0][22].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][22].values[1].prop2 = "style";
        document.MM_Time[0][22].values[2].prop2 = "style";
    }
    document.MM_Time[0][23] = new String("sprite");
    document.MM_Time[0][23].slot = 21;
    if (ns)
        document.MM_Time[0][23].obj = document["W21"];
    else
        document.MM_Time[0][23].obj = document.all ? document.all["W21"] : null;
    document.MM_Time[0][23].keyFrames = new Array(36, 90);
    document.MM_Time[0][23].values = new Array(3);
    document.MM_Time[0][23].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][23].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][23].values[0].prop2 = "style";
    document.MM_Time[0][23].values[1] = new Array(439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439,439);
    document.MM_Time[0][23].values[1].prop = "left";
    document.MM_Time[0][23].values[2] = new Array(470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470,470);
    document.MM_Time[0][23].values[2].prop = "top";
    if (!ns) {
        document.MM_Time[0][23].values[1].prop2 = "style";
        document.MM_Time[0][23].values[2].prop2 = "style";
    }
    document.MM_Time[0][24] = new String("behavior");
    document.MM_Time[0][24].frame = 6;
    document.MM_Time[0][24].value = "MM_showHideLayers('w1','','show')";
    document.MM_Time[0][25] = new String("behavior");
    document.MM_Time[0][25].frame = 7;
    document.MM_Time[0][25].value = "MM_showHideLayers('W2','','show')";
    document.MM_Time[0][26] = new String("behavior");
    document.MM_Time[0][26].frame = 9;
    document.MM_Time[0][26].value = "MM_showHideLayers('W3','','show')";
    document.MM_Time[0][27] = new String("behavior");
    document.MM_Time[0][27].frame = 10;
    document.MM_Time[0][27].value = "MM_showHideLayers('W4','','show')";
    document.MM_Time[0][28] = new String("behavior");
    document.MM_Time[0][28].frame = 12;
    document.MM_Time[0][28].value = "MM_showHideLayers('W5','','show')";
    document.MM_Time[0][29] = new String("behavior");
    document.MM_Time[0][29].frame = 13;
    document.MM_Time[0][29].value = "MM_showHideLayers('W6','','show')";
    document.MM_Time[0][30] = new String("behavior");
    document.MM_Time[0][30].frame = 15;
    document.MM_Time[0][30].value = "MM_showHideLayers('W7','','show')";
    document.MM_Time[0][31] = new String("behavior");
    document.MM_Time[0][31].frame = 16;
    document.MM_Time[0][31].value = "MM_showHideLayers('W8','','show')";
    document.MM_Time[0][32] = new String("behavior");
    document.MM_Time[0][32].frame = 18;
    document.MM_Time[0][32].value = "MM_showHideLayers('W9','','show')";
    document.MM_Time[0][33] = new String("behavior");
    document.MM_Time[0][33].frame = 19;
    document.MM_Time[0][33].value = "MM_showHideLayers('W10','','show')";
    document.MM_Time[0][34] = new String("behavior");
    document.MM_Time[0][34].frame = 21;
    document.MM_Time[0][34].value = "MM_showHideLayers('W11','','show')";
    document.MM_Time[0][35] = new String("behavior");
    document.MM_Time[0][35].frame = 22;
    document.MM_Time[0][35].value = "MM_showHideLayers('W12','','show')";
    document.MM_Time[0][36] = new String("behavior");
    document.MM_Time[0][36].frame = 24;
    document.MM_Time[0][36].value = "MM_showHideLayers('W13','','show')";
    document.MM_Time[0][37] = new String("behavior");
    document.MM_Time[0][37].frame = 25;
    document.MM_Time[0][37].value = "MM_showHideLayers('W14','','show')";
    document.MM_Time[0][38] = new String("behavior");
    document.MM_Time[0][38].frame = 27;
    document.MM_Time[0][38].value = "MM_showHideLayers('W15','','show')";
    document.MM_Time[0][39] = new String("behavior");
    document.MM_Time[0][39].frame = 28;
    document.MM_Time[0][39].value = "MM_showHideLayers('W16','','show')";
    document.MM_Time[0][40] = new String("behavior");
    document.MM_Time[0][40].frame = 30;
    document.MM_Time[0][40].value = "MM_showHideLayers('W17','','show')";
    document.MM_Time[0][41] = new String("behavior");
    document.MM_Time[0][41].frame = 31;
    document.MM_Time[0][41].value = "MM_showHideLayers('W18','','show')";
    document.MM_Time[0][42] = new String("behavior");
    document.MM_Time[0][42].frame = 33;
    document.MM_Time[0][42].value = "MM_showHideLayers('W19','','show')";
    document.MM_Time[0][43] = new String("behavior");
    document.MM_Time[0][43].frame = 34;
    document.MM_Time[0][43].value = "MM_showHideLayers('W20','','show')";
    document.MM_Time[0][44] = new String("behavior");
    document.MM_Time[0][44].frame = 36;
    document.MM_Time[0][44].value = "MM_showHideLayers('W21','','show')";
    document.MM_Time[0][45] = new String("sprite");
    document.MM_Time[0][45].slot = 22;
    if (ns)
        document.MM_Time[0][45].obj = document["GOLO"];
    else
        document.MM_Time[0][45].obj = document.all ? document.all["GOLO"] : null;
    document.MM_Time[0][45].keyFrames = new Array(40, 90);
    document.MM_Time[0][45].values = new Array(1);
    document.MM_Time[0][45].values[0] = new Array("hidden","hidden");
    document.MM_Time[0][45].values[0].prop = "visibility";
    if (!ns)
        document.MM_Time[0][45].values[0].prop2 = "style";
    document.MM_Time[0][46] = new String("behavior");
    document.MM_Time[0][46].frame = 40;
    document.MM_Time[0][46].value = "MM_showHideLayers('GOLO','','show')";
    document.MM_Time[0].lastFrame = 90;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
//-->
</script>
<style type="text/css">
<!--
.LIEN {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 7pt; font-weight: bold; color: #336666; text-decoration: none}
.subscriberGras { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 7pt; font-weight: bold; color: #FFFFFF}
.subscriber { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 7pt; font-weight: normal; color: #FFFFFF }
-->
</style>
<link rel="stylesheet" href="references.css">
</HEAD>
<BODY BGCOLOR=#FFFFFF ONLOAD="preloadImages();MM_preloadImages('../boutons_menu/bout_business-over.jpg','../boutons_menu/bout_contact-over.jpg','../boutons_menu/bout_games-over.jpg','../information_menu/information_02-over.gif','../information_menu/information_04-over.gif','../information_menu/information_06-over.gif','../information_menu/information_08-over.gif','../products_menu/products_off_02-over.gif','../products_menu/products_off_04-over.gif','../products_menu/products_off_06-over.gif','../products_menu/products_off_08-over.gif','../jobs_menu/jobs_off_05-over.gif','../jobs_menu/jobs_off_07-over.gif','../references_menu/references_off_02-over.gif','../references_menu/references_off_04-over.gif','../references_menu/references_off_06-over.gif','../references_menu/references_off_08-over.gif','../references_menu/references_off_10-over.gif','../references_menu/references_off_12-over.gif','illus/bout_glossary-over.jpg','illus/bout_exen-over.jpg','illus_customers/tel_menu/fleche_on-over.jpg');MM_openBrWindow('../product/minifenetre.php?r=5','info','scrollbars=yes,resizable=yes,width=500,height=200');MM_timelinePlay('Timeline1')" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<span class="subscriberGras"></span> <span class="titre"></span> <span class="texte"></span> 
<span class="text-titre"></span> <span class="neutre"></span>  
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0>
<TR><TD COLSPAN=11><IMG SRC="../boutons_menu/somaire_01.jpg" WIDTH=766 HEIGHT=73 usemap="#Map5" border="0"><map name="Map5"><area shape="rect" coords="115,57,253,78" href="../index.php"></map></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=73></TD></TR>
<TR><TD COLSPAN=3 ROWSPAN=2><IMG SRC="../boutons_menu/somaire_02.jpg" WIDTH=263 HEIGHT=47 usemap="#Map6" border="0"><map name="Map6"><area shape="rect" coords="110,-4,255,22" href="../index.php"></map></TD>
    <TD ROWSPAN=4><IMG SRC="../boutons_menu/terre_anim.gif" WIDTH=77 HEIGHT=80></TD>
    <TD COLSPAN=7><IMG SRC="../boutons_menu/somaire_04.jpg" WIDTH=426 HEIGHT=13></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=13></TD></TR>
<TR><TD ROWSPAN=2><a href="../business/business.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bout_business','','../boutons_menu/bout_business-over.jpg',1)"><IMG NAME="bout_business" SRC="../boutons_menu/bout_business.jpg" WIDTH=90 HEIGHT=40 BORDER=0></a></TD>
    <TD ROWSPAN=2><IMG SRC="../boutons_menu/bout_products.jpg" WIDTH=60 HEIGHT=40 usemap="#Map4" border="0"><map name="Map4"><area shape="rect" coords="5,5,56,35" href="#" onMouseOver="MM_showHideLayers('calqueProducts','','show')"></map></TD>
    <TD ROWSPAN=2><IMG SRC="../boutons_menu/bout_info.jpg" WIDTH=74 HEIGHT=40 usemap="#Map2" border="0"><map name="Map2"><area shape="rect" coords="6,5,70,35" href="#" onMouseOver="MM_showHideLayers('calqueInfo','','show')"></map></TD>
    <TD ROWSPAN=2><IMG SRC="../boutons_menu/bout_references.jpg" WIDTH=69 HEIGHT=40 usemap="#Map3" border="0"><map name="Map3"><area shape="rect" coords="4,3,65,35" href="#" onMouseOver="MM_showHideLayers('calqueRef','','show')"><area shape="rect" coords="3,-1,6,7" href="#"></map></TD>
    <TD ROWSPAN=2><a href="../contact/contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bout_contact','','../boutons_menu/bout_contact-over.jpg',1)"><IMG NAME="bout_contact" SRC="../boutons_menu/bout_contact.jpg" WIDTH=67 HEIGHT=40 BORDER=0></a></TD>
    <TD ROWSPAN=2><IMG SRC="../boutons_menu/bout_jobs.jpg" WIDTH=35 HEIGHT=40 usemap="#Map" border="0"><map name="Map"><area shape="rect" coords="2,3,32,36" href="#" onMouseOver="MM_showHideLayers('calqueJobs','','show')"></map></TD>
    <TD ROWSPAN=2><IMG SRC="../boutons_menu/somaire_11.jpg" WIDTH=31 HEIGHT=40></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=34></TD></TR>
<TR><TD ROWSPAN=3><IMG SRC="../boutons_menu/somaire_12.jpg" WIDTH=58 HEIGHT=50></TD>
    <TD ROWSPAN=3><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bout_games','','../boutons_menu/bout_games-over.jpg',1)" onClick="MM_openBrWindow('../gamesDemo/gamesDemo.html','gameDemo','resizable=yes,scrollbars=yes,width=425,height=365')"><IMG NAME="bout_games" SRC="../boutons_menu/bout_games.jpg" WIDTH=99 HEIGHT=50 BORDER=0></a></TD>
    <TD ROWSPAN=3><IMG SRC="../boutons_menu/somaire_14.jpg" WIDTH=106 HEIGHT=50></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=6></TD></TR>
<TR><TD COLSPAN=7 ROWSPAN=2><IMG SRC="../boutons_menu/somaire_15.jpg" WIDTH=426 HEIGHT=44></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=27></TD></TR>
<TR><TD><IMG SRC="../boutons_menu/somaire_16.jpg" WIDTH=77 HEIGHT=17></TD>
    <TD><IMG SRC="../boutons_menu/espaceur.gif" WIDTH=1 HEIGHT=17></TD></TR>
</TABLE>
<span id="calqueJobs" style="position:absolute; left:661px; top:67px; width:79px; height:74px; z-index:1; visibility: hidden">
<table width="104" border="0" cellspacing="0" cellpadding="0" height="53">
<tr><td width="18"><a href="#" onMouseOver="MM_showHideLayers('calqueJobs','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=18 height=87 border="0"></a></td>
    <td width="83">
        <table width="76" border="0" cellspacing="0" cellpadding="0">
        <tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueJobs','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=83 height=18 border="0"></a></td></tr>
        <tr><td height="2">
                <table width="73" border="0" cellspacing="0" cellpadding="0">
                <tr><td><img src="../jobs_menu/jobs_off_04.gif" width=83 height=20></td></tr>
                <tr><td><a href="../jobs/proposals.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('jobs_off_05','','../jobs_menu/jobs_off_05-over.gif',1)"><img name="jobs_off_05" src="../jobs_menu/jobs_off_05.gif" width=83 height=13 border=0></a></td></tr>
                <tr><td><img src="../jobs_menu/jobs_off_06.gif" width=83 height=2></td></tr>
                <tr><td><a href="../jobs/spirit.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('jobs_off_07','','../jobs_menu/jobs_off_07-over.gif',1)"><img name="jobs_off_07" src="../jobs_menu/jobs_off_07.gif" width=83 height=13 border=0></a></td></tr>
                </table></td></tr>
        <tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueJobs','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=83 height=19 border="0"></a></td></tr>
        </table></td>
    <td width="10"><a href="#" onMouseOver="MM_showHideLayers('calqueJobs','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=8 height=87 border="0"></a></td></tr>
</table>
</span>
<span id="calqueInfo" style="position:absolute; left:470px; top:60px; width:156px; height:133px; z-index:2; visibility: hidden">
<table width="147" border="0" cellspacing="0" cellpadding="0">
<tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueInfo','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=147 height=26 border="0"></a></td></tr>
<tr><td><table width="126" border="0" cellspacing="0" cellpadding="0" height="46">
        <tr><td width="20"> <a href="#" onMouseOver="MM_showHideLayers('calqueInfo','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=20 height=74 border="0"></a></td>
            <td width="103">
                <table border=0 cellpadding=0 cellspacing=0>
                <tr><td> <img src="../information_menu/information_01.gif" width=103 height=20></td></tr>
                <tr><td> <a href="../information/press.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('information_02','','../information_menu/information_02-over.gif',1)"><img name="information_02" src="../information_menu/information_02.gif" width=103 height=12 border=0></a></td></tr>
                <tr><td> <img src="../information_menu/information_03.gif" width=103 height=2></td></tr>
                <tr><td> <a href="../information/events.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('information_04','','../information_menu/information_04-over.gif',1)"><img name="information_04" src="../information_menu/information_04.gif" width=103 height=12 border=0></a></td></tr>
                <tr><td> <img src="../information_menu/information_05.gif" width=103 height=2></td></tr>
                <tr><td> <a href="../information/vision.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('information_06','','../information_menu/information_06-over.gif',1)"><img name="information_06" src="../information_menu/information_06.gif" width=103 height=12 border=0></a></td></tr>
                <tr><td> <img src="../information_menu/information_07.gif" width=103 height=2></td></tr>
                <tr><td> <a href="../information/history.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('information_08','','../information_menu/information_08-over.gif',1)"><img name="information_08" src="../information_menu/information_08.gif" width=103 height=13 border=0></a></td></tr>
                </table></td>
            <td width="10"><a href="#" onMouseOver="MM_showHideLayers('calqueInfo','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=24 height=73 border="0"></a></td></tr>
        </table></td></tr>
<tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueInfo','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=147 height=26 border="0"></a></td></tr>
</table>
</span>
<span id="calqueRef" style="position:absolute; left:532px; top:58px; width:211px; height:210px; z-index:3; visibility: hidden">
<table width="185" border="0" cellspacing="0" cellpadding="0">
<tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueRef','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=143 height=28 border="0"></a></td></tr>
<tr><td><table width="183" border="0" cellspacing="0" cellpadding="0" height="46">
        <tr><td width="32"><a href="#" onMouseOver="MM_showHideLayers('calqueRef','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=32 height=104 border="0"></a></td>
            <td width="117">
                <table border=0 cellpadding=0 cellspacing=0 width="97">
                <tr><td> <img src="../references_menu/references_off_01.gif" width=115 height=20></td></tr>
                <tr><td> <a href="../references/customers.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_02','','../references_menu/references_off_02-over.gif',1)"><img name="references_02" src="../references_menu/references_off_02.gif" width=115 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../references_menu/references_off_03.gif" width=115 height=2></td></tr>
                <tr><td> <a href="../references/players.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_04','','../references_menu/references_off_04-over.gif',1)"><img name="references_04" src="../references_menu/references_off_04.gif" width=115 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../references_menu/references_off_05.gif" width=115 height=2></td></tr>
                <tr><td> <a href="../references/investors.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_06','','../references_menu/references_off_06-over.gif',1)"><img name="references_06" src="../references_menu/references_off_06.gif" width=115 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../references_menu/references_off_07.gif" width=115 height=2></td></tr>
                <tr><td> <a href="../references/manufacturers.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_08','','../references_menu/references_off_08-over.gif',1)"><img name="references_08" src="../references_menu/references_off_08.gif" width=115 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../references_menu/references_off_09.gif" width=115 height=2></td></tr>
                <tr><td> <a href="../references/studios.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_10','','../references_menu/references_off_10-over.gif',1)"><img name="references_10" src="../references_menu/references_off_10.gif" width=115 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../references_menu/references_off_11.gif" width=115 height=2></td></tr>
                <tr><td> <a href="../references/licensors.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('references_12','','../references_menu/references_off_12-over.gif',1)"><img name="references_12" src="../references_menu/references_off_12.gif" width=115 height=14 border="0"></a></td></tr>
                </table></td>
            <td width="34"><a href="#" onMouseOver="MM_showHideLayers('calqueRef','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=26 height=104 border="0"></a></td></tr>
        </table></td></tr>
<tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueRef','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=143 height=28 border="0"></a></td></tr>
</table>
</span>
<span id="calqueProducts" style="position:absolute; left:398px; top:61px; width:177px; height:129px; z-index:4; visibility: hidden">
<table width="115" border="0" cellspacing="0" cellpadding="0">
<tr><td width="32"><a href="#" onMouseOver="MM_showHideLayers('calqueProducts','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=32 height=127 border="0"></a></td>
    <td width="111">
        <table width="90" border="0" cellspacing="0" cellpadding="0">
        <tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueProducts','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=111 height=24 border="0"></a></td></tr>
        <tr><td><table border=0 cellpadding=0 cellspacing=0>
                <tr><td> <img src="../products_menu/products_off_01.gif" width=111 height=20></td></tr>
                <tr><td> <a href="../product/portfolio.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('products_off_02','','../products_menu/products_off_02-over.gif',1)"><img name="products_off_02" src="../products_menu/products_off_02.gif" width=111 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../products_menu/products_off_03.gif" width=111 height=2></td></tr>
                <tr><td> <a href="../product/technologies.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('products_off_04','','../products_menu/products_off_04-over.gif',1)"><img name="products_off_04" src="../products_menu/products_off_04.gif" width=111 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../products_menu/products_off_05.gif" width=111 height=2></td></tr>
                <tr><td> <a href="../product/services.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('products_off_06','','../products_menu/products_off_06-over.gif',1)"><img name="products_off_06" src="../products_menu/products_off_06.gif" width=111 height=12 border="0"></a></td></tr>
                <tr><td> <img src="../products_menu/products_off_07.gif" width=111 height=2></td></tr>
                <tr><td> <a href="../product/platform.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('products_off_08','','../products_menu/products_off_08-over.gif',1)"><img name="products_off_08" src="../products_menu/products_off_08.gif" width=111 height=15 border=0></a></td></tr>
                </table></td></tr>
        <tr><td><a href="#" onMouseOver="MM_showHideLayers('calqueProducts','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=111 height=24 border="0"></a></td></tr>
        </table></td>
    <td width="10"><a href="#" onMouseOver="MM_showHideLayers('calqueProducts','','hide')"><img src="../boutons_menu/menuProduct_off_04.gif" width=32 height=127 border="0"></a></td></tr>
</table>
</span>
 
<table width="686" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="76" valign="top"><img src="../technologie/images_tech/fusio_001.jpg" width="76" height="32"></td>
          <td width="118" valign="top"> 
            <table width="119" border="0" cellspacing="0" cellpadding="0">
              <tr valign="bottom"> 
                <td><img src="../technologie/images_tech/fusio_002.jpg" width="115" height="26"></td>
              </tr>
              <tr> 
                <td height="70"> 
                  <table width="119" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="45" valign="bottom"><img src="../technologie/images_tech/fusio_003.jpg" width="35" height="76"></td>
                      <td width="74" valign="bottom"> 
                        <table width="55" border="0" cellspacing="0" cellpadding="0">
                          <tr valign="bottom" align="right"> 
                            <td><img src="illus/illus.jpg" width="83" height="67"></td>
                          </tr>
                          <tr> 
                            <td>
                              <table width="77" border="0" cellspacing="0" cellpadding="0">
                                <tr valign="bottom"> 
                                  <td width="10" height="2"><img src="../technologie/images_tech/004.jpg" width="29" height="9"></td>
                                  <td width="67" height="2"><img src="illus/005.jpg" width="54" height="9"></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td width="492" valign="top" background="illus/fusio_006.jpg"> 
            <table width="491" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="10" align="left" valign="top" background="illus/fond_fonce.jpg"><img src="illus/arondi_gauche.jpg" width="12" height="11"></td>
                <td width="471" background="illus/fond_fonce.jpg">&nbsp;</td>
                <td width="10" valign="top" align="right" background="illus/fond_fonce.jpg"><img src="illus/arondi_droit.jpg" width="10" height="11"></td>
              </tr>
              <tr> 
                <td width="10" background="illus/fond_fonce.jpg" valign="top" align="left"><img src="illus/fond_fonce.jpg" width="12" height="55"></td>
                <td width="471" background="illus/fond_fonce.jpg" valign="top"> 
                  <table width="464" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="176" class="titre" align="left" valign="bottom">CUSTOMERS</td>
                      <td width="288" class="chapo" valign="bottom" align="left">"We are really waiting for ExEn®, because we think it is a revolution..." Jorge Navas, Head of Entertainment, Terra Mobile Corporation</span></td>
                    </tr>
                  </table>
                </td>
                <td width="10" background="illus/fond_fonce.jpg">&nbsp;</td>
              </tr>
              <tr> 
                <td width="10" align="left" valign="top" background="illus/fusio_007.jpg">&nbsp;</td>
                <td width="471" background="illus/fusio_007.jpg"> 
                  <table width="455" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="243" background="illus/fusio_007.jpg">&nbsp;</td>
                      <td width="77" valign="top" align="right"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','illus/bout_glossary-over.jpg',1)" onClick="MM_openBrWindow('../glossary.php','glossary','scrollbars=yes,resizable=yes,width=500,height=400')"><img src="illus/bout_glossary.jpg" width="82" height="17" border="0" name="Image1"></a></td>
                      <td width="54" align="left" valign="top"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','illus/bout_exen-over.jpg',1)" onClick="MM_openBrWindow('../exen/exen.html','exen','resizable=yes,width=720,height=540')"><img src="illus/bout_exen.jpg" width="54" height="17" border="0" name="Image2"></a></td>
                      <td width="81" background="illus/fusio_007.jpg">&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td width="10" background="illus/fusio_007.jpg">&nbsp;</td>
              </tr>
              <tr background="../technologie/images_tech/fusio_006.jpg"> 
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table width="686" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="77" valign="top" height="5"><img src="../technologie/images_tech/fusio_001.jpg" width="76" height="15"></td>
          <td width="64" valign="top" height="5" align="right"><img src="illus/fleche.jpg" width="64" height="15"></td>
          <td width="545" background="illus/motif.jpg" valign="middle" height="5" nowrap> 
            <table width="545" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="44" height="15">&nbsp;</td>
                <td width="501" class="titre2" valign="middle" align="left">Major Prestigious International customers</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td width="77">&nbsp;</td>
          <td width="64">&nbsp;</td>
          <td width="545" background="illus/fusio_006.jpg" valign="top"> 
            <table width="530" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="68">&nbsp;</td>
                <td width="436"><img src="illus/fusio_006.jpg" width="12" height="16"></td>
              </tr>
              <tr>
                <td width="68"><img src="illus/005.jpg" width="54" height="357"></td>
                <td width="436" class="texte"> 
                  <p>&nbsp;</p>
                  </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
<span id="Layer1" style="position:absolute; left:257px; top:313px; width:187px; height:168px; z-index:5"><img src="illus_customers/animcarte.gif" width="427" height="274"></span><span id="Layer2" style="position:absolute; left:154px; top:307px; width:207px; height:234px; z-index:6"> 
<table width="115" border="0" cellspacing="1" cellpadding="0">
  <tr> 
    <td width="12"><img name="orange" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOver="MM_showHideLayers('SubOrange','','show','bonhomeFR','','show','FranceTele','','show');MM_swapImage('orange','','illus_customers/tel_menu/fleche_on-over.jpg',1)" onMouseOut="MM_showHideLayers('SubOrange','','hide','bonhomeFR','','hide','FranceTele','','hide');MM_swapImgRestore()">ORANGE</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="sfr" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subSFR','','hide','bonhomeFR','','hide','sfrlogo','','hide')" onMouseOver="MM_swapImage('sfr','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('bonhomeFR','','show','sfrlogo','','show')">SFR</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="sunday" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subSunday','','hide','sundaylogo','','hide','bonhomesunday','','hide')" onMouseOver="MM_showHideLayers('sundaylogo','','show','bonhomesunday','','show');MM_swapImage('sunday','','illus_customers/tel_menu/fleche_on-over.jpg',1)">SUNDAY.COM</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="Tmobil" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subTmobile','','hide','tmobillogo','','hide','bonhometmobil','','hide')" onMouseOver="MM_swapImage('Tmobil','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('subTmobile','','show','tmobillogo','','show','bonhometmobil','','show')">T-MOBIL</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="teltra" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subTELTRA','','hide','telstralogo','','hide','bonhometelstart','','hide')" onMouseOver="MM_swapImage('teltra','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('subTELTRA','','show','telstralogo','','show','bonhometelstart','','show')">TELSTRA</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="vizzavi" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subVizzavi','','hide','VIZZAVIlogo','','hide','bonhomeEngland','','hide')" onMouseOver="MM_swapImage('vizzavi','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('subVizzavi','','show','VIZZAVIlogo','','show','bonhomeEngland','','show')">VIZZAVI</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="t-motion" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('Tmotionlogo','','hide','bonhometmobil','','hide','bonhomeEngland','','hide')" onMouseOver="MM_swapImage('t-motion','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('Tmotionlogo','','show','bonhometmobil','','hide','bonhomeEngland','','show')">T-MOTION</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="terraMobile" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subTerraMobile','','hide','terramobilelogo','','hide','bonhometerraMobile','','hide')" onMouseOver="MM_swapImage('terraMobile','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('subTerraMobile','','show','terramobilelogo','','show','bonhometerraMobile','','show')">TERRA 
      MOBILE</a></td>
  </tr>
  <tr> 
    <td width="12"><img name="VODAFONE" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_showHideLayers('subTerraMobile','','hide','subVodafone','','hide','terramobilelogo','','hide','bonhomeVodafone','','hide','bonhometerraMobile','','hide')" onMouseOver="MM_swapImage('VODAFONE','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_showHideLayers('subTerraMobile','','hide','subVodafone','','show','terramobilelogo','','hide','bonhomeVodafone','','show','bonhometerraMobile','','hide')">D2 
      VODAFONE </a></td>
  </tr>
  <tr> 
    <td width="12"><img name="tomorrow" src="illus_customers/tel_menu/fleche_on.jpg" width=11 height=9></td>
    <td width="103"><a href="#" class="LIEN" onMouseOut="MM_swapImgRestore();MM_timelineGoto('Timeline1','1')" onMouseOver="MM_swapImage('tomorrow','','illus_customers/tel_menu/fleche_on-over.jpg',1);MM_timelineGoto('Timeline1','4')">and 
      tomorrow</a></td>
  </tr>
  <tr> 
    <td width="12">&nbsp;</td>
    <td width="103">&nbsp;</td>
  </tr>
</table>
</span> <span id="SubOrange" style="position:absolute; left:440px; top:291px; width:243px; height:35px; z-index:5; visibility: hidden"> 
<div align="left"></div>
<table width="235" border="0" cellspacing="0" cellpadding="3">
  <tr bgcolor="#336666" valign="middle" align="center"> 
    <td width="235"> 
      <div align="center" class="subscriber">The future is not in five years time, 
        but it is today, and what we are doing today with In-Fusio is simply revolutionary" 
        publicly announced Guy Lafarge, Executive Marketing and Communication 
        Director of Orange France</div>
    </td>
  </tr>
</table>
</span><span id="subTerraMobile" style="position:absolute; left:346px; top:291px; width:328px; height:25px; z-index:13; visibility: hidden"> 
<div align="left"></div>
<table width="320" border="0" cellspacing="0" cellpadding="3">
  <tr bgcolor="#336666" valign="middle" align="center"> 
    <td width="314"> 
      <div align="center" class="subscriber">el objetivo de Terra Mobile es obtener 
        ingresos con el portal, por este motivo Terra Mobile pretende atraer a 
        gente de forma masiva y tener juegos on-line que sean atractivos y cubran 
        las necesidades de una gran variedad de consumidores. Hemos escogido a 
        In-Fusio debido a que es una compañía Internacional líder en el mercado 
        de juegos para teléfonos móviles y con su innovadora tecnología ExEn podremos 
        conseguir nuestros objetivos." Según Jorge Navas Director de Entretenimiento 
        de Terra Mobile</div>
    </td>
  </tr>
</table>
</span><span id="subVodafone" style="position:absolute; left:439px; top:291px; width:197px; height:25px; z-index:13; visibility: hidden"> 
<div align="right"> 
  <table width="235" border="0" cellspacing="0" cellpadding="3">
    <tr bgcolor="#336666" valign="middle" align="center"> 
      <td width="235"> 
        <div align="center" class="subscriber">"Games for mobile phones are the 
          height of fashion. We see an enormous market potential in them. Until 
          now, the customer has had the choice between WAP, SMS or embedded games, 
          but we are now the first German network operator to unveil the next 
          development: downloadable games." declared Dr. Michaël Paetsch, Executive 
          Vice-President Marketing of D2 Vodafone </div>
      </td>
    </tr>
  </table>
</div>
</span><span id="subTmobile" style="position:absolute; left:436px; top:291px; width:238px; height:112px; z-index:13; visibility: hidden"> 
<div align="right"> 
  <table width="235" border="0" cellspacing="0" cellpadding="3">
    <tr bgcolor="#336666" valign="middle" align="center"> 
      <td width="235"> 
        <div align="center" class="subscriber"> 
          <div align="center" class="texte"><span class="subscriber">&quot;It 
            has been a pleasure working with such an effective and innovative 
            company as In-Fusio on the launch of new interactive adventure game.&quot; 
            Britta Steffens, Project Manager Games, Mobile Multimedia, T-Mobil</span></div>
        </div>
      </td>
    </tr>
  </table>
</div>
</span><br>
<span id="bonhomeFR" style="position:absolute; left:451px; top:423px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="sfrlogo" style="position:absolute; left:154px; top:542px; width:39px; height:39px; z-index:7; visibility: hidden"><img src="illus_customers/logos/CART_sfr.gif" width="38" height="38"></span><span id="sundaylogo" style="position:absolute; left:154px; top:542px; width:60px; height:28px; z-index:8; visibility: hidden"><img src="illus_customers/logos/CART_sundaycom.gif" width="65" height="31"></span><span id="telstralogo" style="position:absolute; left:154px; top:542px; width:34px; height:12px; z-index:9; visibility: hidden"><img src="illus_customers/logos/CART_telstra.gif" width="64" height="32"></span><span id="tmobillogo" style="position:absolute; left:154px; top:542px; width:53px; height:5px; z-index:10; visibility: hidden"><img src="illus_customers/logos/CART_tmobil.gif" width="75" height="25"></span><span id="terramobilelogo" style="position:absolute; left:155px; top:542px; width:66px; height:13px; z-index:11; visibility: hidden"><img src="illus_customers/logos/terra.gif" width="73" height="55"></span><span class="legende"><span id="FranceTele" style="position:absolute; left:154px; top:542px; width:73px; height:46px; z-index:5; visibility: hidden"><a href="http://www.cellnet.co.uk" onMouseOver="MM_showHideLayers('postBT','','show')" onMouseOut="MM_showHideLayers('postBT','','hide')" target="_blank"><img src="illus_customers/logos/CART_ft.gif" width="75" height="24" border="0"></a></span><span id="VIZZAVIlogo" style="position:absolute; left:154px; top:542px; width:73px; height:46px; z-index:5; visibility: hidden"><img src="illus_customers/logos/logo_vizzavi.gif" width="88" height="25"></span><span id="Tmotionlogo" style="position:absolute; left:154px; top:542px; width:73px; height:46px; z-index:5; visibility: hidden"><img src="illus_customers/logos/t_motion_logo.gif" width="134" height="22"></span></span> 
<span id="bonhometerra" style="position:absolute; left:440px; top:429px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span> 
<span id="bonhomesunday" style="position:absolute; left:604px; top:438px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span> 
<p><span id="bonhomeVodafone" style="position:absolute; left:460px; top:413px; width:27px; height:42px; z-index:19; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="bonhometmobil" style="position:absolute; left:463px; top:415px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span> 
  <span id="bonhometelstart" style="position:absolute; left:602px; top:518px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="bonhometerraMobile" style="position:absolute; left:441px; top:437px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="bonhomeEngland" style="position:absolute; left:438px; top:405px; width:25px; height:41px; z-index:6; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="GOLO" style="position:absolute; left:376px; top:402px; width:115px; height:44px; z-index:21; visibility: hidden"><img src="illus_customers/tel_menu/logoTrans.jpg" width="151" height="88"></span></p>
<span id="b12" style="position:absolute; left:323px; top:332px; width:23px; height:44px; z-index:17; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span> 
<span id="w1" style="position:absolute; left:339px; top:456px; width:2px; height:20px; z-index:20; visibility: hidden"> 
<img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W2" style="position:absolute; left:371px; top:343px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W3" style="position:absolute; left:286px; top:382px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W4" style="position:absolute; left:392px; top:492px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W5" style="position:absolute; left:475px; top:507px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W6" style="position:absolute; left:619px; top:385px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W7" style="position:absolute; left:562px; top:386px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W8" style="position:absolute; left:600px; top:514px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W9" style="position:absolute; left:414px; top:340px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W10" style="position:absolute; left:550px; top:450px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W11" style="position:absolute; left:373px; top:528px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W12" style="position:absolute; left:484px; top:459px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W13" style="position:absolute; left:531px; top:366px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W14" style="position:absolute; left:469px; top:337px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W15" style="position:absolute; left:560px; top:327px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W16" style="position:absolute; left:521px; top:429px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W17" style="position:absolute; left:503px; top:465px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W18" style="position:absolute; left:324px; top:405px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W19" style="position:absolute; left:357px; top:387px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W20" style="position:absolute; left:582px; top:432px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span><span id="W21" style="position:absolute; left:446px; top:463px; width:2px; height:20px; z-index:20; visibility: hidden"><img src="illus_customers/carte/bonhome.gif" width="23" height="38"></span> 
</BODY></HTML>
