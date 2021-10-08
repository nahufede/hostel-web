window.addEventListener('scroll', ()=>{

    let navbar = document.querySelector('.navbar')
    let height = window.innerHeight - navbar.clientHeight
    let middle = height/2

    if(scrollY > middle){
        navbar.style.cssText = `transition:2s; transform: translate(0,${height}px); z-index:9`
    } else if(scrollY === 0){
        navbar.style.cssText = `top: 0; z-index:9`
    }
})