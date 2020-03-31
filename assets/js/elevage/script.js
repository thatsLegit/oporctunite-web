document.querySelector('.burger-container').addEventListener('click', function () {
    document.querySelector('.line1').classList.toggle('activeline1');
    document.querySelector('.line2').classList.toggle('activeline2');
    document.querySelector('.line3').classList.toggle('activeline3');
    document.querySelector('#menunav').classList.toggle('active');
  })
  