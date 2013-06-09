function showRequest(formData, jqForm, options){
    
}
function showResponse(responseText, statusText, xhr, $form){
    
}
$(document).ready(function(){
    if($('#birthDate').length)
        $('#birthDate').datepicker();
    
    $("#registration").submit(function(e) {
    	var data = $(this).serialize();
        var options ={
            target:        '.form',    
            beforeSubmit:  showRequest,  
            success:       showResponse 
        };
        $('.form').ajaxForm(options);
    });
    

});
