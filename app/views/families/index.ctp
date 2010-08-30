<?php echo $this->Html->script("jquery/jquery-1.4.2.min"); ?>
<?php echo $this->Html->script("jquery/jquery-ui-1.8.4.custom.min"); ?>
<?php echo $this->Html->css("jquery-ui/smoothness/jquery-ui-1.8.4.custom"); ?>

<style type="text/css">

	#familyWrap{
		border: 1px solid #CCC;
		max-height: 250px;
		overflow: scroll;
		overflow: -moz-scrollbars-horizontal;
		padding: 20px 0;
		text-align: center;
		width: 720px;
	}
	
	#familyWrap img{
		/* float: left; */
	}
	
	#familyWrap span{
		background: #FF9900;
		margin: 10px;
		padding: 10px;
	}
	
</style>

<script type="text/javascript">

	$(function (){

		var wrapContent = {};

		var actorsObj = $.parseJSON(<?php echo "'{$actorsImages}'"; ?>);

		$("#addActor, #familyWrap h2").click(function (event){

			event.preventDefault();
			clearFamilyWrap();
			$("#familyWrap").append('<img src="http://gnote/app/satolephp/hf/img/actors/bird1.png"/>');
		});
	});


	function clearFamilyWrap(){
		wrapContent = $("#familyWrap h2").remove();
	}

</script>


<h1>Happy Family</h1>

<div id="familyWrap">
	
	<h2>Adicione os personagens</h2>

</div>

<div id="actions">

	<a id="addActor" href="#">Adicionar personagem</a>
	<a id="saveFamily" href="#">Salvar Família</a>

</div>
