<template>
    <div class="timeline">

        <div class="history-container container-left-container">
            <img :src="require('@/assets/google.png')" alt="#">
            <div class="text-box">
                <h2>We are open!</h2>
                <small>2015</small>
                <p>
                    First office opened in Riga! 
                    There were 20 cars available to take them to city trips.
                </p>
                <div class="left-container-arrow"></div>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/vw-logo.png')" alt="#">
            <div class="text-box">
                <h2>We extendet auto park!</h2>
                <small>2016</small>
                <p>
                    We bought 30 volkswagen's including golf's, 
                    polo's and tuareg's to our dear costumers.
                </p>
                <div class="right-container-arrow"></div>
            </div>
        </div>

        <div class="history-container container-left-container">
            <img :src="require('@/assets/toyota.png')" alt="#">
            <div class="text-box">
                <h2>Toyotas are coming!</h2>
                <small>2017</small>
                <p>
                    We ordered a new Toyotas's from official dealership 
                    to make our autopark more various.
                </p>
                <div class="left-container-arrow"></div>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/tesla.png')" alt="#">
            <div class="text-box">
                <h2>First electric car!</h2>
                <small>2018</small>
                <p>
                    Americans are coming! Now in Latvia you 
                    can take a Tesla Model 3 for your daily driving.
                </p>
                <div class="right-container-arrow"></div>
            </div>
        </div>

        <div class="history-container container-left-container">
            <img :src="require('@/assets/lit.png')" alt="#">
            <div class="text-box">
                <h2>Hello Lithuania!</h2>
                <small>2019</small>
                <p>
                    We opened first office in Vilnius. 
                    Our car now available for Lithuanian citizens.
                </p>
                <div class="left-container-arrow"></div>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/est.png')" alt="#">
            <div class="text-box">
                <h2>Hello Estonia!</h2>
                <small>2020</small>
                <p>
                    We opened first office in Tallin. 
                    Our car now available for Estonian citizens.
                </p>
                <div class="right-container-arrow"></div>
            </div>
        </div>

    </div>
</template>

<script></script>

<style>
.timeline {
    position: relative;
    max-width: 1000px;
    margin: 150px auto;
    box-sizing: border-box;
}

.history-container {
    padding: 10px 50px;
    position: relative;
    width: 40%;
    animation: movedown 1s linear forwards;
    opacity: 0;
}

@keyframes movedown {
    0% {
        opacity: 1;
        transform: translateY(-30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}

.history-container img {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    right: -20px;
    top: 32px;
    z-index: 1;
}

.text-box {
    padding: 20px 30px;
    background: rgb(255,255,255);
    background: linear-gradient(160deg, rgba(255,255,255,1) 0%, rgba(215,215,215,1) 100%);
    position: relative;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
    opacity: 0.7;
}

.text-box:hover {
    opacity: 1;
}

.container-left-container {
    left: 0;
}

.container-right-container {
    left: 50%;
}

.container-right-container img{
    left: -20px;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    height: 100%;
    background: var(--skin);
    top: 0;
    left: 50%;
    margin-left: -3px;
    z-index: -1;
    animation: moveline 6s linear forwards;
}

@keyframes moveline {
    0%{
        height: 0;
    }
    100% {
        height: 100%;
    }
}

.text-box > h2 {
    font-weight: 600;
}

.text-box > small {
    display: inline-block;
    margin-bottom: 15px;
}

.left-container-arrow {
    height: 0;
    width: 0;
    position: absolute;
    top: 28px;
    z-index: 1;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 15px solid var(--skin);
    right: -15px;
}

.right-container-arrow {
    height: 0;
    width: 0;
    position: absolute;
    top: 28px;
    z-index: 1;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-right: 15px solid var(--skin);
    left: -15px;
}
</style>