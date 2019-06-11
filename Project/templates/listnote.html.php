<div class="page-container">
<div class="main-content">
<div class="container-fluid">
	<?php if($user->permissions==32):?>
<td class="m-t-20">
		
						 <a href="/note/edit?id_emp=<?=$utilisateur->id?>" class="btn btn-danger btn-rounded">Noter</a>
						 <a href="/recompenses/edit?id_emp=<?=$utilisateur->id?>" class="btn btn-danger btn-rounded">Recompenses</a>
						 </td>
						 <?php  endif; ?>



</div>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">

<h4 class="card-title">list note pour <?=htmlspecialchars($utilisateur->nom,ENT_QUOTES, 'UTF-8')?>- <?=htmlspecialchars($utilisateur->prenom,ENT_QUOTES, 'UTF-8')?></h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Type</th>
<th>Description</th>

<th>Action</th>
</tr>
</thead>

<tbody>
 <?php 
 foreach ($notes as $note):
 if($note->id_sup==$user->id):
 if($note->id_emp==$_GET['iduser']):


 
 ?>
<tr>

<td><?=htmlspecialchars($note->type,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($note->desc,ENT_QUOTES, 'UTF-8')?></td>



<td class="m-t-20">
<?php if($user->permissions==32):?>

					
						 <a href="/note/edit?id=<?=$note->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/note/delete?id=<?=$note->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette note?'))" 
								 class="btn btn-common btn-rounded">Supprimer</a>
						 <?php  endif; ?>
						 
						 </td>
						 </tr>

	<?php  endif;  endif; endforeach; ?>

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



