<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Styles/style.css">
    <title>T6-120140080</title>
</head>
<body>
    <header>
        <div class="jumbotron">
            <h1>Praktikum 6</h1>
            <p>Int to Roman Converter</p>
        </div>
    </header>
    <main>
        <div class="box-input">
            <form action="." method="get">
                <label for="input-angka">
                    <input type="number" name="angka" id="angka" placeholder="Input numbers">
                </label>
                <br>
                <input type="submit" value="CONVERT" id="button">
            </form>
        </div>
        <p>RESULT</p>
        <div class="result">
            <?php
                $angka = $_GET['angka'];
                $result = '';
                $romMaping = array( 'M' => 1000,
                                    'CM' => 900,
                                    'D' => 500,
                                    'CD' => 400,
                                    'C' => 100,
                                    'XC' => 90,
                                    'L' => 50,
                                    'XL' => 40,
                                    'X' => 10,
                                    'IX' => 9,
                                    'V' => 5,
                                    'IV' => 4,
                                    'I' => 1 
                                 );
                if ($angka != ''){
                    if ($angka >= 1 and $angka <= 3999){
                        while ($angka > 0){
                            foreach($romMaping as $roman => $number){
                                if ($angka >= $number){
                                    $angka -= $number;
                                    $result .= $roman;
                                    break;
                                }
                            }
                        }
                        echo '<p>'.$result.'</p>';
                    } else {
                        $result = 'Numbers only around 1 - 3999!';
                        echo '<p>'.$result.'</p>';
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>