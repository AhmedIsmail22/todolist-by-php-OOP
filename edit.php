<?php
require_once 'inc/header.php';
require_once 'App.php';
$id = $request->get('id');
if($id){
    $stm = $conn->query("SELECT * FROM todo WHERE id = '$id'");
    $row = $stm->fetch();
    if($stm->rowCount() == 1){
        ?>
            <body class="container w-50 mt-5">
        <form action="handle/edit.php?id=<?=$id?>" method="post">
            <textarea type="text" class="form-control"  name="title" id="" placeholder="enter your note here"><?=$row['title']?></textarea>
            <div class="text-center">
                <input type="submit" name="submit" value="Update" class="form-control text-white bg-info mt-3 " />
            </div>  
    </form>
</body>
</html>
        <?php
    }else {
        $session->set_session("errors", ["this item not exist."]);
        $header->go_to("index.php");
    }
?>

<?php }else {
    $header->go_to("index.php");
}
 ?>