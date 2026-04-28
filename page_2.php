<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Killing quest</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="div_with_promokod_text">
        <div class="div_vith_texts_on_spg">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dicta, rem fuga sint ad ipsam autem reprehenderit laborum? Hic accusantium eligendi magnam numquam harum corporis ad sed adipisci, dicta in!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dicta, rem fuga sint ad ipsam autem reprehenderit laborum? Hic accusantium eligendi magnam numquam harum corporis ad sed adipisci, dicta in!
            </p>
            <p>
                tap button below to see your code 
            </p>
        </div>
        <form action="page_2.php" method="post">
            <input type="hidden" name="sucurity_check" value="on_p2_page">
            <input class="see_the_code_button" type="submit" value="see the code >">
        </form>
        <p>
            <?php
            $secuty_connection = $_POST["sucurity_check"];
            if($secuty_connection == "on_p2_page"){
                echo("code: arb1r46eb14r1b41rb1");
            };
            ?>
        </p>
    </div>

    
</body>
</html>
