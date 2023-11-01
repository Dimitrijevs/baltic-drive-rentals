<template>
  <div class="top-container">
      <div class="text-container fadeInTop">
        <div>
          <h1 class="header-style">Mobility when you need it!</h1>
        </div>
          <p>Only from 14 €/day!</p>
          <a class="radius-8px" href="https://play.google.com/store/apps/details?id=com.primeleasing.citybee&hl=en&pli=1">Download App!</a>
      </div>
      <div class="image-container">
          <img class="img-zoom fadeInRight radius-8px" :src="require('@/assets/car1.jpg')" alt="#">
      </div>
  </div>

  <div class="middle-container">
    <div>
      <h1 class="header-style text-center">On average, a private automobile remains unused or parked approximately 95% of the time!</h1>
    </div>
      <div class="facts-container">
          <div class="fact">
              <h1>Variety of cars</h1>
              <p>
                  Brand new SUVs, hetchbacks, sedans and other cars suitable for all occasions.
              </p>
          </div>
  
          <div class="fact">
              <h1>Use only when and how much you need</h1>
              <p>
                  Find a car nearby, unlock it using your phone, 
                  travel wherever you want and leave where convenient.
              </p>
          </div>
  
          <div class="fact">
              <h1>All Inclusive</h1>
              <p>
                  We take care of insurance, fuel and parking 
                  fees in City parking spots, so no extra worries!
              </p>
          </div>
      </div>
  </div>

  <div class="middle-container-second">
    <div class="left-container">
        <h1 class="header-style">A new approach to mobility!</h1>
        <p>
            "Baltic Drive Rentls" aims to create a cleaner and more open city. How? 
            One "Baltic Drive Rentls" car that can be shared can replace up to 12 private cars 
            that most of the time stand still and fill neighborhoods and streets.
        </p>
    </div>
    <img class="img-zoom radius-8px" :src="require('@/assets/car2.jpg')" alt="">
  </div>

  <div class="user-choices radius-8px">
    <h1 class="header-style text-center">Popular Choices</h1>
    <div class="user-box">
      <div class="user-box-container img-zoom gradient radius-8px" v-for="car in userChoices" :key="car.id">
        <router-link to="/car-var"><img class="radius-8px" :src="require(`@/assets/${car.photo}`)" alt=""></router-link>
        <h1>{{ car.title }}</h1>
        <ul>
          <li>
            <p>Price</p>
            <span>{{ car.price }}</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="reviews">
    <h1 class="header-style">Our Reviews</h1>
    <div class="user-box gradient radius-8px">
      <img class="img-zoom" :src="require(`@/assets/people/${reviews[currentItem].photo}`)" alt="#">
      <h1 id="author">{{ reviews[currentItem].name }}</h1>
      <p id="info">{{ reviews[currentItem].review }}</p>
      <div class="button-container">
        <button class="prev-btn radius-8px" @click="changeReview('prev')">
          <img :src="require('@/assets/arrow-left.png')" alt="" />
        </button>
        <button class="next-btn radius-8px" @click="changeReview('next')">
          <img :src="require('@/assets/arrow-right.png')" alt="" />
        </button>
      </div>
    </div>
  </div>

  <div class="bottom-container">
    <img class="img-zoom radius-8px" :src="require('@/assets/car3.jpg')" alt="#">
    <div class="use-container">
      <h1 class="header-style">Easy to get started!</h1>
      <ol>
        <li>Registration, takes about 1 minute!</li>
        <li>Order a car!</li>
        <li>Receive it the next day at your home!</li>
      </ol>
    </div>
  </div>

  <div class="our-location radius-8px">
    <h1 class="header-style">Find us!</h1>
    <iframe class="radius-8px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34817.1791697989!2d24.073011769531252!3d56.947538599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd412c0ab11%3A0x3863a19974e33f6f!2sRoyal%20Club!5e0!3m2!1sen!2slv!4v1698131396101!5m2!1sen!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      userChoices: [
        {id: 1, title: "Volkswagen Polo", price: "14€ / Day + 0.22€ / KM", photo: "cars/vw-polo-1/vw-polo-1.png" },
        {id: 2, title: "Toyota rav4", price: "40€ / Day + 0.34€ / KM", photo: "toyota-rav4.jpeg" },
        {id: 3, title: "Volkswagen Arteon", price: "32€ / Day + 0.26€ / KM", photo: "vw-arteon.jpeg"},
        {id: 4, title: "Tesla Model 3 Long Range", price: "50€ / Day + 0.48€ / KM", photo: "tesla-3.jpeg"},
        {id: 5, title: "BMW 320i", price: "35€ / Day + 0.32€ / KM", photo: "bmw-3series.jpeg"},
        {id: 6, title: "Audi A4", price: "38€ / Day + 0.42€ / KM", photo: "audi-a4.jpeg"}
      ],
      reviews: [
        {
          id: 1, 
          name: "Emily Harrison", 
          review: "Baltics Rentals exceeded expectations. Their cars were clean, well-maintained, and the rental process was hassle-free. Exceptional service for short-term car rentals, highly recommended.", 
          photo: "1-whiteWoman.png"
        },
        {
          id: 2, 
          name: "Olivia Martinez", 
          review: "Baltics Rentals provided me with a top-notch car for a weekend getaway. Convenient, friendly, and affordable. I'll definitely choose them for my next trip.", 
          photo: "2-whiteWoman.png"
        },
        {
          id: 3, 
          name: "Samuel Anderson", 
          review: "Using Baltics Rentals for a short-term car rental was seamless. Their vehicles were in excellent condition, and the staff was friendly and efficient. A reliable choice for quick rentals.", 
          photo: "3-blackMan.png"
        },
        {
          id: 4, 
          name: "Benjamin Cooper", 
          review: "I rented a car from Baltics Rentals for a short trip, and it was a fantastic experience. The car was spotless, and the process was quick. I'll use them again for sure.", 
          photo: "4-asianMan.png"
        }
      ],
      currentItem: 0,
    };
  },
  methods: {
    changeReview(direction) {
      if (direction === 'prev') {
        this.currentItem = (this.currentItem - 1 + this.reviews.length) % this.reviews.length;
      } else if (direction === 'next') {
        this.currentItem = (this.currentItem + 1) % this.reviews.length;
      }
    }
  },
}
</script>

<style scoped>
  .top-container {
      display: flex;
      margin-top: 6%;
  }

  .top-container > .text-container {
      width: 30%;
      margin: auto 0 auto auto;
  }

  .top-container > .text-container > p {
      font-size: 2rem;
      margin-bottom: 70px;
  }

  .top-container > .text-container > a {
      font-size: 2rem;
      border: 2px solid var(--grey);
      padding: 10px 26px;
      opacity: 0.6;
      text-decoration: none;
      transition: 0.3s;
      cursor: pointer;
  }

  .top-container > .text-container > a:hover{
      opacity: 1;
      border: 2px solid var(--skin);
      color: var(--skin);
  }

  .top-container > .image-container {
      text-align: center;
      margin-top: 3%;
      width: 60%;
  }

  .top-container > .image-container > img {
      width: 60%;
      cursor: pointer;
  }

  .middle-container {
      width: 70%;
      margin: 7% auto 0;
  }

  .middle-container > .facts-container {
      display: flex;
      justify-content: center;
  }

  .middle-container > .facts-container > .fact {
      width: 30%;
      text-align: center;
      margin: 0 20px;
  }

  .middle-container > .facts-container > .fact > h1 {
      transition: 0.3s;
  }

  .middle-container > .facts-container > .fact > h1:hover {
      color: var(--skin);
  }

  .middle-container > .facts-container > .fact > p {
    line-height: 2rem;
    letter-spacing: 1px;
  }

  .middle-container-second {
    display: flex;
    align-items: center;
    margin: 7% auto;
    width: 70%;
  }

  .middle-container-second > img {
    width: 30%;
    margin: 0 auto;
  }

  .middle-container-second > .left-container {
    width: 50%;
    margin-left: 50px;
  }

  .middle-container-second > .left-container > p {
    line-height: 2rem;
    letter-spacing: 1px;
  }

  .user-choices {
    width: 80%;
    margin: 7% auto;
    background-color: var(--white-white);
    padding: 0 10px 10px;
  }

  .user-choices > .user-box {
    display: grid;
    grid-template-columns: repeat(3, auto);
    justify-content: center;

  }

  .user-choices > .user-box > .user-box-container {
    margin: 20px;
    padding: 10px;
  }

  .user-choices > .user-box > .user-box-container > ul {
    list-style: none;
    padding: 0;
    margin: 0 20px;
  }

  .user-choices > .user-box > .user-box-container > ul > li {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .user-choices > .user-box > .user-box-container > ul > li > p {
    margin: 4px;
  }

  .user-choices > .user-box > .user-box-container > ul > li > span {
    font-weight: bold;
  }

  .user-choices .user-box .user-box-container a img {
    width: 300px;
    margin: 10px 20px 0;
    cursor: pointer;
  }

  .user-choices > .user-box > .user-box-container > h1 {
    font-size: 1.2rem;
    margin-left: 20px;
  }

  .reviews {
    width: 70%;
    margin: 0 auto;
    text-align: center;
  }

  .reviews > .user-box {
    width: 70%;
    margin: 0 auto;
  }

  .reviews > .user-box >  img {
    width: 30%;
    margin: 30px 0;
  }

  .reviews > .user-box > h1 {
    font-size: 2rem;
    margin: 0;
  }

  .reviews > .user-box > p {
    line-height: 1.8rem;
    letter-spacing: 1px;
    width: 80%;
    margin: 20px auto;
  }

  .reviews > .user-box > .button-container {
    padding: 20px 0;
  }

  .reviews > .user-box > .button-container > button{
    background-color: transparent;
    border: none;
    margin: 10px;
    transition: 0.3s;
  }

  .reviews > .user-box > .button-container > button:hover {
    background-color: var(--skin);
  }

  .bottom-container {
      display: flex;
      width: 70%;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin: 7% auto;
  }

  .bottom-container > img {
      width: 35%;
  }

  .bottom-container > .use-container {
      margin-left: 30px;
  }

  .bottom-container > .use-container > ol > li {
    line-height: 2rem;
    letter-spacing: 1px;
  }

  .our-location {
    width: 50%;
    margin: 8% auto;
    text-align: center;
  }

  .our-location iframe {
    margin-bottom: 4%;
  }
</style>