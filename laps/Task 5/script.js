var btn = document.getElementById('btn')
btn.addEventListener('click', function () {
    console.log('Button clicked!')
})



// setTimeout(function () {
//     alert('Welcome')
// }, 2000)


// setInterval(function () {
//     console.log('Hello')
// }, 1000)


var btn2 = document.getElementById('btn2')
var changeBackGround = function () {
    document.body.classList.toggle('mode')
}