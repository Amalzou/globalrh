
<div class="page-container">

<div class="main-content">

</div>
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit superviseur</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="superviseur[id]"value="<?=$superviseur->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">Nom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nom" name="superviseur[nom]" value="<?=$superviseur->nom ?? ''?>"  placeholder="nom">
</div>
<label class="col-sm-2 col-form-label control-label">Prenom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="prenom" name="superviseur[prenom]" value="<?=$superviseur->prenom ?? ''?>"  placeholder="prenom">
</div>
<label class="col-sm-2 col-form-label control-label">Login</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="login" name="superviseur[login]" value="<?=$superviseur->login ?? ''?>"  placeholder="login">
</div>
<label class="col-sm-2 col-form-label control-label">Password</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="password" name="superviseur[password]" value="<?=$superviseur->password ?? ''?>"  placeholder="password">
</div>
<label class="col-sm-2 col-form-label control-label">adresse</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="adr" name="superviseur[adr]" value="<?=$superviseur->adr ?? ''?>"  placeholder="adresse">
</div>
<label class="col-sm-2 col-form-label control-label">telephone</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="superviseur[num_tel]" value="<?=$superviseur->num_tel ?? ''?>"  placeholder="telephone">
</div><label class="col-sm-2 col-form-label control-label">specialisé</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="specialise" name="superviseur[specialise]" value="<?=$superviseur->specialise ?? ''?>"  placeholder="specialise">
</div>

<button type="button" class="btn btn-common">enregistrer</button>
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
