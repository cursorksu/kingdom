$(function () {
   $("#addAnswer").on('click', function (e) {
       e.preventDefault();
       $('<textarea class="form-control" id="textarea" rows="5" name="answer[]" style="margin-bottom: 15px;"></textarea>').insertAfter('textarea.form-control:last');
   });

   $('#delAnswer').on('click', function (e) {
       e.preventDefault();
       $('textarea.form-control:last').remove();
   });

   $("#addRow").on('click', function (e) {
       e.preventDefault();

       var numb = $('.keyRow').length + 1;

       $('<div class="keyRow" style="margin-bottom: 20px;" data-row="'+numb+'"><h3>Ряд '+numb+'</h3><input type="text" class="form-control" name="keyboard['+numb+'][]" id="inputAddress" placeholder="Клавіатура" style="margin-bottom: 10px;"><a href="#" id="addBttn">Добавити ще кнопку</a></div>').insertAfter('.keyRow:last');
   });

    $('body').on('click', '#delBttn', function (e) {
        e.preventDefault();
        var numb = $(this).parents('.keyRow').data('row');
        $('.keyRow[data-row="'+numb+'"] input:last').remove();
    });

    $('body').on('click', "#addBttn", function (e) {
        e.preventDefault();

        var numb = $(this).parents('.keyRow').data('row');

        $('<input type="text" class="form-control" name="keyboard['+numb+'][]" id="inputAddress" placeholder="Клавіатура" style="margin-bottom: 10px;">').insertAfter('.keyRow[data-row="'+numb+'"] input:last');
    });

    $('#delRow').on('click', function (e) {
        e.preventDefault();

        $('.keyRow:last').remove();

    });

   $('#type').on('change', function () {

        var value = $(this).val();
        $('.form-row:not(.type):not(.' + value + ')').hide();
        $('.form-row:not(.type).' + value).show();

   });
});