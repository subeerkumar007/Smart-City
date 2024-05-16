<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smart City Website</title>
  <link rel="stylesheet" href="index_style.css?<?php echo time(); ?>" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>
<?php 
      include "navbar.php";
    ?>
  <header>
    <header>
      <div class="logo">
        <a href="#"><img src="./Photos/Logo.jpg" alt="logo" /></a>
      </div>
      <nav class="nav-menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Destinations</a></li>

          <li><a href="#">Hotels</a></li>
          <li><a href="#">Activities</a></li>
          <li><a href="#">Contact</a></li>
          <li>
            <i class="fa fa-phone-alt"></i>
          </li>
          <li>
            <i class="fa fa-envelope"></i>
          </li>
        </ul>
      </nav>
    </header>
  </header>
  <main>
    <section class="New">
      <div class="New">

      </div>

      <div class="hero-content">
        <h1 style="font-style: italic;">Welome to the Smart City</h1>
        <p style="font-style: italic;">Discover amazing destinations and feel the technologies.</p>
        <a href="#" class="hero-button">Explore</a>
      </div>
    </section><br><br>
    <h2 style="text-align: center; font: italic small-caps bold 16px/2 cursive; font-size: 50px;">About the city</h2>
    <p style="font-weight: 510;">
      Varanasi is believed to have been founded in 11th or 12th century BC. It was the cradle of Indian civilization
      during the Vedic Age and has been mentioned in the Atharva Veda as the capital of the kingdom of Kashi. Its
      auspicious location and rich hinterland allowed it to prosper and become a centre of culture and commerce down the
      centuries. Foreign travellers such as Hiuen Tsang have testified to its eminence.<br>
      <br> <img style="display: block;
     margin-left: auto;
     margin-right: auto;
     filter: drop-shadow(0 0 0.75rem #323131);" src="./Photos/about-varanasi.jpg"><br>
      Buddhism was established when the Buddha gave his first sermon at Sarnath in 528 BC. The Jain tirthankara,
      Parshva, is also believed to have lived in Varanasi in 8th century BC. The city did not fare well under the Delhi
      Sultans when it was plundered many times. During the Bhakti movement, Varanasi became a key centre with such
      saints as Kabir and Ravidas. During Akbar’s reign, the city received his patronage with the building of Shiva and
      Vishnu temples.

      Modern Varanasi was established during Rajput and Mahratta rule. It became a princely state during British rule.
      At this time many renowned institutions were established in the city including the Benares Hindu University,
      University, Kashi Vidyapeeth and Imania Arabic College. After Independence Varanasi became part of Uttar Pradesh.


    </p>
    <!-- Destinations for tour-->
    <section id="destinations" class="destinations">
      <h2>Popular Attractions</h2>
      <div class="destination-grid">
        <div class="destination-item">
          <a href="https://www.shrikashivishwanath.org/" target="_blank"> <img src="./Photos/Coridoor.jpg"
              alt="" /></a>
          <h3>Kashi vishwanath</h3>

          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 04:00 AM - 09:00 PM</i>
          </p>
          <p>
            The Kashi Vishwanath temple is widely recognised as one of the
            most important places of worship in the Hindu religion.
            Inside the Kashi Vishwanath Temple is the Jyotirlinga of Shiva,
            Vishveshvara or Vishvanath.
            The Vishveshvara Jyotirlinga has a very special and unique significance
            in the spiritual history of India.

          </p>

        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/d/viewer?mid=1cHzoTRex8pm-lqJvBqfl4LOq1N4&hl=en&ll=25.379109038032347%2C83.02488349999997&z=17"
            target="_blank"> <img src="./Photos/Sarnath.jpg" alt="" /></a>
          <h3>Sarnath</h3>
          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 08:00 AM - 09:00 PM</i>
          </p>
          <p>
            Dhamek Stupa is the most noticeable structure in Sarnath, near Varanasi.
            It is one of the most prominent Buddhist structures in India. The Dhamek Stupa was built in 500 CE to
            replace an earlier structure commissioned by the great Mauryan king Ashoka in 249 BCE.
            The Dhamek Stupa represents the deer park (Rishipattana)
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/dir//72Q4%2BHQ9+Ganga+Ghat,+Assi+ghat,+Shivala,+Varanasi,+Uttar+Pradesh+221005/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x398e31cf044c8d51:0x3582fb71db10cfca?sa=X&ved=1t:57443&ictx=111"
            target="_blank"> <img src="./Photos/Ghat.jpg" alt="" /></a>
          <h3>Ganga Ghats</h3>
          <p> Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star-half" style="font-size: 0.50em;"></i>
          </p>
          <p>
            Ghats in Varanasi are riverfront steps leading
            to the banks of the Ganges river.
            The city has 84 ghats. Most of the ghats
            are bathing and puja ceremonial ghats,
            while two ghats,
            Manikarnika and Harishchandra, are used exclusively as cremation sites.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.swarved-mahamandir.org/" target="_blank"><img
              src="./Photos/Sarweda Mandir.jpg" alt="" /></a>
          <h3>Swarveda Mandir</h3>
          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star-half" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 04:00 AM - 09:00 PM</i>
          </p>

          <p>
            The temple promotes the teachings of Swarveda,
            emphasizing Brahm Vidya—a body of knowledge empowering
            spiritual seekers to maintain a state of consummate Zen, characterized
            by unwavering constancy in peace and happiness.
            The temple boasts a stunning design with 125-petal lotus domes and an
            impressive 20,000-seating capacity, making it one of the largest meditation centers in the world.
            from the world and also in the inside of the mandir
          </p>
        </div>
        <div class="destination-item">
          <a href="https://kashiarchan-com.translate.goog/ganga-aarti-in-varanasi/?_x_tr_sl=en&_x_tr_tl=hi&_x_tr_hl=hi&_x_tr_pto=tc"
            target="_blank"> <img src="./Photos/Aarti.webp" alt="" /></a>
          <h3>Ganga Aarti</h3>
          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 06:00 PM - 07:00 AM</i>
          </p>

          <p>
            An aarti is a devotional ritual that uses fire as an offering. It's usually made in
            the form of a lit lamp, and in the case of the Ganges River, a small diya with a candle
            and flowers that's floated down the river.
            The offering is made to the Goddess Ganga, also affectionately referred to as Maa Ganga,
            goddess of the holiest river in India.
          </p>
        </div>
      </div>
    </section>
    <section id="destinations" class="destinations">
      <!--Shopping Area-->
      <h2>Shopping Comlex</h2>
      <div class="destination-grid">
        <div class="destination-item">
          <a href="https://www.google.com/maps/dir//The+Mall+Rd,+adj.+Hotel+Ramada+Plaza,+Varanasi+cantonment,+Varanasi,
          +Uttar+Pradesh+221002/@25.335679,82.8952826,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x398e2dc400e4b329:0xaae73d2b912
          ac5f3!2m2!1d82.9776841!2d25.3357019?entry=ttu" target="_blank"><img src="./Photos/JHV-Mall.jpg"
              alt=" "></a>
          <h3>JHV Mall</h3>
          <p> Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star-half" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 11:00 AM - 09:00 PM</i>
          </p>
          <p>
            JHV Mall’s strategic location in Varanasi positions it as a prominent shopping and entertainment
            destination.
            It is conveniently situated in the heart of the city,
            making it easily accessible via major roads
            like the Varanasi-Sarnath Road and the Bhelupur-Maldahiya Road.
            Public transportation options,
            including buses and auto-rickshaws, offer seamless connectivity to and from the mall
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/dir//ip+mall+sigra+location/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x398e2dfce3c7c4a5:0xcb6d5dc09c31a7a2?sa=X&ved=1t:3061&ictx=111"
            target="_blank"><img src="./Photos/Varanasi_678_IP_Vijaya_Mall_(33653819330).jpg" alt=" "></a>
          <h3>IP Vijaya Mall</h3>
          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star-half" style="font-size: 0.50em;"></i>
          </p>
          <p>
            <i class="fa fa-clock"> 11:00 AM - 09:00 PM</i>
          </p>

          <p>
            IP Vijaya Mall houses the iconic IP Cinemas multiplex and various brand outlets,
            food courts, gaming zones, and other entertainment options. The mall features top
            national and international brands like Shoppers Stop, Metro, Lifestyle, Pantaloons,
            Bata, and more along with local brands. Its central location
            near Sigra Crossing makes it easily accessible from various parts of the city.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/dir/?api=1&origin=&destination=25.3236753,82.9945153"
            target="_blank"><img src="./Photos/V-Mart-Retail-to-organize-EOSS-event-at-392-stores_large.jpg"
              alt=""></a>
          <h3>V-Mart store</h3>
          <p>Ratings
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>

          <p>
            <i class="fa fa-clock"> 11:00 AM - 09:00 PM</i>
          </p>
          <p>
            V-Mart is a complete family fashion store that provides its customers true value for their money.
            We offer our customers a great shopping experience each time they visit V-Mart store by offering a vast
            range of products under one roof. Maintaining high standards in quality and design, V-Mart offers fashion
            garments at down-to-earth prices and over a period of time has emerged as the destination of choice for
            bargain hunters and the fashionable alike.
            It primarily operate in tier II & tier III cities with the chain of "Value Retail" departmental stores. Our
            stores cater to the needs of the entire family altogether by offering apparels, general merchandise, and
            kirana goods.

          </p>
        </div>

      </div>

    </section>
    <section id="hotels" class="destinations">
      <h2>Featured Hotels</h2>
      <div class="destination-grid">
        <div class="destination-item">
          <a href="https://www.makemytrip.com/hotels/five_star-hotels-varanasi.html" target="_blank"><img
              src="./Photos/hotel1.jpg" alt="" /></a>
          <h3>5-Star</h3>
          <p>Ranking
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            Experience luxury accommodations and impeccable service at the
            Top hotels ranking with five star, located in the heart of the city.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.booking.com/threestars/city/in/benares.html" target="_blank"> <img
              src="./Photos/hotel2.jpg" alt="" /></a>
          <h3>3-Star</h3>
          <p>Ranking
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            Relax in style at 3-Star, featuring breathtaking views,
            an award-winning spa, and gourmet dining options.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.booking.com/homestay/city/in/benares.en-gb.html" target="_blank"> <img
              src="./Photos/home3.jpg" alt="" /></a>
          <h3>Home Stay</h3>
          <p>Ranting
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
            <i class="fa fa-star" style="font-size: 0.50em;"></i>
          </p>
          <p>
            Indulge in luxury at The Waldorf Astoria, a historic landmark
            hotel renowned for its elegance and sophistication.
          </p>
        </div>
      </div>
    </section>
    <section id="activites" class="destinations">
      <h2>Emergency Support</h2>
      <p>
        In case of Emergency you can direct get the destination of this things by One click
      </p>
      <div class="destination-grid">
        <div class="destination-item">
          <a href="https://www.google.com/maps/search/map+of+all+police+stations+in+varanasi+list/@25.3225764,82.8971628,12z/data=!3m1!4b1?entry=ttu"
            target="_blank"><img src="./Photos/Police-Stations-in-Varanasi.jpg" alt="" /></a>
          <h3>Poice Station</h3>
          <p>
            Experience luxury accommodations and impeccable service at The
            Ritz Carlton, located in the heart of the city.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/search/map+of+all+fire+station+in+varanasi+list/@25.294814,82.9720218,14z/data=!3m1!4b1?entry=ttu"
            target="_blank"><img src="./Photos/06_07_2022-pindra_fire_station_of_varanasi_22868571.webp"
              alt="" /></a>
          <h3>Fire Station</h3>
          <p>
            Relax in style at The Four Seasons, featuring breathtaking views,
            an award-winning spa, and gourmet dining options.
          </p>
        </div>
        <div class="destination-item">
          <a href="https://www.google.com/maps/search/map+of+hospitals+in+varanasi+list/@25.2948888,82.9720217,14z/data=!3m1!4b1?entry=ttu"
            target="_blank"><img src="./Photos/maxresdefault.jpg" alt="" /></a>
          <h3>Hospitals</h3>
          <p>
            Indulge in luxury at The Waldorf Astoria, a historic landmark
            hotel renowned for its elegance and sophistication.
          </p>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <h3>About Us</h3>
      <p>
        Smart cities use a combination of the internet of things (IoT) devices, software solutions,
        user interfaces (UI) and communication networks. However, they rely first and foremost on the IoT. The IoT is a
        network of connected devices
        such as vehicles, sensors or home appliances -- that can communicate and exchange data. Data collected and
        delivered by the IoT
        sensors and devices is stored in the cloud or on servers. The connection of these devices and use of data
        analytics (DA)
        facilitates the convergence of the physical and digital city elements,
        thus improving both public and private sector efficiency, enabling economic benefits and improving citizen's
        lives.
      </p>

      </div>


      <div class="containerFluid">
        <h2>Frequently Asked Questions (FAQs)</h2>
        <div class="accordion">
          <div class="icon"></div>
          <h5>What is Smart city?</h5>
        </div>
        <div class="panel">
          <p>
            A smart city is an intelligent city that integrates digital technologies into its networks, services and
            infrastructure making it more efficient and livable for the benefit of its inhabitants and business.
          </p>
        </div>

        <div class="accordion">
          <div class="icon"></div>
          <h5>Why do we use it?</h5>
        </div>
        <div class="panel">
          <p>
            We use many accommodations for the citizen who able to knew
            about the city in case of any informations. we provide the alot of
            facilities for the person whi newly visitred.
          </p>
        </div>

        <div class="accordion">
          <div class="icon"></div>
          <h5>How this Website works?</h5>
        </div>
        <div class="panel">
          <p>
            Its very simple to work,Whenever a new user want to vistied any location
            only they have to login through the his mail and they can able to Explore the city
          </p>
        </div>

        <div class="accordion">
          <div class="icon"></div>
          <h5>is any other thing also provide?</h5>
        </div>
        <div class="panel">
          <p>
            Yes, for the people we provide the 24hr service of Emergency.
            IN case they can directly reache in the destination or they
            call in the helpline number.
          </p>
        </div>
      </div>
      <script src="myscript.js"></script>



    </section>
    <section id="contact" class="contact">
      <h3>Contact Us</h3>
      <div class="contact-info">
        <p>
          If you have any questions or would like to issue relared Website, please fill
          send us mail or you can call in the mentioned toll-free number.
        </p>
        <ul>
          <li>
            <i class="fas fa-map-marker-alt"></i>123 Main St, Anytown India
          </li>
          <li>
            <i class="fas fa-envelope"></i><a href="mailto:info@smartcompany.com">info@smartcompany.com</a>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i><a href="tel:555-123-4567">555-123-4567</a>
          </li>
        </ul>
      </div>
      <form action="#" class="form">
        <div class="form-group">
          <input type="name" name="name" id="name" placeholder="Enter Your Name" />
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder="Enter Your Email" />
        </div>
        <div class="form-group">
          <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Comment"></textarea>
        </div>
        <button type="submit">Feedback</button>
      </form>

    </section>
    <footer>
      <div class="social-icons">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      <p>&copy; smart city Website. All Rights Reserved.</p>
    </footer>
  </main>
</body>
<script src="https://kit.fontawesome.com/6558443b63.js" crossorigin="anonymous"></script>

</html>