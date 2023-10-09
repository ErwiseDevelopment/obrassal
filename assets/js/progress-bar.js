(function($) {
    const bar = document.querySelector( '.js-progress-bar' )
    const progressNumber = document.querySelector( '.js-progress-number' )
    let value = 0
    let speed = 25

    function progressBar() {
        let progressCurrent = setInterval(function() {
            value++
            bar.style.width = `${value}%`
            progressNumber.textContent = `${value}%`
    
            if( value == bar.dataset.value ) {
                clearInterval( progressCurrent )
            }
        }, speed)
    }

    progressBar()
})(jQuery)