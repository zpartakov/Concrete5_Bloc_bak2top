<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php 
//echo $this->getBlockPath();
$uh = Loader::helper('concrete/urls');
$bt = BlockType::getByHandle('bak2top');
$local = $uh->getBlockTypeAssetsURL($bt);

//echo $local;
?>
<script src="<?php echo $local.'/jquery.min.js';?>" type="text/javascript"></script>
<script src="<?php echo $local.'/bak2top.js';?>" type="text/javascript"></script>
