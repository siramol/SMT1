<?php
    function PGM_DatetimeConvert($para)
    {
    $Tmp=explode(" ",$para);
    return PGM_ShowDateReverse_Mysql2($Tmp[0])." เวลา ".$Tmp[1]." น.";
    }

    function PGM_ShowDateReverse_Mysql2($Arg_Date)
    {
    $cTempYear = substr(trim($Arg_Date),0,4)+543;
    $cTempMonth = substr(trim($Arg_Date),5,2);
    $cTempDay = substr(trim($Arg_Date),8,2);
    return $cTempDay." ".PGM_ShowMonthReverse($cTempMonth)." ".$cTempYear; 
    }

    function PGM_ShowMonthReverse($Arg_Month)
    {
    $Month_Return = "";
    switch($Arg_Month)
    {
    case "01" : $Month_Return = "มกราคม";
    break;
    case "02" : $Month_Return = "กุมภาพันธ์";
    break;
    case "03" : $Month_Return = "มีนาคม";
    break;
    case "04" : $Month_Return = "เมษายน";
    break;
    case "05" : $Month_Return = "พฤษภาคม";
    break;
    case "06" : $Month_Return = "มิถุนายน";
    break;
    case "07" : $Month_Return = "กรกฎาคม";
    break;
    case "08" : $Month_Return = "สิงหาคม";
    break;
    case "09" : $Month_Return = "กันยายน";
    break;
    case "10" : $Month_Return = "ตุลาคม";
    break;
    case "11" : $Month_Return = "พฤศจิกายน";
    break;
    case "12" : $Month_Return = "ธันวาคม";
    break;
    default :   $Month_Return = "";
    break;
    }

    if(trim($Month_Return)=="")
    {
    return false; 
    }
    else
    {
    return $Month_Return;
    }
    }

?>