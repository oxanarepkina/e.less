$(document).ready(function () {

    var userRating;

    $(".rating input:radio").attr("checked", false);

    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
        function () {
            userRating = this.value;
        });


    $('#feedbackForm').on('submit', function (e) {
        e.preventDefault();
        var noError = true;

        noError = validate($("input[name='Geschlecht']"), function (item) {
                return item.is(':checked') ? 1 : 0;
            }) && noError;

        noError = validate($("select[name='Produkt']"), function (item) {
                return item.find('option:selected').val() ? 1 : 0;
            }) && noError;

        noError = validate($("input[name='Alter']"), function (item) {
                return item.val() > 1950 && item.val() < 1999 ? 1 : 0;
            }) && noError;

        noError = validate($("input[name='MonatlicheKosten']"), function (item) {
                return item.val() > 0 ? 1 : 0;
            }) && noError;

        noError = validate($("input[name='checkbox']"), function (item) {
                return item.is(':checked') ? 1 : 0;
            }) && noError;

        noError = validate($(".rating input:radio"), function (item) {
                return userRating > 0 ? 1 : 0;
            }) && noError;

        if (noError)
            $(this).unbind('submit').submit()
    });


    function validate(item, fun) {
        state = fun(item);
        var status = item.closest('.form-group').find('.status');
        status.empty();
        if (state == 1) {
            status.append('<span class="glyphicon glyphicon-ok"></span>');
        } else if (state == 0) {
            status.append('<span class="glyphicon glyphicon-remove-sign"></span>');
        }
        return state;

    }


});