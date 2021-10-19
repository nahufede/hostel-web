if(window.location.pathname === "/"){

    window.addEventListener('scroll', ()=>{

        let navbar = document.querySelector('.navbar')
        let body = document.querySelector('body')
        let height = window.innerHeight - navbar.clientHeight
        let middle = body.clientHeight/2
        let navlang = document.querySelector('#nav-langdrop')

        if(scrollY > middle){
            navbar.style.cssText = `transition:1s; transform: translate(0,${height}px); z-index:9`
            navlang.className = 'btn-group dropup ps-4'
        } else if(scrollY < middle){
            navbar.style.cssText = `top: 0; z-index:9`
            navlang.className = 'btn-group drodown ps-4'
        }
    })
}