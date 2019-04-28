jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");     //获取所有script标签
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/lovelygallery\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
        // console.log(jsFolder);      //http://localhost:8080
    }
    var win_width = document.body.clientWidth;
	var win_height = win_width * 441 / 1920;
    // console.log(win_width,win_height);       //2708    621.0993
    jQuery("#html5zoo-1").html5zoo({
        jsfolder:jsFolder,
        width:win_width,
        height:win_height,
        skinsfoldername:"",
        loadimageondemand:false,
        isresponsive:false,
        autoplayvideo:false,
        pauseonmouseover:true,
        addmargin:true,
        randomplay:false,
        slideinterval:5000,     // 控制时间
        enabletouchswipe:true,
        transitiononfirstslide:false,
        loop:0,
        autoplay:true,
        // navplayvideoimage:"../images/play-32-32-0.png",
        navplayvideoimage:"ico.png",
        navpreviewheight:60,
        timerheight:2,
        shownumbering:false,
        skin:"Frontpage",
        navshowplaypause:true,
        navshowplayvideo:true,
        navshowplaypausestandalonemarginx:8,
        navshowplaypausestandalonemarginy:8,
        navbuttonradius:0,
        navthumbnavigationarrowimageheight:32,
        navmarginy:-34,/*bottom*/
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        navcolor:"#999999",
        arrowwidth:48,
        texteffecteasing:"easeOutCubic",
        texteffect:"fade",
        navspacing:20,/*margin-right*/
        playvideoimage:"skin/images/playvideo-64-64-0.png",
        // ribbonimage:"../images/ribbon_topleft-0.png",
        ribbonimage:"ico.png",
        navwidth:14,/*width*/
        showribbon:false,
        arrowimage:"skin/images/arrows-48-48-3.png",
        timeropacity:0.6,
        // navthumbnavigationarrowimage:"../images/carouselarrows-32-32-0.png",
        navthumbnavigationarrowimage:"ico.png",
        navshowplaypausestandalone:false,
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        arrowstyle:"mouseover",
        navthumbtitleheight:20,
        textpositionmargintop:24,
        navswitchonmouseover:false,
        // navarrowimage:"../images/navarrows-28-28-0.png",
        navarrowimage:"ico.png",
        arrowtop:50,
        textstyle:"static",
        playvideoimageheight:64,
        navfonthighlightcolor:"#666666",
        showbackgroundimage:false,
        navpreviewborder:4,
        navopacity:0.8,
        shadowcolor:"#aaaaaa",
        navbuttonshowbgimage:true,
        // navbuttonbgimage:"../images/navbuttonbgimage-28-28-0.png",
        navbuttonbgimage:"ico.png",
        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);",
        navdirection:"horizontal",
        navborder:4,
        bottomshadowimagewidth:110,
        showtimer:true,
        navradius:0,
        navshowpreview:true,
        navpreviewarrowheight:8,
        navmarginx:16,
        // navfeaturedarrowimage:"../images/featuredarrow-16-8-0.png",
        navfeaturedarrowimage:"ico.png",
        navfeaturedarrowimageheight:8,
        navstyle:"bullets",
        textpositionmarginleft:24,
        descriptioncss:"display:block; position:relative; margin-top:4px; font:14px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        // navplaypauseimage:"../images/navplaypause-28-28-0.png", 
        navplaypauseimage:"ico.png", 
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        numberingformat:"%NUM/%TOTAL ",
        navfontsize:12,
        navhighlightcolor:"#333333",
        navimage:"skin/images/bullet-24-24-4.png",/*background-image*/
        navheight:14,/*height*/
        navshowplaypausestandaloneautohide:false,
        navbuttoncolor:"#999999",
        navshowarrow:true,
        navshowfeaturedarrow:false,
        titlecss:"display:block; position:relative; font:16px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        ribbonimagey:0,
        ribbonimagex:0,
        navshowplaypausestandaloneposition:"bottomright",
        shadowsize:5,
        arrowhideonmouseleave:win_width,
        navshowplaypausestandalonewidth:28,
        navshowplaypausestandaloneheight:28,
        backgroundimagewidth:120,
        textautohide:true,
        navthumbtitlewidth:120,
        navpreviewposition:"top",
        playvideoimagewidth:64,
        arrowheight:48,
        arrowmargin:0,
        texteffectduration:win_width,
        // bottomshadowimage:"../images/bottomshadow-110-100-5.png",
        bottomshadowimage:"ico.png",
        border:0,
        timerposition:"bottom",
        navfontcolor:"#333333",
        navthumbnavigationstyle:"arrow",
        borderradius:0,
        navbuttonhighlightcolor:"#333333",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        textcss:"display:block; padding:12px; text-align:left;",
        navbordercolor:"#ffffff",
        // navpreviewarrowimage:"../images/previewarrow-16-8-0.png",
        navpreviewarrowimage:"ico.png",
        showbottomshadow:false,
        textpositionmarginstatic:0,
        backgroundimage:"",
        navposition:"bottom",
        navpreviewarrowwidth:16,
        bottomshadowimagetop:100,
        textpositiondynamic:"bottomleft",
        navshowbuttons:false,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        ribbonmarginy:0,
        ribbonmarginx:0,
        //滑动
        slide: {
            duration:win_width,
            easing:"easeOutCubic",
            checked:true
        },
        //交叉渐变
        crossfade: {
            duration:win_width,
            easing:"easeOutCubic",
            checked:true
        },
        //三层
        threedhorizontal: {
            checked:true,
            bgcolor:"#222222",
            perspective:win_width,
            slicecount:1,
            duration:1500,
            easing:"easeOutCubic",
            fallback:"slice",
            scatter:5,
            perspectiveorigin:"bottom"
        },
        //切割
        slice: {
            duration:1500,
            easing:"easeOutCubic",
            checked:true,
            effects:"up,down,updown",
            slicecount:10
        },
        //渐变
        fade: {
            duration:win_width,
            easing:"easeOutCubic",
            checked:true
        },
        //
        blocks: {
            columncount:5,
            checked:true,
            rowcount:5,
            effects:"topleft,bottomright,top,bottom,random",
            duration:1500,
            easing:"easeOutCubic"
        },
        // 百叶窗 
        blinds: {
            duration:2000,
            easing:"easeOutCubic",
            checked:true,
            slicecount:3
        },
        shuffle: {
            duration:1500,
            easing:"easeOutCubic",
            columncount:5,
            checked:true,
            rowcount:5
        },
        threed: {
            checked:true,
            bgcolor:"#222222",
            perspective:win_width,
            slicecount:5,
            duration:1500,
            easing:"easeOutCubic",
            fallback:"slice",
            scatter:5,
            perspectiveorigin:"right"
        },
        transition:"slide,crossfade,threedhorizontal,slice,fade,blocks,blinds,shuffle,threed"
    });
});