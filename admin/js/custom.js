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
    $('#productcategory-category').keyup(function () {
        $('#productcategory-canonical_name').val(slug($(this).val()));
    });
    $('#products-product_name').keyup(function () {
        $('#products-canonical_name').val(slug($(this).val()));
    });
    $('#products-colour').change(function () {
        var item = $(this).val();
        $("#products-colours").append("<option value='" + item + "' selected>" + item + "</option>");
        $('#products-colours').trigger('change');
    });

    $('.product_image').click(function () {
        var id = this.id;
        $.ajax({
            url: 'ajax_imgdelete',
            type: "post",
            data: {image: id},
            success: function (data) {
                var $data = JSON.parse(data);
                if ($data.msg == "success") {
                    $('#' + $data.id).hide();
                } else {
                    alert($data.title);
                }
            }, error: function () {
                alert('Image Cannot be delete');
            }
        });
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


