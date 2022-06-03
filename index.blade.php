@include("header.header")


<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">


    <div class="container   justify-content-center">
       <a href="{{ route('bage') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg></a>
    </div>
        <div class="dropdown">

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Мой профиль
            </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('bage') }}">Корзина</a></li>
                <li><a class="dropdown-item"  href="{{ route('user.registration') }}">Регистрация</a></li>
                <li><a class="dropdown-item" href="{{ route('user.login') }}">Логин</a></li>
                    @auth()<li><a class="dropdown-item" href="{{ route('user.login') }}">Кабинет</a></li>@endauth
                </ul>
        </div>

</nav>


<div class="container-xxl justify-content-center" style="background-color: white">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators bg-light">

            <button type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button"   data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/storage/uploads/ueK8qmlOoXmzwoqe2vdZb2ZVKLJ4DEP0Ca5K2YfM.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-danger">Метка первого слайда</h5>
                    <p class="text-danger">Некоторый репрезентативный заполнитель для первого слайда.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/storage/uploads/ueK8qmlOoXmzwoqe2vdZb2ZVKLJ4DEP0Ca5K2YfM.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-danger">Метка второго слайда</h5>
                    <p class="text-danger">Некоторый репрезентативный заполнитель для второго слайда.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/storage/uploads/ueK8qmlOoXmzwoqe2vdZb2ZVKLJ4DEP0Ca5K2YfM.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-danger">Метка третьего слайда</h5>
                    <p class="text-danger">Некоторый репрезентативный заполнитель для третьего слайда.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

</div>

<div class="container justify-content-center">
    <div class="row ">
@foreach ($boats as $boat)


            <div class="col-xxl-3">
{{--                <div class="justify-content-center"><form method="POST"   action="{{ route('product.info') }}">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" name="id_product" value="{{$boat->id}}">--}}
{{--                        <div class="button justify-content-center p-3"><button class="btn btn-outline-success" type="submit">Подробнее</button></div>--}}
{{--                    </form></div>--}}
                <form method="POST"   action="{{ route('basket.upload') }}">
                    @csrf

                    <input type="hidden" name="product_id" value="{{$boat->id}}">

        <div class="in">
            <img class="rounded mx-auto d-block " src="{{asset('/storage/' . $boat->image)}}">
            <div class="img_container"><img src="{{asset('/storage/' . $boat->image)}}"  ></div>
        </div>

                <div class="name"><h3 class="text-center">{{ $boat->name }}</h3>
        <p class="text-center"> Описание: {{ $boat->subscribe }}</p>
        <p class="text-center"> Класс : {{$boat->class}}</p>
        <p class="text-center"> Цена : {{$boat->price}}</p>
                </div>

                   <div class="but justify-content-center"> <button class="btn btn-outline-success" type="submit">Добавить в корзину</button></div>


                </form>
                <div class="justify-content-center"><form method="POST"   action="{{ route('product.info') }}">
                        @csrf
                        <input type="hidden" name="id_product" value="{{$boat->id}}">
                        <div class="button justify-content-center"><button class="btn btn-outline-success" type="submit">Подробнее</button></div>
                    </form></div>
            </div>



@endforeach
</div>
</div>
{{--<div><a href="{{ route('password.request') }}">Сменить пароль</a></div>--}}
{{session('user_id')}}
{{session('name')}}

{{session('price')}}
<script type="text/javascript">
    $(document).ready(function() {
        $('dropdown').dropdown();

        // $( "form" ).css( "border", "3px solid red" );

        $('.in img').click(function()

        {

// Берем свойство SRC миниатюры

// (можно картинку положить в ссылку и брать значение href

// для того, чтобы не грузить большие картинки изначально

// а загружать сначало миниатюры и только при клике открывать

//  большое изображение, что будет целесообразнее).
            var container= $(this).parent().find('.img_container');
            console.log(container);
            var imgSrc = $(this).attr("src");

// Задаем свойство SRC картинке, которая в скрытом диве.

            container.find('img').attr({src: imgSrc});

// Показываем скрытый контейнер

            container.fadeIn('slow');

            // this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
            // this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));

        });

// По клику на большое изображение, скрываем его

        $('.img_container').click(function()

        {

            $('.img_container').fadeOut();

        });


    });
</script>

<style>

    @media (max-width: 600px) {
        .button button{
            font-size: 14px;

        }
     .name h3{
         font-size: 14px;
     }
        .row{
            padding-right: 30px;
        }
        .row .but button{
            margin-left: 0px;

        }
        .row button{
            max-width: 90px;


        }
        .row .name{
            height: 90%;

        }


    }


/*.col-xl-3:hover{*/
/*    border: 1px solid #ccc;*/
/*    background: snow;*/
/*}*/
.but{
    /*position: relative;*/
    /*height: 100%;*/
    display: flex;
    /*padding-bottom:100px;*/
}

/*.but button{*/
/*    position:absolute;*/
/*    bottom: 0;*/

/*}*/
.button{
    display: flex;
}

.alert {
    justify-content: center;
    border: 5px solid #ccc;
}
/*.in {*/

/*    padding: 5px 5px 5px 5px;*/

/*}*/

/* Отображение миниатюр */

.in img {

    width:100px;
    height: 100px;
    border: 5px solid #ccc;

}

/* Выделение миниатюры при наведении */

.in img:hover {

    min-width:100px;

    border: 5px solid red;

    cursor: pointer;

}

/* Скрытый контейнер с большим изображением */

.img_container {

    position: absolute;

    display: none;

    left: 50%;

    margin-left: -350px;


    z-index: 999;

    /*top: 80%;*/


}

/* Бордюр изображения */

.img_container img {
    width:600px;
    height: auto;
    border: 2px solid red;

}
</style>
@include("footer.footer")
