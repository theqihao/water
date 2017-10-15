 
function afterText(){

	var txt2=$("<select id='mySelect2'><option value='11'>one</option>  <option value='22' selected='selected'>two</option> <option value='33'>three</option>  </select>");     // Ê¹ÓÃ jQuery ŽŽœšÔªËØ
	var txt3=document.createElement("big");  // Ê¹ÓÃ DOM ŽŽœšÔªËØ
	txt3.innerHTML="jQuery!";
	$("#befor_build").after(txt2);          // ÔÚÍŒÆ¬ºóÌíŒÓÎÄ±Ÿ
}

function addDong() {
    var txt=$(" <li id='cur_build'>    " + 
               " <label for='addr' class='input-tips2'>楼栋号：</label>  " + 
               " <div class='inputOuter2'>" +                
               " <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>" + 
               "     <option value='东八舍'>东八舍</option>" + 
               "     <option value='东二舍'>东二舍</option>" + 
               "     <option value='东六舍'>东六舍</option>" + 
               "     <option value='东七舍'>东七舍</option>" + 
               "     <option value='东三舍'>东三舍</option>" + 
               "     <option value='东四舍'>东四舍</option>" + 
               "     <option value='东五舍'>东五舍</option>" + 
               "     <option value='东一舍'>东一舍</option>" + 
               "     <option value='附中主楼'>附中主楼</option>" + 
               "     <option value='教八舍'>教八舍</option>" + 
               "     <option value='教七舍'>教七舍</option>" + 
               "     <option value='南二舍'>南二舍</option>" + 
               "     <option value='南三舍'>南三舍</option>" + 
               "     <option value='南一舍'>南一舍</option>" + 
               "     <option value='沁苑东九舍'>沁苑东九舍</option>" + 
               "     <option value='沁苑东十二舍'>沁苑东十二舍</option>" + 
               "     <option value='沁苑东十三舍'>沁苑东十三舍</option>" + 
               "     <option value='沁苑东十舍'>沁苑东十舍</option>" + 
               "     <option value='沁苑东十一舍' selected='selected'>沁苑东十一舍</option>" + 
               " </select>" + 
               " </div>" + 
               " </li>");
    $("#befor_build").after(txt);
}


function addLiu() {
    var txt=$(" <li id='cur_build'> " +
               " <label for='addr' class='input-tips2'>楼栋号：</label> " +
                "<div class='inputOuter2'>               " +
                "<select type='text' id='build' name='build' maxlength='16' class='inputstyle2'> " + 
                 "   <option>友谊公寓</option> " +
                "</select> " +
                "</div> " +
                "</li>");
    $("#befor_build").after(txt);
}

function addXi() {
    var txt=$(" <li id='cur_build'>    " + 
               " <label for='addr' class='input-tips2'>楼栋号：</label>  " + 
               " <div class='inputOuter2'>" +                
               " <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>" + 
               "     <option value='西八舍'>西八舍</option> " + 
               "     <option value='西二舍'>西二舍</option> " + 
               "     <option value='西九舍'>西九舍</option> " + 
               "     <option value='西六舍'>西六舍</option> " + 
               "     <option value='西七舍'>西七舍</option> " + 
               "     <option value='西三舍'>西三舍</option> " + 
               "     <option value='西十二舍'>西十二舍</option> " + 
               "     <option value='西十六舍'>西十六舍</option>" + 
               "     <option value='西十七舍'>西十七舍</option> " + 
               "     <option value='西十三舍'>西十三舍</option>" + 
               "     <option value='西十四舍'>西十四舍</option>" + 
               "     <option value='西十五舍'>西十五舍</option>" + 
               "     <option value='西十一舍'>西十一舍</option>" + 
               "     <option value='西四舍'>西四舍</option>" + 
               "     <option value='西五舍'>西五舍</option>" + 
               "     <option value='西一舍'>西一舍</option>" + 
               " </select>" + 
               " </div>" + 
               " </li>");
    $("#befor_build").after(txt);
}

function addYun1() {
    var txt=$(" <li id='cur_build'>    " + 
               " <label for='addr' class='input-tips2'>楼栋号：</label>  " + 
               " <div class='inputOuter2'>" +                
               " <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>" + 
               "     <option value='韵苑13栋'>韵苑13栋</option>" +
               "     <option value='韵苑14栋'>韵苑14栋</option>" +
               "     <option value='韵苑15栋'>韵苑15栋</option>" +
               "     <option value='韵苑16栋'>韵苑16栋</option>" +
               "     <option value='韵苑17栋'>韵苑17栋</option>" +
               "     <option value='韵苑18栋'>韵苑18栋</option>" +
               "     <option value='韵苑19栋'>韵苑19栋</option>" +
               "     <option value='韵苑20栋'>韵苑20栋</option>" +
               "     <option value='韵苑21栋'>韵苑21栋</option>" +
               "     <option value='韵苑22栋'>韵苑22栋</option>" +
               "     <option value='韵苑23栋'>韵苑23栋</option>" +
               "     <option value='韵苑24栋'>韵苑24栋</option>" +
               "     <option value='韵苑25栋'>韵苑25栋</option>" +
               "     <option value='韵苑26栋'>韵苑26栋</option>" +
               " </select>" + 
               " </div>" + 
               " </li>");
    $("#befor_build").after(txt);
}

function addYun2() {
    var txt=$(" <li id='cur_build'>    " + 
               " <label for='addr' class='input-tips2'>楼栋号：</label>  " + 
               " <div class='inputOuter2'>" +                
               " <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>" + 
               "     <option value='学苑楼'>学苑楼</option>" + 
               "     <option value='韵苑10栋'>韵苑10栋</option>" + 
               "     <option value='韵苑11栋'>韵苑11栋</option>" + 
               "     <option value='韵苑12栋'>韵苑12栋</option>" + 
               "     <option value='韵苑1栋'>韵苑1栋</option>" + 
               "     <option value='韵苑27栋'>韵苑27栋</option>" + 
               "     <option value='韵苑2栋'>韵苑2栋</option>" + 
               "     <option value='韵苑3栋'>韵苑3栋</option>" + 
               "     <option value='韵苑4栋'>韵苑4栋</option>" + 
               "     <option value='韵苑5栋'>韵苑5栋</option>" + 
               "     <option value='韵苑6栋'>韵苑6栋</option>" + 
               "     <option value='韵苑7栋'>韵苑7栋</option>" + 
               "     <option value='韵苑8栋'>韵苑8栋</option>" + 
               "     <option value='韵苑9栋'>韵苑9栋</option>" + 
               " </select>" + 
               " </div>" + 
               " </li>");
    $("#befor_build").after(txt);
}

function addZi() {
    var txt=$(" <li id='cur_build'>    " + 
               " <label for='addr' class='input-tips2'>楼栋号：</label>  " + 
               " <div class='inputOuter2'>" +                
               " <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>" + 
               "     <option value='紫菘10栋'>紫菘10栋</option> " +
               "     <option value='紫菘11栋'>紫菘11栋</option> " +
               "     <option value='紫菘12栋'>紫菘12栋</option> " +
               "     <option value='紫菘13栋'>紫菘13栋</option> " +
               "     <option value='紫菘14栋'>紫菘14栋</option> " +
               "     <option value='紫菘1栋'>紫菘1栋</option> " +
               "     <option value='紫菘2栋'>紫菘2栋</option> " +
               "     <option value='紫菘3栋'>紫菘3栋</option> " +
               "     <option value='紫菘4栋'>紫菘4栋</option> " +
               "     <option value='紫菘5栋'>紫菘5栋</option> " +
               "     <option value='紫菘6栋'>紫菘6栋</option> " +
               "     <option value='紫菘7栋'>紫菘7栋</option> " +
               "     <option value='紫菘8栋'>紫菘8栋</option> " +
               "     <option value='紫菘9栋'>紫菘9栋</option> " +
               " </select>" + 
               " </div>" + 
               " </li>");
    $("#befor_build").after(txt);
}


$(document).ready(function(){  
	

    $('#area').change(function(){  
        // alert($(this).children('option:selected').val());  
        $('#cur_build').remove();

        if ($(this).children('option:selected').val() == "东区") {
            addDong();
        } else if ($(this).children('option:selected').val() == "留学生公寓") { 
            addLiu();
        } else if ($(this).children('option:selected').val() == "西区") {
            addXi();
        } else if ($(this).children('option:selected').val() == "韵苑二期") {
            addYun1();
        } else if ($(this).children('option:selected').val() == "韵苑一期") {
            addYun2();
        } else if ($(this).children('option:selected').val() == "紫崧") {
            addZi();
        } else {
            addDong();
        }
    });

})  