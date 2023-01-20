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
        $gender = "male";
        $status="unmarried";
    }else if($age > "14" && $gender == "male" && $status == "unmarried"){
        $titaltxt="mr.";
        $gender = "man";
        $status="unmarried";
    }else if($age > "14" && $gender == "male" && $status == "married"){
        $titaltxt="mr.";
        $gender = "male";
        $status="married";
    }else if($age < "15" && $gender == "male" && $status == "married"){
        $titaltxt="mstr.";
        $gender = "male";
        $status="married";
    }else if($age < "15" && $gender == "female" && $status == "unmarried"){
        $titaltxt="miss.";
        $gender = "female";
        $status="unmarried";
    }else if($age > "14" && $gender == "female" && $status == "unmarried"){
        $titaltxt="miss.";
        $gender = "female";
        $status="unmarried";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="mrs.";
        $gender = "female";
        $status="married";
    }else if($age < "15" && $gender == "female" && $status == "married"){
        $titaltxt="miss.";
        $gender = "female";
        $status="married";
    }
    echo "<font style='font-size:24px'>ข้อมูลของคุณ</font>"."<br>";
    echo "Name:".$titaltxt.$name."<br>";
    echo "Age:".$age."<br>";
    echo "Gender:".$gender."<br>";
    echo "Status:".$status."<br>";
    ?>
</body>

</html>
