<button id="logout" onclick="logout()" >Выход</button>
<h3 id="hello"> Вы вошли как <span id="name"> <?php echo $name; ?></span>.</h3>
<p>Игра до 4-х знаков подряд в строке или столбце.
Диагонали не учитаваются</p>

<div id="tt_area">

	<input type="text" id="status" disabled />
	<div id="field">
		
	</div>
</div>

<div id="info">info</div>

<script type="text/javascript" src="tt.js"></script>