if(window.location.pathname === "/"){

    window.addEventListener('scroll', ()=>{

        let navbar = document.querySelector('.navbar')
        let body = document.querySelector('body')
        let height = window.innerHeight - navbar.clientHeight
        let middle = body.clientHeight/2

        if(scrollY > middle){
            navbar.style.cssText = `transition:1s; transform: translate(0,${height}px); z-index:9`
        } else if(scrollY < middle){
            navbar.style.cssText = `top: 0; z-index:9`
        }
    })
}