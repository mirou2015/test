<h2 align="center"> consultation de client</h2>
<table align="center" border=1  width="50%"bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF">
 <tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b>num?ro de client</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>Nom</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>Prenom</b></font></td>
<td width="5%"><font color="#FFFFFF" size='2'><b>num de telephone</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>nombre de lits</b></font></td>


<?php
include"connexion.php";
$req="select * from client ";
$ex=mysql_query($req);


while($tab=mysql_fetch_array($ex)){

echo"<tr>
<td align='center'width='35%'bgcolor='#CCCCCC' ><font  color='#333333' size='1'><b>$tab[0]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[1]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[2]</b></font></td>
<td align='center'width='35%'bgcolor='#CCCCCC' ><font  color='#333333' size='1'><b>$tab[3]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[4]</b></font></td>


</tr>";


}

?>
<?php

echo"</table>";
?>
<font color="#333333"
