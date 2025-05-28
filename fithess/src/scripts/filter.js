
const filter = document.querySelector('.treners-staff-img')
const filterWindow = document.querySelector('.treners-filter-img')
filter.addEventListener('click', ()=>{
  filter.classList.toggle('filter-active');
  filter.classList.forEach((e)=>{
    if(e === 'filter-active'){
      filter.src = '../../resources/img/setting-purple.png';
      document.querySelector('.filter').style.display = 'flex'
      document.querySelector('.filter').style.opacity = '1'
    }else{
      filter.src = '../../resources/img/setting.png';
      document.querySelector('.filter').style.display = 'none'
    }
  })
})
filterWindow.addEventListener('click', ()=>{
  filterWindow.classList.toggle('filter-active');
  filterWindow.classList.forEach((e)=>{
    if(e === 'filter-active'){
      filterWindow.src = '../../resources/img/setting-purple.png';
      document.querySelector('.treners-filter').style.display = 'flex'
      document.querySelector('.treners-filter').style.opacity = '1'
    }else{
      filterWindow.src = '../../resources/img/setting.png';
      document.querySelector('.treners-filter').style.display = 'none'
    }
  })
})

const parent = document.querySelector('.filter-gender');
const filterGenderItem = parent.querySelectorAll(".filter-gender-item")
for (let i = 0; i < filterGenderItem.length; i++) {
  filterGenderItem[i].addEventListener('click',(event)=>{
    let active = parent.querySelector('.filter-gender-item.gender-item-active')
    active.classList.remove('gender-item-active')
  
    filterGenderItem[i].classList.add('gender-item-active')
  })
}

const parent2 = document.querySelector('.filter-category');
const filterCategoryItem = parent2.querySelectorAll(".filter-category-item")
for (let i = 0; i < filterCategoryItem.length; i++) {
  filterCategoryItem[i].addEventListener('click',(event)=>{
    filterCategoryItem[i].classList.toggle('category-item-active')
  })
}

const parent3 = document.querySelector('.filter-gender-win');
const filterGenderItem2 = parent3.querySelectorAll(".filter-gender-win-item")
for (let i = 0; i < filterGenderItem2.length; i++) {
  filterGenderItem2[i].addEventListener('click',(event)=>{
    let active = parent3.querySelector('.filter-gender-win-item.gender-item-win-active')
    active.classList.remove('gender-item-win-active')
    filterGenderItem2[i].classList.add('gender-item-win-active')
  })
}
const parent4 = document.querySelector('.filter-category-win');
const filterCategoryItem2 = parent4.querySelectorAll(".filter-category-win-item")
for (let i = 0; i < filterCategoryItem2.length; i++) {
  filterCategoryItem2[i].addEventListener('click',(event)=>{
    filterCategoryItem2[i].classList.toggle('category-win-item-active')
  })
}