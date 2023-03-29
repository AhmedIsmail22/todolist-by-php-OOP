<?php


require_once '../App.php';

$id = $request->get("id");

if($id){
    $stm = $conn->query("SELECT * FROM todo WHERE id = '$id'");
        $row = $stm->fetch();
        if($stm->rowCount() == 1){
            $status = $row['status'];
            $title = $row['title'];
            if($status == "todo"){
                $stm = $conn->prepare("UPDATE todo SET `status`= 'doing' where id = :id");
                $stm->bindParam(":id", $id);
                $result = $stm->execute();
                if($result){
                    $session->set_Session("success", ["$title are doing"]);
                    $header->go_to("../index.php");
                }else {
                    $session->set_Session("errors", ["$title still todo"]);
                    $header->go_to("../index.php");
                }
            }elseif($status == "doing") {
                $stm = $conn->prepare("UPDATE todo SET `status`= 'done' where id = :id");
                $stm->bindParam(":id", $id);
                $result = $stm->execute();
                if($result){
                    $session->set_Session("success", ["$title are done"]);
                    $header->go_to("../index.php");
                }else {
                    $session->set_Session("errors", ["$title still doing"]);
                    $header->go_to("../index.php");
                }
            }
        }else {
            $session->set_session("errors", ["This Item no texist."]);
            $header->go_to("../index.php");
        }
}else {
    echo "no";
}