<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Langtons Ant</title>
</head>
	<body>
		<canvas id="mycanvas" height="500" width="500"></canvas>
	<style>
	 	* { 
	 	padding: 0;
	    margin: 0; 
	     }

	canvas { 
		background: white;
		display: block;
		margin: 0 auto;
		border: 4px grey solid;
	    }
</style>
<script>
var canvas = document.getElementById("mycanvas");
ctx = canvas.getContext('2d');
var RIGHT = "right";
var LEFT = "left";
var UP = "up";
var DOWN = "down";
var array = new Array(canvasW);
	for(var i = 0; 1 < canvasW; i++) {
		//array[x][y] = { x: 0, y: 0 };
		array[i] = new Array(canvasW);
	}	
var canvasW = 500;
var canvasH = 500;
var direction = UP;
var rectSize = 5;
var x = canvasW / 2;
var y = canvasH / 2;
	function abdi() {
	 	if(array[x][y] === 0) {
	 		if(direction == UP) {
	 			direction = RIGHT;
	 		} else if(direction == RIGHT) {
	 			direction = DOWN;
	 		} else if(direction == DOWN) {//90 grader höger
	 			direction = LEFT;
	 		} else if(direction == LEFT) {
	 			direction = UP;
	 		}
	 	} 

	 	//if(array[x][y] === 1) {
	 	else {
	 		if(direction == UP) { // 90grader vänster
	 			direction = LEFT;
	 		} else if(direction == LEFT) {
	 			direction = DOWN;
	 		} else if(direction == DOWN) {
	 			direction = RIGHT;
	 		} else if(direction == RIGHT) {
	 			direction = UP;
	 		}

	 	if(array[x][y] === 1) {
	 		ctx.fillStyle = "#000";
			ctx.fillRect(x, y, rectSize, rectSize);  //färga rutorna
			array[x][y] = 1;
	 		}
	 		//if(array[x][y] === 0)
	 		else {
	 			ctx.fillStyle = "#FFF";
				ctx.fillRect(x, y, rectSize, rectSize);
	 			array[x][y] = 0;
	 		}

	 	if(direction == UP) { //rör skiten
	 		y = y + 1;
	 	} else if(direction == RIGHT) {
	 		x = x + 1;
	 	} else if(direction == LEFT) {
	 		x = x - 1;
	 	} else if(direction == DOWN) {
	 		y = y - 1;
	 	}

 		ctx.fillStyle="#ff0000";
        	ctx.fillRect(x, y, rectSize, rectSize);
        
	 	}
	 }
	 timer = setInterval(abdi, 5);

	//timer = setInterval(draw, 1);


</script>
</body>
</html>
