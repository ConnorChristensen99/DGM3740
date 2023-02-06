


// SWIPER STYLING
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 2000,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    autoplay: {
        delay: 5000
    },
})
//////////////////////////////////////////////////////







// NAV MENU SUBLIST
function toggleMenu() {
  document.getElementById("hamburgerBtn").classList.toggle('open');
  document.getElementById('primaryNav').classList.toggle('open')
  document.getElementById('searchBar').classList.toggle('invisible')
}

var x = document.getElementById('hamburgerBtn');

x.onclick = toggleMenu;

let parent = document.getElementById('parent')
let subList = document.getElementById('subList')
subList.classList.add('invisible')

parent.addEventListener('mouseover', () => {
  if (subList.classList.contains('invisible')) {
    subList.classList.remove('invisible')
  }else
  subList.classList.add('invisible')
  subList.style.display = "flex"
  subList.style.flexDirection = "column"
})
parent.addEventListener('mouseout', () => {
  if (subList.classList.contains('invisible')) {
    subList.classList.remove('invisible')
  }else
  subList.classList.add('invisible')
  subList.style.display = "none"
})
subList.addEventListener('mouseover', () => {
  if (subList.classList.contains('invisible')) {
    subList.classList.remove('invisible')
  }else
  subList.classList.add('invisible')
  subList.style.display = "flex"
  subList.style.flexDirection = "column"
})
subList.addEventListener('mouseout', () => {
  if (subList.classList.contains('invisible')) {
    subList.classList.remove('invisible')
  }else
  subList.classList.add('invisible')
  subList.style.display = "none"
})
//////////////////////////////////////////////////////////////





//ACTIVE NAV STYLING
let nav = document.getElementById('primaryNav').getElementsByTagName('a')
for(i=0;i<nav.length;i++) {
  if(document.location.href.indexOf(nav[i].href)>=0) {
    nav[i].className='active';
  }
}


