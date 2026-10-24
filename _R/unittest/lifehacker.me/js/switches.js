function switchto(elem)
{
	document.getElementById('crnrstn').style.display = document.getElementById('wethrbug').style.display = document.getElementById('css_validator').style.display = document.getElementById('covid').style.display = document.getElementById('eVifweb').style.display = document.getElementById('j5_stache').style.display = 'none';
	document.getElementById(elem).style.display = 'inline';
	if (elem == 'crnrstn')
	{
		triangle_margin = '10px 54px 0 0';
	}
	else if (elem == 'wethrbug')
	{
		triangle_margin = '10px 258px 0 0';
	}
	else if (elem == 'css_validator')
	{
		triangle_margin = '10px 440px 0 0';
	}
    else if (elem == 'covid')
    {
        triangle_margin = '10px 580px 0 0';
    }
	else if (elem == 'eVifweb')
	{
		triangle_margin = '10px 710px 0 0';
	}
	else if (elem == 'j5_stache')
	{
		triangle_margin = '10px 800px 0 0';
	}
	else
	{
		triangle_margin = '10px 54px 0 0';
	}
	document.getElementById('triangle').style.margin = triangle_margin;
}