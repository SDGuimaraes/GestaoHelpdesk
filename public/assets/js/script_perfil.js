const input = document.querySelector('#tel')

input.addEventListener('keypress', () =>{
    var inputlenth = input.value.length;

    if(inputlenth === 5){
        input.value += '-'
    }
})
const input1 = document.querySelector('#ddd')

input1.addEventListener('keypress', () =>{
    var inputlenth = input1.value.length;
    var inputmax = input1.value.length
    if(inputlenth === 0){
        input1.value += '('
    }

    if(inputlenth === 4){
        input1.value += ')'
    }
})