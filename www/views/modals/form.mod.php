ICI IL Y AURA UN FORMULAIRE

<?php print_r($data);?>


<form 
method="<?= $data["config"]["method"]?>" 
action="<?= $data["config"]["action"]?>"
class="<?= $data["config"]["class"]?>"
id="<?= $data["config"]["id"]?>">


<?php foreach ($data["fields"] as $name => $configField):?>
<?php
/*
 "firstname"=>[
                "type"=>"text",
                "required"=>true,
                "placeholder"=>"Votre prénom",
                "class"=>"",
                "id"=>""
            ]
*/
?>

<input 
	type="<?= $configField["type"] ?>" 
	name="<?= $name ?>"
	placeholder="<?= $configField["placeholder"]??"" ?>"
	class="<?= $configField["class"]??"" ?>"
	id="<?= $configField["id"]??"" ?>"
	<?= ($configField["required"])?"required='required'":'' ?> >



<?php endforeach;?>


<button><?= $data["config"]["submit"]?></button>

</form>