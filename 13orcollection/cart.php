
<?php 
//require_once $_SERVER['DOCUMENT_ROOT'].'/13orcollection/core/init.php';
	define('ROOT', __DIR__);

	require_once ROOT.'/core/init.php'; 
	// $password = 'password';
	// $hashed = password_hash($password, PASSWORD_DEFAULT);
	// echo $hashed;
	//echo $_SESSION['SBUser'];
?>
<!-- =========== END Header =========================================-->
<style>
    .btn-large{
        border-radius: 0px;
        width:100%;
        text-shadow: none;
    }
    .btn-default{
    	background-color: burlywood;
    	color: #fff;
    	text-shadow: none;
    }

    .btn-default:hover{
    	background-color: coral;
    	color: #fff;
    	text-shadow: none;
    }
	
td, input[type="number"]{
		color:  coral;
	}
	th{
		color: grey;
		font-size: 20px;
	}
</style>
<div >
	<a href="#"><img style="width:100%;height:10%; margin-top:-15px;" src="themes/images/carousel/photo.png"/></a>
		 
</div><hr>
    <h3 class="textcolors text-center">Votre Panier</h3><hr>
<!-- Nombre de produit(s) dans votre panier : <span class="total-count"></span> -->
<div>Prix total: <span class="total-panier" id="prix_total"></span> euros</div>
<br /> -->


<div class="container" id="zerocommande_panier">
<div id="qte_minimum_report"></div>
  <div class="row">
        <div class="col-sm-12 col-md-12 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom Produit</th>
                        <th class="text-right">Quantite</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody class="show-panier" id="macommande">
                
<!--                  
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr> -->
                  
                </tbody>


            </table>
        </div>
    </div>










    
    </div>

    <!-- Sidebar a gauche end=============================================== -->
		<!-- <div class="span12"> -->
        <div class="row ">
		<div class="col-md-12">		
		<div class="well well-small">
			<h3 class="text-center"><font color='grey'>Produits proposés </font></h3><h4><small class="pull-right"> 10+ produits fournis</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner" >
			  <div class="item active">
			  <ul class="thumbnails" class="nav nav-tabs nav-justified"  id="recent_produit_active">
				
				
				
				
			  </ul>
			  </div>
				<div class="item"><ul class="thumbnails" id="recent_produit" >
        
				</ul></div>
			
				<div class="item"><ul class="thumbnails" id="recent_produit_2" >
        
				</ul></div>
			   <!-- <div class="item">
			  <ul class="thumbnails" >
				
				
			
		
				
			
			
				
			  </ul>
			  </div> -->
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		</div>
        </div>
<!-- Sidebar à droite ================================================== -->
	
<!-- Sidebar à droite end=============================================== -->
	<br/>
			
		
    <script src="themes/js/login/checkConnectionCommande.js"></script>
	
