<?php
require("entete.php");
?>






<form action="" method="post">
    <br>
    <p> Veuillez indiquer le code postal de votre choix : (ex:75004)</p>
    <select name="codepostal">
        <option value="tous">Veuillez selectionner l'arrondissement de votre choix</option>
        <option value="75001">1er arrondissment</option>
        <option value="75002">2nd arrondissment</option>
        <option value="75003">3e arrondissment</option>
        <option value="75004">4e arrondissment</option>
        <option value="75005">5e arrondissment</option>
        <option value="75006">6e arrondissment</option>
        <option value="75007">7e arrondissment</option>
        <option value="75008">8e arrondissment</option>
        <option value="75009">9e arrondissment</option>
        <option value="75010">10e arrondissment</option>
        <option value="75011">11e arrondissment</option>
        <option value="75012">12e arrondissment</option>
        <option value="75013">13e arrondissment</option>
        <option value="75014">14e arrondissment</option>
        <option value="75015">15e arrondissment</option>
        <option value="75016">16e arrondissment</option>
        <option value="75017">17e arrondissment</option>
        <option value="75018">18e arrondissment</option>
        <option value="75019">19e arrondissment</option>
        <option value="75020">20e arrondissment</option>

    </select>
    <!-- <input type="number" name="codepostal" required="required">-->

    <input type="submit" name="filtre1">
</form>


<?php



if (isset($_POST['filtre1']) &&  !empty($_POST['codepostal'])) {

    $codepostal = $_POST['codepostal'];
    $conn = new mysqli('localhost', 'root', 'aqaq', 'resto');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM restaurant WHERE codepostal = '" . $codepostal . "' AND valide = 'oui'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="container center">
                <div class="row">
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><?php echo $row['nom']; ?><br> <?php echo $row['codepostal']; ?>
                        <img class=" imgboxe" src="imgr/newjawad.jpeg" alt="card image"></button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nom']; ?></h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo $row['adresse']; ?> <br>
                            <?php echo $row['tel']; ?><br>
                            <?php echo $row['details']; ?><br>
                            <?php echo $row['lien']; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Closssse</button>
                            <button type="button" class="btn btn-primary" href=<?php echo $row['lien']; ?>>Lien vers le site</button>
                        </div>
                    </div>
                </div>
            </div>


            <br>


        <?php
    }
} else {
    echo " 0 result";
}
$conn = null;
}
if (!isset($_POST['filtre1'])) {


    $conn = new mysqli('localhost', 'root', 'aqaq', 'resto');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM restaurant WHERE valide = 'oui' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>

            <div class="container center">
                <div class="row">
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><?php echo $row['nom']; ?><br> <?php echo $row['codepostal']; ?>
                        <?php
                        $src = "images/" . $row['img']; ?>
                        <img class=" imgboxe" width="200" src="<?php echo $src ?>" alt="card image"></button>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nom']; ?>
                                <img width="50px" src="<?php "images/" ?> ">
                            </h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo $row['adresse']; ?>
                            <?php echo $row['tel']; ?>
                            <?php echo $row['details']; ?>
                            <?php echo $row['lien']; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            <br>


        <?php
    }
} else {
    echo " 0 result";
}
$conn = null;
}


?>