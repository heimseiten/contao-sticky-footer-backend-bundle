document.addEventListener( 'DOMContentLoaded', function () {

    if ( document.querySelector('.sf-toolbar') ) {
        document.querySelector('body').classList.add('debug_mode')
    } else {
        document.querySelector('body').classList.remove('debug_mode')
    }
    
});
