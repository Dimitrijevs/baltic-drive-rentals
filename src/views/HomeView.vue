<template>
  <div class="top-container">
      <div class="text-container">
          <h1>Mobility when you need it!</h1>
          <p>Only from 30 €/day!</p>
          <a href="https://play.google.com/store/apps/details?id=com.primeleasing.citybee&hl=en&pli=1">Download App!</a>
      </div>
      <div class="image-container">
          <img :src="require('@/assets/car1.jpg')" alt="#">
      </div>
  </div>

  <div class="middle-container">
      <h1>On average, a private automobile remains unused or parked approximately 95% of the time!</h1>
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
        <h1>A new approach to mobility!</h1>
        <p>
            "Baltic Drive Rentls" aims to create a cleaner and more open city. How? 
            One "Baltic Drive Rentls" car that can be shared can replace up to 12 private cars 
            that most of the time stand still and fill neighborhoods and streets.
        </p>
    </div>
    <img :src="require('@/assets/car2.jpg')" alt="">
  </div>

  <div class="user-choices">
    <h1>Most Popular User Choices</h1>
    <div class="user-box">
        <div class="user-box-container">
            <img :src="require('@/assets/vw-polo.jpg')" alt="">
            <h1>Volkswagen Polo</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2016</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Petrol</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>125hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>10.4s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Mechanical</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>Front Wheel Drive</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Cena</p>
                    <span>15€ / Day</span>
                </li>
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/toyota-rav4.jpeg')" alt="">
            <h1>Toyota Rav4</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2020</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Hybrid</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>218hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>8.5s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Automatic</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>4x4</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Price</p>
                    <span>40€ / Day</span>
                </li>
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/vw-arteon.jpeg')" alt="">
            <h1>Volkswagen Arteon</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2017</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Diesel</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>150hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>9.1s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Automatic</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>Front Wheel Drive</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Price</p>
                    <span>30€ / Day</span>
                </li>
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/tesla-3.jpeg')" alt="">
            <h1>Tesla Model 3 Long Range</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2017</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Electric</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>271hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>5.4s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Automatic</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>Rear Wheel Drive</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Price</p>
                    <span>50€ / Day</span>
                </li>
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/bmw-3series.jpeg')" alt="">
            <h1>BMW 320i</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2020</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Petrol</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>184hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>7.0s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Automatic</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>Rear Wheel Drive</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Price</p>
                    <span>35€ / Day</span>
                </li>
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/audi-a4.jpeg')" alt="">
            <h1>Audi a4</h1>
            <ul>
                <li>
                    <p>Release Year</p>
                    <span>2021</span>
                </li>
                <li>
                    <p>Fuel Type</p>
                    <span>Diesel</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Horse Powers</p>
                    <span>201hp</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>6.3s</span>
                </li>
                <li>
                    <p>Gearbox</p>
                    <span>Automatic</span>
                </li>
                <li>
                    <p>Drive Type</p>
                    <span>4x4</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
                <li>
                    <p>Price</p>
                    <span>40€ / Day</span>
                </li>
            </ul>
        </div>
    </div>
  </div>

  <div class="bottom-container">
      <img :src="require('@/assets/car3.jpg')" alt="#">
      <div class="use-container">
          <h1>Easy to get started!</h1>
          <ol>
              <li>Registration, takes about 1 minute!</li>
              <li>Order a car!</li>
              <li>Resive it to next day at your home!</li>
          </ol>
      </div>
  </div>
</template>

<script>
  export default {
      name: 'HomeView'
  };
</script>

<style>
  .top-container {
      display: flex;
      margin-top: 6%;
  }

  .top-container > .text-container {
      width: 30%;
      margin: auto 0 auto auto;
  }

  .top-container > .text-container > h1 {
      font-size: 4.5rem;
  }

  .top-container > .text-container > p {
      font-size: 2rem;
      margin-bottom: 70px;
  }

  .top-container > .text-container > a {
      font-size: 2rem;
      border: 2px solid var(--grey);
      padding: 10px 26px;
      border-radius: 20px;
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
    transition: 0.3s;
    opacity: 0.7;
  }

  .top-container > .image-container > img:hover {
      opacity: 1;
      transform: scale(1.02);
  }

  .top-container > .image-container > img {
      width: 75%;
      border-radius: 20px;
      cursor: pointer;
  }

  .middle-container {
      width: 70%;
      margin: 7% auto 0;
  }

  .middle-container > h1 {
      font-size: 3rem;
      text-align: center;
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
    border-radius: 10px;
    width: 35%;
    opacity: 0.7;
    transition: 0.3s;
  }

  .middle-container-second > img:hover {
    opacity: 1;
    transform: scale(1.02);
  }

  .middle-container-second > .left-container {
    width: 50%;
    margin-right: 30px;
  }

  .middle-container-second > .left-container > h1 {
    font-size: 4rem;
    margin: 0;
    transition: 0.3s;
  }

  .middle-container-second > .left-container > h1:hover {
    color: var(--skin);
  }

  .middle-container-second > .left-container > p {
    line-height: 2rem;
    letter-spacing: 1px;
  }

  .user-choices {
    width: 95%;
    margin: 7% auto;
    background-color: #e9e9e8;
    border-radius: 10px;
    padding: 0 10px 20px;
  }

  .user-choices > h1 {
    text-align: center;
    font-size: 4rem;
    padding-top: 30px;
    transition: 0.3s;
    cursor: pointer;
  }

  .user-choices > h1:hover {
    color: var(--skin);
  }

  .user-choices > .user-box {
    display: grid;
    grid-template-columns: auto auto auto;
    justify-content: center;
  }

  .user-choices > .user-box > .user-box-container {
    margin: 20px 50px;
    border: 2px solid #000;
    border-radius: 10px;
    padding: 10px;
    background: rgb(255,255,255);
    background: linear-gradient(150deg, rgba(255,255,255,1) 0%, rgba(196,196,196,1) 100%);
    transition: 0.3s;
    opacity: 0.9;
  }

  .user-choices > .user-box > .user-box-container:hover {
    transform: scale(1.02);
    opacity: 1;
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

  .user-choices > .user-box > .user-box-container > img {
    width: 300px;
    margin: 10px 20px 0 20px;
    border-radius: 10px;
    cursor: pointer;
  }

  .user-choices > .user-box > .user-box-container > h1 {
    font-size: 1.2rem;
    margin-left: 20px;
    transition: 0.3s;
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
      border-radius: 10px;
      opacity: 0.7;
      transition: 0.3s;
  }

  .bottom-container > img:hover {
      opacity: 1;
      transform: scale(1.03);
  }

  .bottom-container > .use-container {
      margin-left: 30px;
  }

  .bottom-container > .use-container > h1 {
      font-size: 3rem;
      transition: 0.3s;
  }

  .bottom-container > .use-container > h1:hover {
      color: var(--skin);
  }

  .bottom-container > .use-container > ol > li {
    line-height: 2rem;
    letter-spacing: 1px;
  }
</style>