    <?php
    $num = @$_GET['no'];
    oddoreven($num);
    function oddoreven($num){
        if ($num / 2 == 0){
            echo "<span style=color:red;>เลขคู่";
        }
        else{
            echo "<span style=color:blue;>เลขคี่";
        }
    }
    ?>