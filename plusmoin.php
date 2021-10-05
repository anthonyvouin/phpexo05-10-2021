<?php 


$number = rand(0, 100);



function devineMonChiffre($vie, $number)
{
    $keypress = -1;
    
    while ( $vie > -1 && $keypress !== $number)
    {
        
        $keypress = readline("Merci de rentrer une valeur");
        if($vie > -1) {
        if ($keypress < $number )
        {
            echo'cest plus '.PHP_EOL;
            echo"Tu as $vie vie".PHP_EOL;
            $vie--;

        }
        
        else if ( $keypress > $number )
        {
            echo'cest moin '.PHP_EOL;
            echo"Tu as $vie vie" .PHP_EOL;
            $vie--;
        }
        
        if ( $keypress == $number )
        {
            echo'Vous avez gagné ';
            die;
        }
      }

    }
    echo "Tes mauvais Jack";
}



   devineMonChiffre($argv[1], $number);
