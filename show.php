<!DOCTYPE html>
<html>

<body>
    <?php
    $name =$_GET["name"];
    $age=$_GET["age"];
    $gender=$_GET["gender"];
    $status=$_GET["status"];
    if ($age < "15" && $gender == "male" && $status == "unmarried"){
        $titaltxt="mstr.";
        $gender = "man";
        $status="unmarry";
    }else if($age > "14" && $gender == "male" && $status == "unmarried"){
        $titaltxt="mr.";
        $gender = "man";
        $status="unmarry";
    }else if($age > "14" && $gender == "male" && $status == "married"){
        $titaltxt="mr.";
        $gender = "man";
        $status="marry";
    }else if($age < "15" && $gender == "male" && $status == "married"){
        $titaltxt="mstr.";
        $gender = "man";
        $status="marry";
    }else if($age < "15" && $gender == "female" && $status == "unmarried"){
        $titaltxt="miss.";
        $gender = "female";
        $status="unmarry";
    }else if($age > "14" && $gender == "female" && $status == "unmarried"){
        $titaltxt="miss.";
        $gender = "female";
        $status="unmarry";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="mrs.";
        $gender = "female";
        $status="marry";
    }else if($age < "15" && $gender == "female" && $status == "married"){
        $titaltxt="miss.";
        $gender = "female";
        $status="marry";
    }
    echo "<font style='font-size:24px'>ข้อมูลของคุณ</font>"."<br>";
    echo "Name:".$titaltxt.$name."<br>";
    echo "Age:".$age."<br>";
    echo "Gender:".$gender."<br>";
    echo "Status:".$status."<br>";
    ?>
</body>

</html>
