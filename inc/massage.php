
<?php if(isset($_SESSION['success'])) : ?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> <?php flashSession('success') ?> </h5>
</div>
<?php endif; ?>

<?php if(isset($_SESSION['errors'])) : ?>
<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php foreach (getErrors() as $error):?> 
        <h5><i class="icon fas fa-ban"></i> <?php echo $error?></h5>
        <?php endforeach;?> 
</div>
<?php endif; ?>