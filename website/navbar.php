<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo">Adil Malik</a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="./index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="./about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="./service.php" class="nav-link">Service</a>
            </li>
            <li class="nav-item">
                <a href="./contact.php" class="nav-link">Contact</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>



<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }


    // when we click on hamburger icon its close 

    const navLink = document.querySelectorAll(".nav-link");

    navLink.forEach(n => n.addEventListener("click", closeMenu));

    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
</script>