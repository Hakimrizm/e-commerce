@extends('layouts.app')

@section('content')
  <div class="container">
    {{-- <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{ __('You are logged in!') }}
          </div>
        </div>
      </div>
    </div> --}}

    {{-- Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide rounded shadow" data-bs-ride="true" style="overflow: hidden">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/1.jpg" class="d-block w-100" alt="unsplash image">
        </div>
        <div class="carousel-item">
          <img src="/img/2.jpg" class="d-block w-100" alt="unsplash image">
        </div>
        <div class="carousel-item">
          <img src="/img/3.jpg" class="d-block w-100" alt="unsplash image">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    {{-- End Of Carousel --}}
  </div>

  {{-- Categories --}}
  <section id="categories">
    <div class="container">
      <div class="row align-items-center mt-3">
        <div class="col-6">
          <h1>Featured Categories</h1>
        </div>
        <div class="col-6 d-flex">
          <button type="button" class="btn btn-danger p-0 m-0 button-card-carosel d-flex justify-content-center align-items-center ms-auto" data-name-slide="prev">&#10094;</button>
          <button type="button" class="btn btn-danger p-0 m-0 button-card-carosel d-flex justify-content-center align-items-center ms-2" data-name-slide="next">&#10095;</button>
        </div>
      </div>

      <div class="carousel-card mt-3">
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- End Of Categories --}}

  {{-- Products --}}
  <section id="product">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Products</h1>
        </div>
      </div>

      <div class="row mt-3 justify-content-center">
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="link-product">
            <div class="card">
              <div class="card-body">
                <div class="card-img text-center">
                  <img src="https://freshcart.codescandy.com/assets/images/products/product-img-1.jpg" alt="">
                </div>
                <div class="inner-card">
                  <p class="text-muted">Snack & Munchies</p>
                  <h5>Haldiram's Sev Bhujia</h5>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6>Rp.10.000.-</h6>
                    <a href="" class="btn btn-danger">&#10009; Add</a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  {{-- End Of Products --}}
@endsection
