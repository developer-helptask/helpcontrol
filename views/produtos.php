<section id="page" class="tb_padding">
<div class="container">
<div class="produtos">

<?php foreach($produtos as $prod): ?>


<div class="box-produtos">
<img src="<?php echo BASE_URL; ?>assets/images/upoads/produtos/<?php echo $prod['images']; ?>" alt="" width="183" height="248" class="alignnone size-full wp-image-216" />
</div>
<?php endforeach; ?>	
</div>
</div>
</section>