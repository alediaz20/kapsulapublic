<div class="container">
    <div class="card-header">
        <h1>Prendas de la kapsula</h1>
    </div>
    <div class="card-body">        
        <div class="img-slider" width="100px"heigth="100px">
            <div class="slide active">
                <img src="imgs/prendasReales/3.png" alt="">
            </div>
            <div class="slide">
                <img src="imgs/prendasReales/4.png" alt="">
            </div>
            <div class="slide">
                <img src="imgs/prendasReales/5.png" alt="">
            </div>
            <div class="slide">
                <img src="imgs/prendasReales/6.png" alt="">
            </div>
            <div class="slide">
                <img src="imgs/prendasReales/7.png" alt="">
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual) {
        slides.forEach((slide) => {
            slide.classList.remove('active');

            btns.forEach((btn) => {
                btn.classList.remove('active');
            });
        });

        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
        });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass) {
        let active = document.getElementsByClassName('active');
        let i = 1;

        var repeater = () => {
            setTimeout(function() {
                [...active].forEach((activeSlide) => {
                    activeSlide.classList.remove('active');
                });

                slides[i].classList.add('active');
                btns[i].classList.add('active');
                i++;

                if (slides.length == i) {
                    i = 0;
                }
                if (i >= slides.length) {
                    return;
                }
                repeater();
            }, 10000);
        }
        repeater();
    }
    repeat();
</script>