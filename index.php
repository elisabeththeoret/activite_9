<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activité 9 | Elisabeth Theoret</title>
    <style>
        table, tr, td{border: 1px solid #000000; border-collapse: collapse; padding: 5px 10px;}
        td{min-width: 80px;}
    </style>
</head>
<body>
    <?php
        $suites = ["Carreau", "Trèfle", "Coeur", "Pique"];
        $nombres = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

// etape 1
        $cartes = [];
        foreach($nombres as $n)
        {
            foreach($suites as $s)
            {
                $cartes[] = $n . "-" . $s;
            }
        }

// etape 2
        $var = count($cartes) / 2;
        $sousPaquet1 = array_slice($cartes, 0, $var);
        $sousPaquet2 = array_slice($cartes, $var);

        $cartesBrassees = [];
        for($i = 0; $i < $var; $i++)
        {
            $cartesBrassees[] = $sousPaquet1[$i];
            $cartesBrassees[] = $sousPaquet2[$i];
        }

// etape 3
        $tableHTML = "<table>";
        for($i = 0; $i < 4; $i++)
        {
            $tableHTML .= "<tr>";
            $case = $i * 13;
            $casemax = $case + 13;
            for($j = $case; $j < $casemax; $j++)
            {
                $tableHTML .= "<td>" . $cartesBrassees[$j] . "</td>";
            }
            $tableHTML .= "</tr>";
        }
        $tableHTML .= "</table>";
        echo $tableHTML;
    ?>
</body>
</html>

