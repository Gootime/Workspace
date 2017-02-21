<?php
  $pret = intval($_POST['pret']);
  $mois = intval($_POST['mois']);
 ?>
 <table border="1">
    <tr>
        <th></th>
        <th>Prix de la mensualité</th>
        <th>Reste a payer</th>
    </tr>
<?php
$reste = $pret;
for($x=1;$x<$mois+1;$x++){
 ?>
    <tr>
        <th>Mensualité <?=$x;?></th>
        <td> <?=round($pret / $mois,2) ." €";?> </td>
        <td>
            <?php
            $resteLast = $reste;
              $reste = $reste - round($pret / $mois,2);
              if($reste > 0){
              echo $reste." €";
            }else{
              echo "0 €";
            }
            ?>
        </td>
    </tr>
<?php
}
 ?>
 </table>
