
<div class="page-container">

<div class="main-content">


<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">editemploye</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="editemploye.html.php">editemploye</a></li>
<li class="active"></li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">edit employe</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation" novalidate="novalidate" method ='post'>
<input type="hidden" name="employe[id]"value="<?=$employe->id?? ''?>">

<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">Nom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nom" name="employe[nom]" value="<?=$employe->nom ?? ''?>"  placeholder="nom">
</div>
<label class="col-sm-2 col-form-label control-label">Prenom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="prenom" name="employe[prenom]" value="<?=$employe->prenom ?? ''?>"  placeholder="prenom">
</div>
<label class="col-sm-2 col-form-label control-label">Login</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="login" name="employe[login]" value="<?=$employe->login ?? ''?>"  placeholder="login">
</div>
<label class="col-sm-2 col-form-label control-label">Password</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="password" name="employe[password]" value="<?=$employe->password ?? ''?>"  placeholder="password">
</div>
<label class="col-sm-2 col-form-label control-label">adresse</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="adr" name="employe[adr]" value="<?=$employe->adr ?? ''?>"  placeholder="adresse">
</div>
<label class="col-sm-2 col-form-label control-label">telephone</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="employe[num_tel]" value="<?=$employe->num_tel ?? ''?>"  placeholder="telephone">
</div>
<label class="col-sm-2 col-form-label control-label">salaire</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="salaire" name="employe[salaire]" value="<?=$employe->salaire ?? ''?>"  placeholder="salaire">
</div>
<label class="col-sm-2 col-form-label control-label">poste</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="poste" name="employer[poste]" value="<?=$employe->poste ?? ''?>"  placeholder="poste">
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
