export function initStickyHeader() {
    scroll()
    events()


    function scroll() {
        if (window.scrollY > 0) {
            document.body.classList.add('down')
        } else {
            document.body.classList.remove('down')
        }
    }

    function events() {
        window.addEventListener('scroll', scroll)
    }
}
