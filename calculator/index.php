<!DOCTYPE HTML>
<html>
    <head>
        <title>Calculadora</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script type="text/javascript" src="script.js"> </script>
		 <link rel="stylesheet" href="styles.css">
    </head>
<body>

<h1> Calculadora </h1> 
<!-- dynamic content will be here -->


<!--
<button> Hide Header </button>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1").hide();
    });
}); 
</script> -->


<?php

    
	
    require_once '/Model/calculadora.php';
	
	$calculadora = new Calculadora();
	
	$mostra = '0';
	$calculadora->setMostra($mostra);
	
	 // echo "javascript mostra: ".$_POST['var1'];
	
	
	$strOperation = $calculadora->getStrOperation();
	// echo "Op: ".$strOperation."&nbsp&nbsp&nbsp&nbsp&nbsp Mostra: ".$mostra."&nbsp&nbsp&nbsp&nbsp";
    
	$calculadora->operate($strOperation);
	
	
 ?>
 

 <div class='calc1'>
 <div class='calc2'>
 <table>
 <tr>
   <td colspan='4'>
    <div id='mostra'>
	  <h2 id='mostraheader'>
	        <?php 
				    echo  '0'; 
				 
		    ?>
	  </h2>
	</div>    
   </td>
 </tr>
 <tr>
	<td> <button id='ce' name='ce' type='button' onclick='bceClick()' value='0'>CE</button> </td>
	<td> <button id='c' name='c' type='button' onclick='bcClick()' value='7'>C</button> </td>
	<td> <button id='plusminus' name='plusminus' type='button' onclick='bpmClick()' value='-'>+/-</button> </td>
	<td> <button id='be' name='be' type='button' onclick='bresultClick()'>=</button> </td>
 </tr>
 <tr>
	<td> <button id='b7' name='b7' type='button' onclick='b7Click()' value='7'>7</button> </td>
	<td> <button id='b8' name='b8' type='button' onclick='b8Click()' value='8'>8</button> </td>
	<td> <button id='b9' name='b9' type='button' onclick='b9Click()' value='9'>9</button> </td>
	<td> <button id='bdivide' name='bdivide' type='button' onclick='bdivideClick()'>/</button> </td>
 </tr>
 <tr>
	<td> <button id='b4' name='b4' type='button' onclick='b4Click()' value='4'>4</button> </td>
	<td> <button id='b5' name='b5' type='button' onclick='b5Click()' value='5'>5</button> </td>
	<td> <button id='b6' name='b6' type='button' onclick='b6Click()' value='6'>6</button> </td>
	<td> <button id='bmultiply' name='bmultiply' type='button' onclick='bmultiplyClick()'>X</button> </td>
 </tr>
 <tr> 
    <td> <button id='b1' name='b1' type='button' onclick='b1Click()' value='1'>1</button> </td>
	<td> <button id='b2' name='b2' type='button' onclick='b2Click()' value='2'>2</button> </td>
	<td> <button id='b3' name='b3' type='button' onclick='b3Click()' value='3'>3</button> </td>
	<td> <button id='bsubtract' name='bsubtract' type='button' onclick='bsubtractClick()'>-</button> </td>
 </tr>
 <tr>
	<td> <button id='b0' name='b0' type='button' onclick='b0Click()' value='0'>0</button> </td>
	<td> <button id='bcomma' name='bcomma' type='button' onclick='bcommaClick()' value='.'>.</button> </td>
	<td> <button id='bpercent' name='bpercent' type='button' onclick='bopClick()'>%</button> </td>
	<td> <button id='badition' name='badition' type='button' onclick='baddClick()'>+</button> </td>
 </tr>
 </table>
 </div> 
 </div>


 <!-- <script>
 
 
 var mostra = '0';
 var aux = '0';
 var operation = 'no operation';
 var limitMostra = 5;
 var limitLength= false;
 var numberPositive = true;
 document.getElementById('mostraHeader').innerHTML(mostra);
 
 function checkLenghtMostra(limitMostra){

	if(mostra.length > limitMostra || aux.length > limitMostra) {
	   limitLength = true;
	   alert("Atingiu o limite máximo de digitos: "+String(limitMostra));
	}
 }
    
  function b1Click(){ 
   
   var value = document.getElementById('b1').value;
   
   
   	   if(mostra=='0'){
		  mostra=value;    
	   }else{
		  mostra= mostra.concat(value);
	   }
   

   document.getElementById('mostraheader').innerHTML = mostra;
   
   checkLenghtMostra(limitMostra);
   
  }
 
  function b2Click(){ 
   
    var value = document.getElementById('b2').value;
        
    if(mostra=='0'){
	  mostra=value;    
    }else{
      mostra= mostra.concat(value);
    }
	
   document.getElementById('mostraheader').innerHTML = mostra;
   
   checkLenghtMostra(limitMostra);
   
  } 
 
  function b3Click(){ 
   
   var value = document.getElementById('b3').value;
   
   if(mostra=='0'){
	 mostra=value;    
   }else{
     mostra= mostra.concat(value);
   }
   
   document.getElementById('mostraheader').innerHTML = mostra;
   
   checkLenghtMostra(limitMostra);
   
 }

  function b4Click(){ 
   
   var value = document.getElementById('b4').value;
   
   
   if(mostra=='0'){
	 mostra=value;    
   }else{
     mostra= mostra.concat(value);
   }
   
   checkLenghtMostra(limitMostra);
  
   document.getElementById('mostraheader').innerHTML = mostra;
   
   
 }
 
  function b5Click(){ 
   
    var value = document.getElementById('b5').value;
 
      if(mostra=='0'){
	    mostra=value;    
      }else{
        mostra= mostra.concat(value);
      }
	
    document.getElementById('mostraheader').innerHTML = mostra;
	
	checkLenghtMostra(limitMostra);
  }

  function b6Click(){ 
   
   var value = document.getElementById('b6').value;
   checkLenghtMostra(limitMostra);
   
   
     if(mostra=='0'){
	   mostra=value;    
     }else{
       mostra= mostra.concat(value);
     }
   
   document.getElementById('mostraheader').innerHTML = mostra;
  }

  function b7Click(){ 
   
   var value = document.getElementById('b7').value;
   
   checkLenghtMostra(limitMostra);
   
   
     if(mostra=='0'){
	   mostra=value;    
     }else{
       mostra= mostra.concat(value);
     }
   
   document.getElementById('mostraheader').innerHTML = mostra;
 }

  function b8Click(){ 
    
   var value = document.getElementById('b8').value;
   
   checkLenghtMostra(limitMostra);
   
   
     if(mostra=='0'){
	   mostra=value;    
     }else{
       mostra= mostra.concat(value);
     }
   
   document.getElementById('mostraheader').innerHTML = mostra;
  }

  function b9Click(){ 
   
    var value = document.getElementById('b9').value;
    
	checkLenghtMostra(limitMostra);
   
    
        
      if(mostra=='0'){
	    mostra=value;    
      }else{
        mostra= mostra.concat(value);
      }
	
    document.getElementById('mostraheader').innerHTML = mostra;
  }

  function b0Click(){ 
   
   var value = document.getElementById('b0').value;
   
   checkLenghtMostra(limitMostra);
   
   
     if(mostra=='0'){
	   mostra=value;    
     }else{
       mostra= mostra.concat(value);
     }
   
   document.getElementById('mostraheader').innerHTML = mostra;
  }
  
  function bcommaClick(){ 
   
   var value = document.getElementById('bcomma').value;
   
     checkLenghtMostra(limitMostra);
   
     if(mostra=='0'){
	   mostra=value;    
     }else{
       mostra= mostra.concat(value);
     }
   
   document.getElementById('mostraheader').innerHTML = mostra;
  }
  
 
   function bpmClick(){
	
	
    if(numberPositive == true){
	   
	   if(mostra != '0'){
	    mostra = '-'.concat(mostra);
	   } 
       numberPositive = false; 
    
	}else{
		
	    mostra = mostra.replace(/-/gi,'');
		
	    numberPositive = true;	 		   
	}	
	
	 document.getElementById('mostraheader').innerHTML = mostra; 
  }
  
  
  function baddClick(){
	 
	if(operation=='result'){
		aux='0';
	}
	if(aux != '0'){
		var sum = floatval(aux) + floatval(mostra);
		mostra = String(sum);
		document.getElementById('mostraheader').innerHTML = mostra;
	}
   	aux=mostra;
	mostra='0';
	operation = 'sum';
    
  }
  
  function bsubtractClick(){
	
    if(operation=='result'){
		aux='0';
	}	
	if(aux != '0'){
		var subtraction = floatval(aux) - floatval(mostra);
		mostra = String(substraction);
		document.getElementById('mostraheader').innerHTML = mostra;
	}  
	aux=mostra;
	mostra='0';
	operation='subtract';
	 
  }
  
  function bmultiplyClick(){
	 
	if(operation=='result'){
		aux='0';
	}
	if(aux != '0'){
		var multiplication = floatval(aux) * floatval(mostra);
		mostra = String(multiplication);
		document.getElementById('mostraheader').innerHTML = mostra;
	}  
	aux=mostra;
	mostra='0';
	operation='multiply';
  }
  
  function bdivideClick(){
	
    if(operation=='result'){
		aux='0';
	}	

	if(aux != '0'){
		var divition = floatval(aux) / floatval(mostra);
		mostra = String(divide);
		document.getElementById('mostraheader').innerHTML = mostra;
	}
	aux=mostra;
	mostra='0';
	operation='divide';
	
  }
  
  function bresultClick(){
	
    switch(operation){
	  
      case 'sum':
	     var sum = parseFloat(mostra) + parseFloat(aux);
         mostra = String(sum); 	  
		 break;
      case 'subtract':
         var subtraction = parseFloat(aux) - parseFloat(mostra);
		 mostra = String(subtraction); 	  
		 break;		
		 
      case 'multiply':
          var multiplication = parseFloat(aux) * parseFloat(mostra);
		  mostra = String(multiplication);
		  break;		
		  
      case 'divide':
	      if(mostra != '0'){
            var divition = parseFloat(aux) / parseFloat(mostra);
		    mostra = String(divition);
         }else{
		    alert("Não é possível dividir por '0'.") 
		 }			 
  		 break;
	}	
	operation = 'result';
	document.getElementById('mostraheader').innerHTML = mostra;
  }
  
  function bceClick(){
	  
	mostra='0';
	document.getElementById('mostraheader').innerHTML = mostra;
  }
  
  function bcClick(){
	  
	mostra='0';
	aux='0';
	document.getElementById('mostraheader').innerHTML = mostra;
  }
  
  
  
</script> -->
 
 
</body>
</html>

