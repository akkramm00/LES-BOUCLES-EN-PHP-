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






?> 
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>