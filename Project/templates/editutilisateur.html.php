
<div class="page-container">
<div class="main-content">


<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit utilisateur</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="utilisateur[id]"value="<?=$utilisateur->id ?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">CIN</label>
<div class="col-sm-10">

<input type="text" class="form-control" id="nom" name="utilisateur[cin]" value="<?=$utilisateur->cin ?? ''?>"  placeholder="CIN">
</div><label class="col-sm-2 col-form-label control-label">Nom</label>
<div class="col-sm-10">

<input type="text" class="form-control" id="nom" name="utilisateur[nom]" value="<?=$utilisateur->nom ?? ''?>"  placeholder="nom">
</div>
<label class="col-sm-2 col-form-label control-label">Prenom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="prenom" name="utilisateur[prenom]" value="<?=$utilisateur->prenom ?? ''?>"  placeholder="prenom">
</div>
<label class="col-sm-2 col-form-label control-label">Login</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="login" name="utilisateur[login]" value="<?=$utilisateur->login ?? ''?>"  placeholder="login">
</div>
<label class="col-sm-2 col-form-label control-label">Password</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="password" name="utilisateur[password]" value="<?=$utilisateur->password ?? ''?>"  placeholder="password">
</div>
<label class="col-sm-2 col-form-label control-label">adresse</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="adr" name="utilisateur[adr]" value="<?=$utilisateur->adr ?? ''?>"  placeholder="adresse">
</div>
<label class="col-sm-2 col-form-label control-label">telephone</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="utilisateur[num_tel]" value="<?=$utilisateur->num_tel ?? ''?>"  placeholder="telephone">
</div>
<label class="col-sm-2 col-form-label control-label">Poste</label>
<div class="col-sm-10">
<select class="form-control" name="utilisateur[permissions]" >
<option value='32'>Superviseur</option>
<option value='16'>Employe</option>
</select>
</div>
<button type="submit" class="btn btn-common" name "edit groupe">enrgistrer</button>
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
