$(document).ready(function(){

    $("#frmsearchForm-search").live('keydown.autocomplete', function(){
        $(this).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "?do=searchContainer-Autocomplete",
                    data: "text="+request.term,
                    dataType: "json",
                    success: function(data) {
                        if (data !== null) {
                            response( $.map( data, function( item ) {
                                return {
                                    label: item
                                }
                            }));
                        }
                    }
                });
            },
            minLength: 2
        });
    });
});