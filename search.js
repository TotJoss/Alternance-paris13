function affiche(reponse)
{
	$('.ligne').remove();
	$('.table1').append(reponse);
}

$(document).ready(function()
{
	$("#but").click(function()
	{	
	
	var departement = $('#dpt').val();
		
		$.get('tabsearch.php',{ dpt : departement}, affiche)
			.error( function(){ alert("Le fichier PHP est introuvable.") ; })
	}) ;
	
	
	
	$("#nom").click(function()
	{
	var nom = $('#idt').val();
	
		$.get('searchname.php',{ name : nom}, affiche)
			.error( function(){ alert("Le fichier PHP est introuvable.") ; })
	});
});
