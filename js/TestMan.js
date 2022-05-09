$(function () {
    $('#input_kg').on('input', function () {
        if ($('#kg').attr('class') == 'kg' || $('#kg').attr('class') == 'kg activeRight') {
            $CheckKG = $('#input_kg').val();
            if ($CheckKG < 25 || $CheckKG > 300) {
                $('.continue1').removeClass('active');
            } else if ($CheckKG >= 25 && $CheckKG <= 300) {
                $('.continue1').addClass('active');
            }

        } else if ($('#kg1').attr('class') == 'kg1 activeLeft') {

            $CheckPH = $('#input_kg').val();
            if ($CheckPH < 55 || $CheckPH > 661) {
                $('.continue1').removeClass('active');
            } else if ($CheckPH >= 55 && $CheckPH <= 661) {
                $('.continue1').addClass('active');
            }
        }
    });
});