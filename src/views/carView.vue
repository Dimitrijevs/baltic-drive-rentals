<template>
    <div class="main-container">
        <div class="left">
            <div class="top">
                <h1>Car name</h1>
            </div>
            <div class="bottom">
                <div class="img">
                    <img :src="require('@/assets/toyota-rav4.jpeg')" alt="main-img">
                </div>
                <div class="button-container">
                    <button class="prev-btn">
                        <img :src="require('@/assets/arrow-left.png')" alt="" />
                    </button>
                    <button class="next-btn">
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
</template>

<script>

</script>

<style>

.main-container {
    width: 95%;
    margin: 8% auto 4%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-container .left {
    width: 60%;
    margin-right: 8px;
}

.main-container .left .top {
    display: flex;
}

.main-container .left .top h1 {
    font-size: 4rem;
    letter-spacing: 2px;
    margin: 8px 0;
}

.main-container .left .bottom .img {
    width: 100%;
}

.main-container .left .bottom .button-container {
    display: flex;
    justify-content: center;
}

.main-container .left .bottom .button-container button {
    margin: 10px;
}

.main-container .left .bottom .img img {
    width: 100%;
    border-radius: 8px;
}

.main-container .right {
    margin-left: 8px;
    background-color: #fff;
    padding: 10px;
    border-radius: 8px;
}

.main-container .right ul li{
    display: flex;
    list-style: none;
    margin: 10px;
}

.main-container .right ul li p {
    margin: 0;
}
</style>
