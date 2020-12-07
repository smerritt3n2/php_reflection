$(function() {
    // init zeynepjs side menu
    var zeynep = $('.zeynep').zeynep({
    opened: function () {
        // log
        console.log('the side menu opened')
        document.getElementById("icon").classList.replace('fa-bars', 'fa-times'); // Changes Icon to its New Settings
        document.getElementById("all").classList.replace('all', 'pushLeft');
    },
    closed: function () {
        // log
        console.log('the side menu closed')
    }
    })

    // dynamically bind 'closing' event
    zeynep.on('closing', function () {
    // log
    console.log('this event is dynamically binded')
    document.getElementById("icon").classList.replace('fa-times', 'fa-bars'); // Changes Icon back to Default Settings
    document.getElementById("all").classList.replace('pushLeft', 'all');
    })

    // handle zeynepjs overlay click
    $('.zeynep-overlay').on('click', function () {
    zeynep.close()
    })

    // open zeynepjs side menu
    $('.btn-open').on('click', function () {
    zeynep.open()
    })
});