<!DOCTYPE html>
<html>
    <head>
        <title>
            Mon super Tableau
        </title>
    </head>
    <body>
      <h1>Prêt à la banque</h1>
       <form method="post" id="form">
            <input type="text" name="pret" id="pret" value="1" placeholder="Montant du Pret" onchange="testValue()"> euros<br>
            <div id="errorPret" style="display: none; background-color: rgb(247, 129, 159);width:173px">Erreur</div>
            <input type="text" name="mois" id="mois" value="1" placeholder="Nombre de mois souhaité" onchange="testValue()"> mois<br>
            <div id="errorMois" style="display: none; background-color: rgb(247, 129, 159);width:173px">Erreur</div>
            <input type="submit" id="success" value="envoyer" style="width:173px;" disabled>
        </form>
<script>
    var pret = document.getElementById('pret');
    var mois = document.getElementById('mois');
    var errorPret = document.getElementById('errorPret');
    var errorMois = document.getElementById('errorMois');
    var success = document.getElementById('success');
    var from = document.getElementById('form');
    var resultPret;
    var resultMois;
    var array = new Array();
function testValue() {
   if(parseInt(pret.value) > 0 && typeof(parseInt(pret.value)) === 'number'){
       var resultPret = true;
       errorPret.style.display = 'none';
       array.unshift(resultPret);
   }else{
       var resultPret = false;
       errorPret.style.display = 'block';
       array.unshift(resultPret);
   }
     if(parseInt(mois.value) > 0 && typeof(parseInt(mois.value)) === 'number'){
       var resultMois = true;
         errorMois.style.display = 'none';
         array.unshift(resultMois);
   }else{
       var resultMois = false;
       errorMois.style.display = 'block';
       array.unshift(resultMois);
   }
    array.length = 2;
   if(array[0] === true && array[1] === true){
       success.disabled = false
       form.action = "test.php";
   }else{
       success.disabled = true
       form.action = "#";
   }
}
</script>

        </table>
    </body>
</html>
