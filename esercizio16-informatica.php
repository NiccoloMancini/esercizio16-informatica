<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <?php
            function stampaTabella($m, $n){ //m = righe, n = colonne
                $table = "<table style='border-collapse:collapse'>";
                for ($i = 1; $i <= $m; $i++){
                    $table .= "<tr>";
                    for ($j = 1; $j <= $n; $j++){
                        $table .= "<td style='border: 1px, solid, black; padding: 10px;'>($i,$j)</td>";
                    }
                    $table .= '</tr>';
                }
                echo $table;
            } 
            stampaTabella(rand(1,10), rand(1,10));
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>