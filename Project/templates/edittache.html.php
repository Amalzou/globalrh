
<div class="page-container">

<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit tache</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="tache[id]" value="<?=$tache->id ?? ''?>">
<input type="hidden" name="tache[id_sup]" value="<?=$user->id?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">titre</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="titre" name="tache[titre]" value="<?=$tache->titre ?? '' ?>"  placeholder="titre">
</div>
<label class="col-sm-2 col-form-label control-label">date debut</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="date_deb" name="tache[date_deb]" value="<?=$tache->date_deb ?? ''?>"  placeholder="date debut">
</div>
<label class="col-sm-2 col-form-label control-label">Date fin</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="date_fin" name="tache[date_fin]" value="<?=$tache->date_fin ?? ''?>"  placeholder="date fin">
</div>
<label class="col-sm-2 col-form-label control-label">nom employe</label>
<div class="col-sm-10">
<select class="form-control"  name="tache[id_emp]" >
 <?php foreach ($utilisateurs as $utilisateur): if ($utilisateur->permissions==16):?>
<option value='<?=$utilisateur->id?>'><?=$utilisateur->nom?> <?=$utilisateur->prenom?></option>
	<?php endif;endforeach; ?>
</select>
</div>




<button type="submit" class="btn btn-common">enregistrer</button>
<button type="button" class="btn btn-primary">annuler</button>

</div>
 </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
