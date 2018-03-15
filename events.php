<?php
include("config.php");
   session_start();
///$result1 = $db->query("SELECT * FROM eventname WHERE isactive=1");
///$outp['eventname'] = $result1->fetch_all(MYSQLI_ASSOC);
///$result2 = $db->query("SELECT en.eventname,ei.* FROM eventimage ei inner join eventname en on en.eventnameid=ei.eventnameid  WHERE en.isactive=1 and ei.isactive=1 order by seqno");
///$outp['eventimage'] = $result2->fetch_all(MYSQLI_ASSOC);
///echo json_encode($outp);



$fetch1 = mysqli_query($db, "SELECT * FROM eventname WHERE isactive=1");
$fetch2 = mysqli_query($db, "SELECT en.eventname,ei.* FROM eventimage ei inner join eventname en on en.eventnameid=ei.eventnameid  WHERE en.isactive=1 and ei.isactive=1 order by seqno");
$array1 = array();
$array2 = array();
while($row = mysqli_fetch_assoc($fetch1)){
    $array1[] = $row;
}
while($row = mysqli_fetch_assoc($fetch2)){
    $array2[] = $row;
}
$outp['eventname']=utf8ize($array1);
$outp['eventimage']=utf8ize($array2);
echo json_encode($outp);
//echo json_encode(utf8ize($array2));

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

?>
