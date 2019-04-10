$(document).ready(function () {
    /*
     * Generate canonical name for service title
     */
    $('#scentmarketing-title').keyup(function () {
        $('#scentmarketing-canonical_name').val(slug($(this).val()));
    });

    /*
     * Generate canonical name for blog title
     */
    $('#blogs-title').keyup(function () {
        $('#blogs-canonical_name').val(slug($(this).val()));
    });

    $('#recipients-recipient_name').keyup(function () {
        $('#recipients-canonical_name').val(slug($(this).val()));
    });

});
var slug = function (str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}


