
function test() {
    $('.block').css('display', 'none');
    $('.test1').css('display', 'block');
}

function changeWeightLeft() {
    $('.kg1').removeClass('activeRight');
    $('.kg1').addClass('activeLeft');
    $('#quantity1').html("ФН");
    $('#input_kg').val("");
    $('.pound_text1').css('color', '#ffff');
    $('.kg_text1').css('color', 'rgba(232, 138, 146, 1)');
}
function changeWeightRight() {
    $('.kg1').removeClass('activeLeft');
    $('#quantity1').html("КГ");
    $('.kg1').addClass('activeRight');
    $('#input_kg').val("");
    $('.pound_text1').css('color', 'rgba(232, 138, 146, 1)');
    $('.kg_text1').css('color', '#ffff');
}

function test2() {
    $('.test1').css('display', 'none');
    $('.container-block2').css('display', 'block');
}
function testphp1() {
    console.log($('#kg1').attr('class'));
}
$(function () {
    $('#input_kg').on('input', function () {
        if ($('#kg1').attr('class') == 'kg1' || $('#kg1').attr('class') == 'kg1 activeRight') {
            $CheckKG = $('#input_kg').val();
            if ($CheckKG < 25 || $CheckKG > 300) {
                $('.continue1').removeClass('active');
                } else if ($CheckKG >= 25 && $CheckKG <= 300) {
                $('.continue1').addClass('active');
                }
            
            }else if ($('#kg1').attr('class') == 'kg1 activeLeft') {

                $CheckPH = $('#input_kg').val();
                if ($CheckPH < 55 || $CheckPH > 661) {
                $('.continue1').removeClass('active');
                } else if ($CheckPH >= 55 && $CheckPH <= 661) {
                $('.continue1').addClass('active');
                }
            }
    });
});

$(function(){
    $('#height, #weight').on('input', function(){
        $CheckHeight=$('#height').val();
        $CheckWeight=$('#weight').val();
        if($CheckHeight<90 || $CheckHeight > 243 || $CheckWeight < 40 || $CheckWeight > 300){
            $('.btn2').removeClass('active');
        }else if($CheckHeight>=90 && $CheckHeight <= 243 && $CheckWeight >= 40 && $CheckWeight <= 300){
            $('.btn2').addClass('active');
        }
    });
});

function test3() {
    $('.container-block2').css('display', 'none');
    $('.gran3').css('display', 'block');

}

function test4() {
    $('.gran3').css('display', 'none');
    $('.test4').css('display', 'block');
}

function test5() {
    $('.test4').css('display', 'none');
    $('.gran5').css('display', 'block');
}

function test6() {
    $('.gran5').css('display', 'none');
    $('.panel6').css('display', 'block');
}
// =====
function test7() {
    $('.panel6').css('display', 'none');
    $('.test7').css('display', 'block');
}

function answer_1() {
    $('.answer_1').toggleClass('active');
    $('.answer_6').removeClass('active');
    continue_test();

}
function answer_2() {
    $('.answer_2').toggleClass('active');
    $('.answer_6').removeClass('active');
    continue_test();

}

function answer_3() {
    $('.answer_3').toggleClass('active');
    $('.answer_6').removeClass('active');
    continue_test();
}

function answer_4() {
    $('.answer_4').toggleClass('active');
    $('.answer_6').removeClass('active');
    continue_test();
}

function answer_5() {
    $('.answer_5').toggleClass('active');
    $('.answer_6').removeClass('active');
    continue_test();
}
function answer_6() {
    $('.answer_6').toggleClass('active');
    $('.answer_1, .answer_2, .answer_3, .answer_4, .answer_5').removeClass('active');
    continue_test();
}


function continue_test() {

    $check1 = document.getElementById('answer_1').className;
    $check2 = document.getElementById('answer_2').className;
    $check3 = document.getElementById('answer_3').className;
    $check4 = document.getElementById('answer_4').className;
    $check5 = document.getElementById('answer_5').className;
    $check6 = document.getElementById('answer_6').className;
    if ($check1 == 'answer_1 active' || $check2 == 'answer_2 active' || $check3 == 'answer_3 active' || $check4 == 'answer_4 active' || $check5 == 'answer_5 active' || $check6 == 'answer_6 active') {
        $('.continue7').addClass('active');
    }
    else {
        $('.continue7').removeClass('active');
    }

}
// ========

function test7() {
    $('.panel6').css('display', 'none');
    $('.test7').css('display', 'block');
}


function test8() {
    $('.test7').css('display', 'none');
    $('.panel8').css('display', 'block');
    if($('#input_kg').val()<$('#weight').val()){
        $kgTest=$('#weight').val()-$('#input_kg').val();
        $('.type2').html("Учитывая то, что Вы хотите набрать" + $kgTest + "кг" + ".Ваша физическая активность играет большую роль!");
    }else if($('#input_kg').val()>$('#weight').val())
        $kgTest2=$('#input_kg').val()-$('#weight').val();
        $('.type2').html("Учитывая то, что Вы хотите сбросить" + $kgTest2 + "кг" + ".Ваша физическая активность играет большую роль!");
}

function kg_text10() {
    $('.kg10').addClass('activeRight');
    $('.kg10').removeClass('activeLeft');
    $('.Stack10').html('💧2-5 стаканов(0,5-1,5)');
    $('.Stack10_1').html('💧Меньше 2 стаканов(0,5л)');
    $('.pound_text10').css('color', '#E88A92');
    $('.kg_text10').css('color', '#ffff');
}

function pound_text10() {
    $('.kg10').addClass('activeLeft');
    $('.kg10').removeClass('activeRight');
    $('.Stack10').html('💧Меньше 2 стаканов (16 унц)');
    $('.Stack10_1').html('💧2-6 стаканов (16-48 унц)');
    $('.pound_text10').css('color', '#ffff');
    $('.kg_text10').css('color', '#E88A92');
}

// =======
function test9() {
    $('.panel8').css('display', 'none');
    $('.gran9-1').css('display', 'block');
}

function test9_1() {
    $('.gran9-1').css('display', 'none');
    $('.panel9').css('display', 'block');
}

function test10() {
    $('.panel9').css('display', 'none');
    $('.container-block10').css('display', 'block');
}

function test11() {
    $('.container-block10').css('display', 'none');
    $('.gran11').css('display', 'block');
}

function test12() {
    $('.gran11').css('display', 'none');
    $('.gran12').css('display', 'block');
}

function test13() {
    $('.gran12').css('display', 'none');
    $('.test13').css('display', 'block');
}
// ======
function change_1() {
    $('.change_1').toggleClass('active');
    check_change();
}
function change_2() {
    $('.change_2').toggleClass('active');
    check_change();
}
function change_3() {
    $('.change_3').toggleClass('active');
    check_change();
}
function change_4() {
    $('.change_4').toggleClass('active');
    check_change();
}
function change_5() {
    $('.change_5').toggleClass('active');
    check_change();
}
function change_6() {
    $('.change_6').toggleClass('active');
    check_change();
}
function change_7() {
    $('.change_7').toggleClass('active');
    check_change();
}
function change_8() {
    $('.change_8').toggleClass('active');
    check_change();
}

function check_change() {
    $change1 = $('.change_1').attr('class'),
        $change2 = $('.change_2').attr('class'),
        $change3 = $('.change_3').attr('class'),
        $change4 = $('.change_4').attr('class'),
        $change5 = $('.change_5').attr('class'),
        $change6 = $('.change_6').attr('class'),
        $change7 = $('.change_7').attr('class'),
        $change8 = $('.change_8').attr('class')
    if ($change1 == 'change_1 active' || $change2 == 'change_2 active' || $change3 == 'change_3 active' || $change4 == 'change_4 active' || $change5 == 'change_5 active' || $change6 == 'change_6 active' || $change7 == 'change_7 active' || $change8 == 'change_8 active') {
        $('.continue13').addClass('active');
    } else {
        $('.continue13').removeClass('active');
    }
}
function test14() {
    $('.test13').css('display', 'none');
    $('.test14').css('display', 'block');
    $('.change_1, .change_2, .change_3, .change_4, .change_5, .change_6, .change_7, .change_8').removeClass('active');
    $('.continue13').removeClass('active');
}
// ==========================================================
function meat_1() {
    $('.change_1').toggleClass('active');
    $('.change_6').removeClass('active');
    continue_meat();

}
function meat_2() {
    $('.change_2').toggleClass('active');
    $('.change_6').removeClass('active');
    continue_meat();

}

function meat_3() {
    $('.change_3').toggleClass('active');
    $('.change_6').removeClass('active');
    continue_meat();
}

function meat_4() {
    $('.change_4').toggleClass('active');
    $('.change_6').removeClass('active');
    continue_meat();
}

function meat_5() {
    $('.change_5').toggleClass('active');
    $('.change_6').removeClass('active');
    continue_meat();
}
function meat_6() {
    $('.change_6').toggleClass('active');
    $('.change_1, .change_2, .change_3, .change_4, .change_5').removeClass('active');
    continue_meat();
}


function continue_meat() {

    $checked1 = $change1 = $('.change_1').attr('class');
    $checked2 = $change1 = $('.change_2').attr('class');
    $checked3 = $change1 = $('.change_3').attr('class');
    $checked4 = $change1 = $('.change_4').attr('class');
    $checked5 = $change1 = $('.change_5').attr('class');
    $checked6 = $change1 = $('.change_6').attr('class');
    if ($checked1 == 'change_1 active' || $checked2 == 'change_2 active' || $checked3 == 'change_3 active' || $checked4 == 'change_4 active' || $checked5 == 'change_5 active' || $checked6 == 'change_6 active') {
        $('.continue15').addClass('active');
    }
    else {
        $('.continue15').removeClass('active');
    }

}

function test15() {
    $('.change_1, .change_2, .change_3, .change_4, .change_5, .change_6').removeClass('active');
    $('.test14').css('display', 'none');
    $('.test15').css('display', 'block');

}