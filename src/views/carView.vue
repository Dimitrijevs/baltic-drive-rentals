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
            <img class="radius-8px" :src="require('@/assets/cars/vw-polo-1/vw-polo-1.png')" alt="main-img">
            <button class="prev-btn btn img-zoom radius-8px">
                <img :src="require('@/assets/arrow-left.png')" alt="" />
            </button>
            <button class="next-btn btn img-zoom radius-8px">
                <img :src="require('@/assets/arrow-right.png')" alt="" />
            </button>
        </div>
    </div>

    <h1 class="header-style text-center bottom">Car Price Calculator</h1>

    <div class="bottom-bottom">
        <div class="bottom-left">
            <div class="flex">
                <label for="">Price per Day</label>
                <input v-model="pricePerDay" type="number" placeholder="€" min="0" max="100">
            </div>

            <div class="flex">
                <label for="">Amounth of Days</label>
                <input v-model="amounthOfDays" type="number" placeholder="Days" min="0" max="365">
            </div>

            <div class="flex">
                <label for="">Price per Kilometer</label>
                <input v-model="pricePerKm" type="number" placeholder="KM" min="0" max="1" step="0.01">
            </div>

            <div class="flex">
                <label for="">Kilometers amounth</label>
                <input v-model="kmAmounth" type="number" placeholder="KM" min="0" max="50000">
            </div>
        </div>

        <div class="bottom-right text-center">
            <label for="">Total Price:</label>
            <h1>{{ formattedTotalPrice }} €</h1>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pricePerDay: 0,
            amounthOfDays: 0,
            pricePerKm: 0,
            kmAmounth: 0,
            maxValue: 96500
        };
    },
    computed: {
    totalPrice() {
      return Math.round((this.pricePerDay * this.amounthOfDays + this.pricePerKm * this.kmAmounth) * 100) / 100.0;
    },
    formattedTotalPrice() {
      return this.totalPrice <= this.maxValue ? this.totalPrice : this.maxValue;
    },
  },
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
    position: relative;
    width: 72%;
    margin: 0 auto;
}

.main-container .bottom .btn {
    border: none;
    background-color: #000;
}

.main-container .bottom .prev-btn {
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}

.main-container .bottom .next-btn {
    position: absolute;
    top: 50%;
    left: 90%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
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

.bottom-bottom .bottom-left {
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
</style>