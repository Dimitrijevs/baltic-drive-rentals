<template>
    <div class="main-container text-center">
        <div class="top">
            <h1 class="header-style top">Car name</h1>
        </div>

        <div class="middle">
            <ul>
                <li class="radius-8px">
                    <p>Year:</p>
                    <span>Year</span>
                </li>
                <li class="radius-8px">
                    <p>Engine:</p>
                    <span>Engine</span>
                </li>
                <li class="radius-8px">
                    <p>Gearbox:</p>
                    <span>Gearbox</span>
                </li>
                <li class="radius-8px">
                    <p>Bodywork type:</p>
                    <span>Type</span>
                </li>
                <li class="radius-8px">
                    <p>Price:</p>
                    <span>Mnogo</span>
                </li>
            </ul>
        </div>

        <div class="bottom">
            <div class="carousel" data-carousel>
                <button class="prev-btn carousel-btn img-zoom radius-8px" data-carousel-button="prev">&lt;</button>
                <button class="next-btn carousel-btn img-zoom radius-8px" data-carousel-button="next">&gt;</button>
                <ul data-slides>
                    <li class="slide" v-for="photo in polo1Photos" :key="photo.id">
                        <img class="radius-8px" :src="require(`@/assets/cars/${photo.text}`)" alt="main-img">
                    </li>
                </ul>
            </div>
        </div>

        <div class="description radius-8px text-center">
            <p>
                The VW Polo 1.2 manual is a compact dynamo, boasting a zippy 1.2-liter 
                engine and precise manual transmission for an exhilarating driving experience. 
                With its stylish design, comfortable interior, and impressive fuel efficiency, 
                this Polo is the perfect blend of sporty flair and practicality, 
                making it a standout choice in its class.
            </p>
        </div>
    </div>

    <h1 class="header-style text-center bottom">Car Price Calculator</h1>

    <div class="bottom-bottom">
        <div class="bottom-left">
            <div class="flex">
                <label for="">Price per Day</label>
                <input v-model="pricePerDay" type="number" placeholder="14-100€">
            </div>

            <div class="flex">
                <label for="">Amounth of Days</label>
                <input v-model="amounthOfDays" type="number" placeholder="1-365">
            </div>

            <div class="flex">
                <label for="">Price per Kilometer</label>
                <input v-model="pricePerKm" type="number" placeholder="KM" step="0.02">
            </div>

            <div class="flex">
                <label for="">Kilometers amounth</label>
                <input v-model="kmAmounth" type="number" placeholder="KM">
            </div>
        </div>

        <div class="bottom-right text-center">
            <label for="">Total Price:</label>
            <h1>{{ formattedTotalPrice }} €</h1>
        </div>
    </div>

    <div class="order text-center bottom">
        <button type="submit" class="radius-8px img-zoom"><router-link to="/rented-car" class="a-link">Rent a car!</router-link></button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pricePerDay: null,  
            amounthOfDays: null,
            pricePerKm: null,
            kmAmounth: null,
            maxValue: 96500,
            polo1Photos: [
                {id: 1, text:  "vw-polo-1/vw-polo-1.png"},
                {id: 2, text:  "vw-polo-1/vw-polo-2.png"},
                {id: 3, text:  "vw-polo-1/vw-polo-3.png"},
                {id: 4, text:  "vw-polo-1/vw-polo-4.png"},
                {id: 5, text:  "vw-polo-1/vw-polo-5.png"},
                {id: 6, text:  "vw-polo-1/vw-polo-6.png"},
                {id: 7, text:  "vw-polo-1/vw-polo-7.png"},
                {id: 8, text:  "vw-polo-1/vw-polo-8.png"},
            ]
        };
    },
    computed: {
        totalPrice() {
            if(this.pricePerDay < 0) this.pricePerDay = 0;
            else if(this.pricePerDay > 100) this.pricePerDay = 100;

            if(this.amounthOfDays < 0) this.amounthOfDays = 0;
            else if(this.amounthOfDays > 365) this.amounthOfDays = 365;

            if(this.pricePerKm < 0.2) this.pricePerKm = 0.2;
            else if(this.pricePerKm > 1) this.pricePerKm = 1;

            if(this.kmAmounth < 0) this.kmAmounth = 0;
            else if(this.kmAmounth > 50000) this.kmAmounth = 50000;
        return Math.round((this.pricePerDay * this.amounthOfDays + this.pricePerKm * this.kmAmounth) * 100) / 100.0;
        },
        formattedTotalPrice() {
        return this.totalPrice <= this.maxValue ? this.totalPrice : this.maxValue;
        },
    },
    mounted() {
        this.attachButtonListeners();
    },
    methods: {
        getImageSource(text) {
            return require(`@/assets/cars/${text}`);
        },
        attachButtonListeners() {
            const slides = document.querySelectorAll(".main-container .bottom .slide");
            if (slides.length > 0) {
                slides[0].setAttribute("data-active", "true");
            }

            const buttons = document.querySelectorAll("[data-carousel-button]");
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
                    const carousel = button.closest("[data-carousel]");
                    const slides = carousel.querySelector("[data-slides]");

                    const activeSlide = slides.querySelector("[data-active]");
                    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
                    if (newIndex < 0) newIndex = slides.children.length - 1;
                    if (newIndex >= slides.children.length) newIndex = 0;

                    activeSlide.removeAttribute("data-active");
                    slides.children[newIndex].setAttribute("data-active", true);
                });
            });
        }
    }
};
</script>

<style>

.main-container {
    width: 90%;
    margin: 4% auto;
}

.main-container .top {
    margin-bottom: 0;
}

.main-container .middle {
    display: flex;
    align-items: center;
    justify-content: center;
}

.main-container .middle  ul {
    display: flex;
    padding: 0;
    margin: 2px;
}

.main-container .middle  ul li {
    display: flex;
    align-items: center;
    margin-right: 4px;
    padding: 0 16px;
    background-color: #000;
}

.main-container .middle ul li p {
    font-weight: bold;
    margin-right: 4px
}

.main-container .middle ul li p,
.main-container .middle ul li span {
    color: var(--skin);
}

.main-container .bottom {
    width: 72%;
    height: 70vh;
    margin: 0 auto;
}

.main-container .bottom .carousel ul  {
    list-style: none;
    margin: 0;
    padding: 0;
}

.main-container .bottom .carousel ul .slide {
    position: absolute;
    inset: 0;
    opacity: 0;
}

.main-container .bottom .carousel ul .slide[data-active] {
    opacity: 1;
    top: 36%;
}

.main-container .bottom .carousel .carousel-btn {
    position: absolute;
    top: 66%;
    transform: translate(-50%, -50%);
    z-index: 1;
    cursor: pointer;
    color: #fff;
    background-color: #000;
    border: none;
    font-size: 3rem;
}

.main-container .bottom .prev-btn {
    left: 24%;
}

.main-container .bottom .next-btn {
    left: 76%;
}

.main-container .description {
    background-color: var(--white-white);
    padding: 30px;
    width: 60%;
    margin: 2% auto 8%;
}

.main-container .description p {
    line-height: 1.8rem;
    letter-spacing: 1px;
}

.bottom-bottom {
    display: flex;
    justify-content: center;
    width: 88%;
    margin: 0 auto 8%;
}

.bottom-bottom input {
    width: 160px;
    padding: 20px;
    border: 2px solid var(--white);
    border-radius: 8px;
    margin-top: 12px;
}

.bottom-bottom .bottom-left{
    display: flex;
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    margin-right: 10px;
}

.bottom-bottom .bottom-right {
    background-color: #000;
    border-radius: 8px;
    padding: 20px;
    width: 200px;
}

.bottom-bottom .bottom-right label,
.bottom-bottom .bottom-right h1 {
    color: var(--skin);
}

.bottom-bottom .bottom-right h1 {
    overflow: hidden;
}

.bottom-bottom .bottom-left .flex {
    display: flex;
    flex-direction: column;
}

.bottom-bottom .bottom-left .flex:first-child,
.bottom-bottom .bottom-left .flex:nth-child(2),
.bottom-bottom .bottom-left .flex:nth-child(3) {
    margin-right: 12px;
}

.order button {
    padding: 28px 52px;
    border: none;
    background-color: var(--skin);
}

.order button a {
    position: relative;
    text-decoration: none;
    font-size: 2rem;
    font-weight: bold;
}

.order button a::before {
    background-color: var(--black);
}
</style>