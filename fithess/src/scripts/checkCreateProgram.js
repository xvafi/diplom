// const programName = document.querySelector('#programName');
// const programDate = document.querySelector('#programDate');
// const programTime = document.querySelector('#programTime');
// const programPeriod = document.querySelector('#programPeriod');
// const optionTreners = document.querySelectorAll('.option-treners');
// const optionProgram = document.querySelectorAll('.option-program');
// const programText = document.querySelector('#programText');
// console.log(optionTreners.selected)

// $(function() {
//   $('form').submit(function(e) {
//     var $form = $(this);
//     let progName = programName.value;
//     let progDate = programDate.value;
//     let progTime = programTime.value;
//     let progPeriod = programPeriod.value;
//     let progText = .value;
//     let optTreners;
//     let optProgram;
//     optionTreners.forEach((e)=>{
//       if(e.selected){
//         console.log(e.dataset.trenerid)
//          = e.dataset.trenerid;
//       }
//     })
//     optionProgram.forEach((e)=>{
//       if(e.selected){
//         console.log(e.dataset.categoryid)
//         optProgram = e.dataset.categoryid;
//       }
//     })
//     if (!progName || !progDate || !progTime || !progPeriod  || !optTreners || !optProgram) {
//       alert('Пожалуйста, заполните все поля');
//       return;
//     }
//     if(!isValidpProgName(progName)){
//       console.log($form)
//       alert('Неверно заполнена поле Название');
//       return
//     }
//     if(!isValidProgDate(progDate)){
//       if(progDate.)
//       alert('Неверная Дата');
//       return;
//     }
//     if(!isValidProgTime(progTime)){
//       alert('Неверное время');
//       return;
//     }
//     if(!isValidProgPeriod(progPeriod)){
//       alert('Неверное время продолжительности');
//       return;
//     }
//     ()
//     function isValidOptTreners(optTreners) {
//       const pattern = /7\d{10}/g;
//       return pattern.test(phone);
//     }
//     function isValidpProgName(name){
//       if(name = "" ||name.length > 100){
//         return ;
//       }else{
//         return name;
//       }
//     }
//     function isValidOptTreners(optTreners) {
//       // Проверка имени регулярным выражением
//       const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//       return pattern.test(email);
//     }
//     $.ajax({
//       type: $form.attr('method'),
//       url: './src/php/registration.php',
//       data: $form.serialize()
//     }).done(function() {
//       console.log('success');
//       location.reload(true);
//       alert(name +' '+ phone +' '+ email +' '+ pass);
//   }).fail(function() {
//       console.log('fail');
//       e.preventDefault(); 
//     });
//   });
// });