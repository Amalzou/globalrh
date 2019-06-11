
<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Table</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="#">Tables affichages</a></li>
<li class="active"> /Superviseur</li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">list Superviseur</h4>
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
<th>specialisee</th>

</tr>
</thead>

<tbody>
 <?php foreach ($superviseurs as $superviseur):
foreach ($utilisateurs as $utilisateur):
 if ($superviseur->id==$utilisateur->id):
 ?>
<tr>
<td><?=htmlspecialchars($superviseur->cin,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->nom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->prenom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->login,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->password,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->adresse,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->numero tel,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($superviseur->specialise,ENT_QUOTES, 'UTF-8')?></td>
<td class="m-t-20">
						
						 <a href="/superviseur/edit?id=<?=$superviseur->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/superviseur/delete?id=<?=$superviseur->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette superviseur?'))" 
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


