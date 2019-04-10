$(document).ready(function () {
    /*
     * Contact enquiry form submition
     * it will store data into database and also send a mail to tha admin
     */
    $(document).on('submit', '.contact-enquiry', function (e) {
        e.preventDefault();
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: homeUrl + 'site/contact-enquiry',
            data: str,
            success: function (data)
            {
                if (data == 1) {
                    $('.contact-enquiry').prepend('<div id="email-alert" style="">Your Contact Enquiry Send Successfully</div>');
                }
                $('#name').val("");
                $('#email').val("");
                $('#phone').val("");
                $('#company').val("");
                $('#message').val("");
                $('#email-alert').delay(1500).fadeOut('slow');
                $(".validation").remove();
            }
        });
    });

    /*
     * News letter form submition
     * it will store data into database and also send a mail to tha admin
     */

    $(document).on('submit', '.news-letter', function (e) {
        e.preventDefault();
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: homeUrl + 'site/news-letter',
            data: str,
            success: function (data)
            {
                if (data == 1) {
                    $('.news-letter').append('<div id="email-alert" style="margin-top:10px;">Your Request Send Successfully</div>');
                } else if (data == 2) {
                    $('.news-letter').append('<div id="email-alert" style="margin-top:10px;">Already Send Rrequest</div>');
                }
                $('#news-email').val("");
                $('#email-alert').delay(1000).fadeOut('slow');
            }
        });
    });

});