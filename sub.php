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
            background-image:url(/task/images/books.jpeg);
            background-repeat:no-repeat;
            background-size:1050px;
        }
        .back{
            background-color:red;
        }
        h1{
            text-align:center;
        }
        div{
            text-align:center;
        }
        #d1{
            width:30%;
            float:left;
        }
        #d2{
            width:40%;
            float:left;
        }
        #d3{
            width:30%;
            float:right;
        }
        h2{
            text-decoration:underline;
            text-decoration:bold;
        }
        table{
            margin:auto;
            border:5px solid black;
        }
        th{
            border:2px solid black;
            background-color:yellow;
        }
        tr{
            background-color:pink;
        }
    </style>
</head>
<body>
    <form action="" method=post>
        <input type="submit" name="back" value="back" class="back" id="">
        <h1>Subjects & Fees</h1>
        <div id="d1">
            <h2>11<sup>th</sup></h2>
            <table>
                <th>Subjects</th>
                <th>fees</th>
                <tr>
                    <td>Physics</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Biology</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Account</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Maths</td>
                    <td>1200 per month</td>
                </tr>
            </table>
            <h2>12<sup>th</sup></h2>
            <table>
                <th>Subjects</th>
                <th>fees</th>
                <tr>
                    <td>Physics</td>
                    <td>1400 per month</td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td>1400 per month</td>
                </tr>
                <tr>
                    <td>Biology</td>
                    <td>1400 per month</td>
                </tr>
                <tr>
                    <td>Account</td>
                    <td>1400 per month</td>
                </tr>
                <tr>
                    <td>Maths</td>
                    <td>1400 per month</td>
                </tr>
            </table>
        </div>
        <div id="d2">
            <h2>Diploma</h2>
            <table>
                <th>Subjects</th>
                <th>fees</th>
                <tr>
                    <td>Computer Graphics</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Database Management System</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Object Oriented Programing in C++</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>C Programing</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Software Testing</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Data Structure using C</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Digital Technique</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Java</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Advance Java Programing</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Data Comunication</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>1200 per month</td>
                </tr>
                <tr>
                    <td> Operating System</td>
                    <td>1200 per month</td>
                </tr>
            </table>
        </div>
        <div id="d3">
            <h2>Computer Courses</h2>
            <table>
                <th>Subjects</th>
                <th>fees</th>
                <tr>
                    <td>MS-CIT</td>
                    <td>2,400 rs.</td>
                </tr>
                <tr>
                    <td>C Programing</td>
                    <td>2,500 rs.</td>
                </tr>
                <tr>
                    <td>C++</td>
                    <td>3000 rs.</td>
                </tr>
                <tr>
                    <td>Web Designing</td>
                    <td>5,500 rs.</td>
                </tr>
                <tr>
                    <td>Java</td>
                    <td>5000 rs.</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>5,500 rs.</td>
                </tr>
                <tr>
                    <td>Oracal</td>
                    <td>4,500 rs.</td>
                </tr>
                <tr>
                    <td>.Net</td>
                    <td>4000 rs.</td>
                </tr>
                <tr>
                    <td>React JS</td>
                    <td>4000 rs.</td>
                </tr>
                <tr>
                    <td>Autocad</td>
                    <td>5000 rs.</td>
                </tr>
                <tr>
                    <td>DTP</td>
                    <td>4,500 rs.</td>
                </tr>
                <tr>
                    <td>Tally</td>
                    <td>4000 rs.</td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>