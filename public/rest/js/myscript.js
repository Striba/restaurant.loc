/*Reserve begin*/

//Добавить блюдо в заказ:
$('body').on('click', '.add-to-reserve-link', function (e) {
    e.preventDefault();
    var id = $(this).data('id'),

        //Колличество:
        qty = $('.quantity input[data-id = ' + id +']').val() ? $('.quantity input[data-id = ' + id +']').val() : 1;


    //console.log(id, qty);

    var link = $('#productAdd').attr('href');
     // console.log(link);

    //Отправляем запрос на сервер:
    $.ajax({
        url: link,
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            //console.log(res);
            showReserve(res);
        },
        error: function (){
            alert('Ошибка! Попробуйте позже.');
        }

    });
});
//Функция показать заказы:
function showReserve(reserve) {
    //console.log(reserve);
    if($.trim(reserve) == '<h3>Заказов нет.</h3>'){
        $('#reserve .modal-footer a, #reserve .modal-footer .btn-danger').css('display', 'none');
    } else {
        $('#reserve .modal-footer a, #reserve .modal-footer .btn-danger').css('display', 'inline-block');
    }
    $('#reserve .modal-body').html(reserve);
    $('#reserve').modal();

}

function getReserve() {
    $.ajax({
        url: '/reserve',
        type: 'GET',
        success: function (res) {
            //console.log(res);
            showReserve(res);
        },
        error: function () {
            alert('Ошибка! Попробуйте позже.');
        }
    });

}


//Удаление блюда из заказа:
$('#reserve .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
    var link = $(this).data('link');
    // console.log('айди позиции: ' + id);
    // console.log('линк для выполнения: ' + link);

    $.ajax({
        url: link,
        data: {idToDel: id},
        type: 'GET',
        success: function(res){
            showReserve(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

//Очистить заказ:
function clearReserve(){

    var link = $('#reserveClear').attr('href');
    $.ajax({
        url: link,
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
