function Request()
{	
	var bool = true;
	if (document.getElementsByName("input1")[0].value == ""||document.getElementsByName("input1")[0].value == "Имя")
	{
		bool = false;
		alert("Введите ваше имя!");
		document.getElementsByName("input1")[0].style.borderLeftColor = "rgb(133, 0, 0)";
	}

	if (document.getElementsByName("input2")[0].value == ""||document.getElementsByName("input2")[0].value == "Номер телефона")
	{
		bool = false;
		alert("Введите ваш номер!");
		document.getElementsByName("input2")[0].style.borderLeftColor = "rgb(133, 0, 0)";
	}

	if (bool) 
	{
		alert("Вы зарегестрированы");
		window.scrollTo(0, 0);
	}
}

function Clear(el)
{
	if (el.value=="Имя"||el.value=="Номер телефона")
	{
		el.value="";
	}
}

function Show(x)
{
	var elem2 = document.getElementsByName("ShowButton"+x);


	var elem = document.getElementsByName("Hidden");
	if(elem[x-1].style.display == "block")
	{
		elem[x-1].style.display = "none";
		elem2[0].style.backgroundImage = "url(img/2.png)";
	}
	else{
		for (var i = elem.length-1; i >= 0; i--)//закрывашка
		{
			elem[i].style.display = "none";
			document.getElementsByName("ShowButton"+(i+1))[0].style.backgroundImage = "url(img/2.png)"
		}
		elem[x-1].style.display = "block";
		elem2[0].style.backgroundImage = "url(img/3.png)";
	}
}