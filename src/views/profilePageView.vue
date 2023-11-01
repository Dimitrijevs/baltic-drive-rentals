<template>
    <div class="profile">
        <div class="profileImg-navBar text-center radius-8px">
            <img :src="require('@/assets/people/1-whiteWoman.png')" alt="">
            <h3>Emily Harrison</h3>
            <ul>
                <li>Home</li>
                <li>Change Password</li>
                <li>Sign Out</li>
            </ul>
        </div>
        <div class="right-info">
            <div class="about radius-8px">
                <h3>About</h3>
                <ul>
                    <li>
                        <p>Full Name</p>
                        <span>Emily Harrison</span>
                    </li>
                    <hr>
                    <li>
                        <p>Email</p>
                        <span>chtototam@gmail.com</span>
                    </li>
                    <hr>
                    <li>
                        <p>Phone</p>
                        <span>+371 20776969</span>
                    </li>
                    <hr>
                    <li>
                        <p>Address</p>
                        <span>Koronavirus iela 27-45</span>
                    </li>
                </ul>
            </div>
            <div class="rent-history radius-8px">
                <h3>Rent History</h3>
                <ul class="rents">
                    <li class="rent">
                        <p>Car Name</p>
                        <p>Total Days</p>
                        <p>Total KM</p>
                        <p>Total Price</p>
                    </li>
                    <hr>
                    <li class="rent">
                        <p>Car Name</p>
                        <p>Total Days</p>
                        <p>Total KM</p>
                        <p>Total Price</p>
                    </li>
                    <hr>
                    <li class="rent">
                        <p>Car Name</p>
                        <p>Total Days</p>
                        <p>Total KM</p>
                        <p>Total Price</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>
.profile {
    display: flex;
    width: 70%;
    margin: 8% auto;
}

.profile .profileImg-navBar,
.profile .right-info .about,
.profile .right-info .rent-history {
    background-color: var(--white-white);
    padding: 30px;
}

.profile .profileImg-navBar {
    margin-right: 8px;
}

.profile .profileImg-navBar ul,
.profile .right-info .about ul,
.profile .right-info .rent-history ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.profile .profileImg-navBar ul li {
    margin: 12px;
}

.profile .profileImg-navBar img {
    width: 240px;
}

.profile .right-info .about ul li,
.profile .right-info .rent-history ul li {
    display: flex;
    align-items: center;
}

.profile .right-info .about ul li p, 
.profile .right-info .rent-history ul li p{
    font-weight: bold;
}

.profile .right-info .rent-history {
    margin-top: 8px;
}
</style>