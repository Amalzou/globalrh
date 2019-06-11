<div class="page-container">

<div class="main-content">


<h4 class="card-title"><center>list groupe</center></h4>
<div class="container-fluid">
<div class="row">
<td class="m-t-20">
						
						 <a href="/groupe/edit" class="btn btn-common btn-rounded">ajouter groupe</a>
						 </td>
</div>
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">

<div class="card-body">



<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">

<thead>
<tr>

<th>titre</th>
<th>Description </th>
<th>Mission</th>
<th>heurs debut</th>
<th>heurs fin</th>
<th>Action</th>
</tr>
</thead>

<tbody>
 <?php foreach ($groupes as $groupe): 
 
 foreach ($temps_travails as $temps_travail):
 if ($groupe->id_temps==$temps_travail->id):?>
<tr>
<td><?=htmlspecialchars($groupe->titre,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($groupe->description,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($groupe->mission,ENT_QUOTES, 'UTF-8')?></td>
<td><?=$temps_travail->heurs_deb?></td>
<td><?=$temps_travail->heurs_fin?></td>

<td class="m-t-20">
						
						 <a href="/groupe/edit?id=<?=$groupe->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/groupe/delete?id=<?=$groupe->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette groupe?'))" 
								 class="btn btn-common btn-rounded">Supprimer</a>
						 
						 
						 </td>
</tr>

	<?php endif;endforeach;endforeach; ?>

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


