  
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
  
