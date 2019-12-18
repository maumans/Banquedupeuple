<?php
    include("header.php");
    ?>

<nav class="nav nav-pills nav-justified pt-3 container">
        <a class="nav-item nav-link <?=active("suppression")?>"  href="suppression.php">Client</a>
        <a class="nav-item nav-link <?=active("suppressionCompte")?>"  href="suppressionCompte.php">Compte</a>
</nav>
    <div class="container">
        <div class="row">
            <div class="input-group offset-md-3 col-md-6 mt-3">
                <input type="text" class="form-control" id="myInput" placeholder="recherche">
                <div class="input-group-prepend">
                    <button class="btn btn-success">Recherche</button>
                </div>
                
                


            </div>


        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-4 panel">
                <div class="panel-head">

                </div>

                <div class="panel-body">
                    <table class="table table-dark table-hover table-striped text-justified">
                        <thead>
                            <tr class="">
                                <th>Numero de Compte</th>
                                <th>Montant</th>
                                <th>ID du CLIENT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php
                                $afficheC=afficherCompte();
                                foreach($afficheC as $c)
                                {
                            
                            ?>
                                <tr>
                                    <td><?=$c[0]?></td>
                                    <td><?=strtoupper($c[1])?></td>
                                    <td><?=strtolower($c[2])?></td>
                                    <td><a href="../Model/supprimerCompte.php?id=<?=$c[0]?>"><button class="btn btn-light fa fa-trash"></button></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>

                
            </div>

        </div>

    </div>
    

    
<?php
    include("footer.php");

?>