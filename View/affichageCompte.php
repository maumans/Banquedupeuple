<?php
    include("header.php");
    ?>
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
            <div class=" offset-md-3 col-md-6 mt-4 panel">
                <div class="panel-head">

                </div>

                <div class="panel-body">
                            <?php
                                $idC=$_GET['id'];
                                $ca=afficherClientS($idC);
                                foreach($ca as $c)
                                {

                            ?>
                                <h3 class="text-center text-justified text-light">
                                    Compte de <?=strtolower($c[2])?> <?=strtoupper($c[1])?>
                                </h3>
                            <?php
                                }
                            ?>  
                    <table class="table table-dark table-hover table-striped text-justified rounded mt-4" id="myTable">
                        <thead>
                            
                        <thead>
                    
                                <th>ID</th>
                                <th>SOLDE</th>
                                <th>ID CLIENT</th>

                            </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php
                
                                $da=afficherCompteS($idC);
                                foreach($da as $c)
                                {

                            ?>
                                <tr>
                                    <td><?=$c[0]?></td>
                                    <td><?=strtoupper($c[1])?></td>
                                    <td><?=strtolower($c[2])?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
                <div class="mt-4">
                <a href="affichage.php"><button class="btn btn-dark"><span class="fa fa-chevron-circle-left btn-lg"></span></button></a>
                </div>

                
            </div>

        </div>

    </div>
    

    
<?php
    include("footer.php");

?>