<?php
include 'connectBD.php';
?>
<!DOCTYPE html>
<html>

<head>
     <style>
        .testbutton {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border: 3;
        }

        .testbutton {
            background-color: rgb(177, 101, 138);
            color: while;
            text-decoration: dotted;
            border: 2px solid rgb(177, 101, 138);
        }

        .testbutton:hover {
            background-color: rgb(133, 66, 111);
            color: white;
        }

       

        .flatBlue thead {
            background-color: rgb(177, 101, 138);
            border: 3px solid rgb(177, 101, 138);
            color: rgb(177, 101, 138);
        }

        .flatBlue thead tr th {
            /*border-right: 1px solid #0278ae;*/
            border-right: 1px solid rgb(177, 101, 138);
            padding: 9px 20px 9px 10px;
            font-weight: bold;
            font-size: 5em;
            text-shadow: 0 1px 0 rgb(177, 101, 138);
        }

        .flatBlue table>thead>tr>th {
            border: 1px solid rgb(177, 101, 138);
        }

        .flatBlue td {
            padding: 2px 15px 1px 10px;
            border-color: rgb(177, 101, 138);
        }

        .flatBlue tbody td:first-of-type {
            border-left: 2px solid rgb(177, 101, 138);
        }

        

        .flatBlue tbody tr:last-of-type {
            border-bottom: 3px solid rgb(177, 101, 138);
        }

        .flatBlue tbody tr:first-of-type {
            border-top: 3px solid rgb(177, 101, 138);
        }

        .flatBlue tbody tr:hover td {
            background-color: rgb(177, 101, 138);
        }
        table, th, td {
  border: 2px solid rgb(177, 101, 138);
  border-collapse: collapse;
  align-self: center;
  align-content: center;
  align-items: center;}
    </style>
    <link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" href="resume.css" />
   
</head>

<body>
    <div id="doc2" class="yui-t7">
        <div id="inner">

            <div id="hd">
                <div class="yui-gc">
                    <div class="yui-u first">
                        <h1>Admin</h1>
                        <h2>List Of Messages</h2>
                        <br><br>
                    <br>
                    
                    </div>
                   
                    <center><table class='flatBlue' style="position: relative;">
                        <tr>
                            <td>
                            <h2 style="font-family: 'Times New Roman', Times, serif;" ><font color='purple'>Email</font></h2>
                            </td>

                            <td>
                            <h2 style="font-family: 'Times New Roman', Times, serif;" ><font color='purple'>Read ?</font></h2>
                            </td>
                        </tr>
                        <h2 style="font-family: consolas;" >

                        <?php
                        $requete = "SELECT * FROM message";
                        $result = $mysqli->query($requete) or die($mysqli->error());
                        while ($ligne = $result->fetch_assoc()) {
                            echo ' <tr>
                                    <td >' ."<h3 style='font-family: consolas;' >". $ligne["mail"] ."</h3>". '</td>';
                            echo ' <td>' ."<h3 style='font-family: consolas;' >". $ligne["lu"] ."</h3>". '</td>';
                            echo '<td><a href=details.php?id=' . $ligne["id"] . '>Details</a></td>';
                            echo '<td><a href=edit.php?id=' . $ligne["id"] . '>Update</a></td>';
                            echo '<td><a href=supprimer.php?id=' . $ligne["id"] . '>Delete</a></Td></tr>';
                        }
                        echo "</table> </center>";
                        ?>
                </div>
            </div>
            <br>

            <form action="loginadmin.html">
            <center><button class="testbutton" type="submit">
                    Log Out
                </button> </center>
            </form>
            <form action="passwords.php">
            <center> <button class="testbutton" type="submit"> 
                    Passwords
                </button></center>
            </form>
            </form>
            <form action="create.php">
            <center>  <button class="testbutton" type="submit">
                    Sign Up
                </button> </center>
            </form>
</body>

</html>