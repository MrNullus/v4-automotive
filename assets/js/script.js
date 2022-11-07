
window.onscroll = () =>{

  if(window.scrollY > 10){
    document.querySelector('#scroll-top').classList.add('active');
  }else{
    document.querySelector('#scroll-top').classList.remove('active');
  }

}