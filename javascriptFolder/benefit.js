!(function (d) {



    let items = d.querySelectorAll('.circular > li');
    let contents =d.querySelectorAll('.circular > li div');
    let images=d.querySelectorAll('.circular > li img');
    let activeIndex = 0;
    let timer='';

    //set initial classes
    function setInitialClasses() {
        items[0].classList.add('Benefits_active');
        for (let i = 1; i < items.length; i++) {
            items[i].classList.remove('Benefits_active');
        }
    }

    // Set event listeners for click
    function setEventListeners() {
        for (let i = 0; i < items.length; i++) {
            items[i].addEventListener('click', function () {
                activeIndex = i;
                updateActiveClass(activeIndex);
                clearTimeout(timer);
            }
            );


            // items[i].addEventListener('pointerenter', function () {
            //     activeIndex = i;
            //     updateActiveClass(activeIndex);
            //     clearTimeout(timer);
            // }
            // );

            //  items[i].addEventListener('touchstart', function () {
            //     activeIndex = i;
            //     updateActiveClass(activeIndex);
            //     clearTimeout(timer);
            // }
            // );

            items[i].addEventListener('pointerleave',setAutoTimer(i));

            //  contents[i].addEventListener('touchstart',function() {
            //     clearTimeout(timer);
            // });
            //  contents[i].addEventListener('pointerdown',function() {
            //     clearTimeout(timer);
            // });
            // items[i].addEventListener('touchend',setAutoTimer(i));
            // contents[i].addEventListener('pointerup',setAutoTimer);
        }
    }
    // set Auto Timer for continuous upgradation
    function setAutoTimer(activeIndex) {
        updateActiveClass(activeIndex);
        //update activeindex
        activeIndex++;
        if (activeIndex >= items.length) {
            activeIndex = 0;
        }
       timer = setTimeout(setAutoTimer, 3000);
    }

    function updateActiveClass(activeIndex) {
        for (let i = 0; i < items.length; i++) {
            items[i].classList.remove('Benefits_active');
            if (i === activeIndex) {
                items[activeIndex].classList.add('Benefits_active');
            }

        }
    }
    function initCarousel() {
        setInitialClasses();
        setEventListeners();
        setAutoTimer();
    }

    initCarousel();

}(document));