<?
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="container">
<div class="row">
<div class="span12">
<?
	$a = new Area('Main');
	$a->setAreaGridColumnSpan(12);
	$a->display($c);
?>
</div>
</div>
<div class="row">
<div class="span8">

<?
	$a = new Area('Left');
	$a->setAreaGridColumnSpan(8);
	$a->display($c);
?>
</div>
<div class="span4">

<?
	$a = new Area('Right');
	$a->setAreaGridColumnSpan(4);
	$a->display($c);
?>
</div>
</div>


<div class="row">
<div class="span12">
<?
	$a = new Area('Main Sub');
	$a->setAreaGridColumnSpan(12);
	$a->display($c);
?>
</div>
</div>
</div>


<? $this->inc('elements/footer.php'); ?>