<!DOCTYPE html>

<html>

<head>
    <!??Á∂≤È?‰ΩøÁî®?ÑÁ∑®Á¢?-->
    <meta charset="utf-8">
    <!???ßÂà∂Á∂≤È?È°ØÁ§∫‰æùÊ?Ë£ùÁΩÆÂ§ßÂ??äÂÄçÁ? -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!?? Ë®≠ÁΩÆ IE ?èË¶Ω?®Á?Ëß???πÂ?  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>?àÈù¢?çÁΩÆ</title>
    <link href="css/music.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <header>
            <div>
                <h1>NNcode</h1>
            </div>
        </header>

        <div class="content">
        
            <div class="table">
                <table>
                    <tr>
                        <th style="border: 0;">#</th>
                        <th>Song</th>
                        <th>artist</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Despacito </td>
                        <td>Luis Fonsi</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>See You Again</td>
                        <td>Wiz Khalifa</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sorry</td>
                        <td>Justin Bieber</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Uptown Funk</td>
                        <td>Mark Ronson</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Shape of You</td>
                        <td>Ed Sheeran</td>
                    </tr>

                </table>
            </div>
            <div class="table">
                <?php
                $db_host = "myfirstdb.cmuovhawvgvz.us-west-2.rds.amazonaws.com:3306";
                $db_user = "php";
                $db_pass = "88888888";
                $db_select = "test";
                $dbconnect = "mysql:host=".$db_host.";dbname=".$db_select;                
                $dbgo = new PDO($dbconnect, $db_user, $db_pass);
                /*echo "Connected Successfully <br>";*/

                $rs = $dbgo -> query("SELECT * FROM english_song;");
                $row= $rs->fetchAll();

                echo "<table>";
                foreach ($row as $datainfo)
                {
                    echo "<tr>";
                    echo "<td>";
                    echo "<a href=".$datainfo['url'].">".$datainfo['song']."</a>";
                    echo "</td>";
                    echo "<td>";
                    echo $datainfo['artist'];
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "Ë≥áÊ?Á∏ΩÁ??∏Ô?".$rs -> rowCount()."<br>";

            ?>
            </div>


        </div>
    </div>


</body>

</html>