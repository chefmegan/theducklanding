@extends('master')

@section('title')
Chef Megan
@endsection

@section('content')

<landing style="background-color:rgb(245,245,245);">

  <div slot="home">

    <div class="container has-text-centered">
      <div class="columns">
        <div class="column">
          <transition name="bounce" appear>
            <p class="is-cursive" style="font-size:6rem;">Chef Megan</p>
          </transition>
        </div>
      </div>
    </div>

  </div>

  <div slot="events">

    <div class="container has-text-centered">
      <div class="columns">
        <div class="column">
      <p class="is-cursive" style="font-size:4rem;">Events</p>
    </div>
  </div>

      <div class="columns">
          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/cunhXsI.jpg">
          </div>

          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/O7QQExW.jpg">
          </div>

          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/cunhXsI.jpg">
          </div>
      </div>

      <div class="columns">
          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/O7QQExW.jpg">
          </div>

          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/cunhXsI.jpg">
          </div>

          <div class="column is-one-third">
              <img class="zoom" v-img:my-group src="https://i.imgur.com/O7QQExW.jpg">
          </div>
      </div>

    </div>

  </div>

  <div slot="about">

    <div class="container has-text-centered">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child notification is-primary">
            <p class="title is-cursive">About Chef Megan</p>
            <p>At Chef Megan our ambition is to create truly bespoke menus for every occasion. We are passionate about using locally sourced and seasonal produce to deliver outstanding food.</p>
            <br>
            <p>Based in London, we offer services for events of all sizes, from small private dinners to large weddings and we would love to work with you to create a menu that is the perfect fit for your budget and guests.</p>
            <br>
            <a style="color:white;text-decoration:none;" v-scroll-to="'#contact'"><strong>Get in touch with us today to discuss your requirements.</strong></a><p> We look forward to hearing from you.</p>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child">
          </article>
        </div>
      </div>

    </div>

  </div>

  <div slot="testimonials">

    <div class="container has-text-centered">

        <p class="is-cursive" style="font-size:4rem;">Testimonials</p>

        <div class="columns">
            <div class="column is-1">
            </div>
            <div class="column is-10">
                <article class="message is-primary">
                    <div class="message-body">
                        <p class="content has-text-left">
                            "Megan was an excellent caterer and provided us with a thoughtful and delicious bespoke menu for our fundraising event. She organised all the extra requirements with ease and in good time, and the food was absolutely fantastic. We would definitely use her again and would recommend her to anyone."
                        </p>
                        <p class="content has-text-right">
                            <strong>Jo Black - Fundraising and Communications Manager at Dig Deep</strong>
                                <br>
                            <em>26th October 2017</em>
                        </p>
                    </div>
                </article>

                <article class="message is-primary">
                    <div class="message-body">
                        <p class="content has-text-left">
                            "Megan made us a 3-tier wedding cake for 100 people and it was stunning. Each layer was a different flavour; salted caramel, chocolate oreo and carrot cake - they were so tasty! The flavours, texture and decoration were excellent, down to the beautifully sculpted fondant elephants that fit perfectly with our wedding theme. I cannot recommend highly enough!"
                        </p>
                        <p class="content has-text-right">
                            <strong>Sunita Yardley-Patel - Bride from Wolverhampton</strong>
                                <br>
                            <em>25th June 2017</em>
                        </p>
                    </div>
                </article>

                <article class="message is-primary">
                    <div class="message-body">
                        <p class="content has-text-left">
                            "What a great night, I didn't know what to expect as I arrived for the Fork in the Road supper club, but it was a triumph. We started off with homemade bread and marmite butter - my husband loved this. The tiny slices of duck as a canapé were perfect and the duck scotch egg starter a great idea. Our main  course of duck confit just fell off the bone it was so tender. That left me wondering what you could possibly do with duck for a dessert!
    Then came my favourite dish of the night - a white chocolate duck shell filled with a white cheesecake and in the centre a passion fruit yolk, I just loved this. Then to finish off, with coffee, oval speckled macaroons (to resemble eggs) - fantastic, I can't wait for the next evening"
                        </p>
                        <p class="content has-text-right">
                            <strong>Jane Sargeant - from Jane & Judy in the kitchen</strong>
                                <br>
                            <em>12th May 2017</em>
                        </p>
                    </div>
                </article>

                <article class="message is-primary">
                    <div class="message-body">
                        <p class="content has-text-left">
                            "Enjoyed a fantastic 4 course meal put on by Chef Megan in a pop up cafe in Crystal Palace. Amazing duck themed plates starting with duck on rye with blackcurrant, followed by duck egg with asparagus and aioli, duck and dauphinois potatoes and a passionfruit and white chocolate dessert. All plates cooked from scratch (including a selection of breads to start!). Food was beautifully presented with attention to detail. Would definitely recommend for those food enthusiasts excited by quality cooking."
                        </p>
                        <p class="content has-text-right">
                            <strong>Dan & Bex McKay-Smith</strong>
                                <br>
                            <em>28th April 2017</em>
                        </p>
                    </div>
                </article>

                <article class="message is-primary">
                    <div class="message-body">
                        <p class="content has-text-left">
                            "Megan was flexible, reliable and an excellent communicator during the planning of our canapé event and we really liked the thoughtful extras she came up with. The end result was a triumph- the food was delicious and the delivery excellent. I would happily recommend her."
                        </p>
                        <p class="content has-text-right">
                            <strong>Philip Lawry</strong>
                                <br>
                            <em>28th December 2016</em>
                        </p>
                    </div>
                </article>

            </div>
            <div class="column is-1">
            </div>
        </div>

    </div>

  </div>

  <div slot="contact">

    <div class="container has-text-centered">

          <div class="columns">
            <div class="column">

            <p class="is-cursive" style="font-size:4rem;">Contact Chef Megan</p>
            <p class="title is-cursive"><strong>Phone</strong></p>
            <p class="title is-6">
              <a href="tel:+447731327032">(+44) 07731327032</a>
            </p>
            <p class="title is-cursive"><strong>E-mail</strong></p>
            <p class="title is-6">
              <a href="mailto:megan@chefmegan.co.uk">megan@chefmegan.co.uk</a>
            </p>
            <p class="title is-cursive">Follow our latest food adventures here:</p>
            <p>
              <a class="button is-primary is-inverted is-outlined is-medium" href="https://twitter.com/_Chef_Megan">
                <span class="icon is-medium">
                  <i class="fa fa-twitter"></i>
                </span>
              </a>
              <a class="button is-primary is-inverted is-outlined is-medium" href="https://www.facebook.com/Fork-In-The-Road-Supper-Club-1817581741827386/?ref=bookmarks">
                <span class="icon is-medium">
                  <i class="fa fa-facebook"></i>
                </span>
              </a>
              <a class="button is-primary is-inverted is-outlined is-medium" href="https://www.instagram.com/megan.goddard91/">
                <span class="icon is-medium">
                  <i class="fa fa-instagram"></i>
                </span>
              </a>
            </p>
          </article>

        </div>
      </div>


    </div>
  </div>

  <div slot="footer">
    <div class="content has-text-centered">
      <p class="title is-cursive">
        @if (date('Y') > 2017)
        Copyright © 2017 - {{ date('Y') }} Megan Goddard
        @else
        Copyright © 2017 Megan Goddard
        @endif
      </p>
    </div>
  </div>

</landing>
@endsection
