<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<div class="center">
<form action="script.php" method="post">
<div ><p class="inline-block">Введите значение x</p>
<input class="inline-block w25 border-input" type="text" name="x" ></div>
<div ><p class="inline-block">Введите значение n</p>
<input class="inline-block w25 border-input" type="text" name="n" ></div>
<button  >Вычислить</button>
</form>
</div>
<style type="text/css">
.inline-block{
	display:  inline-block;
}
.w25{
	width: 25px;

}
.border-input {
     outline: 0;
  
}
.border-input :active,.border-input  :hover, .border-input :focus {
    outline: 0;
    outline-offset: 0;
}
.center{

	   position: absolute;
    top:  50%;
    left: 50%;
    transform: translate(-50%,-50%);

}
</style>
</body>
</html>