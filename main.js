$(document).ready( function () {

/* start of - validation */

function checkPassword(str) {
    errorMsg = '';
    if (str.length < 6 || str.search(/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/) == -1) {
        errorMsg += 'Գաղտնաբառը պետք է պարունակի գոնե 6 սիմվոլ, որոնցում լինի գոնե 1 թիվ և 1 լատինական տառ <br>';
        // rus - errorMsg += 'Пароль должен состоять хотя бы из 6 символов и содержать минимум одну цифру и одну латинскую букву <br>';
    } if (str.length > 50) {
        errorMsg += 'Գաղտնաբառը շատ երկար է <br>';
        // rus - errorMsg += 'Пароль слишком длинный <br>';
    } if (str.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:]/) != -1) {
        errorMsg += 'Գաղտնաբառը պետք է պարունակի միայն լատինական տառեր և չպետքէ պարունակի բացակ և այլ անվավեր սիմվոլներ <br>';
        // rus - errorMsg += 'Пароль должен состоять только из латинских букв, цифр и не должен содержать пробелов или недопустимых символв <br>';
    }
    return errorMsg;
}

function formValidate (theForm) {
    var errorMessage = '';
    var email_pattern = /^[a-z0-9_\-\.]{2,}@[a-z0-9_\-\.]{2,}\.[a-z]{2,}$/i;

    var inputs = theForm.find('input.required');
    $.each(inputs, function(index, val) {
        var input = $(inputs[index]);
        var value = input.val();
        if ($.trim(value) === '') {
            errorMessage += input.attr('placeholder').replace('*','') + ' դաշտը դատարկ է<br>';
            // rus - errorMessage += 'Вы не заполнили поле ' + input.attr('placeholder').replace('*','') + '<br>'; 
        }
    });

    var regEmailInput = theForm.find('#reg-email');
    if (  regEmailInput.length > 0 && regEmailInput.val().length > 0) {
        if (!email_pattern.test(regEmailInput.val())) {
            errorMessage += 'Խնդրում ենք մուտքագրել վավեր էլ.հասցե<br>';
            // rus - errorMessage += 'Неправильный формат адреса электронной почты <br>';
        }
    }

    var regPassInput = theForm.find('#reg-password');
    if ( regPassInput.length > 0 && regPassInput.val().length > 0) {
        var regPasswordError = checkPassword(regPassInput.val());
        if (regPasswordError !== '') {
            errorMessage += regPasswordError;
        }
    }

    var regPassConfirmInput = theForm.find('#reg-password-confirm');
    if ( regPassConfirmInput.length > 0 && regPassConfirmInput.val().length > 0) {
        if ( regPassConfirmInput.val() !== regPassInput.val()) {
            errorMessage += 'Գաղտնաբառերը չեն համնկնում <br>';
            // rus - errorMessage += 'Пароли не совподают <br>';
        }
    }
    if (errorMessage !== '') {
        if(theForm.find('.form-error-message').length>0) {
            $('.form-error-message').html(errorMessage);
        } else {
            theForm.prepend("<p class='form-error-message' style='padding: 5px; background: #e5e5e5; color: #a00;'>" + errorMessage + "</p><br>");
        }
        return false;
    } else {
        return true;
    }
}

$('form').submit(function(e){
    if (!formValidate($(this))) {
        e.preventDefault();
    }
});

/* end of - validation */

/* start of - select2 */
if($().select2) {
    $('#skill-select').select2({
      tags: true,
      maximumSelectionLength: 10,
      tokenSeparators: [',', ' ']
    });
}
/* end of - select2 */

}); /* end of - document.ready */