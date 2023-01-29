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

parent.addEventListener('click', () => {
  if (subList.classList.contains('invisible')) {
    subList.classList.remove('invisible')
  }else
  subList.classList.add('invisible')
})

