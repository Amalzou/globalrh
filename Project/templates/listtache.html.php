<div class="page-container">
<div class="main-content">
<div class="container-fluid">

<td class="m-t-20">
<?php  if($user->permissions== 32): ?>
						
						 <a href="/tache/edit" class="btn btn-common btn-rounded">ajouter</a>
						 </td>

<?php endif; ?>
</div>
<div class="container-fluid">


<?php  if($user->permissions== 32): ?>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">list tache</h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>
<th>Nom employe</th>
<th>Titre</th>
<th>Date debut </th>
<th>Date fin </th>

<th>Etat</th>

<th>Action</th>
</tr>
</thead>

<tbody>
 <?php 
 foreach ($taches as $tache):
 if($tache->id_sup==$user->id):
 foreach ($utilisateurs as $employe):
  if($tache->id_emp==$employe->id):

 
 ?>
<tr>
<td><?=htmlspecialchars($employe->nom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($tache->titre,ENT_QUOTES, 'UTF-8')?></td>
<td><?=$tache->date_deb?></td>
<td><?=$tache->date_fin?></td>

<td><?php if($demande->etat==1): echo 'valide'; elseif($demande->etat==0): echo 'non valide'; else: echo 'En attente'; endif; ?></td>



<td class="m-t-20">


						 <a href="/tache/edit?id=<?=$tache->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/tache/delete?id=<?=$tache->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette tache?'))" 
								 class="btn btn-common btn-rounded">Supprimer</a>
						 
						 
						 </td>
						 </tr>

	<?php endif; endforeach; endif; endforeach; ?>

</tbody>
</table>
</div>
</div>
</div>
</div> 
</div> 

<?php endif; ?>
<?php  if($user->permissions== 16): ?>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">list tache</h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>
<th>Titre</th>
<th>Date debut </th>
<th>Date fin </th>

<th>Etat</th>

<th>Action</th>
</tr>
</thead>

<tbody>
 <?php 
 foreach ($taches as $tache):
 if($tache->id_emp==$user->id):

 
 ?>
<tr>
<td><?=htmlspecialchars($tache->titre,ENT_QUOTES, 'UTF-8')?></td>
<td><?=$tache->date_deb?></td>
<td><?=$tache->date_fin?></td>

<td><?=htmlspecialchars($tache->etat,ENT_QUOTES, 'UTF-8')?></td>



<td class="m-t-20">




							<a href="/tache/valider?id=<?=$tache->id?>" onClick="return(confirm('Voulez-vous valider cette tache?'))" 
								 class="btn btn-common btn-rounded">valider</a>


						 
						 
						 </td>
						 </tr>

	<?php  endif; endforeach; ?>

</tbody>
</table>
</div>
</div>
</div>
</div> 
</div> 

<?php endif; ?>


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


