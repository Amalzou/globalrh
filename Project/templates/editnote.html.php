
<div class="page-container">

<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit note</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="note[id]" value="<?=$note->id ?? ''?>">
<input type="hidden" name="note[id_sup]" value="<?=$user->id?>">
<input type="hidden" name="note[id_emp]" value="<?=$_GET['id_emp']?>">


<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">type</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="titre" name="note[type]" value="<?=$note->type ?? '' ?>"  placeholder="type">
</div>
<label class="col-sm-2 col-form-label control-label">description</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="titre" name="note[desc]" value="<?=$note->desc ?? '' ?>"  placeholder="desc">
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
