<?php
	require_once('../template/header.html');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	function izabrano(selektovan){
		var x="";
		switch(selektovan.value){
			case "1":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/jagodina?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "2":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/kragujevac?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "3":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/kraljevo?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "4":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/dimitrovgrad?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "5":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/leskovac?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "6":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/nis?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "7":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/novi-sad?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "8":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/loznica?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "9":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/novi-pazar?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;
			case "10":
			x='<iframe src="https://naslovi.net/vremenska-prognoza/widget/pancevo?bgcolor=FFFFFF&textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>';break;		
		}
		document.getElementById("paragraf").innerHTML = x;
	}
	
</script>
<div id="pocetna">
	<select onchange="izabrano(this)" multiple>
		<option value="1">Јагодина</option>
		<option value="2">Крагујевац</option>
		<option value="3">Краљево</option>
		<option value="4">Димитроград</option>
		<option value="5">Лесковац</option>
		<option value="6">Ниш</option>
		<option value="7">Нови Сад</option>
		<option value="8">Лозница</option>
		<option value="9">Нови Пазар</option>
		<option value="10">Панчево</option>
	</select><br>
	<p id="paragraf"></p>
	<br>
	<iframe src="https://naslovi.net/vremenska-prognoza/widget/beograd?textcolor=000000" frameborder="0" height="70" scrolling="no" width="160"></iframe>
</div>
</body>
</html>