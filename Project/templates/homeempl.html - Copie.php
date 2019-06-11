<div class="page-container">

<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Profile</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="#">Pages</a></li>
<li class="active"> / Profile</li>
</ol>
</div>
</div>
 
</div>
<div class="container-fluid">
<div class="row">

<div class="col-12 col-md-4">
<div class="profile-bg">
<div class="user-profile">
<figure class="profile-wall-img">
<img class="img-fluid" src="assets/img/profile/user-bg.jpg" alt="User Wall">
</figure>
<div class="profile-body">
<figure class="profile-user-avatar">
<img src="assets/img/profile/user4.png" alt="User Wall">
</figure>
<h3 class="profile-user-name"><?=$user->nom?> <?=$user->prenom?></h3>
<small class="profile-user-address"><?=$user->adr?></small>
<small class="profile-user-numero"><?=$user->num_tel?></small>
<div class="profile-user-description">
<p>I have 10 years of experience designing for the web, and specialize in the areas of user interface design, interaction design, visual design and prototyping. I’ve worked with notable startups including Pearl Street Software.</p>
</div>
<div class="m-t-5">
<a href="#" class="btn btn-common">Edit Profile</a>
</div>
</div>
<div class="row border-top m-t-20">
<div class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
<h3>274</h3>
<small>Comments</small>
</div>
<div class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
<h3>2,483</h3>
<small>Followers</small>
</div>
<div class="col-4 border-right d-flex flex-column justify-content-center align-items-center py-4">
<h3>146</h3>
<small>Following</small>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-8">
<div class="timeline-view bg-white p-20">

<div class="form-group row">
<h1>profile admin</h1>
<label class="col-sm-2 col-form-label control-label">Nom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nom" name="administrateur[nom]" value="<?=$administrateur->nom ?? ''?>"  placeholder="nom">
</div>
<label class="col-sm-2 col-form-label control-label">Prenom</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="prenom" name="administrateur[prenom]" value="<?=$administrateur->prenom ?? ''?>"  placeholder="prenom">
</div>
<label class="col-sm-2 col-form-label control-label">Login</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="login" name="administrateur[login]" value="<?=$administrateur->login ?? ''?>"  placeholder="login">
</div>
<label class="col-sm-2 col-form-label control-label">Password</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="password" name="administrateur[password]" value="<?=$administrateur->password ?? ''?>"  placeholder="password">
</div>
<label class="col-sm-2 col-form-label control-label">adresse</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="adr" name="administrateur[adr]" value="<?=$administrateur->adr ?? ''?>"  placeholder="adresse">
</div>
<label class="col-sm-2 col-form-label control-label">telephone</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="administrateur[num_tel]" value="<?=$administrateur->num_tel ?? ''?>"  placeholder="telephone">
</div>
<label class="col-sm-2 col-form-label control-label">entreprise</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="administrateur[entreprise]" value="<?=$administrateur->entreprise ?? ''?>"  placeholder="telephone">
</div>
<label class="col-sm-2 col-form-label control-label">produit</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="num_tel" name="administrateur[produit]" value="<?=$administrateur->produit ?? ''?>"  placeholder="produit">
</div>

<button type="submit" class="btn btn-common" name "edit groupe">enrgistrer</button>
<button type="button" class="btn btn-primary">annuler</button>

</div>
 </div>
 </div>


</div>
</div>
</div>


<footer class="content-footer">
<div class="footer">
<div class="copyright">
<span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
<span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
</div>
</div>
</footer>

</div>
