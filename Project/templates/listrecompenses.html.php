<div class="page-container">
<div class="main-content">

<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">liste recompense pour <?=htmlspecialchars($utilisateur->nom,ENT_QUOTES, 'UTF-8')?>- <?=htmlspecialchars($utilisateur->prenom,ENT_QUOTES, 'UTF-8')?></h4>

</div>

<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Titre</th>
<th>Date debut </th>
<th>Date fin </th>
<th>Action </th>
</tr>
</thead>

<tbody>
 <?php foreach ($recompensess as $recompenses):
 if($recompenses->id_emp==$_GET['id_emp']):

										   ?>
<tr>
<td><?=htmlspecialchars($recompenses->titre,ENT_QUOTES, 'UTF-8')?></td>
<td><?=$recompenses->date_deb?></td>
<td><?=$recompenses->date_fin?></td>

<td class="m-t-20"><?php if($user->permissions==16):?>
<a href="/demande/edit?id=<?=$recompenses->id?>&id_emp=<?=$_GET['id_emp']?>" class="btn btn-common btn-rounded">demande modifier</a><?php endif;?>
						<?php if($user->permissions==32):?>
						 <a href="/recompenses/edit?id=<?=$recompenses->id?>&id_emp=<?=$_GET['id_emp']?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/recompenses/delete?id=<?=$recompenses->id?>&id_emp=<?=$_GET['id_emp']?>" onClick="return(confirm('Voulez-vous sur supprimer cette recompense?'))" 
								 class="btn btn-common btn-rounded">Supprimer</a><?php endif;?>
						 </td>
						 </tr>
<?php endif; endforeach;?>

</tbody>
</table>
</div>
</div>






</div>
</div> 
</div> 
<?php if($user->permissions==16):?>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">

<h4 class="card-title">liste de demande 

</div>

<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Récompense</th>
<th>Demande</th>
<th>Date</th>
<th>Etat </th>
<th>Action </th>
</tr>
</thead>

<tbody>
 <?php foreach ($demandes as $demande):
 if($demande->id_emp==$_GET['id_emp']):
 foreach ($recompensess as $recompenses):
 if($demande->id_recompense==$recompenses->id):
 ?>
<tr>
<td><?=htmlspecialchars($recompenses->titre,ENT_QUOTES, 'UTF-8')?></td>
<td><?=$demande->texte?></td>
<td><?=$demande->date?></td>
<td><?php if($demande->etat==1): echo 'Accepté'; elseif($demande->etat==0): echo 'Refusé'; else: echo 'En attente'; endif; ?></td>

<td class="m-t-20">
<a href="/demande/delete?id=<?=$demande->id?>&id_emp=<?=$_GET['id_emp']?>" class="btn btn-common btn-rounded">supprimer </a><?php endif;?>
						<?php if($user->permissions==32):?>
						 <a href="/recompenses/edit?id=<?=$recompenses->id?>" class="btn btn-common btn-rounded">accepter</a>
								<a href="/recompenses/delete?id=<?=$recompenses->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette recompense?'))" 
								 class="btn btn-common btn-rounded">refuser</a>
						 </td>
						 </tr>
<?php endif; endforeach;endif; endforeach;?>

</tbody>
</table>
</div>
</div>
<?php endif;?>





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

