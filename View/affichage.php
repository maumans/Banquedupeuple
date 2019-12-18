<?php
    include("header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="input-group offset-md-3 col-md-6 mt-3">
                <input type="text" class="form-control" id="myInput" placeholder="recherche">
                <div class="input-group-append">
                    <button class="btn btn-success"><i class="fa fa-search"></i></button>
                </div>
                
                


            </div>


        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-4 panel">
                <div class="panel-head" id="a">
                    
                </div>
                

                <div class="panel-body"id="d">
                    <table class="table table-dark table-hover table-striped text-justified">
                        <thead>
                            <tr class="">
                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>ADRESSE</th>
                                <th>TEL</th>
                                <th>COMPTE(S)</th>

                            </tr>
                        </thead>
                        <tbody id="myTable">
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
                                    <td><a href="affichageCompte.php?id='<?=$c[0]?>'"><button class="btn btn-primary">voir</button></a> </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>

                
            </div>





            </div>

    <div class="row">
        <div class="offset-md-4 col-md-4 border">
            <div id="ap" style="position:relative;left: 50px;top:22px">Adress</div>
            <div class="row">
            
            <i class="fa fa-user fa-lg ml-4 mr-2" id="i"></i>
            <input type="edit" class="bg-transparent" style="display: none;" id="in">
           
             </div>
        
        <hr class="">
            

        </div>
    </div>
   

</div>




        </div>

    

    
    
    

    
<?php
    include("footer.php");

?>