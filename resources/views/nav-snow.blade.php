<div id="top" class="py-2" style="font-size: 0.9em;">
    <div class="d-flex justify-content-center">
        <div class="mx-3">
            <ion-icon name="navigate"></ion-icon>
            1217 E Hefner Road, OKC, OK 73131
        </div>
        <div class="mx-3">
            <ion-icon name="call"></ion-icon>
            405.242.4612
        </div>
    </div>
</div>

<div class="d-block d-md-none">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item" style="background: transparent;">
            <h2 class="accordion-header text-center" id="flush-headingOne" style="font-size: 2em;">
                <button class="collapsed txt-snow" style="background: transparent; border: none;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <ul class="text-center px-0 pb-3">
                    @include("_nav-list")
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="d-none d-md-block">
    <ul class="nav text-center px-0 pb-3 justify-content-center">
        @include("_nav-list")
    </ul>
</div>
