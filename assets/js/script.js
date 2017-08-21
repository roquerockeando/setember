$(document).ready(function(){
    $('ul.tabs').tabs();
    
    $('#nickForm').on('submit', function(e){
    	e.preventDefault();
    	sendForm();
    });
