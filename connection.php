
<?php
 
    $con=mysqli_connect('localhost','root','','santepharma');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
?>