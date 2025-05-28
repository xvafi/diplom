window.addEventListener('DOMContentLoaded', ()=>{
  if(document.querySelector(".treners-content")){
    document.querySelector(".treners-content")
    .addEventListener('wheel', scrolling);
  }
  if(document.querySelector(".programs-content")){
    document.querySelector(".programs-content")
      .addEventListener('wheel', scrolling);
  }
  if(document.querySelector(".personal-treners-content")){
    document.querySelector(".personal-treners-content")
      .addEventListener('wheel', scrolling);
  }
  if(document.querySelector(".groups-treners-content")){
    document.querySelector(".groups-treners-content")
      .addEventListener('wheel', scrolling);
  }
})

function scrolling(event){
  if (event.deltaMode == event.DOM_DELTA_PIXEL) {
    var modifier = 1;
    // иные режимы возможны в Firefox
  } else if (event.deltaMode == event.DOM_DELTA_LINE) {
    var modifier = parseInt(getComputedStyle(this).lineHeight);
  } else if (event.deltaMode == event.DOM_DELTA_PAGE) {
    var modifier = this.clientHeight;
  }
  if (event.deltaY != 0) {
    // замена вертикальной прокрутки горизонтальной
    this.scrollLeft += modifier * event.deltaY;
    event.preventDefault();
  }
}