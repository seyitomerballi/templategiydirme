<div id="home" class="slider">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main_slider" data-slide-to="0" class="active"></li>
            <li data-target="#main_slider" data-slide-to="1"></li>
            <li data-target="#main_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('imgs/slide1.jpg')}}" alt="slider_img">
                <div class="ovarlay_slide_cont">
                    <h2>We love working</h2>
                    <h4>Maintenance service</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                    <a class="blue_bt" href="#">See Our Service</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('imgs/slide1.jpg')}}" alt="slider_img">
                <div class="ovarlay_slide_cont">
                    <h2>We love working</h2>
                    <h4>Maintenance service</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                    <a class="blue_bt" href="#">See Our Service</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="{{asset('imgs/left.png')}}" alt="#" />
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="{{asset('imgs/right.png')}}" alt="#" />
        </a>
    </div>
</div>
