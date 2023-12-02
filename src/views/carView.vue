<template>
    <h1 class="text-center mb-3 header">Car name</h1>
    <section class="px-5 mb-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <ul class="list-unstyled me-2 bg-dark rounded p-3">
                        <li class="bg-light py-2 px-4 d-flex rounded my-3">
                            <p class="mb-0 me-2 fw-bold">Year:</p>
                            <span class="">Year</span>
                        </li>
                        <li class="bg-light py-2 px-4 d-flex rounded my-3">
                            <p class="mb-0 me-2 fw-bold">Engine:</p>
                            <span class="">Engine</span>
                        </li>
                        <li class="bg-light py-2 px-4 d-flex rounded my-3">
                            <p class="mb-0 me-2 fw-bold">Gearbox:</p>
                            <span class="">Gearbox</span>
                        </li>
                        <li class="bg-light py-2 px-4 d-flex rounded my-3">
                            <p class="mb-0 me-2 fw-bold">Bodywork:</p>
                            <span class="">Bodywork</span>
                        </li>
                        <li class="bg-light py-2 px-4 d-flex rounded my-3">
                            <p class="mb-0 me-2 fw-bold">Price:</p>
                            <span class="">Mnogo</span>
                        </li>
                    </ul>
                </div>
        
                <div id="carousel" class="carousel slide">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img :src="require(`@/assets/cars/${polo1Photos[0].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[1].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[2].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[3].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[4].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[5].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[6].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                        <div class="carousel-item">
                            <img :src="require(`@/assets/cars/${polo1Photos[7].text}`)" class="card-img-top img-fluid" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        
                <div id="desc" class="text-center bg-dark p-3 rounded ms-2">
                    <p class="text-light mb-0">
                        The VW Polo 1.2 manual is a compact dynamo, boasting a zippy 1.2-liter 
                        engine and precise manual transmission for an exhilarating driving experience. 
                        With its stylish design, comfortable interior, and impressive fuel efficiency, 
                        this Polo is the perfect blend of sporty flair and practicality, 
                        making it a standout choice in its class.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <h1 class="text-center my-3">Car Price Calculator</h1>

    <section class="px-5 mb-5">
        <div class="container p-0">
            <div class="">
                <div class="d-flex">
                    <div class="text-center">
                        <label for="">Price per Day:</label>
                        <input class="rounded p-2" v-model="pricePerDay" type="number" placeholder="14-100€">
                    </div>
        
                    <div class="text-center">
                        <label for="">Amounth of Days:</label>
                        <input class="rounded p-2" v-model="amounthOfDays" type="number" placeholder="1-365">
                    </div>
        
                    <div class="text-center">
                        <label for="">Price per Kilometer:</label>
                        <input class="rounded p-2" v-model="pricePerKm" type="number" placeholder="KM" step="0.02">
                    </div>
        
                    <div class="text-center">
                        <label for="">Kilometers amounth:</label>
                        <input class="rounded p-2" v-model="kmAmounth" type="number" placeholder="KM">
                    </div>
                </div>
        
                <div id="totalPrice" class="bg-dark py-2 px-3 rounded mx-auto mt-4 text-center">
                    <label class="text-light" for="">Total Price:</label>
                    <h1 class="text-light mb-0">{{ formattedTotalPrice }} €</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-3 mb-5 text-center">
        <button type="submit" class="rounded bg-primary border-0 py-3 px-4 h4 img-zoom"><router-link to="/" class="text-decoration-none text-light">Rent a car!</router-link></button>
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
};
</script>

<style scoped>
.main-container {
    width: 90%;
}

#desc {
    max-width: 280px;
}

#totalPrice {
    max-width: 260px;
}

.active {
    height: 480px;
}
</style>