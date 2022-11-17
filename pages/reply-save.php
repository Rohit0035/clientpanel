
<?php
if(isset($_POST['submit'])){
    // $id_i = $_SESSION["user_id"];
    include('config.php');
    $id_i =mysqli_real_escape_string($conn,$_POST['user_id']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
    $class = mysqli_real_escape_string($conn,$_POST['class']);

    $sql = "INSERT INTO `reply`(`c_idi`, `service`, `response`) VALUES ('{$id_i}','{$class}','{$note}')";
    if($conn->query($sql)){
        ?>
        <script>window.location.href='replylist.php'</script>
        <?php
        }} 
?>

  