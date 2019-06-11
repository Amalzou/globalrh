
<div class="page-container">

<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit groupe</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="groupe[id]"value="<?=$groupe->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">titre</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="titre" name="groupe[titre]" value="<?=$groupe->titre ?? ''?>"  placeholder="titre">
</div>
<label class="col-sm-2 col-form-label control-label">description</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="description" name="groupe[description]" value="<?=$groupe->description ?? ''?>"  placeholder="description">
</div>
<label class="col-sm-2 col-form-label control-label">mission</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="mission" name="groupe[mission]" value="<?=$groupe->mission ?? ''?>"  placeholder="mission">
</div>
<label class="col-sm-2 col-form-label control-label">Emploi de temps</label>
<div class="col-sm-10">
<select class="form-control" id="id" name="groupe[id_temps]" >
 <?php foreach ($temps as $tem):?>

<option value='<?=$tem->id?>'><?=$tem->heurs_deb?> - <?=$tem->heurs_fin?></option>
	<?php endforeach; ?>
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
