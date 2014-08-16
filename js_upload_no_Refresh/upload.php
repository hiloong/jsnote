<?php

if ($_FILES["file"]["error"] > 0) {
    echo "<script>  top.up_state('错误的信息是" . addslashes($_FILES["file"]["error"]) . "', 0);  </script>";
} else {
    echo "<script>  top.up_state('存储的位置是 " . addslashes($_FILES["file"]["tmp_name"]) . "', 1);  </script>";
}



