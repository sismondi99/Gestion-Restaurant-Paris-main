<?php
require("entete.php");
?>






<body>
    <h1> Rentrez les champs ci dessous, pour inscrire votre restaurant. </h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Entrez le nom du resto.." required="required"><br>
        <input type="text" name="e-mail" placeholder="adresse e-mail.."><br>
        <input type="text" name="codepostal" placeholder="code postal.." required="required"><br>
        <input type="text" name="cuisine" placeholder="cuisine.." required="required"><br>
        <input type="text" name="lien" placeholder="lien.." required="required"><br>
        <input type="text" name="adresse" placeholder="adresse.." required="required"><br>
        <input type="text" name="tel" placeholder="tel.." required="required"><br>
        <input type="text" name="details" placeholder="details.." required="required"><br>
        <input type="text" name="lienfb" placeholder="lien fb.."><br>
        <input type="text" name="lieninsta" placeholder="lien insta.."><br>
        <input type="text" name="lienlkdn" placeholder="lien linkedin.."><br>
        <input type="text" name="lientwitter" placeholder="lien twitter.."><br>
        <input type="file" name="img">
        <input type="submit" name="valider" value="valider">

    </form>

    <?php
    if (isset($_POST['valider'])) {

        extract($_POST);
        $path = "";

        if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
            $sizeMax = 2097152;
            echo '';
            if ($_FILES['img']['size'] <= $sizeMax) {
                //echo 'coucuo12';
                $extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
                if ($extensionUpload == 'jpg' || $extensionUpload == 'png' || $extensionUpload == 'jpeg' || $extensionUpload == 'gif') {
                    $path = "images/" . $nom . "." . $extensionUpload;
                    echo 'coucuo13';
                    $move = move_uploaded_file($_FILES['img']['tmp_name'], $path);
                    if ($move) { } else {
                        $errorphoto = "error";
                        echo "</br>" . "Sorry,Error for importing your photo !";
                    }
                } else {
                    $errorphoto = "error";
                    echo "</br>" . "Sorry,Your picture must be a file .jpg, .png, .jpeg, or .gig !";
                }
            } else {
                $errorphoto = "error";
                echo "</br>" . "Sorry,Your picture mustn't be bigger than 2Mo!";
            }
        }

        if (trim($lienfb) == "") {
            $lienfb = "NULL";
        }

        if (trim($lieninsta) == "") {
            $lieninsta = "NULL";
        }

        if (trim($lienlkdn) == "") {
            $lienlkdn = "NULL";
        }

        if (trim($lientwitter) == "") {
            $lientwitter = "NULL";
        }

        $conn = new mysqli('localhost', 'root', 'aqaq', 'resto');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO restaurant (id, nom, codepostal, cuisine, lien, adresse, tel, details, lienfb, lieninsta, lienlkdn, lientwittter, img) VALUES (NULL, '" . $nom . "', '" . $codepostal . "', '" . $cuisine . "', '" . $lien . "', '" . $adresse . "', '" . $tel . "', '" . $details . "', '" . $lienfb . "', '" . $lieninsta . "','" . $lienlkdn . "', '" . $lientwitter . "' , '" . $path . "')";
        if ($conn->query($sql) === TRUE) {
            echo 'Merci ';
        } else {
            echo $conn->error;
        }
    }


    ?>



</body>


<h4> Une fois avoir valider votre inscription, notre équipe se chargera de vous envoyez un mail de confirmation.
</h4>

</html>