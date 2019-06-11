<div class="page-container">

<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Profile</h4>
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
<div class="card-header border-bottom">
<td class="m-t-20">
						<?php if($user->permissions=='63'): ?>
						 <a href="/utilisateur/edit" class="btn btn-common btn-rounded">ajouter utilisateur</a>	<?php endif;?>
						 </td>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Carte identite </th>
<th>Nom</th>
<th>Prenom</th>
<th>Login</th>
<th>Password</th>
<th>Adresse</th>
<th>Numero tel</th>
<th>Action</th>
</tr>
</thead>

<tbody>
 <?php foreach ($utilisateurs as $utilisateur): ?>
<tr>
<td><?=htmlspecialchars($utilisateur->cin,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->nom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->prenom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->login,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->password,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->adr,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->num_tel,ENT_QUOTES, 'UTF-8')?></td>
<td class="m-t-20">
							<?php if($utilisateur->permissions=='16'): ?> 	<?php if($user->permissions=='32'): ?><a href="/note/list?iduser=<?=$utilisateur->id?>" class="btn btn-common btn-rounded">Notes</a>	<?php endif; endif; ?>
						
						 	 <a href="/utilisateur/edit?id=<?=$utilisateur->id?>" class="btn btn-common btn-rounded">Modifier</a>
							<?php if ($utilisateur->etat == '1' || $utilisateur->etat == null):?>	<a href="/utilisateur/desactiver?id=<?=$utilisateur->id?>" onClick="return(confirm('Voulez-vous sur desactiver cette utilisateur?'))" 
								 class="btn btn-common btn-rounded">desactiver</a>
								 <?php endif; ?>
								 <?php if ($utilisateur->etat =='0'):?>
						 	<a href="/utilisateur/activer?id=<?=$utilisateur->id?>" onClick="return(confirm('Voulez-vous sur desactiver cette utilisateur?'))" 
								 class="btn btn-common btn-rounded">activer</a>
						 <?php endif; ?>
						 
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
