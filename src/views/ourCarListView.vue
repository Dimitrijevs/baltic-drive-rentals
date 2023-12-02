<template>
    <h1 class="header text-center mb-4">Our Car List</h1>
    <div class="box d-flex mx-auto mb-5">
        <div class="left">
            <div class="filter rounded bg-light p-4 me-2">
                <div class="filter-box"> 
                    <h3>Brand</h3>
                    <div class="one-line">
                        <label for="vwCheckbox"><input type="checkbox" id="vwCheckbox"> VW</label>
                    </div>
                    <div class="one-line">
                        <label for="bmwCheckbox"><input type="checkbox" id="bmwCheckbox"> BMW</label>
                    </div>
                    <div class="one-line">
                        <label for="toyotaCheckbox"><input type="checkbox" id="toyotaCheckbox"> Toyota</label>
                    </div>
                    <div class="one-line">
                        <label for="teslaCheckbox"><input type="checkbox" id="teslaCheckbox"> Tesla</label>
                    </div>
                    <div class="one-line">
                        <label for="audiCheckbox"><input type="checkbox" id="audiCheckbox"> Audi</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Body Type</h3>
                    <div class="one-line">
                        <label for="hatchbackCheckbox"><input type="checkbox" id="hatchbackCheckbox"> Hatchback</label>
                    </div>
                    <div class="one-line">
                        <label for="suvCheckbox"><input type="checkbox" id="suvCheckbox"> SUV</label>
                    </div>
                    <div class="one-line">
                        <label for="sedanCheckbox"><input type="checkbox" id="sedanCheckbox"> Sedan</label>
                    </div>
                    <div class="one-line">
                        <label for="estateCheckbox"><input type="checkbox" id="estateCheckbox"> Estate</label>
                    </div>
                    <div class="one-line">
                        <label for="cabrioletCheckbox"><input type="checkbox" id="cabrioletCheckbox"> Cabriolet</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Fuel Type</h3>
                    <div class="one-line">
                        <label for="dieselCheckbox"><input type="checkbox" id="dieselCheckbox"> Diesel</label>
                    </div>
                    <div class="one-line">
                        <label for="petrolCheckbox"><input type="checkbox" id="petrolCheckbox"> Petrol</label>
                    </div>
                    <div class="one-line">
                        <label for="electricCheckbox"><input type="checkbox" id="electricCheckbox"> Electric</label>
                    </div>
                    <div class="one-line">
                        <label for="hybridCheckbox"><input type="checkbox" id="hybridCheckbox"> Hybrid</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box">
                    <h3>Gearbox</h3>
                    <div class="one-line">
                        <label for="automaticCheckbox"><input type="checkbox" id="automaticCheckbox"> Automatic</label>
                    </div>
                    <div class="one-line">
                        <label for="manualCheckbox"><input type="checkbox" id="manualCheckbox"> Manual</label>
                    </div>
                    <hr>
                </div>

                <div class="filter-box one-select">
                    <h3>Price</h3>
                    <div class="one-line">
                        <label for="upTo20Checkbox"><input type="checkbox" id="upTo20Checkbox"> Up to 20€</label>
                    </div>
                    <div class="one-line">
                        <label for="upTo30Checkbox"><input type="checkbox" id="upTo30Checkbox"> Up to 30€</label>
                    </div>
                    <div class="one-line">
                        <label for="upTo50Checkbox"><input type="checkbox" id="upTo50Checkbox"> Up to 50€</label>
                    </div>
                    <div class="one-line">
                        <label for="upTo70Checkbox"><input type="checkbox" id="upTo70Checkbox"> Up to 70€</label>
                    </div>
                    <div class="one-line">
                        <label for="upTo100Checkbox"><input type="checkbox" id="upTo100Checkbox"> Up to 100€</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="right">
            <div class="brands rounded bg-light mb-2 d-flex">
                <img class="img-zoom mx-auto my-3" :src="require('@/assets/logos/audi.png')" alt="#">
                <img class="img-zoom mx-auto my-3" :src="require('@/assets/logos/bmw.png')" alt="#">
                <img class="img-zoom mx-auto my-3" :src="require('@/assets/logos/tesla.png')" alt="#">
                <img class="img-zoom mx-auto my-3" :src="require('@/assets/logos/toyota.png')" alt="#">
                <img class="img-zoom mx-auto my-3" :src="require('@/assets/logos/vw.png')" alt="#">
            </div>

            <section class="bg-light mt-2 rounded">
                <div class="p-5">
                    <div class="container text-center">
                        <div class="row justify-content-between">
                            <div class="card col-3 p-0 m-3 bg-dark text-light" v-for="car in cars" :key="car.id">
                                <img :src="require(`@/assets/${car.photo}`)" class="card-img-top img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ car.title }}</h5>
                                <p class="text-secondary">Price: {{ car.price }}</p>
                                <router-link class="btn btn-primary mb-1" to="/car"><i class="bi bi-chevron-right"></i> Read More</router-link>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                {id: 6, title: "Audi A4", price: "38€ / Day + 0.42€ / KM", photo: "audi-a4.jpg"}
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
    width: 90%;
}

.box .left .filter .filter-box .one-line label:hover {
    text-decoration: underline;
}

.box .right {
    flex-grow: 1;
}

.box .right .brands img {
    width: 120px;
}
</style>