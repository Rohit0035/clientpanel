
<?php
    if(isset($_POST['submit'])){
        // $id_i = $_SESSION["user_id"];
        include('config.php');
        $id_i =mysqli_real_escape_string($conn,$_POST['user_id']);
        $stu_ename =mysqli_real_escape_string($conn,$_POST['class']);
        $note = mysqli_real_escape_string($conn,$_POST['note']);
        $reivew = mysqli_real_escape_string($conn,$_POST['q1']);
        $sql = "INSERT INTO `reviews`(`send_id`, `service`, `review`, `feedback`) VALUES ('{$id_i}','{$stu_ename}','{$reivew}','{$note}')";
        if($conn->query($sql)){
            ?>
            <script>window.location.href='feedback.php'</script>
            <?php
            }} 
    ?>
    
      