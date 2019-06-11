<div class="page-container">

<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title"><?=$utilisateur->nom?></h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="#">Pages</a></li>
<li class="active"> / Profile</li>
</ol>
</div>
</div>
 
</div>


<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">

<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Date </th>
<th>Motif d'absence</th>
<th>Action</th>
</tr>
</thead>

<tbody>
 <?php foreach ($assiduites as $assiduite): 
 if($assiduite->id_emp==$_GET['iduser']):
 ?>
<tr>
<td><?=htmlspecialchars($assiduite->date_pres,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($assiduite->presence,ENT_QUOTES, 'UTF-8')?></td>


<td class="m-t-20">
						 <a href="/assiduite/delete?id=<?=$assiduite->id?>" onClick="return(confirm('Voulez-vous sur desactiver cette utilisateur?'))" 
								 class="btn btn-common btn-rounded">Annuler</a>
						 
						 </td>
</tr>


	<?php endif;endforeach; ?>

</tbody>
</table>
</div>
</div>
</div>
</div> 
</div> 




<footer class="content-footer">
<div class="footer">
<div class="copyright">
<span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
<span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
</div>
</div>
</footer>

</div>
