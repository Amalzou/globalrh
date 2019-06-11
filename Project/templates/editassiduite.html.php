
<div class="page-container">

<div class="main-content">





<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit assiduite</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="assiduite[id]" value="<?=$assiduite->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">presence</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="id" name="assiduite[presence]" value="<?=$assiduite->presence ?? '' ?>"  placeholder="presence">
</div>
<label class="col-sm-2 col-form-label control-label">date</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="id" name="assiduite[date_pres]" value="<?=$assiduite->date_pres ?? '' ?>"  placeholder="date">
</div>
<label class="col-sm-2 col-form-label control-label">nom </label>
<div class="col-sm-10">

<select class="form-control"  name="assiduite[id_emp]" >
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
