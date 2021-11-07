<!DOCTYPE html>
<html>
<head>
    <title>Aso Ezat Abdulla - 1st Assignment</title>
    <style>
        .divTable
        {
            border: 2px solid black;
            text-align: center;
            font-size: 30px;
            display: inline-block;
        }
        .divData1, .divData2
        {
            border: 2px solid black;
            height: 60px;
            width: 60px;
            display: inline-block;
            display: table-cell;
            vertical-align: middle;

        }
        .divData1
        {
            background-color: white;
        }
        .divData2
        {
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="divTable">
        <?php
        for($i = 8; $i > 0; $i--)
        {
            echo "<div>";
            $txt = 'a';
            for($j = 0; $j <= 7; $j++)
            {
                $z = $i + $j;
                if($z %2 == 0)
                {
                    echo "<div class=\"divData1\"> $txt$i </div>";
                }
                else
                {
                    echo "<div class=\"divData2\"> $txt$i </div>";
                }
                $txt++;
            }   
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>