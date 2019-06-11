
<div class="main-content">
<div class="container-fluid">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">list employee</h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable" class="table table-bordered">
<thead>
<tr>

<th>Carte identite </th>
<th>Nom</th>
<th>Prenom</th>
<th>Login</th>
<th>Password</th>
<th>Adresse</th>
<th>Numero tel</th>
<th>Salaire</th>
<th>Poste</th>
</tr>
</thead>

<tbody>
 <?php foreach ($employes as $employe): 
 foreach ($utilisateurs as $utilisateur):
 if ($employe->id_utilisateur==$utilisateur->id):
 ?> ?>
<tr>
<td><?=htmlspecialchars($employe->cin,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->nom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->prenom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->login,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->password,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->adresse,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->numero tel,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->salaire,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($employe->poste,ENT_QUOTES, 'UTF-8')?></td>
<td class="m-t-20">
						
						 <a href="/employe/edit?id=<?=$employe->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/employe/delete?id=<?=$employe->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette employe?'))" 
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


