function MM_initTimelines() {
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(3);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("behavior");
    document.MM_Time[0][0].frame = 1;
    document.MM_Time[0][0].value = "MM_showHideLayers('voiture','','hide');MM_timelinePlay('Timeline1')";
    document.MM_Time[0][1] = new String("sprite");
    document.MM_Time[0][1].slot = 1;
    if (ns)
        document.MM_Time[0][1].obj = document["voiture"];
    else
        document.MM_Time[0][1].obj = document.all ? document.all["voiture"] : null;
    document.MM_Time[0][1].keyFrames = new Array(15, 22, 27, 30, 33, 40);
    document.MM_Time[0][1].values = new Array(2);
    document.MM_Time[0][1].values[0] = new Array(438,413,387,362,337,315,296,280,267,259,254,252,252,255,264,273,285,297,309,318,328,338,350,361,373,385);
    document.MM_Time[0][1].values[0].prop = "left";
    document.MM_Time[0][1].values[1] = new Array(598,547,495,444,394,350,310,274,241,219,201,185,170,155,149,142,138,129,104,78,48,13,-26,-67,-109,-150);
    document.MM_Time[0][1].values[1].prop = "top";
    if (!ns) {
        document.MM_Time[0][1].values[0].prop2 = "style";
        document.MM_Time[0][1].values[1].prop2 = "style";
    }
    document.MM_Time[0][2] = new String("behavior");
    document.MM_Time[0][2].frame = 14;
    document.MM_Time[0][2].value = "MM_showHideLayers('voiture','','show')";
    document.MM_Time[0].lastFrame = 40;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
