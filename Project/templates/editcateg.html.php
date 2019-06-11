
<div class="page-container">

<div class="main-content">


<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="categ.html.php">edit categorie recompense</a></li>
<li class="active"></li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit categorie recompense</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="categ[id]"value="<?=$categ->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">Titre</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nom" name="categ[titre]" value="<?=$categ->titre ?? ''?>"  placeholder="titre">
</div>


<button type="button" class="btn btn-common">enregestrer</button>
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
