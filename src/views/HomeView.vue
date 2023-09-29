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
                    <p>Gads</p>
                    <span>2017</span>
                </li>
                <li>
                    <p>Degviela</p>
                    <span>Elektrība</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Zirgspēki</p>
                    <span>271</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>5.4s</span>
                </li>
                <li>
                    <p>Pārnesumkārba</p>
                    <span>Automāts</span>
                </li>
                <li>
                    <p>Piedziņa</p>
                    <span>Aizmugurēja</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/vw-arteon.jpeg')" alt="">
            <h1>Volkswagen Arteon</h1>
            <ul>
                <li>
                    <p>Gads</p>
                    <span>2017</span>
                </li>
                <li>
                    <p>Degviela</p>
                    <span>Elektrība</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Zirgspēki</p>
                    <span>271</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>5.4s</span>
                </li>
                <li>
                    <p>Pārnesumkārba</p>
                    <span>Automāts</span>
                </li>
                <li>
                    <p>Piedziņa</p>
                    <span>Aizmugurēja</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
            </ul>
        </div>

        <div class="user-box-container">
            <img :src="require('@/assets/tesla-3.jpeg')" alt="">
            <h1>Tesla Model 3 Long Range</h1>
            <ul>
                <li>
                    <p>Gads</p>
                    <span>2017</span>
                </li>
                <li>
                    <p>Degviela</p>
                    <span>Elektrība</span>
                </li>
                <!-- <li>
                    <p>Dzinējs</p>
                    <span>Elektro dzinējs</span>
                </li> -->
                <li>
                    <p>Zirgspēki</p>
                    <span>271</span>
                </li>
                <li>
                    <p>0-100km/h</p>
                    <span>5.4s</span>
                </li>
                <li>
                    <p>Pārnesumkārba</p>
                    <span>Automāts</span>
                </li>
                <li>
                    <p>Piedziņa</p>
                    <span>Aizmugurēja</span>
                </li>
                <!-- <li>
                    <p>Virsbūves tips</p>
                    <span>Sedans</span>
                </li>
                <li>
                    <p>Sēdvietas</p>w
                    <span>5</span>
                </li> -->
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
      opacity: 0.7;
      width: 60%;
      transition: 0.3s;
  }

  .top-container > .image-container:hover {
      opacity: 1;
      transform: scale(1.05);
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
    transform: scale(1.05);
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
    margin: 0 50px;
    border: 2px solid #000;
    border-radius: 10px;
    padding: 10px;
    background: rgb(237,237,237);
    background: linear-gradient(160deg, rgba(237,237,237,1) 0%, rgba(255,217,203,1) 100%);
    transition: 0.3s;
    opacity: 0.8;
  }

  .user-choices > .user-box > .user-box-container:hover {
    transform: scale(1.05);
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