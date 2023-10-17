<template>
    <footer>
        <div class="flex-container">
            <div class="question-container">
                <h1>Have an unussual questions?</h1>
                <p>Let's get in touch!</p>
            </div>
            <div class="email-container-image">
                <img :src="require('@/assets/email.png')" alt="#">
                <div class="email-container">
                    <h1>Contact Us</h1>
                    <p>support@balticdriverentals.com</p>
                </div>
            </div>
        </div>
        <div class="underline"></div>
        <h3>Copyright © SIA “Baltic Drive Rental” 2023 | All rights reserved</h3>
    </footer>
</template>

<script>
    export default {
        name: 'AppFooter'
    }
</script>

<style>
    footer {
        background-color: var(--black);
    }

    footer > h3 {
        margin: 0;
        text-align: center;
        font-size: 1.5rem;
        padding-bottom: 30px;
        color: var(--white);
    }

    footer > .flex-container {
        display: flex;
        justify-content: space-between;
        width: 70%;
        margin: 0 auto;
    }

    footer > .flex-container > .email-container-image {
        display: flex;
        align-items: center;
    }

    footer > .flex-container > .email-container-image > img {
        margin-right: 20px;
    }

    footer > .underline {
        width: 70%;
        border: 1px solid var(--skin);
        margin: 20px auto;
    }

    footer > .flex-container > .question-container > h1, footer > .flex-container > .question-container > p, footer > .flex-container > .email-container-image > .email-container h1, footer > .flex-container > .email-container-image > .email-container p {
        color: var(--white);
    }
</style>