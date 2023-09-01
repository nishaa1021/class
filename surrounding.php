<?php
if(isset($_POST['back']))
{
    header("location:/task/task.php");
}
?>
<html>
<head>
    <style>
        body{
            background-image:url(/task/images/background2.jpg);
            background-repeat:no-repeat;
            background-size:1050px;
        }
        #btn{
            background-color:red;
        }
        h1{
            text-align:center;
        }
        div{
            margin:auto;
            text-align:center;
        }
        img{
            height:150px;
            width:150px;
        }
        img:hover{
            transform:scale(1.5);
            transition:0.5s;
        }
        #d1{
            width:50%;
            float:left;
        }
        #d2{
            width:50%;
            float:right;
        }
    </style>
</head>
<body>
    <form action="" method=post>
        <input type="submit" name="back" id="btn" value="back">
        <h1>Surrounding of class</h1>
        <div id="d1"> 
            <h2>classrooms</h2>
            <img src="/task/images/classroom1.jpg" alt=""><br><br>
            <img src="/task/images/classroom2.avif" alt="">
        </div>
        <div id="d2">
        <h2>parking</h2>
            <h3>cycle parking</h3>
            <img src="/task/images/parking1.jpg" alt="">
            <h3>2 wheelers parking</h3>
            <img src="/task/images/parking2.jpg" alt="">
            <h3>4 wheelers parking</h3>
            <img src="/task/images/parking3.jpg" alt="">
        </div>
    </form>
</body>
</html>