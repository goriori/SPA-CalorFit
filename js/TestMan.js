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


const progressbarThumb = document.querySelector('.progressbar__thumb');
const progressbarPercent = document.querySelector('.progressbar__percent > tspan');
const progressbarText = document.querySelector('.progressbar__info > tspan');

function onUpdateGsap() {
    const percent = gsap.getProperty(progressbarThumb, '--percent');

    if (percent == 100) {
        progressbarText.textContent = 'Готово';
        $('.loading__svg').css('display', 'none');
        $('.pay').css('display', 'block');
        $('.header').css('display', 'block');
    } else if (percent > 60 && percent < 99) {
        progressbarText.textContent = 'Подборка подходящих рецептов';
    } else if (percent > 40 && percent < 60) {
        progressbarText.textContent = 'Анализ Вашего диетического профиля';
    } else if (percent > 0 && percent < 40) {
        progressbarText.textContent = 'Обработка Ваших ответов...'
    }
    progressbarPercent.textContent = Math.round(percent);
}
progressbarPercent.textContent = Math.round(percent);
const tl = gsap.timeline({ defaults: { duration: 5, ease: 'linear' } })
    .to(progressbarThumb, { '--percent': 100, onUpdate: onUpdateGsap });

