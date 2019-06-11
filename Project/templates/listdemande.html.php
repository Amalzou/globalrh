<div class="page-container">
<div class="main-content">

<div class="container-fluid">


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

<th>Employée</th>
<th>Récompense</th>
<th>Demande</th>
<th>Date</th>
<th>Etat </th>
<th>Action </th>
</tr>
</thead>

<tbody>
 <?php foreach ($demandes as $demande):
 foreach ($recompensess as $recompenses):
 if($demande->id_recompense==$recompenses->id):
 foreach ($utilisateurs as $utilisateur):
 if($utilisateur->id==$demande->id_emp):
 ?>
<tr>
<td><?=$utilisateur->nom?> <?=$utilisateur->prenom?></td>
<td><?=htmlspecialchars($recompenses->titre,ENT_QUOTES, 'UTF-8')?></td>

<td><?=$demande->texte?></td>
<td><?=$demande->date?></td>
<td><?php if($demande->etat==1): echo 'Accepté'; elseif($demande->etat==0): echo 'Refusé'; else: echo 'En attente'; endif; ?></td>

<td class="m-t-20">

						 <a href="/demande/accepter?id=<?=$demande->id?>" class="btn btn-common btn-rounded" onClick="return(confirm('Voulez-vous sur accepter cette recompense?'))" >accepter</a>
								<a href="/demande/refuser?id=<?=$demande->id?>" onClick="return(confirm('Voulez-vous sur refuser cette recompense?'))" 
								 class="btn btn-common btn-rounded">refuser</a>
						 </td>
						 </tr>
<?php endif; endforeach;endif; endforeach;endforeach;?>

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

