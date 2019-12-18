<?php
    include("header.php");

    

    if(isset($_POST["valider"]) && !empty($_POST['compte']) && $_POST['index']!="")
    {
        $solde=htmlspecialchars($_POST['compte']);
        $idcle=htmlspecialchars($_POST['index']);

        ajouterCompte($solde,$idcle);
    }
?>
<nav class="nav nav-pills nav-justified pt-3 container">
        <a class="nav-item nav-link <?=active("ajout")?>"  href="ajout.php">Client</a>
        <a class="nav-item nav-link <?=active("ajoutCompte")?>"  href="ajoutCompte.php">Compte</a>
    </nav>

<div class="container">
    <div class="row">
        <div class=" offset-md-3 col-md-6 border mt-4 bg-dark py-2" style="border-radius:30px;">
            <div class=" offset-md-4 col-md-4 border text-center rounded-circle mt-1">
                <h1 class="text-light">Compte</h1>
            </div>
            
            <form action="" method="post" class="offset-md-2 col-md-8 is-valid">
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Montant du compte</span>
                    </div>

                    <input type="text" placeholder="FCFA" class="form-control" name="compte">

                </div>
                <div class="mt-3 form-group">
                    <div class="input-group">

                        <select name="index" id="" class="form-control custom-select">
                            <option value="">Selectionner le client</option>
                            <?php
                                $cl=afficherClient();
                                foreach($cl as $c)
                                {

                            ?>
                                <option value="<?=$c["0"]?>"><?=$c["0"]?>- <?=$c["1"]?> <?=$c["2"]?> </option>
                            <?php
                                }
                            ?>
    
                        </select>

                    </div>
                        
                </div>
                <div class="mt-3">
                    <button class="btn btn-success mt-4 ml-5 p-2"name="valider">Enregistrer</button>

                    
                </div>
                
                <div class="input-group my-4">
                
                    <input type="text" placeholder="Client..." class="form-control" id="ic" >
                    <button class="btn btn-success input-group-append"><span class="fa fa-search"></button>
                </div>



                


                    
            </form>

            <table class="table table-dark table-hover table-striped text-justified table-sm" id="tac">
                        <thead>
                            <tr class="">
                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>ADRESSE</th>
                                <th>TEL</th>
                                <th>Valider</th>

                            </tr>
                        </thead>
                        <tbody id="tc">
                            <?php
                                $afficheC=afficherClient();
                                foreach($afficheC as $c)
                                {
                            
                            ?>
                                <tr>
                                    <td><?=$c[0]?></td>
                                    <td><?=strtoupper($c[1])?></td>
                                    <td><?=strtolower($c[2])?></td>
                                    <td><?=strtoupper($c[3])?></td>
                                    <td><?=$c[4]?></td>
                                    <td><a href="affichageCompte.php?id='<?=$c[0]?>'"><button class="btn btn-primary"><span class="fa fa-check"></span></button></a> </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                </table>

        </div>
    </div>

                

            
        </div>

    </div>

</div>



<?php
    
    include("footer.php");

?>