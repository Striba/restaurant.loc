/*Reserve begin*/

//Функция показать заказы:
function showReserve(reserve) {
    //console.log(reserve);

    $('#reserve').modal();

}

function getReserve() {
    $.ajax({
        url: '/reserve',
        type: 'GET',
        success: function (res) {
            showReserve(res);
        },
        error: function () {
            alert('Ошибка! Попробуйте позже.');
        }
    });

}

/*Reserve end*/
