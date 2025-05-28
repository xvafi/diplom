if(document.querySelectorAll('.programs-record-block-info')){
  let allRecord = document.querySelectorAll('.programs-record-block-info');
  allRecord.forEach((e)=>{
    let allProg = document.querySelectorAll('.programs-record-block');
    allProg.forEach((i)=>{
      if(i.dataset.progid === e.dataset.progid){
        i.children[4].textContent = 'Вы записаны'
      }
    })
  })
}