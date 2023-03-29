<?php

require '../App.php';


if($request->hasPost($request->post("submit"))){
    $title = $request->clean($request->post('title'));
    $validation->validate("title", $title, ["Required", "Str", "Len_of_string"]);
    $errors = $validation->get_errors();
    if($errors){
            $session->set_session("errors", $errors);
            $header->go_to("../index.php");
    }else {
        $stm = $conn->prepare("INSERT INTO todo (title) VALUES (:title)");
        $stm->bindParam(":title", $title);
        $out = $stm->execute();
        if($out){
            $session->set_session("success", ["Data is Inserted."]);
            $header->go_to("../index.php");
        }else {
            $session->set_session("errors", ["insert is failed."]);
            $header->go_to("../index.php");
        }

    }
}else {
    $header->go_to("../index.php");
}

