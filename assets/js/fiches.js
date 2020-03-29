function ajaxSearch(){
    var input_data = $('#search_data').val();

    if (input_data.length === 0)
    {
        $('#ficheParCateg').show();
        $('#autoSuggestionsList').hide();
    }
    else {
        var post_data = {
            'search_data': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Fiches/autocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                if (data.length > 0) {
                    $('#ficheParCateg').hide();
                    $('#autoSuggestionsList').show();                                
                    $('#autoSuggestionsList').html(data);
                }
            }
        });
    }
}