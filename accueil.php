<?php
include_once "header.html";
echo '<aside>
<p>choisisez un lien</p> <a href="http://localhost/GL/modif.php"><button type="button">Modifier les parametres </button> </a> <br /> ';
echo '<a href="addusers.php"><button type="button">ajouter un utilisateur</button></a> <br /> ';
echo '<a href="addStudent.php"><button type="button">ajouter un étudiant</button></a> <br /> ';
echo '<a href="addcompany.php"><button type="button">ajouter une entreprise</button></a> <br /> ';
echo '<a href="etudiants.php"><button type="button">liste étudiant</button></a> <br /> ';
echo '<a href="entreprise.php"><button type="button">Liste entreprises</button></a>  <br /> </aside>';
include_once "footer.html";
?>