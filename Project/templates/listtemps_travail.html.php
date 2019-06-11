<div class="page-container">
<div class="main-content">

<td class="m-t-20">
						
						 <a href="/temps_travail/edit" class="btn btn-common btn-rounded">ajouter</a>
						 </td>

<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">list temps de travail</h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>heurs debut</th>
<th>heurs fin</th>
<th>Action</th>
</tr>
</thead>

<tbody>
 <?php foreach ($temps_travails as $temps_travail):?>
<tr>
<td><?=$temps_travail->heurs_deb?></td>
<td><?=$temps_travail->heurs_fin?></td>





<td class="m-t-20">

						
						 <a href="/temps_travail/edit?id=<?=$temps_travail->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/temps_travail/delete?id=<?=$temps_travail->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette temps de travail?'))" 
								 class="btn btn-common btn-rounded">Supprimer</a>
						 
						 
						 </td>
						 </tr>
						 


	<?php endforeach; ?>

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


