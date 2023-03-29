<?php


require_once '../App.php';

    $submit = $request->post("submit");
    $id = $request->get("id");
    $title = $request->post("title");
    if($submit && $id && $title){
        
        $stm = $conn->query("SELECT * FROM todo WHERE id = '$id'");
        $row = $stm->fetch();
        if($stm->rowCount() == 1){
                echo $submit;
            $stm = $conn->prepare("UPDATE todo SET `title`= :title where id = :id");
            $stm->bindParam(":title", $title);
            $stm->bindParam(":id", $id);
            $result = $stm->execute();
            if($result){
                $session->set_session("success", ["update is successed."]);
                $header->go_to("../index.php");
            }else {
                echo "no update";
            }
        }
    }else {
        $header->go_to("../edit.php?id=$id");
    }