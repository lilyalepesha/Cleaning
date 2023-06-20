import IMask from 'imask';
function setMaskPhone(){
    const phoneInputs = document.querySelectorAll('input[name="phone"]');
    phoneInputs.forEach(function(phone){
        const phoneMask = new IMask(phone, {
            mask: "+{375}(00)00-00-000",
        });
        phone.addEventListener('click', function (){
            phone.placeholder = "+{375}(00)00-00-000";
        });
    });
}
window.addEventListener('DOMContentLoaded', function(){
    setMaskPhone();
});
