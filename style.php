<?php
header("Content-type: text/css");
$font_family = 'Tahoma';
$font_size = '0.7em';
$border = '1px solid';
?>

body
{
background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
background-size: 400% 400%;
animation: gradient 15s ease infinite;
width: 100vw;
height: 100vh;
margin: 0;
}

@keyframes gradient
{
0%
{
background-position: 0% 50%;
}
50%
{
background-position: 100% 50%;
}
100%
{
background-position: 0% 50%;
}
}

h1
{
font-family: <?=$font_family?>;
font-size: 100px;
text-align: center;
color: #FFF;
}

h3
{
font-family: <?=$font_family?>;
font-size: 24px;
text-align: center;
color: #FFF;
}

input[type=text]
{
font-family: <?=$font_family?>;
font-size: 16px;
text-align: center;
background: #FFF;
color: #000;
min-width: 30%;
max-width: 30%;
}

input[type=number]
{
font-family: <?=$font_family?>;
font-size: 16px;
text-align: center;
background: #FFF;
color: #000;
width: 30%;
}

input[type=password]
{
font-family: <?=$font_family?>;
font-size: 16px;
text-align: center;
background: #FFF;
color: #000;
width: 30%;
}

input[type=date]
{
font-family: <?=$font_family?>;
font-size: 16px;
text-align: center;
background: #FFF;
color: #000;
width: 30%;
}

p
{
font-family: <?=$font_family?>;
font-size: 16px;
text-align: center;
width: 100%;
color: #FFF;
}

table
{
font-family: <?=$font_family?>;
font-size: 24px;
margin: 8px;
background-color:rgba(255, 255, 255, 0.25);;
color:rgba(255, 255, 255, 1);
border-collapse: collapse;
width: 100%;
table-align: center;
}

th
{
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
background: #FFF;
color: #FFF;
table-align: center;
border-collapse: separate;
border: <?=$border?> #000;
}

td
{
border: 1px solid #FFF;
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
padding-top: 10px;
padding-bottom: 10px;
padding-left: 10px;
padding-right: 10px;
text-align: center;
table-align: center;
}

button
{
display: inline-block;
margin: 2;
padding: 0.75rem 1rem;
border: 0;
border-radius: 0.320rem;
background-color: #FFF;
color: #555;
text-decoration: none;
font-weight: 700;
font-size: 1rem;
line-height: 1.5;
font-family: <?=$font_family?>;
cursor: pointer;
-webkit-appearance: none;
-webkit-font-smoothing: antialiased;
min-width: 250px;
max-width: 250px;
}

button:hover
{
background-color:rgba(255, 255, 255, 0.5);;
color:rgba(255, 255, 255, 1);
}

form
{
font-family: <?=$font_family?>;
font-size: 24px;
table-align: center;
}
