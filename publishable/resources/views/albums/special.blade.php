
<style>
    .slider {
        width: 90vmin;
        height: 90vmin;
        -webkit-perspective: 100vmin;
        perspective: 100vmin;
        margin: auto;
        -webkit-perspective-origin: top center;
        perspective-origin: top center;
        position: relative;
        box-sizing: border-box;
    }
    .slider__item {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding-top: 15vmin;
        box-sizing: border-box;
        -webkit-transition: -webkit-transform 0.18s ease;
        transition: -webkit-transform 0.18s ease;
        transition: transform 0.18s ease;
        transition: transform 0.18s ease, -webkit-transform 0.18s ease;
    }
    .slider__item:nth-child(1) {
        -webkit-transform: translate3d(0, 0, 0vmin);
        transform: translate3d(0, 0, 0vmin);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        z-index: 7;
    }
    .slider__item:nth-child(2) {
        -webkit-transform: translate3d(0, 0, -15vmin);
        transform: translate3d(0, 0, -15vmin);
        -webkit-transition-delay: 0.05s;
        transition-delay: 0.05s;
        z-index: 6;
    }
    .slider__item:nth-child(3) {
        -webkit-transform: translate3d(0, 0, -30vmin);
        transform: translate3d(0, 0, -30vmin);
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
        z-index: 5;
    }
    .slider__item:nth-child(4) {
        -webkit-transform: translate3d(0, 0, -45vmin);
        transform: translate3d(0, 0, -45vmin);
        -webkit-transition-delay: 0.15s;
        transition-delay: 0.15s;
        z-index: 4;
    }
    .slider__item:nth-child(5) {
        -webkit-transform: translate3d(0, 0, -60vmin);
        transform: translate3d(0, 0, -60vmin);
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
        z-index: 3;
    }
    .slider__item:nth-child(6) {
        -webkit-transform: translate3d(0, 0, -75vmin);
        transform: translate3d(0, 0, -75vmin);
        -webkit-transition-delay: 0.25s;
        transition-delay: 0.25s;
        z-index: 2;
    }
    .slider__item:nth-child(7) {
        -webkit-transform: translate3d(0, 0, -90vmin);
        transform: translate3d(0, 0, -90vmin);
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
        z-index: 1;
    }
    .slider__item:nth-child(8) {
        -webkit-transform: translate3d(0, 0, -105vmin);
        transform: translate3d(0, 0, -105vmin);
        -webkit-transition-delay: 0.35s;
        transition-delay: 0.35s;
        z-index: 0;
    }
    .slider__image {
        width: 100%;
        height: 80%;
        background-color: #999;
        border: 1.5vmin solid #eee;
        box-sizing: border-box;
        box-shadow: 0px 3vmin 3vmin rgba(0, 0, 0, 0.75), 0 -1.5vmin 2.7vmin rgba(0, 0, 0, 0.75);
        overflow: hidden;
        display: block;
        -webkit-transition: opacity 0.2s ease, -webkit-transform 0.18s ease;
        transition: opacity 0.2s ease, -webkit-transform 0.18s ease;
        transition: transform 0.18s ease, opacity 0.2s ease;
        transition: transform 0.18s ease, opacity 0.2s ease, -webkit-transform 0.18s ease;
        -webkit-transform-origin: bottom center;
        transform-origin: bottom center;
    }
    .slider__caption {
        height: 20%;
        font-weight: bold;
        color: rgba(255, 255, 255, 0.8);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .slider__btn {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 9vmin;
        height: 9vmin;
        margin: 2vmin auto;
        border-right: 2vmin solid rgba(255, 255, 255, 0.8);
        border-bottom: 2vmin solid rgba(255, 255, 255, 0.65);
        z-index: 100;
        cursor: pointer;
        -webkit-transform: perspective(10vmin) rotateX(-30deg) rotateZ(45deg);
        transform: perspective(10vmin) rotateX(-30deg) rotateZ(45deg);
    }
    .slider__btn:active {
        border-right-color: #dd6;
        border-bottom-color: #dd6;
    }
</style>


    <h1>{!! $album->name !!}</h1>


<div class="slider">
    @foreach($album->images as $image)

        <figure class="slider__item"><img class="slider__image" src="{!! config('albums.image_folder')."/".$image->image !!}"/>
            <figcaption class="slider__caption">{!! $image->name !!}</figcaption>
        </figure>
    @endforeach


</div>
<div class="slider__btn"></div>











    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

            </div>

        </div>
    </div>
</div>



@php
/*

For faster operation, add a style sheet and delete the top style tag.
----------------------------------------------------------------------

<style>
    .slider {
        width: 90vmin;
        height: 90vmin;
        -webkit-perspective: 100vmin;
        perspective: 100vmin;
        margin: auto;
        -webkit-perspective-origin: top center;
        perspective-origin: top center;
        position: relative;
        box-sizing: border-box;
    }
    .slider__item {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding-top: 15vmin;
        box-sizing: border-box;
        -webkit-transition: -webkit-transform 0.18s ease;
        transition: -webkit-transform 0.18s ease;
        transition: transform 0.18s ease;
        transition: transform 0.18s ease, -webkit-transform 0.18s ease;
    }
    .slider__item:nth-child(1) {
        -webkit-transform: translate3d(0, 0, 0vmin);
        transform: translate3d(0, 0, 0vmin);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        z-index: 7;
    }
    .slider__item:nth-child(2) {
        -webkit-transform: translate3d(0, 0, -15vmin);
        transform: translate3d(0, 0, -15vmin);
        -webkit-transition-delay: 0.05s;
        transition-delay: 0.05s;
        z-index: 6;
    }
    .slider__item:nth-child(3) {
        -webkit-transform: translate3d(0, 0, -30vmin);
        transform: translate3d(0, 0, -30vmin);
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
        z-index: 5;
    }
    .slider__item:nth-child(4) {
        -webkit-transform: translate3d(0, 0, -45vmin);
        transform: translate3d(0, 0, -45vmin);
        -webkit-transition-delay: 0.15s;
        transition-delay: 0.15s;
        z-index: 4;
    }
    .slider__item:nth-child(5) {
        -webkit-transform: translate3d(0, 0, -60vmin);
        transform: translate3d(0, 0, -60vmin);
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
        z-index: 3;
    }
    .slider__item:nth-child(6) {
        -webkit-transform: translate3d(0, 0, -75vmin);
        transform: translate3d(0, 0, -75vmin);
        -webkit-transition-delay: 0.25s;
        transition-delay: 0.25s;
        z-index: 2;
    }
    .slider__item:nth-child(7) {
        -webkit-transform: translate3d(0, 0, -90vmin);
        transform: translate3d(0, 0, -90vmin);
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
        z-index: 1;
    }
    .slider__item:nth-child(8) {
        -webkit-transform: translate3d(0, 0, -105vmin);
        transform: translate3d(0, 0, -105vmin);
        -webkit-transition-delay: 0.35s;
        transition-delay: 0.35s;
        z-index: 0;
    }
    .slider__image {
        width: 100%;
        height: 80%;
        background-color: #999;
        border: 1.5vmin solid #eee;
        box-sizing: border-box;
        box-shadow: 0px 3vmin 3vmin rgba(0, 0, 0, 0.75), 0 -1.5vmin 2.7vmin rgba(0, 0, 0, 0.75);
        overflow: hidden;
        display: block;
        -webkit-transition: opacity 0.2s ease, -webkit-transform 0.18s ease;
        transition: opacity 0.2s ease, -webkit-transform 0.18s ease;
        transition: transform 0.18s ease, opacity 0.2s ease;
        transition: transform 0.18s ease, opacity 0.2s ease, -webkit-transform 0.18s ease;
        -webkit-transform-origin: bottom center;
        transform-origin: bottom center;
    }
    .slider__caption {
        height: 20%;
        font-weight: bold;
        color: rgba(255, 255, 255, 0.8);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .slider__btn {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 9vmin;
        height: 9vmin;
        margin: 2vmin auto;
        border-right: 2vmin solid rgba(255, 255, 255, 0.8);
        border-bottom: 2vmin solid rgba(255, 255, 255, 0.65);
        z-index: 100;
        cursor: pointer;
        -webkit-transform: perspective(10vmin) rotateX(-30deg) rotateZ(45deg);
        transform: perspective(10vmin) rotateX(-30deg) rotateZ(45deg);
    }
    .slider__btn:active {
        border-right-color: #dd6;
        border-bottom-color: #dd6;
    }
</style>

-------------------------------------------------
bootstrap lightbox
stick to the footer to use it.
-----------------------------------------

<script>
    $(function(){
        var	btn = $(".slider__btn");

        btn.on("click",function(){
            $(".slider__item").first().clone().appendTo(".slider");
            $(".slider__image").first().css({transform: "rotateX(-180deg)", opacity: 0});
            setTimeout(function(){
                $(".slider__item").first().remove();
            },200);
        });
    });
</script>


------------------------------------------------
*/


@endphp

