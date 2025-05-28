let form = document.querySelector('.window-registration-form');
let inpNameReg = form.querySelector('.inp-name-reg');
let inp__snils = form.querySelector('.inp__snils');
let inpPhoneReg = form.querySelector('.inp-phone-reg');
let inpEmailReg = form.querySelector('.inp-email-reg');
let inpPassReg = form.querySelector('.inp-pass-reg');
let inpPass2Reg = form.querySelector('.inp-pass2-reg');
let modalregAct = document.querySelector('.window');

$(function() {
  $('form').submit(function(e) {
    var $form = $(this);
    let name = inpNameReg.value;
    let phone = inpPhoneReg.value;
    let email = inpEmailReg.value;
    let pass = inpPassReg.value;
    let passConf = inpPass2Reg.value;
    if (!name || !phone || !email || !pass || !passConf) {
      alert('Пожалуйста, заполните все поля');
      return;
    }
    if(!isValidFio(name)){
      console.log($form)
      alert('Неверно заполнена поле ФИО');
      return;
    }
    if(!isValidNumber(phone)){
      alert('Неверный Номер');
      return;
    }
    if(!isValidEmail(email)){
      alert('Неверная почта');
      return;
    }
    if(!isValidPass(pass)){
      alert('Неверный пароль \n Пароль должен состоять из: \nМинимум одной заглавной буквы \nМинимум одной строчной буквы \nМинимум из одной цифры');
      return;
    }
    if(pass != passConf){
      alert('Пароли не сопадают');
      return;
    }
    function isValidNumber(phone) {
      const pattern = /7\d{10}/g;
      return pattern.test(phone);
    }
    function isValidEmail(email) {
      const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      return pattern.test(email);
    }
    function isValidPass(pass) {
      const pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,20}$/;
      return pattern.test(pass);
    }
    function isValidFio(name) {
      if (/[^-А-ЯA-Z\x27а-яa-z]/.test(name)) {
          return false;
      }
      return true;
    }
    $.ajax({
      type: $form.attr('method'),
      url: './src/php/registration.php',
      data: $form.serialize()
    }).done(function() {
      console.log('success');
      location.reload(true);
      alert(name +' '+ phone +' '+ email +' '+ pass);
  }).fail(function() {
      console.log('fail');
      e.preventDefault(); 
    });
  });
});