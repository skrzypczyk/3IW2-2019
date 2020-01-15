
<?php

	$dataSubmit = $GLOBALS["_".$data["config"]["method"]];

?>


<form 
method="<?= $data["config"]["method"]?>" 
action="<?= $data["config"]["action"]?>"
class="<?= $data["config"]["class"]?>"
id="<?= $data["config"]["id"]?>">


<div class="form-group row">
                  
<?php foreach ($data["fields"] as $name => $configField):?>
	<div class="col-sm-12">

	<?php if($configField["type"] == "captcha"):?>
		<img src="script/captcha.php">
	<?php endif;?>



	<input 
		type="<?= $configField["type"] ?>" 
		name="<?= $name ?>"
		placeholder="<?= $configField["placeholder"]??"" ?>"
		class="<?= $configField["class"]??"" ?>"
		id="<?= $configField["id"]??"" ?>"
		<?= ($configField["required"])?"required='required'":'' ?> 
		value="<?= (!empty($dataSubmit[$name]) && $configField["type"]!="password"  && $configField["type"]!="captcha" )? $dataSubmit[$name]:'' ?>">

	</div>
<?php endforeach;?>

<div class="col-sm-12">
<center><button class="btn btn-primary"><?= $data["config"]["submit"]?></button></center>
</div>

</form>