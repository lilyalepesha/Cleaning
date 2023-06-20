function phoneNumberPattern(phoneNumber)
{
    let pattern = /^\+375\(\d{2}\)\d{2}-\d{2}-\d{3}$/;
    return pattern.test(phoneNumber);
}

function validateInputPhone(formClass, buttonClass, errorClass){
    const form = document.querySelector('.' + formClass);
    const inputPhone = form.querySelector('input');
    const button = document.querySelector('.' + buttonClass);
    const error = form.querySelector('.' + errorClass);
    button.addEventListener('click', function (e){
       if(phoneNumberPattern(inputPhone.value.trim())){
           error.classList.remove('active');
       }
       else{
           error.classList.add('active');
       }
    });
}
function addPhoneMask(phoneNumberInputClass) {
    let phoneNumberInput = document.querySelector('.' + phoneNumberInputClass);
    let phoneNumber = phoneNumberInput.value;
    phoneNumber = phoneNumber.replace(/\D/g, '');
    phoneNumber = phoneNumber.replace(/(\d{1})(\d{2})(\d{3})(\d{2})(\d{2})/, '+375 ($2) $3-$4-$5');
    phoneNumberInput.value = phoneNumber;
}


window.addEventListener('DOMContentLoaded', function(){
   validateInputPhone('calculator__item-form', 'calculator__item-button', 'error');
   validateInputPhone('professionals__consultation-form', 'call-professionals__button', 'error');
   validateInputPhone('price__item-form', 'price__item-button', 'error');
   validateInputPhone('inventory-main__form', 'inventory-main__button', 'error');
});
