function MM_initTimelines() {
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(4);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("sprite");
    document.MM_Time[0][0].slot = 1;
    if (ns)
        document.MM_Time[0][0].obj = document["spounik"];
    else
        document.MM_Time[0][0].obj = document.all ? document.all["spounik"] : null;
    document.MM_Time[0][0].keyFrames = new Array(7, 21, 26, 30, 48, 66);
    document.MM_Time[0][0].values = new Array(2);
    document.MM_Time[0][0].values[0] = new Array(597,560,522,485,448,410,373,336,302,270,240,212,186,163,142,130,156,179,201,220,200,178,155,140,147,155,164,174,184,194,204,215,226,238,249,260,271,282,293,303,311,318,321,323,322,321,319,317,314,310,307,303,299,295,291,287,283,278,274,271);
    document.MM_Time[0][0].values[0].prop = "left";
    document.MM_Time[0][0].values[1] = new Array(709,675,642,609,576,543,509,476,445,415,387,361,335,311,287,244,234,234,233,227,211,201,191,168,162,157,153,149,146,142,139,135,132,128,124,119,115,109,103,96,88,78,67,56,45,33,22,11,0,-11,-22,-33,-43,-54,-65,-75,-86,-96,-107,-118);
    document.MM_Time[0][0].values[1].prop = "top";
    if (!ns) {
        document.MM_Time[0][0].values[0].prop2 = "style";
        document.MM_Time[0][0].values[1].prop2 = "style";
    }
    document.MM_Time[0][1] = new String("behavior");
    document.MM_Time[0][1].frame = 1;
    document.MM_Time[0][1].value = "MM_timelinePlay('Timeline1');MM_showHideLayers('spounik','','hide')";
    document.MM_Time[0][2] = new String("behavior");
    document.MM_Time[0][2].frame = 6;
    document.MM_Time[0][2].value = "MM_showHideLayers('spounik','','show')";
    document.MM_Time[0][3] = new String("behavior");
    document.MM_Time[0][3].frame = 68;
    document.MM_Time[0][3].value = "MM_showHideLayers('spounik','','hide')";
    document.MM_Time[0].lastFrame = 68;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
