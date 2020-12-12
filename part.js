$(document).ready(function(){
  
  $.get('mouth.pp' ,function(data){

console.log(data);  
    
       }).fail(function(){

 var tr=document.getElementById('sem').innerHTML="<h1>please check your status</h1>";


       });

$('#female').click(function(){
       $.post('hy.php',function(data){

        document.getElementById('sem').innerHTML="<h1>please thanks</h1>";
            
               }).fail(function(){
        
       document.getElementById('sem').innerHTML="<h1>please check your status</h1>";
        
        
               });

              });
      });