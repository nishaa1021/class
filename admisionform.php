<?php
    $host='localhost:3306';
    $user='root';
    $pass='';
    $db='admisionnisha';
    $con=mysqli_connect($host,$user,$pass,$db);
    if(!$con)
    {
        die ("could not connect".mysqli_error());
    }
    echo"you are successfully connected";

    if(isset($_POST['save']))
    {
        echo "hello";
        $name1=$_POST['t1'];
        $age1=$_POST['t2'];
        $gender1=$_POST['t3'];
        $birthdate1=$_POST['t4'];
        $contact1=$_POST['t5'];
        $email1=$_POST['t6'];
        $address1=$_POST['t7'];

        $sql="INSERT INTO admisionform VALUES('$name1','$age1','$gender1','$birthdate1','$contact1','$email1','$address1')";

        mysqli_query($con,$sql);
        echo"record saved";
    }
    if(isset($_POST['back']))
    {
        header("location:/task/task.php");
    }
?>
<html>
    <head>
        <style>
            body{
                background-image:url(/task/images/background1.webp);
                background-repeat:no-repeat;
                background-size:1500px;
            }
            .back{
                background-color:red;
            }
            div{
                margin:auto;
                height:500px;
                width:400px;
                margin-top:100px;
                text-align:center;
            }
            input{
                background:transparent;
                border:2px solid black;
            }
            table{
                margin:auto;
                height:350px;
                width:300px;
            }
            td{
               color:yellow;
               font-size:20px;
            }
            ::placeholder{
                color:black;
            }
            h2{
                font-size:50px;
                color:white;
            }
            .btn{
                height:30px;
                width:100px;
                background:transparent;
                color:yellow;
                margin:5px;
            }
            .btn:hover{
                height:35px;
                width:105px;
                background:skyblue; 
                color:blue;
            }
        </style>
    </head>
    <body>
        <form action="" method=post>
        <input type="submit" id="" value="back" name="back" class="back">
            <div>
                <h2>Admision Form</h2>
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="t1" id=""></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input type="text" name="t2" id=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Gender:</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="male/female" name="t3" id=""></td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td><input type="text" name="t4" id=""></td>
                    </tr>
                    <tr>
                        <td>Contact no.:</td>
                        <td><input type="text" name="t5" id=""></td>
                    </tr>
                    <tr>
                        <td>Email id:</td>
                        <td><input type="text" name="t6" id=""></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="t7" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="save" id="" value="submit" class="btn">
                        <input type="reset" name="clear" id="" value="clear" class="btn"></td>
                    </tr>
                </table>
                
            </div>
        </form>
    </body>
</html>