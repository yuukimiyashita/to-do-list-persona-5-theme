<?php
    include('connection.php');

    $query = "SELECT * FROM remember_me";
    $result = mysqli_query($mysqli, $query);

?>


<html>

<head>
    <title>List Page</title>
    <link rel="stylesheet" type="text/css" href="config.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="h1">Need something to remind you ?</h1>
        <h2 class="h2">That's why I'm here</h2>
        <div class="panel-input">

            <form method="post">

                <input id="input" name="remember" type="text">


                <div class="button">
                    <a onclick="getInput()"><span><button name="send" class="ddd">Save this for me !</button></span></a>

                </div>

            </form>

        </div>
        <div class="footer">
            <img class="logo" src="images/logo.png">
        </div>
    </div>

    

    <table >
        <tr class="table-title">
            <td>Missed Something? Check here</td>             
        </tr>

        <tr>
        <?php
                while($row = mysqli_fetch_assoc($result))
                {
        ?>
            <td class="table-list"><?php echo $row['remember']; ?></td>
                
        </tr>

        <?php
            }
        ?>


       



    </table>


</body>

</html>