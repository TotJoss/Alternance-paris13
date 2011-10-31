function affiche(reponse)
{
	
	$('table').append(reponse);
}

$(document).ready(function()
{
	$("#but").click(function()
	{	
	var departement = $('#dpt').val();
	//alert(departement);
	    $('td').remove();
		$.get('tabsearchE.php',{ dpt : departement}, affiche)
			.error( function(){ alert("Le fichier PHP est introuvable.") ; })
	}) ;
	
	
	$("#nom").click(function()
	{	
	
    $('td').remove();
	var nom = $('#idt').val();
	
		$.get('tabsearchNE.php',{ idt : nom}, affiche)
			.error( function(){ alert("Le fichier PHP est introuvable.") ; })
	}) ;
	
	$("#reset").click(function()
	{
	var typ = 'entreprise';
	
		$.get('reset.php',{ type : typ}, affiche)
			.error( function(){ alert("Le fichier PHP est introuvable.") ; })
	});
	
});
