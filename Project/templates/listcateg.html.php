
<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Table</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="/categ/edit">Tables affichages</a></li>
<li class="active"> /recompense</li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">liste recompense</h4>
</div>
<div class="card-body">

<div class="table-responsive">
<table id="datatable" class="table table-bordered">
<thead>
<tr>

<th>Titre</th>

</tr>
</thead>

<tbody>
 <?php foreach ($categs as $categ): ?>
<tr>
<td><?=htmlspecialchars($categ->titre,ENT_QUOTES, 'UTF-8')?></td>



<td class="m-t-20">
						
						 <a href="/categ/edit?id=<?=$categ->id?>" class="btn btn-common btn-rounded">Modifier</a>
								<a href="/categ/delete?id=<?=$categ->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette note?'))" 
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


