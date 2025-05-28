const accordion = document.querySelector('.accordion');
const accordionTabLinks = accordion.querySelectorAll('.accordion-tab .accordion-tab-link');
const accordionTabContent = accordion.querySelectorAll('.accordion-tab .accordion-tab-content');
accordionTabLinks[0].classList.add('link-active')
accordionTabContent[0].classList.add('content-active')
accordionTabLinks.forEach((e, index)=>{
  e.addEventListener('click', ()=>{
    if(accordion.querySelector('.accordion-tab .accordion-tab-link.link-active')){
      const activTabLink = accordion.querySelector('.accordion-tab .accordion-tab-link.link-active') 
      activTabLink.classList.remove('link-active')

      const activTab = accordion.querySelector('.accordion-tab .accordion-tab-content.content-active') 
      activTab.classList.remove('content-active')
    }
    e.classList.toggle('link-active')
    accordionTabContent[index].classList.toggle('content-active');
  })
})
