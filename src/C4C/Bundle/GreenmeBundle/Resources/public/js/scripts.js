function showRequest(formData, jqForm, options){
    
}
function showResponse(responseText, statusText, xhr, $form){
    $('.form').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Felicidades! te has registrado exitosamente</div><a href="http://greenme.co/dashboard" class="form-btn">Empezar</a>');
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
        
    if($('#registration').length)
        $('#registration').ajaxForm(options);
        
        if($('#categories').length){
            $.getJSON('http://greenme.co/category.json', function(data){
                $('#categories').append('<ul class="categories row-fluid"></ul>');
                $.each(data, function(index, category){
                    $('#categories ul').append('<li class="span1 offset1"><a id="'+category.icon+'" class="category" href="http://greenme.co/subcategory.json?id='+category.id+'">'+category.name+'</a></li>');
//                    $('a.category').bind('click', function(){
//                        $.getJSON()
//                    });
                });
            });
        }
    

});
