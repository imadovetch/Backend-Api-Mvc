<?php
include "C:/xampp/htdocs/Survey-Corps_Blog/Back_end/start/models/ModelUsers.php";
if($_SERVER['REQUEST_METHOD'] === "PUT"){
    if(empty($this->others)){
        http_response_code(301);
     echo json_encode(["message" => "nothing specifiyed"]);
    }else{
        if ($data !== null) {
            // add filter later
            var_dump($data);
            echo $this->senderid; // hna ghanzid check dyal permision 
            $Users->Update("Utilisateurs", $data,"id_user = {$this->others[0]}");
        } else {
            echo "Failed to decode JSON data";
        }
    }
}else{
    echo "no perm";
}


?>