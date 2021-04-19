<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>

<body>
    hello
    <?php
    echo ("world");
    echo ('<h1>bonjour</h1>');
    ?>
    <div class="blala">yo</div>
    <?php echo ("bkelelbelbebel");
    echo 'prout';

    $maVariable = 123;
    $maVar3 = 658965.5852;
    $maVar1 = "ergergerg $maVariable";
    $maVar2 = false;
    $maVar4 = true;

    echo gettype($maVar3);
    echo '<br>';
    echo 'zefrzer' . 'zer';
    echo '<br>';
    $prenom1 = 'bob';
    $prenom2 = 'claire';
    echo $prenom1 . $prenom2;
    echo '<br>';
    $prenom1 .= 'claire';
    echo $prenom1;
    echo '<br>';
    echo 'aurjoud\'hui';
    echo "aurjoud'hui";
    echo '<br>';
    echo 'aujourd\'hui ' . $prenom2 . ' est parti faire les courses';
    echo '<br>';
    echo "aujourd'hui $prenom2 est parti faire les course";

    $maVar5 = 'unechainedecaractere';
    $maVar5 = 472;
    echo $maVar5;
    //variable constante
    define("MAVARCONST", "ezeze");
    echo MAVARCONST;
    echo '<br>';
    $a = 10;
    $b = 2;
    echo $a + $b;
    echo '<br>';
    echo $a % $b;
    echo '<br>';
    echo $a++;
    echo '<br>';
    echo $a--;
    echo '<br>';
    //conditions
    if ($a > $b) {
        echo 'youpi';
    } elseif ($b > $a) {
        echo 'zertfe';
    } else {
        echo 'zefdze';
    }
    echo '<br>';
    $c = false;
    if (!$c) {
        echo 'conditons directes';
        echo 'instructions';
    }
    echo '<br>';
    if (!$c) echo 'conditions directes'; //valables pour une instructions
    echo 'zaeze';
    echo '<br>';
    $var1 = 0;
    $var2 = "";

    if (empty($var1)) echo '0, vide, NULL, false ou non défini'; // determine si il est vide
    echo '<br>';
    if (empty($var2)) echo '0, vide, NULL, false ou non défini';
    echo '<br>';
    if (isset($var2)) echo '$var2 existe et est non NULL'; //determine si il existe
    echo '<br>';

    $couleur = "jaune";

    switch ($couleur) {
        case 'verte':
            echo 'elle est verte';
            break;
        case 'jaune':
            echo 'elle est jaune';
            break;

        default:
            echo "elle n'est pas dans les choix";
            break;
    }
    echo '<br>';

    // fonctions prédefini php.net
    $email = "mathieuthoumire@hotmail.fr";
    echo strpos($email, '@');
    echo '<br>';
    var_dump(strpos($email, '@'));
    echo '<br>';
    if (!strpos($email, '@')) echo "vous avez oubliez l'@";
    echo '<br>';
    echo strlen($email);
    var_dump(strlen($email));
    echo '<br>';
    $chaine = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quas explicabo voluptatibus error magnam? Voluptatum tempora quibusdam unde assumenda voluptate neque! Ipsum non laborum veritatis debitis exercitationem ut blanditiis dignissimos!';
    echo substr($chaine, 0, 30) . "...<a href='#'> lire la suite</a>";
    echo '<br>';
    echo str_replace("consectetur", "bob", $chaine);
    echo '<br>';
    echo strtolower($chaine);
    echo strtoupper($chaine);
    echo '<br>';
    $tag = "<h1>Hello World</h1>";
    echo $tag;
    echo strip_tags($tag);
    echo '<br>';
    //declaration de fonction
    function separateur()
    {
        echo "<br>";
    }
    //appeler fonction
    separateur();
    $a = "ertreterert";


    function prenom(string $prenom, int $age = 18)
    {
        return $prenom . " age : $age";
        echo 'et moi alors'; // ne s'affiche pas => break au return;
    }
    echo prenom('bob', 45);
    echo '<br>';
    // echo prenom(45, 'zere');
    echo '<br>';
    // settype($num, "int");
    //porté 
    $glob = "zezerzerz";
    function testGlob()
    {
        global $glob;
        echo $glob;
    }
    testGlob();

    //boucles
    $i = 0;
    while ($i < 6) {
        echo $i;
        echo "<br>";
        $i++;
    };
    ?>
    // exercice créer un select qui permetra a mon utilisateur de selectionner une date entre
    // 1980 && 2020


    <select name="date" id="date-seclect">
        <option value="">Choisir une date entre </option>
        <?php
        $valeur1 = 1900;
        while ($valeur1 <= 2020 && $valeur1 <= 1980) {
            echo "<option >$valeur1</option>";
            $valeur1++;
        }
        ?>
    </select>
    <br>


    <?php
    $i = 1980;
    echo "<select>";
    while ($i >= 1980 && $i <= 2020) {
        echo "<option value='$i'>$i</option>";
        echo "date" . $i;
        $i++;
    }
    echo "<select>";
    echo "<br>";
    echo "<select>";
    for ($i = 1980; $i <= 2020; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    echo "<select>";
    echo "<br>";

    // boucle do while
    do {
        echo "ma boucle est activée...";
    } while (false);

    $i = 1980;
    echo "<select>";
    do {
        echo "<option value='$i'>$i</option>";
        $i++;
    } while ($i >= 1980 && $i <= 2020);
    echo "</select>";

    echo "<br>";

    $monTab = array("un", "deux", "trois");
    $monTab2 = ["azerty", "qwerty", "bepo"];
    $monTab[] = "quatre";
    var_dump($monTab);
    var_dump($monTab2);
    // afficher le tableau

    echo "<pre>";
    print_r($monTab);
    echo "<pre>";

    //ajouter une entre 3 dans mon tab
    $monTab2[0] = "azerty";
    $monTab2[2] = "qwerty";
    $monTab2[0] = "bepo";
    var_dump($monTab2);

    //tableau associatif
    $tbColor = array("j" => "jaune", "b" => "bleu", "r" => "rouge");
    echo $tbColor["b"];
    // utiliser la taille (nre d'element d'un tableau)
    $taille = count($tbColor); // ou sizeof($tbColor)
    echo "<br>";
    echo $taille;


    $chaine = implode("-", [$couleur]);
    echo $chaine . '<br>';

    $tab = explode("-", $chaine);
    print_r($tab);

    //boucle foreach
    foreach ($tab as $value) {
        echo $value . "<br>";
    }
    //foreach+clés ;
    foreach ($tab as $key => $value) {
        echo $value . " $key" . "<br>";
    }
    //foreach sur tableau associatif
    $couleur = array('j' => 'jaune', 'b' => 'bleu', 'r' => 'red');
    foreach ($couleur as $indice => $value) {
        echo $value . " $indice" . "<br>";
    }

    // tableau multidimensionel
    $tab_multi = array(
        array(
            'prenom' => 'julien',
            'nom' => 'Machin',
            'tel' => '0606060606'
        ),
        array(
            'prenom' => 'Pierre',
            'nom' => 'bidul',
            'tel' => '0606060606'
        ),
        array(
            'prenom' => 'Paul',
            'nom' => 'Bismut',
            'tel' => '0606060606'
        )
    );
    echo $tab_multi[1]['prenom'] . "<br>";
    echo '<br>';

    //exercice affichez tout les noms du tableau multidimensionnel
    $i = 0;

    while ($i < sizeof($tab_multi)) { // sizeof retourne 3 donc < et pas <= trou de bal 
        echo $tab_multi[$i]['nom'] . "<br>";
        $i++;
    }

    // inclusion de fichiers

    include_once('./inc/exemple.inc.php');
    include('./inc/exemple.inc.php');

    // fatal error si pas pu chargé => non permissif
    require('./inc/exemple.inc.php');
    require_once('./inc/exemple.inc.php');





    ?>

</body>

</html>