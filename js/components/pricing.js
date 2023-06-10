$(function() {
    function toggleTabWithSwitch() {
        let toggleSwitch = $('#switch-toggle-tab label.switch');
        let monthTabTitle = $('#switch-toggle-tab li.month');
        let yearTabTitle = $('#switch-toggle-tab li.year');
        let monthTabContent = $('#month');
        let yearTabContent = $('#year');
        // hidden show deafult;
        monthTabContent.fadeIn();
        yearTabContent.fadeOut();

        function toggleHandle() {
            if (toggleSwitch.hasClass('on')) {
                yearTabContent.fadeOut();
                monthTabContent.fadeIn();
                monthTabTitle.addClass('active');
                yearTabTitle.removeClass('active');
            } else {
                monthTabContent.fadeOut();
                yearTabContent.fadeIn();
                yearTabTitle.addClass('active');
                monthTabTitle.removeClass('active');
            }
        };
        monthTabTitle.on('click', function() {
            toggleSwitch.addClass('on').removeClass('off');
            toggleHandle();
            return false;
        });
        yearTabTitle.on('click', function() {
            toggleSwitch.addClass('off').removeClass('on');
            toggleHandle();
            return false;
        });
        toggleSwitch.on('click', function() {
            toggleSwitch.toggleClass('on off');
            toggleHandle();
        });

    }
    toggleTabWithSwitch();
})