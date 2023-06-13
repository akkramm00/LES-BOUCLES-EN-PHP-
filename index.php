<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

// Le PHP contient des opérateurs qui permettent de faire de lk'incrémentation "++"  et de la décrémentation "--",
// ces deux opérateurs  permettent de lire ,ainsi que de mettre a jour les variables ,selon leur postion :
//=====> si l'opérateur est placé devant le variable ce dernier est d'abord mis a jour puis lue ,
// ====> si l'opératuer est mis aprés la variable ,dans ce cas ce dernier sera lue puyis aprés mis a jour ;
// EXAMPLE ++> /
$var = 5 ;
echo $var++ . "<br>"; # affiche 5 puios incrémente $var de 1;
echo $var--. "<br>";#affioche la $var puis il l'affiche a 6
echo ++$var ."<br>"; # incrémente d'abord la variable puyis aprés il l'affiche a 7;
echo --$var ."<br>";# décrémente la $var ,puyis il l'affiche à 6;


// les tableaux Comme objet itérable :
# Il arrive trés souvent en programmation que les données constituent des ensembles :par exemple une liste de température, un tableau de npotes, une file d'attente,ect.
#Ces données sont appelées à etre traitées par des programmes automzatisés?en effectuant un traitement spécifique sur chauqe élément de l'ensemn^ble. L'ensemble doit etre parcouru, élément par élément, et le traitement spécifique doit etre repeté pour chaque élément . En informatique ,nous utilisons le térùe "itération" pour signifier ces répititions.Dr meme ,nous utilisons le verbe 'itérer' ,synonyme de répéter.Enfin ,un objet "itérable" est un ensemble de données qui peut etre "itéré" ,c'est à dire parcouru élément par élément en effectuant à chaque fois le méme traitement spécifiqueDans le langage PHP, la structure de données de base qui permet ces itérations est le tableau Un tableau est une suite ordonnée d'éléments,qui possèdent chacun une valeur .

// LES BOUCLES "foreach" :
# Pour itérer sur un tableau ,nous utiliserons la boucle "foreach" , traduit littéralement par " pour chaque".

// la manière longue :
$tab = ['a', 'b', 'c', 'd', 'e'];// c'est un tableau a 5element.
foreach($tab as $pos => $val) {
  echo $pos,':' ,$val ,"<br>";# initialisation de la boucle.
}
echo "<br>";
// La manière courte :
$tab = ['a', 'b', 'c', 'd', 'e'];
foreach($tab as $val){
  echo  $val, "<br>";
}

// Un tableau avec des nombres :
$nunbers = [1, 2, 3, 4, 5];
$somme = 0;

foreach($numbers as $pos => $val) {
  $somme += $val;
}
echo $somme."<br>";



?> 
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>