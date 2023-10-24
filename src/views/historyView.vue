<template>
    <h1 class="header-style text-center top">Our History!</h1>
    <div class="timeline">
        <div class="history-container container-left-container">
            <img :src="require('@/assets/google.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>We're Open for Business!</h2>
                <small>2015</small>
                <p>
                    Our office in Riga is now up and running, 
                    with an exciting fleet of 20 cars ready to whisk you away on unforgettable city adventures
                </p>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/vw-logo.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>Revving Up Our Fleet!</h2>
                <small>2016</small>
                <p>
                    We've expanded our auto park with 30 top-notch Volkswagen vehicles, 
                    featuring the likes of Golf, Polo, and Touareg, all for our valued customers to enjoy
                </p>
            </div>
        </div>

        <div class="history-container container-left-container">
            <img :src="require('@/assets/lit.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>Sveiki, Lietuva!</h2>
                <small>2017</small>
                <p>
                    We proudly opened our very first office in Vilnius, 
                    extending a warm welcome to Lithuanian citizens and making our cars available for your exploration
                </p>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/tesla.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>Electrifying News!</h2>
                <small>2018</small>
                <p>
                    The Americans are here! Now, in Latvia, 
                    you can experience the thrill of driving a Tesla Model 3 for your everyday adventures
                </p>
            </div>
        </div>

        <div class="history-container container-left-container">
            <img :src="require('@/assets/toyota.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>Introducing the Toyota Lineup!</h2>
                <small>2019</small>
                <p>
                    We've just placed orders with the official dealership to add a diverse range of Toyota vehicles to our fleet, 
                    ensuring even more variety for our valued customers
                </p>
            </div>
        </div>

        <div class="history-container container-right-container">
            <img :src="require('@/assets/est.png')" alt="#">
            <div class="text-box gradient img-zoom">
                <h2>Tere, Eesti!</h2>
                <small>2020</small>
                <p>
                    Proudly inaugurated our first office in Tallinn, 
                    bringing our cars within reach of Estonian citizens for an exceptional driving experience
                </p>
            </div>
        </div>
    </div>

    <h1 class="header-style text-center bottom">And our work continues...</h1>
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
    position: relative;
    border-radius: 6px;
    cursor: pointer;
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
    background: #000;
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
</style>