

@extends('App.app')
@section('content')


<div id="fh5co-wrapper">
    <div id="fh5co-page">
              <div id="fh5co-header">
                        <header id="fh5co-header-section">
                                  <div class="container">
                                            <div class="nav-header">
                                                      <a href="#"
                                                                class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                                                      <h1 id="fh5co-logo"><a href="index.html">Luxe</a></h1>
                                                      <nav id="fh5co-menu-wrap" role="navigation">
                                                                <ul class="sf-menu" id="fh5co-primary-menu">
                                                                          <li><a class="active">Home</a></li>
                                                                          <li>
                                                                                    <a href="hotel.html"
                                                                                              class="fh5co-sub-ddown">Hotel</a>
                                                                                    <ul class="fh5co-sub-menu">
                                                                                              <li><a href="#">Luxe
                                                                                                                  Hotel</a>
                                                                                              </li>
                                                                                              <li><a href="#">Deluxe
                                                                                                                  Hotel</a>
                                                                                              </li>
                                                                                              <li>
                                                                                                        <a href="#"
                                                                                                                  class="fh5co-sub-ddown">King
                                                                                                                  Hotel</a>
                                                                                                        <ul
                                                                                                                  class="fh5co-sub-menu">
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template"
                                                                                                                                      target="_blank">Build</a>
                                                                                                                  </li>
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap"
                                                                                                                                      target="_blank">Work</a>
                                                                                                                  </li>
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap"
                                                                                                                                      target="_blank">Light</a>
                                                                                                                  </li>
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap"
                                                                                                                                      target="_blank">Relic</a>
                                                                                                                  </li>
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap"
                                                                                                                                      target="_blank">Display</a>
                                                                                                                  </li>
                                                                                                                  <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap"
                                                                                                                                      target="_blank">Sprint</a>
                                                                                                                  </li>
                                                                                                        </ul>
                                                                                              </li>
                                                                                              <li><a href="#">Five Star
                                                                                                                  Hotel</a>
                                                                                              </li>
                                                                                    </ul>
                                                                          </li>
                                                                          <li><a href="services.html">Services</a>
                                                                          </li>
                                                                          <li><a href="blog.html">Blog</a></li>
                                                                          <li><a href="contact.html">Contact</a>
                                                                          </li>
                                                                </ul>
                                                      </nav>
                                            </div>
                                  </div>
                        </header>

              </div>
              <!-- end:fh5co-header -->
              <aside id="fh5co-hero" class="js-fullheight">
                        <div class="flexslider js-fullheight">
                                  <ul class="slides">
                                            <li
                                                      style="background-image: url('{{ asset('assets/images/slider1.jpg')}}');">
                                                      <div class="overlay-gradient"></div>
                                                      <div class="container">
                                                                <div
                                                                          class="col-md-12 col-md-offset-0 text-center slider-text">
                                                                          <div
                                                                                    class="slider-text-inner js-fullheight">
                                                                                    <div class="desc">
                                                                                              <p><span>Bora
                                                                                                                  Hotel</span>
                                                                                              </p>
                                                                                              <h2>Reserve Room for
                                                                                                        Family
                                                                                                        Vacation
                                                                                              </h2>
                                                                                              <p>
                                                                                                        <a href="#"
                                                                                                                  class="btn btn-primary btn-lg">Book
                                                                                                                  Now</a>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                            </li>
                                            <li
                                                      style="background-image: url({{asset('assets/images/slider2.jpg')}});">
                                                      <div class="overlay-gradient"></div>
                                                      <div class="container">
                                                                <div
                                                                          class="col-md-12 col-md-offset-0 text-center slider-text">
                                                                          <div
                                                                                    class="slider-text-inner js-fullheight">
                                                                                    <div class="desc">
                                                                                              <p><span>Deluxe
                                                                                                                  Hotel</span>
                                                                                              </p>
                                                                                              <h2>Make Your
                                                                                                        Vacation
                                                                                                        Comfortable
                                                                                              </h2>
                                                                                              <p>
                                                                                                        <a href="#"
                                                                                                                  class="btn btn-primary btn-lg">Book
                                                                                                                  Now</a>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                            </li>
                                            <li
                                                      style="background-image: url({{asset('assets/images/slider3.jpg')}});">
                                                      <div class="overlay-gradient"></div>
                                                      <div class="container">
                                                                <div
                                                                          class="col-md-12 col-md-offset-0 text-center slider-text">
                                                                          <div
                                                                                    class="slider-text-inner js-fullheight">
                                                                                    <div class="desc">
                                                                                              <p><span>Luxe
                                                                                                                  Hotel</span>
                                                                                              </p>
                                                                                              <h2>A Best Place To
                                                                                                        Enjoy Your
                                                                                                        Life</h2>
                                                                                              <p>
                                                                                                        <a href="#"
                                                                                                                  class="btn btn-primary btn-lg">Book
                                                                                                                  Now</a>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                            </li>

                                  </ul>
                        </div>
              </aside>
              <div class="wrap">
                        <div class="container">
                                  <div class="row">
                                            <div id="availability">
                                                      <form action="#">

                                                                <div class="a-col">
                                                                          <section>
                                                                                    <select
                                                                                              class="cs-select cs-skin-border">
                                                                                              <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        Select
                                                                                                        Hotel
                                                                                              </option>
                                                                                              <option
                                                                                                        value="email">
                                                                                                        Luxe Hotel
                                                                                              </option>
                                                                                              <option
                                                                                                        value="twitter">
                                                                                                        Deluxe
                                                                                                        Hotel
                                                                                              </option>
                                                                                              <option
                                                                                                        value="linkedin">
                                                                                                        Five Star
                                                                                                        Hotel
                                                                                              </option>
                                                                                    </select>
                                                                          </section>
                                                                </div>
                                                                <div class="a-col alternate">
                                                                          <div class="input-field">
                                                                                    <label for="date-start">Check
                                                                                              In</label>
                                                                                    <input type="text"
                                                                                              class="form-control"
                                                                                              id="date-start" />
                                                                          </div>
                                                                </div>
                                                                <div class="a-col alternate">
                                                                          <div class="input-field">
                                                                                    <label for="date-end">Check
                                                                                              Out</label>
                                                                                    <input type="text"
                                                                                              class="form-control"
                                                                                              id="date-end" />
                                                                          </div>
                                                                </div>
                                                                <div class="a-col action">
                                                                          <a href="#">
                                                                                    <span>Check</span>
                                                                                    Availability
                                                                          </a>
                                                                </div>
                                                      </form>
                                            </div>
                                  </div>
                        </div>
              </div>


              <div id="featured-hotel" class="fh5co-bg-color">
                        <div class="container">

                                  <div class="row">
                                            <div class="col-md-12">
                                                      <div class="section-title text-center">
                                                                <h2>Featured Hotels</h2>
                                                      </div>
                                            </div>
                                  </div>

                                  <div class="row">
                                            <div class="feature-full-1col">
                                                      <div class="image"
                                                                style="background-image: url({{asset('assets/images/hotel_feture_1.jpg')}});">
                                                                <div class="descrip text-center">
                                                                          <p><small>For as low
                                                                                              as</small><span>$100/night</span>
                                                                          </p>
                                                                </div>
                                                      </div>
                                                      <div class="desc">
                                                                <h3>Deluxe Hotel</h3>
                                                                <p>Pellentesque habitant morbi tristique senectus
                                                                          et netus ett mauada fames ac turpis
                                                                          egestas. Etiam euismod tempor leo, in
                                                                          suscipit urna condimentum sed. Vivamus
                                                                          augue enim, consectetur ac interdum a,
                                                                          pulvinar ac massa. Nullam malesuada
                                                                          congue </p>
                                                                <p><a href="#"
                                                                                    class="btn btn-primary btn-luxe-primary">Book
                                                                                    Now <i
                                                                                              class="ti-angle-right"></i></a>
                                                                </p>
                                                      </div>
                                            </div>

                                            <div class="feature-full-2col">
                                                      <div class="f-hotel">
                                                                <div class="image"
                                                                          style="background-image: url({{asset('assets/images/hotel_feture_2.jpg')}});">
                                                                          <div class="descrip text-center">
                                                                                    <p><small>For as low
                                                                                                        as</small><span>$99/night</span>
                                                                                    </p>
                                                                          </div>
                                                                </div>
                                                                <div class="desc">
                                                                          <h3>Hotel Bora</h3>
                                                                          <p>Pellentesque habitant morbi tristique
                                                                                    senectus et netus ett mauada
                                                                                    fames ac turpis egestas. Etiam
                                                                                    euismod tempor leo,
                                                                                    in suscipit urna condimentum
                                                                                    sed. </p>
                                                                          <p><a href="#"
                                                                                              class="btn btn-primary btn-luxe-primary">Book
                                                                                              Now <i
                                                                                                        class="ti-angle-right"></i></a>
                                                                          </p>
                                                                </div>
                                                      </div>
                                                      <div class="f-hotel">
                                                                <div class="image"
                                                                          style="background-image: url({{asset('assets/images/hotel_feture_3.jpg')}});">
                                                                          <div class="descrip text-center">
                                                                                    <p><small>For as low
                                                                                                        as</small><span>$99/night</span>
                                                                                    </p>
                                                                          </div>
                                                                </div>
                                                                <div class="desc">
                                                                          <h3>D’Morvie</h3>
                                                                          <p>Pellentesque habitant morbi tristique
                                                                                    senectus et netus ett mauada
                                                                                    fames ac turpis egestas. Etiam
                                                                                    euismod tempor leo, in
                                                                                    suscipit urna condimentum sed.
                                                                          </p>
                                                                          <p><a href="#"
                                                                                              class="btn btn-primary btn-luxe-primary">Book
                                                                                              Now <i
                                                                                                        class="ti-angle-right"></i></a>
                                                                          </p>
                                                                </div>
                                                      </div>
                                            </div>
                                  </div>

                        </div>
              </div>

              <div id="hotel-facilities">
                        <div class="container">
                                  <div class="row">
                                            <div class="col-md-12">
                                                      <div class="section-title text-center">
                                                                <h2>Hotel Facilities</h2>
                                                      </div>
                                            </div>
                                  </div>

                                  <div id="tabs">
                                            <nav class="tabs-nav">
                                                      <a href="#" class="active" data-tab="tab1">
                                                                <i class="flaticon-restaurant icon"></i>
                                                                <span>Restaurant</span>
                                                      </a>
                                                      <a href="#" data-tab="tab2">
                                                                <i class="flaticon-cup icon"></i>
                                                                <span>Bar</span>
                                                      </a>
                                                      <a href="#" data-tab="tab3">

                                                                <i class="flaticon-car icon"></i>
                                                                <span>Pick-up</span>
                                                      </a>
                                                      <a href="#" data-tab="tab4">

                                                                <i class="flaticon-swimming icon"></i>
                                                                <span>Swimming Pool</span>
                                                      </a>
                                                      <a href="#" data-tab="tab5">

                                                                <i class="flaticon-massage icon"></i>
                                                                <span>Spa</span>
                                                      </a>
                                                      <a href="#" data-tab="tab6">

                                                                <i class="flaticon-bicycle icon"></i>
                                                                <span>Gym</span>
                                                      </a>
                                            </nav>
                                            <div class="tab-content-container">
                                                      <div class="tab-content active show"
                                                                data-tab-content="tab1">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="images/tab_img_1.jpg"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Restaurant
                                                                                              </h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                                      <div class="tab-content" data-tab-content="tab2">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="{{asset('assets/images/tab_img_2.jpg')}}"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Bars</h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                                      <div class="tab-content" data-tab-content="tab3">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="{{asset('assets/images/tab_img_3.jpg')}}"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Pick Up
                                                                                              </h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                                      <div class="tab-content" data-tab-content="tab4">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="{{asset('assets/images/tab_img_4.jpg')}}"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Swimming
                                                                                                        Pool</h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                                      <div class="tab-content" data-tab-content="tab5">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="{{asset('assets/images/tab_img_5.jpg')}}"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Spa</h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                                      <div class="tab-content" data-tab-content="tab6">
                                                                <div class="container">
                                                                          <div class="row">
                                                                                    <div class="col-md-6">
                                                                                              <img src="{{asset('assets/images/tab_img_6.jpg')}}"
                                                                                                        class="img-responsive"
                                                                                                        alt="Image">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                              <span
                                                                                                        class="super-heading-sm">World
                                                                                                        Class</span>
                                                                                              <h3 class="heading">
                                                                                                        Gym</h3>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Molestias
                                                                                                        officia
                                                                                                        perferendis
                                                                                                        modi
                                                                                                        impedit,
                                                                                                        rem quasi
                                                                                                        veritatis.
                                                                                                        Consectetur
                                                                                                        obcaecati
                                                                                                        incidunt,
                                                                                                        quae
                                                                                                        rerum,
                                                                                                        accusamus
                                                                                                        sapiente
                                                                                                        fuga vero
                                                                                                        at. Quia,
                                                                                                        labore,
                                                                                                        reprehenderit
                                                                                                        illum
                                                                                                        dolorem
                                                                                                        quae
                                                                                                        facilis
                                                                                                        reiciendis
                                                                                                        quas
                                                                                                        similique
                                                                                                        totam
                                                                                                        sequi
                                                                                                        ducimus
                                                                                                        temporibus
                                                                                                        ex nemo,
                                                                                                        omnis
                                                                                                        perferendis
                                                                                                        earum
                                                                                                        fugit
                                                                                                        impedit
                                                                                                        molestias
                                                                                                        animi
                                                                                                        vitae.</p>
                                                                                              <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Laboriosam
                                                                                                        neque
                                                                                                        blanditiis
                                                                                                        eveniet
                                                                                                        nesciunt,
                                                                                                        beatae
                                                                                                        similique
                                                                                                        doloribus,
                                                                                                        ex impedit
                                                                                                        rem
                                                                                                        officiis
                                                                                                        placeat
                                                                                                        dignissimos
                                                                                                        molestias
                                                                                                        temporibus,
                                                                                                        in! Minima
                                                                                                        quod,
                                                                                                        consequatur
                                                                                                        neque
                                                                                                        aliquam.
                                                                                              </p>
                                                                                              <p
                                                                                                        class="service-hour">
                                                                                                        <span>Service
                                                                                                                  Hours</span>
                                                                                                        <strong>7:30
                                                                                                                  AM
                                                                                                                  -
                                                                                                                  8:00
                                                                                                                  PM</strong>
                                                                                              </p>
                                                                                    </div>
                                                                          </div>
                                                                </div>
                                                      </div>
                                            </div>
                                  </div>
                        </div>
              </div>

              <div id="testimonial">
                        <div class="container">
                                  <div class="row">
                                            <div class="col-md-12">
                                                      <div class="section-title text-center">
                                                                <h2>Happy Customer Says...</h2>
                                                      </div>
                                            </div>
                                  </div>
                                  <div class="row">
                                            <div class="col-md-4">
                                                      <div class="testimony">
                                                                <blockquote>
                                                                          &ldquo;If you’re looking for a top
                                                                          quality hotel look no further. We were
                                                                          upgraded free of charge to the Premium
                                                                          Suite, thanks so much&rdquo;
                                                                </blockquote>
                                                                <p class="author"><cite>John Doe</cite></p>
                                                      </div>
                                            </div>
                                            <div class="col-md-4">
                                                      <div class="testimony">
                                                                <blockquote>
                                                                          &ldquo;Me and my wife had a delightful
                                                                          weekend get away here, the staff were so
                                                                          friendly and attentive. Highly
                                                                          Recommended&rdquo;
                                                                </blockquote>
                                                                <p class="author"><cite>Rob Smith</cite></p>
                                                      </div>
                                            </div>
                                            <div class="col-md-4">
                                                      <div class="testimony">
                                                                <blockquote>
                                                                          &ldquo;If you’re looking for a top
                                                                          quality hotel look no further. We were
                                                                          upgraded free of charge to the Premium
                                                                          Suite, thanks so much&rdquo;
                                                                </blockquote>
                                                                <p class="author"><cite>Jane Doe</cite></p>
                                                      </div>
                                            </div>
                                  </div>
                        </div>
              </div>


              <div id="fh5co-blog-section">
                        <div class="container">
                                  <div class="row">
                                            <div class="col-md-12">
                                                      <div class="section-title text-center">
                                                                <h2>Our Blog</h2>
                                                      </div>
                                            </div>
                                  </div>
                                  <div class="row">
                                            <div class="col-md-4">
                                                      <div class="blog-grid" style="background-image: 
                        url({{asset('assets/images/image-1.jpg')}});">
                                                                <div class="date text-center">
                                                                          <span>09</span>
                                                                          <small>Aug</small>
                                                                </div>
                                                      </div>
                                                      <div class="desc">
                                                                <h3><a href="#">Most Expensive Hotel</a></h3>
                                                      </div>
                                            </div>
                                            <div class="col-md-4">
                                                      <div class="blog-grid"
                                                                style="background-image:   url({{asset('assets/images/image-2.jpg')}});">
                                                                <div class="date text-center">
                                                                          <span>09</span>
                                                                          <small>Aug</small>
                                                                </div>
                                                      </div>
                                                      <div class="desc">
                                                                <h3><a href="#">1st Anniversary of Luxe Hotel</a>
                                                                </h3>
                                                      </div>
                                            </div>
                                            <div class="col-md-4">
                                                      <div class="blog-grid"
                                                                style="background-image:   url({{asset('assets/images/image-3.jpg')}});">
                                                                <div class="date text-center">
                                                                          <span>09</span>
                                                                          <small>Aug</small>
                                                                </div>
                                                      </div>
                                                      <div class="desc">
                                                                <h3><a href="#">Discover New Adventure</a></h3>
                                                      </div>
                                            </div>
                                  </div>
                        </div>
              </div>

              @endsection