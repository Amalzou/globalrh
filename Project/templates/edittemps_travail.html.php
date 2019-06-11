
<div class="page-container">
<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit temps_travail</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method='post'>
<input type="hidden" name="temps_travail[id]"value="<?=$temps_travail->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">heure debut</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="heurs_deb" name="temps_travail[heurs_deb]" value="<?=$temps_travail->heurs_deb ?? ''?>"  placeholder="heurs deb">
</div>
<label class="col-sm-2 col-form-label control-label">heurs fin</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="heurs_fin" name="temps_travail[heurs_fin]" value="<?=$temps_travail->heurs_fin ?? ''?>"  placeholder="heurs fin">
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
