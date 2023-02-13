<html>
    <head>
        <title>A000124 of Sloane’s OEIS - MR Wiguna</title>
    </head>
    <body>
        <?php
        if(isset($_GET['num_pengulangan'])){
            $num_pengulangan = $_GET['num_pengulangan'];
            if($num_pengulangan == ""){

                echo "jangan kosong kaka";
            }else{

                for($i = 0; $i < $num_pengulangan; $i++){
                    if($i != 0){
                        echo "-";
                        $number += $i;
                    }else{
                        $number = 1;
                    }
                    echo $number;
                }
            }
        }?>

        <form action="./" method="get">
            <input type="number" name="num_pengulangan">
            <button type="submit">Hitung</button>
        </form>
    </body>
</html>