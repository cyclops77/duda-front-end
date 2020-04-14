<html lang="en">
<head>
    <title>Jquery - input tags plugin example</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
</head>
<body>

	<script type="text/javascript">
$(document).ready(function() {
	$("#gas").click(function(){
	   setInterval(function () {
            start();
       }, 0); 
	});
});

function animasiKOnten(direction) {  
    var batasAnimasi = $('.container').height() - $('.content').height()-100;
    $('.content').animate({ "marginTop": (batasAnimasi)+ "px" }, 1000);
}
function down(){
    animasiKOnten("down")
}
function start(){
 setTimeout(function () {
    down();
 });
}    
	</script>

<style type="text/css">
	.container { height:250px; background:red; padding:0 10px; overflow:hidden; }
.content { background:#eee; }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="container">
    <div class="content">
        <p>string1</p>
        <p>string</p>
        <p>string</p>
        <p>string</p>
        <p>string</p>
        <p>string</p>
        <p>string0</p>
        <p>string1</p>
        <p>string2</p>
        <p>string3</p>
        <p>string4</p>
    </div>
    <textarea name="" id="" cols="80" rows="10"></textarea>
</div>
<button id="gas">GAS</button>



</body>
</html>