function showRequest(formData, jqForm, options){
    
}
function showResponse(responseText, statusText, xhr, $form){
    $('.form').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Felicidades! te has registrado exitosamente</div><a href="reg" class="form-btn">Empezar</a>');
}
$(document).ready(function(){
    if($('#birthDate').length)
        $('#birthDate').datepicker();
    
        var options ={
            target: '.form',
            type: 'POST',
            beforeSubmit:  showRequest,  
            success:       showResponse 
        };
        $('#registration').ajaxForm(options);
    

});
