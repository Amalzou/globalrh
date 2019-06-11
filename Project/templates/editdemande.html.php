
<div class="page-container">

<div class="main-content">
<div class="container-fluid">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">demande de modifier recompense</h4>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-10 col-md-12 col-xs-12">
<form role="form" id="form-validation"  method ='post'>
<input type="hidden" name="demande[id]" value="<?=$demande->id ?? ''?>">
<input type="hidden" name="demande[id_recompense]" value="<?=$_GET['id']?>">
<input type="hidden" name="demande[id_emp]" value="<?=$_GET['id_emp']?>">
<input type="hidden" name="demande[date]" value="<?=date('Y-m-d')?>">


<div class="form-group row">
<label class="col-sm-2 col-form-label control-label">demande de récompense</label>
<div class="col-sm-10">
<textarea name="demande[texte]" required><?=$demande->texte ?? '' ?></textarea>
</div>







<button type="submit" class="btn btn-common">envoyer</button>
<button type="reset" class="btn btn-primary">annuler</button>

</div>
 </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
