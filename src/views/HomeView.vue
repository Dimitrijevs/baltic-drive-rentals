<template>

  <section class="p-5 bg-dark mt-5">
    <div class="container mt-4">
      <div class="d-flex align-items-center justify-content-between">
        <div class="text-white me-5">
          <h1>Mobility <span class="text-warning">when you need it!</span></h1>
          <p class="lead text-white">
            Introducing our unbeatable mobility solution tailored just for you! 
            Say goodbye to transportation hassles and hello to the freedom of 
            movement with our incredible offer starting at an unbeatable 14 € per day.
          </p>
          <a class="btn btn-primary p-2" href="https://play.google.com/store/apps/details?id=com.primeleasing.citybee&hl=en&pli=1">Download App!</a>
        </div>
        <img class="img-fluid w-50 rounded" :src="require('@/assets/corolla.jpg')" alt="">
      </div>
    </div>
  </section>

  <section class="p-5">
    <div class="container text-center">
      <h1 class="mb-4">
        On average, a private automobile remains unused or parked approximately 95% of the time!
      </h1>
      <div class="row g-4">
        <div class="col">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-car-front text-light"></i>
              </div>
              <h3 class="card-title mb-3">Variety of cars</h3>
              <p class="card-tex text-light">
                Welcome to a world of possibilities with our impressive fleet of brand new vehicles! 
                Whether you're planning a family road trip, a weekend getaway, 
                or simply need a reliable set of wheels for your daily commute.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-calendar-check text-light"></i>
              </div>
              <h3 class="card-title mb-3">Use only when and how much you need</h3>
              <p class="card-tex text-light">
                Our cutting-edge car-sharing platform puts you in control from start to finish. 
                Imagine having the power to locate the perfect car for your needs right in your neighborhood. 
                Our user-friendly app provides real-time information on available vehicles nearby.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-bag-check text-light"></i>
              </div>
              <h3 class="card-title mb-3">All Inclusive</h3>
              <p class="card-tex text-light">
                Elevate your driving experience with unparalleled peace of mind. 
                When you choose our car-sharing service, you can bid farewell 
                to additional concerns such as insurance, fuel, and parking fees.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-5 bg-primary mt-5">
    <div class="container mt-4">
      <div class="d-flex align-items-center justify-content-between">
        <div class="text-light me-5">
          <h1>A new approach to mobility!</h1>
          <p class="lead text-white">
            "Baltic Drive Rentls" aims to create a cleaner and more open city. How? 
            One "Baltic Drive Rentls" car that can be shared can replace up to 12 private cars 
            that most of the time stand still and fill neighborhoods and streets.
          </p>
        </div>
        <img class="img-fluid w-50 rounded" :src="require('@/assets/camry.jpg')" alt="">
      </div>
    </div>
  </section>

  <section class="p-5">
    <div class="container text-center">
      <h1 class="mb-4">Popular Choices</h1>
      <div class="row justify-content-between">
        <div class="card col-3 p-0 m-3 bg-dark text-light" v-for="car in userChoices" :key="car.id">
          <img :src="require(`@/assets/${car.photo}`)" class="card-img-top img-fluid" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ car.title }}</h5>
            <p class="text-secondary">Price: {{ car.price }}</p>
            <router-link class="btn btn-primary mb-1" to="/car-var"><i class="bi bi-chevron-right"></i> Read More</router-link>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="reviews">
    <h1 class="mb-4">Our Reviews</h1>
    <div class="user-box bg-primary">
      <img class="rounded-circle" :src="reviews[currentItem].photo" alt="#">
      <h2 class="text-light m-0" id="author">{{ reviews[currentItem].name }}</h2>
      <p class="text-light lead px-5 pt-2" id="info">{{ reviews[currentItem].review }}</p>
      <div class="button-container">
        <button class="prev-btn radius-8px" @click="changeReview('prev')">&lt;</button>
        <button class="next-btn radius-8px" @click="changeReview('next')">&gt;</button>
      </div>
    </div>
  </div>

  <section class="p-5 bg-dark mt-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="text-warning">
          <h1>Easy to get started!</h1>
          <p class="lead text-light">1. Registration, takes about 1 minute!</p>
          <p class="lead text-light">2. Order a car!</p>
          <p class="lead text-light">3. Receive it the next day at your home!</p>
        </div>
        <div id="carouselCars" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img :src="require('@/assets/yaris.jpg')" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
              <img :src="require('@/assets/audi-a4.jpeg')" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
              <img :src="require('@/assets/tesla.jpg')" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">
        Contact Us
      </h2>
      <div class="row g-4">
        <div class="col my-auto">
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">Main Location: </span>
              Aspazijas bulvāris 32
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Tech Support Phone: </span>
              +371 113
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Tech Support Email: </span>
              support@balticdriverentals.com
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Have a question: </span>
              support@gmail.com
            </li>
          </ul>
        </div>
        <div class="col text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d69634.35759250705!2d24.114211!3d56.947539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd412c0ab11%3A0x3863a19974e33f6f!2sRoyal%20Club!5e0!3m2!1sen!2slv!4v1700755630633!5m2!1sen!2slv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

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
          photo: "https://randomuser.me/api/portraits/women/19.jpg"
        },
        {
          id: 2, 
          name: "Olivia Martinez", 
          review: "Baltics Rentals provided me with a top-notch car for a weekend getaway. Convenient, friendly, and affordable. I'll definitely choose them for my next trip.", 
          photo: "https://randomuser.me/api/portraits/women/25.jpg"
        },
        {
          id: 3, 
          name: "Samuel Anderson", 
          review: "Using Baltics Rentals for a short-term car rental was seamless. Their vehicles were in excellent condition, and the staff was friendly and efficient. A reliable choice for quick rentals.", 
          photo: "https://randomuser.me/api/portraits/men/14.jpg"
        },
        {
          id: 4, 
          name: "Benjamin Cooper", 
          review: "I rented a car from Baltics Rentals for a short trip, and it was a fantastic experience. The car was spotless, and the process was quick. I'll use them again for sure.", 
          photo: "https://randomuser.me/api/portraits/men/7.jpg"
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
  #carouselCars {
    width: 700px;
  }

  .reviews {
    width: 70%;
    margin: 0 auto;
    text-align: center;
  }

  .reviews .user-box {
    width: 70%;
    margin: 0 auto;
  }

  .reviews .user-box img {
    width: 30%;
    margin: 30px 0;
  }

  .reviews .user-box p {
    min-height: 124px;
  }

  .reviews > .user-box > .button-container > button{
    background-color: transparent;
    border: none;
    margin: 10px;
    transition: 0.3s;
    font-size: 1.8rem;
  }

  .reviews > .user-box > .button-container > button:hover {
    background-color: var(--skin);
  }

</style>