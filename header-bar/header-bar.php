<style>
    <?php include("header-bar.css") ?>
</style>

<?php 
    function goHome($toHighlight){
        if(!str_contains($_SERVER["REQUEST_URI"], "/home")) { echo 'href="/home?redirectedTo='.$toHighlight.'"'; }
    }
?>

<div id="header-bar-onscroll" class="header-bar-wrapper-onscroll">
    <a href="/home">Home</a>
    <a onclick="highlight('about')" <?php goHome('about') ?>>About us</a>
    <a onclick="highlight('products')">Our products</a>
    <a onclick="highlight('feedbacks')" <?php goHome('feedbacks') ?>>Feedbacks</a>
    <a onclick="highlight('contacts')" <?php goHome('contacts') ?>>Contacts</a>
</div>

<div id="header-bar-top" class="header-bar-wrapper-top">
    <a href="/home">Home</a>
    <a onclick="highlight('about')" <?php goHome('about') ?>>About us</a>
    <a onclick="highlight('products')">Our products</a>
    <a onclick="highlight('feedbacks')" <?php goHome('feedbacks') ?>>Feedbacks</a>
    <a onclick="highlight('contacts')" <?php goHome('contacts') ?>>Contacts</a>
</div>

<script>
    var lastHighlighted = [];

    changeUrlToHome();
    highlightOnRedirect();

    function highlightOnRedirect(){
        if (window.location.href.includes("redirectedTo=")) {
            var elToHighlight = window.location.href.split("=").pop();
            highlight(elToHighlight);
            sessionStorage.setItem("wasRedirected", true);
        }
    }

    function changeUrlToHome(){
        if (sessionStorage.getItem("wasRedirected")) {
            sessionStorage.removeItem("wasRedirected")
            if (window.location.href.includes("home")) {
                location.href = "/home";
            }
        }
    }

    function scrolling(){
        if (window.scrollY > 0) {
            document.getElementById("header-bar-top").style.display = 'none';
        } else { document.getElementById("header-bar-top").style.display = 'block' }
    }
    
    function highlight(id){
        var previousElement;
        if(lastHighlighted){
            previousElement = lastHighlighted[lastHighlighted.length - 1];
        }
        if (previousElement) {
            previousElement.style.background = 'none';
            previousElement.style.animation = 'none';
            previousElement.style.webkitAnimation = 'none';
            previousElement.children[0].children[0].style.display = 'none';
            previousElement.style.borderTop = 'none';
        }

        var element = document.getElementById(id);
        element.scrollIntoView({ behavior: 'smooth' });
        element.style.animation = 'zoom-paragraph 1.5s';
        element.style.webkitAnimation = 'zoom-paragraph 1.5s';
        element.style.backgroundColor = 'var(--highlighted)';
        element.style.borderTop = '0.1vw solid';
        element.children[0].children[0].style.display = 'inline';
        element.style.zIndex = 1;
        
        setTimeout(() => {
            element.style.zIndex = 0;
        }, 1500);

        lastHighlighted.push(element)
    }
</script>