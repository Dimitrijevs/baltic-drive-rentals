<template>
    <h1 class="text-center header-style top fadeInTop">Our Car List</h1>
    <div class="box">
        <div class="left">
            <div class="filter">
                <div class="filter-box">
                    <hr>
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
                    <hr>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="brands">
                <img src="" alt="#">
                <img src="" alt="#">
                <img src="" alt="#">
                <img src="" alt="#">
                <img src="" alt="#">
            </div>
    
            <div class="cars">
    
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            cars: [
                { id: 1, title: "Volkswagen Polo", price: "14€ / Day + 0.22€ / KM", photo: "vw-polo.jpg" },
                { id: 2, title: "Toyota rav4", price: "40€ / Day + 0.34€ / KM", photo: "toyota-rav4.jpeg" },
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

<style>
.box {
    width: 95%;
    margin: 0 auto;
    display: flex;
}
</style>