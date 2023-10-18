<template>
    <div class="container">
        <div class="text-container">
            <h1>
                Car Rental Terms and Conditions
            </h1>
            <div class="text">
                <h3>1. Rental Agreement:</h3>
                <p>
                    This Agreement constitutes a binding contract between SIA "Baltic Drive Rentals", 
                    referred to as the "Company," and the Renter, an individual or entity, for the rental of a vehicle. 
                    By renting a vehicle, the Renter agrees to comply with these terms and conditions.
                </p>
            </div>

            <div class="text">
                <h3>2. Vehicle Rental:</h3>
                <p>
                    The Company will provide the Renter with the selected vehicle model or a similar one at its discretion.
                    The rental period starts and ends as specified in the reservation. 
                    Any extensions or changes require Company approval and may incur additional charges.
                </p>
            </div>

            <div class="text">
                <h3>3. Renter Requirements:</h3>
                <p>
                    The Renter must meet the minimum age requirement and possess a valid driver's license in their name.
                    Renter must show proof of insurance coverage or purchase insurance from the Company during the rental.
                </p>
            </div>

            <div class="text">
                <h3>4. Payment:</h3>
                <p>
                    The Renter agrees to pay all rental fees, including rental rate, taxes, fuel charges, and specified additional fees.
                    A security deposit may be required by the Company at the start of the rental. 
                    It will be refunded upon the vehicle's return in good condition and adherence to this Agreement.
                </p>
            </div>
        </div>
        <div class="img-container">
            <img :src="require('@/assets/rental-terms.jpg')" alt="">
        </div>
    </div>
</template>

<script></script>

<style>
    .container {
        display: flex;
        width: 92%;
        margin: 8% auto 4%;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 20px 1px var(--grey);
    }

    .container .text-container .text h3 {
        margin: 25px 0 5px;
        transition: 0.3s;
    }

    .container .text-container h1 {
        margin-top: 0;
        transition: 0.3s;
    }

    .container .text-container .text h3:hover, 
    .container .text-container h1:hover {
        color: var(--skin);
    }

    .container .text-container .text p {
        margin: 0;
    }
    
    .container .text-container {
        width: 50%;
        margin-right: 40px;
    }

    .img-container {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-container img {
        width: 100%;
        border-radius: 8px;
    }
</style>