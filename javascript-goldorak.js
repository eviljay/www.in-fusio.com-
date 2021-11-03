function MM_initTimelines() {
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(4);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 25;
    document.MM_Time[0][0] = new String("sprite");
    document.MM_Time[0][0].slot = 1;
    if (ns)
        document.MM_Time[0][0].obj = document["goldorak"];
    else
        document.MM_Time[0][0].obj = document.all ? document.all["goldorak"] : null;
    document.MM_Time[0][0].keyFrames = new Array(10, 32, 37, 44);
    document.MM_Time[0][0].values = new Array(4);
    document.MM_Time[0][0].values[0] = new Array(541,518,495,472,449,425,402,379,356,332,310,287,266,245,225,207,189,172,157,142,129,116,106,94,113,146,182,199,190,174,154,134,112,89,68);
    document.MM_Time[0][0].values[0].prop = "left";
    document.MM_Time[0][0].values[1] = new Array(1243,1197,1152,1107,1062,1017,971,926,881,836,790,746,702,660,620,580,542,505,469,434,400,367,335,240,178,136,99,54,19,-12,-39,-63,-87,-109,-133);
    document.MM_Time[0][0].values[1].prop = "top";
    if (!ns) {
        document.MM_Time[0][0].values[0].prop2 = "style";
        document.MM_Time[0][0].values[1].prop2 = "style";
    }
    document.MM_Time[0][0].values[2] = new Array(11,15,19,23,27,31,35,39,44,48,52,56,60,64,68,73,77,81,85,89,93,97,102,92,82,72,62,53,47,41,35,29,23,17,11);
    document.MM_Time[0][0].values[2].prop = "width";
    if (!ns)
        document.MM_Time[0][0].values[2].prop2 = "style";
    document.MM_Time[0][0].values[3] = new Array(25,28,32,36,40,44,48,52,55,59,63,67,71,75,79,82,86,90,94,98,102,106,110,100,91,82,73,64,58,52,47,41,36,30,25);
    document.MM_Time[0][0].values[3].prop = "height";
    if (!ns)
        document.MM_Time[0][0].values[3].prop2 = "style";
    document.MM_Time[0][1] = new String("behavior");
    document.MM_Time[0][1].frame = 1;
    document.MM_Time[0][1].value = "MM_showHideLayers('goldorak','','hide');MM_timelinePlay('Timeline1')";
    document.MM_Time[0][2] = new String("behavior");
    document.MM_Time[0][2].frame = 9;
    document.MM_Time[0][2].value = "MM_showHideLayers('goldorak','','show')";
    document.MM_Time[0][3] = new String("behavior");
    document.MM_Time[0][3].frame = 46;
    document.MM_Time[0][3].value = "MM_showHideLayers('goldorak','','hide')";
    document.MM_Time[0].lastFrame = 46;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}

