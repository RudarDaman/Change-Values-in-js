<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CART</title>
<style type="text/css">
    .box{
        padding: 20px 5px;
        display: none;
        margin-top: 20px;
        border: 1px dotted #000;
    }
</style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="shirt"){		
            $(".shirt").toggle();
        }
        if($(this).attr("value")=="jeans"){
            $(".jeans").toggle();
        }
        if($(this).attr("value")=="tshirt"){
            $(".tshirt").toggle();
        }
		if($(this).attr("value")=="shirt1"){		
            $(".shirt1").toggle();
        }
        if($(this).attr("value")=="jeans1"){
            $(".jeans1").toggle();
        }
        if($(this).attr("value")=="tshirt1"){
            $(".tshirt1").toggle();
        }
    });
});

		function calculate1() {
			var result1 = document.getElementById('result1');
			var result4 = document.getElementById('result4');			
			var q1 = document.getElementById('q1').value;	
			var myResult4 = Number(result4.value) - Number(result1.value);
			var p1 = 10;
			var myResult1 = q1 * p1;
			result1.value = myResult1;
			myResult4 += myResult1;
			result4.value = myResult4;			
		}
		function calculate2() {
			var result2 = document.getElementById('result2');
			var result4 = document.getElementById('result4');		
			var q2 = document.getElementById('q2').value;
			var myResult4 = Number(result4.value) - Number(result2.value);
			var p2 = 5;
			var myResult2 = q2 * p2;
			result2.value = myResult2;
			myResult4 += myResult2;
			result4.value = myResult4;		
		}
		function calculate3() {
			var result3 = document.getElementById('result3');
			var result4 = document.getElementById('result4');		
			var q3 = document.getElementById('q3').value;
			var myResult4 = Number(result4.value) - Number(result3.value);
			var p3 = 15;
			var myResult3 = q3 * p3;
			result3.value = myResult3;
			myResult4 += myResult3;
			result4.value = myResult4;		
		}
		function calculate5() {
			var result5 = document.getElementById('result5');
			var result4 = document.getElementById('result4');			
			var q5 = document.getElementById('q5').value;	
			var myResult4 = Number(result4.value) - Number(result5.value);
			var p5 = 30;
			var myResult5 = q5 * p5;
			result5.value = myResult5;
			myResult4 += myResult5;
			result4.value = myResult4;			
		}
		function calculate6() {
			var result6 = document.getElementById('result6');
			var result4 = document.getElementById('result4');		
			var q6 = document.getElementById('q6').value;
			var myResult4 = Number(result4.value) - Number(result6.value);
			var p6 = 25;
			var myResult6 = q6 * p6;
			result6.value = myResult6;
			myResult4 += myResult6;
			result4.value = myResult4;		
		}
		function calculate7() {
			var result7 = document.getElementById('result7');
			var result4 = document.getElementById('result4');		
			var q7 = document.getElementById('q7').value;
			var myResult4 = Number(result4.value) - Number(result7.value);
			var p7 = 20;
			var myResult7 = q7 * p7;
			result7.value = myResult7;
			myResult4 += myResult7;
			result4.value = myResult4;		
		}
		function calc1(){
			if(!document.getElementById('item1').checked)//hide
			{
				var result1 = document.getElementById('result1');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result1.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q1 = Number(document.getElementById('q1').value);
				if(q1>0)
				{
					var result1 = document.getElementById('result1');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result1.value);
					result4.value = myResult4;
				}
			}
		}
		function calc2(){
			if(!document.getElementById('item2').checked)//hide
			{
				var result2 = document.getElementById('result2');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result2.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q2 = Number(document.getElementById('q2').value);
				if(q2>0)
				{
					var result2 = document.getElementById('result2');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result2.value);
					result4.value = myResult4;
				}
			}
		}
		function calc3(){
			if(!document.getElementById('item3').checked)//hide
			{
				var result3 = document.getElementById('result3');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result3.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q3 = Number(document.getElementById('q3').value);
				if(q3>0)
				{
					var result3 = document.getElementById('result3');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result3.value);
					result4.value = myResult4;
				}
			}
		}
		function calc5(){
			if(!document.getElementById('item5').checked)//hide
			{
				var result5 = document.getElementById('result5');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result5.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q5 = Number(document.getElementById('q5').value);
				if(q5>0)
				{
					var result5 = document.getElementById('result5');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result5.value);
					result4.value = myResult4;
				}
			}
		}
		function calc6(){
			if(!document.getElementById('item6').checked)//hide
			{
				var result6 = document.getElementById('result6');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result6.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q6 = Number(document.getElementById('q6').value);
				if(q6>0)
				{
					var result6 = document.getElementById('result6');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result6.value);
					result4.value = myResult4;
				}
			}
		}
		function calc7(){
			if(!document.getElementById('item7').checked)//hide
			{
				var result7 = document.getElementById('result7');
				var result4 = document.getElementById('result4');
				var myResult4 = Number(result4.value) - Number(result7.value);
				result4.value = myResult4;
			}
			else//show
			{
				var q7 = Number(document.getElementById('q7').value);
				if(q7>0)
				{
					var result7 = document.getElementById('result7');
					var result4 = document.getElementById('result4');
					var myResult4 = Number(result4.value) + Number(result7.value);
					result4.value = myResult4;
				}
			}
		}
</script>
</head>
<body>
	<div align="center">Total Price <form method="post" action="checkout.php"><input name="price" id="result4" type="number" min="0" value="0" readonly /><button  type="submit"  value="Submit">Submit</button></form></div>
		<hr>
		<div class="row" style="width:100%;">
			<div align="left" style="padding:1.5em;">Category A:</div>
			<div class="col-md-4">
				<label><input type="checkbox" id="item1" value="shirt" onclick="calc1()"> shirt</label><br>
				<div class="shirt box">
					<input id="q1" type="number" min="0" oninput="calculate1()"/>
					x 10 =
					<input id="result1" value="0" readonly />
				</div>
			</div>
			<div class="col-md-4">
				<label><input type="checkbox" id="item2" value="jeans" onclick="calc2()"> jeans</label><br>
				<div class="jeans box">
					<input id="q2" type="number" min="0" oninput="calculate2()"/>
					x 5 =
					<input id="result2" value="0" readonly />
				</div>
			</div>
			<div class="col-md-4">
				<label><input type="checkbox" id="item3" value="tshirt" onclick="calc3()"> tshirt</label>
				<div class="tshirt box">
					<input id="q3" type="number" min="0" oninput="calculate3()"/>
					x 15 =
					<input id="result3" value="0" readonly />
				</div>
			</div>
		</div>
		<hr>
		<div class="row" style="width:100%;">
			<div align="left" style="padding:2em;">Category B:</div>			
			<div class="col-md-4">
				<label><input type="checkbox" id="item5" value="jeans1" onclick="calc5()"> jeans1</label><br>
				<div class="jeans1 box">
					<input id="q5" type="number" min="0" oninput="calculate5()"/>
					x 30 =
					<input id="result5" value="0" readonly />
				</div>
			</div>
			<div class="col-md-4">
				<label><input type="checkbox" id="item6" value="tshirt1" onclick="calc6()"> tshirt1</label>
				<div class="tshirt1 box">
					<input id="q6" type="number" min="0" oninput="calculate6()"/>
					x 25 =
					<input id="result6" value="0" readonly />
				</div>
			</div>
			<div class="col-md-4">
				<label><input type="checkbox" id="item7" value="shirt1" onclick="calc7()"> shirt1</label><br>
				<div class="shirt1 box">
					<input id="q7" type="number" min="0"  oninput="calculate7()"/>
					x 20 =
					<input id="result7" value="0" readonly />
				</div>
			</div>
		</div>
		<hr>
	
    
    
    
</body>
</html>                                		