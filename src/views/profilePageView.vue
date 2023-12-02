<template>
    <div class="profile d-flex mx-auto mb-5">
        <div class="profileImg-navBar text-center rounded bg-light me-2 p-5">
            <img src="https://randomuser.me/api/portraits/women/19.jpg" alt="" class="rounded-circle">
            <h3 class="mt-2 h2 text-center">Emily Harrison</h3>
            <ul>
                <li class="m-1"><router-link to="/" class="text-secondary h5 text-decoration-none">Home</router-link></li>
                <li class="m-1"><router-link to="/changePassword" class="text-secondary h5 text-decoration-none">Change Password</router-link></li>
                <li class="m-1"><router-link to="/" class="text-secondary h5 text-decoration-none">Sign Out</router-link></li>
            </ul>
        </div>
        <div class="right-info">
            <div class="about rounded bg-light p-5">
                <h3 class="text-center">About</h3>
                <ul class="list-group list-group-flush lead">
                    <li>
                        <p class="fw-bold m-0">Full Name</p>
                        <span>Emily Harrison</span>
                    </li>
                    <hr class="m-1">
                    <li>
                        <p class="fw-bold m-0">Email</p>
                        <span>chtototam@gmail.com</span> 
                    </li>
                    <hr class="m-1">
                    <li>
                        <p class="fw-bold m-0">Phone</p>
                        <span>+371 20776969</span>
                    </li>
                    <hr class="m-1">
                    <li>
                        <p class="fw-bold m-0">Address</p>
                        <span>Koronavirus iela 27-45</span>
                    </li>
                </ul>
            </div>
            <div class="rent-history rounded bg-light mt-2 p-5 overflow-auto">
                <h3 class="text-center">Rent History</h3>
                <ul class="rents list-unstyled">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                    <hr class="m-1">
                    <li class="rent">
                        <p class="m-1">Car Name</p>
                        <p class="m-1">Total Days</p>
                        <p class="m-1">Total KM</p>
                        <p class="rounded py-1 px-2 m-1">Total Price</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style scoped> 
.profile {
    width: 70%;
    margin-top: 100px;
}

.profile .right-info {
    width: 100%;
}

.profile .right-info .rent-history {
    min-height: 400px;
    max-height: 400px;
}

.profile .right-info .rent-history .rents .rent p:nth-child(4) {
    background-color: var(--black);
    color: var(--skin);
}

.profile .profileImg-navBar ul,
.profile .right-info .about ul,
.profile .right-info .rent-history ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.profile .profileImg-navBar ul {
    margin-top: 80%;
}

.profile .profileImg-navBar ul li {
    margin: 12px;
}

.profile .profileImg-navBar ul li a {
    position: relative;
    text-decoration-color: var(--white-white);
}

.profile .profileImg-navBar img {
    width: 240px;
}

.profile .right-info .about ul li,
.profile .right-info .rent-history ul li {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}
</style>