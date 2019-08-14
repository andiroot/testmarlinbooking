<?php
class MarlinBooking
{

public function hitung($bil)
{
    for($i=0;$i<$bil;$i++)
    {
        if($bil%3==0 && $bil%5==0)
        {

            echo "marlin booking\n";
               
        

        //echo "$i :"."marlin booking \n";
        }
        else if($bil%5==0)
        {
            echo "booking\n";
        }
        else if($bil%3==0)
        {
            echo "marlin \n";
        }
    
    }
}





}
echo 'input bilangan :';
$bil = trim(fgets(STDIN));
$h=new MarlinBooking();

$h->hitung($bil);




?>
