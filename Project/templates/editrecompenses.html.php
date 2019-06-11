
<div class="page-container">

<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit recompense</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method='post'>
<input type="hidden" name="recompenses[id]"value="<?=$recompenses->id ?? ''?>">
<input type="hidden" name="recompenses[id_emp]" value="<?=$_GET['id_emp']?>">


<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">titre</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="titre" name="recompenses[titre]" value="<?=$recompenses->titre ?? ''?>"  placeholder="titre">
</div>
<label class="col-sm-2 col-form-label control-label">date debut</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="date_deb" name="recompenses[date_deb]" value="<?=$recompenses->date_deb ?? ''?>"  placeholder="date debut">
</div>
<label class="col-sm-2 col-form-label control-label">date fin</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="date_fin" name="recompenses[date_fin]" value="<?=$recompenses->date_fin ?? ''?>"  placeholder="date fin">
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
