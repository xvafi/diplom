const usersCard = document.querySelectorAll('.content-users-card');
usersCard.forEach((e)=>{
  const dateNext = new Date(e.children[4].textContent)
  // const dateToday = new Date(e.children[3].textContent)
  let getToday = new Date();
  const timing =((dateNext/(1000*60*60*24))-(getToday/(1000*60*60*24))).toFixed(0);
  e.children[5].children[0].textContent = `${timing} дней`;
})