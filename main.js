let input = document.querySelector('.input');
let btn = document.querySelector('.btn');
let btn1 = document.querySelector('#btn1');
let btn2 = document.querySelector('#btn2');
let btn3 = document.querySelector('#btn3');
let btn4 = document.querySelector('#btn4');
let btn5 = document.querySelector('#btn5');
let btn6 = document.querySelector('#btn6');
let query1 = document.querySelector('#query1');
let query2 = document.querySelector('#query2');
let query3 = document.querySelector('#query3');
let query4 = document.querySelector('#query4');
let query5 = document.querySelector('#query5');
let query6 = document.querySelector('#query6');
btn1.addEventListener('click', function(e){input.value = query1.textContent;})
btn2.addEventListener('click', function(e){input.value = query2.textContent;})
btn3.addEventListener('click', function(e){input.value = query3.innerHTML;})
btn4.addEventListener('click', function(e){input.value = query4.innerHTML;})
btn5.addEventListener('click', function(e){input.value = query5.innerHTML;})
btn6.addEventListener('click', function(e){input.value = query6.innerHTML;})


