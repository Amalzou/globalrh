<div class="page-container">

<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Profile</h4>
</div>
</div>
 
</div>


<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">

<div class="card-body">

<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered">
<thead>
<tr>

<th>Carte identite </th>
<th>Nom</th>
<th>Prenom</th>
<th>Absences</th>
<th>Motif d'absence</th>
<th>Action</th>
</tr>
</thead>

<tbody>
 <?php foreach ($utilisateurs as $utilisateur): ?>
<tr>
<td><?=htmlspecialchars($utilisateur->cin,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->nom,ENT_QUOTES, 'UTF-8')?></td>
<td><?=htmlspecialchars($utilisateur->prenom,ENT_QUOTES, 'UTF-8')?></td>
<td><a href='/assiduite/detail?iduser=<?=$utilisateur->id?>'><?php $nbr=0; foreach ($assiduites as $assduite): 
if ($utilisateur->id==$assduite->id_emp):
$nbr=$nbr+1; endif;endforeach; echo $nbr;

 ?></a></td>
<td class="m-t-20">
						<form method='post' action='/assiduite/edit'>
						<input type="hidden" name="assiduite[id]" value="">
						<input type="hidden" name="assiduite[date_pres]" value="<?=date('Y-m-d')?>">
						<input type="hidden" name="assiduite[id_emp]" value="<?=$utilisateur->id?>">
						<select  name="assiduite[presence]" class='form-control'>
						<option value='Absence non justfie'>Absence non justfie</option>
						<option value='Autorisation dabsence'>Autorisation d'absence</option>
						<option value='Congé'>Congé</option>
						<option value='Grossesse'>Grossesse</option>
						</select>
</td>
<td class="m-t-20">
						 	 <button type="submit" class="btn btn-common btn-rounded">Marquer l`absence</button>
							 </form>
							
						 
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
