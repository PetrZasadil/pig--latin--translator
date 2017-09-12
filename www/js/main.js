$( document ).ready(function() {
        $( '.input' ).keypress(function( event ) {
        var autotranslate = $('input[type="checkbox"]').prop('checked');
        if(autotranslate){
            switch (event.which){
            case 32:
                var input = $(this).val();
                $.ajax({
                   type: 'POST',
                   data: {input:input, template:'AutoTranslate'},
                   url: 'index.php',
                   dataType: 'html',
                   success: function (text){
                       $( '.input' ).val(text + ' ');
                   }
                });
                break;
            case 13:
                //....
                break;
            }
        }
        
    });
});