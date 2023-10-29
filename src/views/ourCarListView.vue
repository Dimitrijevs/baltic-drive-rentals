<template>
    <h1 class="text-center header-style top bottom fadeInTop">Our Car List</h1>
    <div class="box">
        <div class="left">
            <div class="filter radius-8px">
                <div class="filter-box"> 
                    <h3>Brand</h3>
                    <div class="one-line">
                        <label for=""><input type="checkbox">VW</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">BMW</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Toyota</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Tesla</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Audi</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Body Type</h3>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Hetchback</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">SUV</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Sedan</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Estate</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Cabriolet</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Fuel Type</h3>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Diesel</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Petrol</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Electric</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Hybrid</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Gearbox</h3>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Automatic</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Manual</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box one-select">
                    <h3>Price</h3>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Up to 20</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Up to 30</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Up to 50</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Up to 70</label>
                    </div>
                    <div class="one-line">
                        <label for=""><input type="checkbox">Up to 100</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="brands radius-8px">
                <img class="img-zoom" :src="require('@/assets/logos/audi.png')" alt="#">
                <img class="img-zoom" :src="require('@/assets/logos/bmw.png')" alt="#">
                <img class="img-zoom" :src="require('@/assets/logos/tesla.png')" alt="#">
                <img class="img-zoom" :src="require('@/assets/logos/toyota.png')" alt="#">
                <img class="img-zoom" :src="require('@/assets/logos/vw.png')" alt="#">
            </div>
    
            <div class="cars">
                <div class="car-box img-zoom gradient" v-for="car in cars" :key="car.id">
                    <router-link to="/car-var"><img :src="require(`@/assets/${car.photo}`)" alt=""></router-link>
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

    </div>
</template>

<script>
export default {
    data() {
        return {
            cars: [
                {id: 1, title: "Volkswagen Polo", price: "14€ / Day + 0.22€ / KM", photo: "cars/vw-polo-1/vw-polo-1.png" },
                {id: 2, title: "Toyota rav4", price: "40€ / Day + 0.34€ / KM", photo: "toyota-rav4.jpeg" },
                {id: 3, title: "Volkswagen Arteon", price: "32€ / Day + 0.26€ / KM", photo: "vw-arteon.jpeg"},
                {id: 4, title: "Tesla Model 3 Long Range", price: "50€ / Day + 0.48€ / KM", photo: "tesla-3.jpeg"},
                {id: 5, title: "BMW 320i", price: "35€ / Day + 0.32€ / KM", photo: "bmw-3series.jpeg"},
                {id: 6, title: "Audi A4", price: "38€ / Day + 0.42€ / KM", photo: "audi-a4.jpeg"}
            ],
        }
    },
    mounted() {
        let boxes = document.querySelectorAll(".one-select input[type=checkbox]");
        boxes.forEach(b => b.addEventListener("change", tick));
        function tick(e) {
        let state = e.target.checked;
        boxes.forEach(b => b.checked = false);
        e.target.checked = state;
        }
    }
}
</script>

<style scoped>
.box {
    width: 95%;
    margin: 0 auto 8%;
    display: flex;
}

.box .left .filter {
    background-color: var(--white-white);
    padding: 20px;
    margin-right: 8px;
}

.box .right {
    flex-grow: 1;
}

.box .right .brands {
    display: flex;
    background-color: var(--white-white);
}

.box .right .brands img {
    width: 100px;
    margin: 30px auto;
}

.box .right .cars {
    display: grid;
    grid-template-columns: repeat(3, auto);
    justify-items: center;
    background-color: var(--white-white);
    margin-top: 8px;
    border-radius: 8px;
}

.box .right .cars .car-box {
    margin: 20px;
    border-radius: 8px;
    padding: 10px;
}

.box .right .cars .car-box a img {
    width: 300px;
    margin: 10px 20px 0;
    border-radius: 10px;
    cursor: pointer;
}

.box .right .cars .car-box h1 {
    font-size: 1.2rem;
    margin-left: 20px;
}


.box .right .cars .car-box ul {
    padding: 0;
    margin: 0 20px;
    list-style: none;
}

.box .right .cars .car-box ul li {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.box .right .cars .car-box ul li p {
    margin: 4px;
}

.box .right .cars .car-box ul li span {
    font-weight: bold;
}
</style>