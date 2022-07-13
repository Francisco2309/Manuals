<?php 

function delete($tblname,$field_id,$id){
    $sql = "delete from ".$tblname." where ".$field_id."=".$id."";
    return db_query($sql);
}

?>