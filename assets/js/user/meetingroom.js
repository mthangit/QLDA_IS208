//Lưu dữ liệu khi nhấn button
$('#save').on('click', function() {
    var room = $('#room').val();
    var date = $('#date').val();
    var time = $('#time').val();

    if (room != "" && date != "" && time != ""){
        $('#data tbody').append('<tr class="child"><td>'+room+'</td><td>'+date+'</td><td>'+time+'</td></tr>');
    }
});

$(document).on('click', '.remdata', function() {
    $(this).parent().parent().remove();
    $('#data tbody tr').each(function(i){
        $($(this).find('td')[0]).html(i+1);
    });
});