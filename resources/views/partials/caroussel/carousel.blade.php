<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        @if(url()->current() == "http://127.0.0.1:8000"){
            <div class="carousel-item active">
                <img src="{{ asset('image/crevettes1.jpg') }}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/ri.jpg') }}" class="d-block w-100" >
            </div>
        }
        @elseif (url()->current() == "http://127.0.0.1:8000/home"){
            <div class="carousel-item active">
                <img src="{{ asset('image/imageOne.jpg') }}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/loup.jpg') }}" class="d-block w-100" >
            </div>
        }
        @elseif (url()->current() == "http://127.0.0.1:8000/about"){
            <div class="carousel-item active">
                <img src="{{ asset('image/r.jpg') }}" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/couple-de-loup.jpg') }}" class="d-block w-100" >
            </div>
        }
        @endif
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
