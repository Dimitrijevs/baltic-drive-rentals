<template>
    <div class="main-container">
        <div class="left">
            <div class="top">
                <h1 class="header-style top">Car name</h1>
            </div>
            <div class="bottom">
                <div class="img img-zoom">
                    <img :src="require('@/assets/toyota-rav4.jpeg')" alt="main-img">
                </div>
                <div class="button-container text-center">
                    <button class="prev-btn img-zoom">
                        <img :src="require('@/assets/arrow-left.png')" alt="" />
                    </button>
                    <button class="next-btn img-zoom">
                        <img :src="require('@/assets/arrow-right.png')" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <div class="right">
            <h1>Specifications</h1>
            <ul>
                <li>
                    <p>Year:</p>
                    <span>Year</span>
                </li>
                <li>
                    <p>Engine:</p>
                    <span>Engine</span>
                </li>
                <li>
                    <p>Gearbox:</p>
                    <span>Gearbox</span>
                </li>
                <li>
                    <p>Bodywork type:</p>
                    <span>Type</span>
                </li>
                <li>
                    <p>Price:</p>
                    <span>Mnogo</span>
                </li>
            </ul>
        </div>
    </div>

    <h1 class="header-style text-center bottom">Car Price Calculator</h1>

    <div class="bottom-bottom">
        <div class="bottom-left">
            <div class="flex">
                <label for="">Price per Day</label>
                <input type="number" placeholder="€">
            </div>

            <div class="flex">
                <label for="">Amounth of Days</label>
                <input type="number" placeholder="Days">
            </div>

            <div class="flex">
                <label for="">Kilometers amounth</label>
                <input type="number" placeholder="KM">
            </div>
        </div>

        <div class="bottom-right">
            <label for="">Total Price:</label>
            <h1> variable €</h1>
        </div>
    </div>
</template>

<script>

</script>

<style>

.main-container {
    width: 95%;
    margin: 4% auto 4%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-container .left {
    width: 60%;
    margin-right: 8px;
}

.main-container .left .bottom .button-container button {
    margin: 10px;
    border: none;
    background-color: #000;
    border-radius: 8px;
}

.main-container .left .bottom .img img {
    width: 100%;
    border-radius: 8px;
}

.main-container .right {
    margin-left: 8px;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
}

.main-container .right h1 {
    margin-top: 0;
}

.main-container .right ul li{
    display: flex;
    list-style: none;
    margin: 10px;
}

.main-container .right ul li p {
    margin: 0;
}

.bottom-bottom {
    display: flex;
    justify-content: center;
    width: 80%;
    margin: 0 auto 8%;
}

.bottom-bottom input {
    width: 240px;
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
}

.bottom-bottom .bottom-right label,
.bottom-bottom .bottom-right h1 {
    color: var(--skin);
}

.bottom-bottom .bottom-left .flex {
    display: flex;
    flex-direction: column;
}

.bottom-bottom .bottom-left .flex:first-child,
.bottom-bottom .bottom-left .flex:nth-child(2) {
    margin-right: 12px;
}
</style>