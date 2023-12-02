<template>

    <div class="container">
        <h1 class="text-center mb-3 header">Our History!</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="content">
                            <ul class="timeline" v-for="card in cards" :key="card.id">
                                <li class="event" :data-date="card.date">
                                    <div class="d-flex align-items-end justify-content-between mb-2">
                                        <h4 class="fw-bold mb-0">{{ card.title }}</h4>
                                        <img class="w-10  image-20" :src="require(`@/assets/${card.image}`)" alt="#">
                                    </div>
                                    <p>{{ card.description }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center m-3">And our work continues...</h1>
    </div>

</template>

<script>
export default {
    data() {
        return {
            cards: [
                {id: 1, date: 2015 ,title: "We're Open for Business!", image: "google.png", description: "Our office in Riga is now up and running, with an exciting fleet of 20 cars ready to whisk you away on unforgettable city adventures"},
                {id: 1, date: 2016 ,title: "Revving Up Our Fleet!", image: "vw-logo.png", description: "We've expanded our auto park with 30 top-notch Volkswagen vehicles, featuring the likes of Golf, Polo, and Touareg, all for our valued customers to enjoy"},
                {id: 1, date: 2017 ,title: "Sveiki, Lietuva!", image: "lit.png", description: "We proudly opened our very first office in Vilnius, extending a warm welcome to Lithuanian citizens and making our cars available for your exploration"},
                {id: 1, date: 2018 ,title: "Electrifying News!", image: "tesla.png", description: "The Americans are here! Now, in Latvia and Lithuania, you can experience the thrill of driving a Tesla Model 3 for your everyday adventures"},
                {id: 1, date: 2019 ,title: "Introducing the Toyota Lineup!", image: "toyota.png", description: "We've just placed orders with the official dealership to add a diverse range of Toyota vehicles to our fleet, ensuring even more variety for our valued customers"},
                {id: 1, date: 2020 ,title: "Tere, Eesti!", image: "est.png", description: "Proudly inaugurated our first office in Tallinn, bringing our cars within reach of Estonian citizens for an exceptional driving experience"},
            ]
        }
    }
}
</script>

<style scoped>
    .image-20 {
        width: 40px;
    }

    .timeline {
        border-left: 4px solid #0d6efd;
        background: #FBFBFB;
        margin: 0 auto;
        position: relative;
        padding: 50px;
        list-style: none;
        text-align: left;
        max-width: 40%;
    }

    @media (max-width: 767px) {
        .timeline {
            max-width: 98%;
            padding: 25px;
        }
    }

    .timeline .event {
        border-bottom: 1px solid #9FA6B2;
        padding-bottom: 25px;
        margin-bottom: 25px;
        position: relative;
    }

    @media (max-width: 767px) {
        .timeline .event {
            padding-top: 30px;
        }
    }

    .timeline .event:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }

    .timeline .event:before,
    .timeline .event:after {
        position: absolute;
        display: block;
        top: 0;
    }

    .timeline .event:before {
        left: -207px;
        content: attr(data-date);
        text-align: right;
        font-weight: 100;
        font-size: 0.9em;
        min-width: 120px;
    }

    @media (max-width: 767px) {
        .timeline .event:before {
            left: 0px;
            text-align: left;
        }
    }

    .timeline .event:after {
        -webkit-box-shadow: 0 0 0 3px #0d6efd;
        box-shadow: 0 0 0 3px #0d6efd;
        left: -55.8px;
        background: #fff;
        border-radius: 50%;
        height: 9px;
        width: 9px;
        content: "";
        top: 5px;
    }

    @media (max-width: 767px) {
        .timeline .event:after {
            left: -31.8px;
        }
    }
</style>