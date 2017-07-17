<?php

include('common/database.php');
echo $query = "DELETE FROM USERS WHERE id=".$_GET['id'];
mysqli_query($connect, $query);
header('Location: all_users.php')
?>