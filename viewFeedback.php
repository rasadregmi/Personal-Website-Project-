<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasad Regmi | Database</title>
    <link rel="icon" href="Circle Logo.png">
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        table{
            width: 100%;
            text-align: center;
        }
        th{
            font-family: Impact;
            font-size: 20px;
            text-transform: italic;
        }
    </style>
</head>
<body>
    <table border="2px" cellpadding="20" style="border-collapse:collapse;">
        <tr>
            <th style="border-width:10px">Name</th>
            <th style="border-width:10px">Email</th>
            <th style="border-width:10px">Phone</th>
            <th style="border-width:10px">Message</th>
            <th style="border-width:10px">Action</th>
        </tr>
        <?php
            include 'dbconnect.php';
            $sql="select * from Information";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td style="border-width:10px"> <?php echo $row['Name']?></td>
                        <td style="border-width:10px"> <?php echo $row['Email']?></td>
                        <td style="border-width:10px"> <?php echo $row['Phone']?></td>
                        <td style="border-width:10px"> <?php echo $row['Message']?></td>
                        <td style="border-width:10px">
                            <button style="border:none; border-radius:25px; color:white; background-color:pink; width:100px; height:50px;">
                            <a onclick="return confirm('You really want to delete')"  href="delete.php?Name=<?php echo $row['Name'];?>">Delete</a>                            </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
    <button style="position:relative; top:20px; border:none; border-radius:25px; color:white; background-color:green; width:100px; height:50px;">
        <a href="Feedback.php">Insert records</a>
    </button>
    <button style="position:relative; top:12px; border:none; border-radius:25px; color:white; background-color:red; width:100px; height:50px;">
        
        <a onclick="return confirm('You want to delete all')" href="deleteAll.php">Delete all records</a>
    </button>
</body>
</html>
