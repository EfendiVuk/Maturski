<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="nav">
        <a href="index.php">Pocetna</a>
        <a href="o_autoru.php">O autoru</a>
        <a href="uputstvo.php">Uputstvo</a>
    </div>
    <script language = "javascript" type = "text/javascript">
            var request = false;
            try
				{
					request = new XMLHttpRequest();
                }
			catch (trymicrosoft)
            {
				try
					{
						request = new ActiveXObject("Msxml2.XMLHTTP");
					}
				catch (othermicrosoft)
					{
						try
							{
								request = new ActiveXObject("Microsoft.XMLHTTP");
							}
						catch (failed)
							{
								request = false;
							}
					}
            }
			if (!request)
                alert("Error initializing XMLHttpRequest!");

            function updateDiv(person1, person2)
                {
					var url = "calc.php";
					var params = "p1=" + person1 + "&p2=" + person2;
					request.open("POST", url, true);
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.setRequestHeader("Content-length", params.length);
					request.setRequestHeader("Connection", "close");
					request.onreadystatechange = function()
                    {
						if (request.readyState == 4 && request.status == 200)
							{
								var response = request.responseText;
								document.getElementById('targetDiv').innerHTML = response + "%               ";
							}
                    }
					request.send(params);
                }

        </script>
    <div style="text-align: center;">
        <form name = "test" action = "#">
            <p>Numerolosko slaganje</p>
            <table border = "0">
                    <tbody>
                        <tr>
                            <td><span class="style1"><img src="./img/man.png" width="50" height="50" /></span> 
								<input size = "30" class = "name" name = "p1" placeholder = "Unesite ime" type = "text" />            
							</td>
							<td style = "background-image: url('img/heart.png');background-repeat:no-repeat; width: 128px; height: 128px;">
                                <div id = "targetDiv" valign="middle" align = "center">
									0%
                                </div>
                            </td>
                            <td><span class="style1"><img src="./img/woman.png" width="50" height="50" /></span>
								<input size = "30" class = "name" name = "p2" placeholder = "Unesite ime" type = "text" />
                                <br />                            
							</td>
						</tr>
                        <tr>
                            <td>Datum rodjenja<input type="date" name="begin" placeholder="dd-mm-yyyy" value=""min="1900-01-01" max="2021-12-31">
                            </td>
                            <td></td>
                            <td>Datum rodjenja<input type="date" name="begin" placeholder="dd-mm-yyyy" value=""min="1900-01-01" max="2021-12-31">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <br />
                <input onclick = "updateDiv(p1.value, p2.value)" value = "" style = "border: medium none ; background: transparent url(img/calculate.png) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding; -moz-background-inline-policy: continuous; width: 131px; height: 52px;" type = "button">
				<br />
                <br />
        </form>
    </div>
</body>

</html>