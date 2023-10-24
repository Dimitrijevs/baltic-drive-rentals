<template>
    <h1 class="text-center top header-style">Rental Terms and Conditions</h1>
    <div class="container">
        <div class="text text-center gradient img-zoom">
            <h3>Rental Agreement</h3>
            <p>
                This Agreement constitutes a binding contract between SIA "Baltic Drive Rentals", 
                referred to as the "Company," and the Renter, an individual or entity, for the rental of a vehicle. 
                By renting a vehicle, the Renter agrees to comply with these terms and conditions.
            </p>
        </div>

        <div class="text text-center gradient img-zoom">
            <h3>Vehicle Rental</h3>
            <p>
                The Company will provide the Renter with the selected vehicle model or a similar one at its discretion.
                The rental period starts and ends as specified in the reservation. 
                Any extensions or changes require Company approval and may incur additional charges.
            </p>
        </div>

        <div class="text text-center gradient img-zoom">
            <h3>Renter Requirements</h3>
            <p>
                The Renter must meet the minimum age requirement and possess a valid driver's license in their name.
                Renter must show proof of insurance coverage or purchase insurance from the Company during the rental.
            </p>
        </div>

        <div class="text text-center gradient img-zoom">
            <h3>Payment</h3>
            <p>
                The Renter agrees to pay all rental fees, including rental rate, taxes, fuel charges, and specified additional fees.
                A security deposit may be required by the Company at the start of the rental. 
                It will be refunded upon the vehicle's return in good condition and adherence to this Agreement.
            </p>
        </div>
    </div>
</template>

<script></script>

<style scoped>
    .container {
        display: grid;
        grid-template-columns: repeat(4, auto);
        justify-items: center;
        width: 80%;
        margin: 8% auto;
    }

    .container .text {
        width: 70%;
        padding: 30px;
        border-radius: 8px;
        line-height: 1.6rem;
        letter-spacing: 1.2px;
    }

    .container .text h3 {
        margin: 5px 0;
        font-size: 1.6rem;
    }
</style>