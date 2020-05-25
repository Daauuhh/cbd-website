<?php 
    require('connexion.php'); 
    $requete = $bdd->query('SELECT * FROM product_');
?>
<!-- Fix Table responsive -->
<div class="container-fluid">
<div class="mb-4">
<div class="table-responsive">
<!-- -------------------- -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price $</th>
            <th>Weight</th>
            <th>description</th>
            <th>Catégorie</th>
            <th>Stock</th>
            <th>picture</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price $</th>
            <th>Weight</th>
            <th>description</th>
            <th>Catégorie</th>
            <th>Stock</th>
            <th>picture</th>
        </tr>
    </tfoot>
    <tbody>
<?php
    $request = $bdd->prepare('SELECT * FROM product_');
    $request->execute(array());
    while($donnees = $request->fetch()) {
        $Id = $donnees['Id'];
        $Name = $donnees['Name'];
        $Price = $donnees['Price'];
        $Weight = $donnees['Weight'];
        $Description = $donnees['Description'];
        $Category = $donnees['Category'];
        $Stock = $donnees['Stock'];
        $Picture = $donnees['Thumbnail'];


    echo'<tr>
            <td>'. $Id.'</td>
            <td>'. $Name.'</td>
            <td>'. $Price.'</td>
            <td>'. $Weight.'</td>
            <td>'. $Description.'</td>
            <td>'. $Category.'</td>
            <td>'. $Stock.'</td>
            <td><img style = "width: 80px; height: auto;" src = "data:image/jpeg;base64,'.base64_encode($Picture).'"/></td>
        </tr>';
        }    
?>
    </tbody>
</table>
</div>
</div>
    </div>











