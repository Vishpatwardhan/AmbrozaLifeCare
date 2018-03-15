<?php
include("config.php");
   session_start();
//$result1 = $db->query("SELECT * FROM distributor WHERE isactive=1 order by distname");
//$outp['distributor'] = $result1->fetch_all(MYSQLI_ASSOC);
//echo json_encode($outp);
$fetch1 = mysqli_query($db, "SELECT * FROM distributor WHERE isactive=1 order by distname");
$array = array();
while($row = mysqli_fetch_assoc($fetch1)){
    $array[] = $row;
}

echo json_encode(utf8ize($array));
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


