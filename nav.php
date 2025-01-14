<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/nav.css?<?php echo time(); ?>">


</head>

<body>
   
    <nav>
        <h2 class="logo">Face<span>Off</span></h2>
        
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <ul class="nav-menu">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">Services <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown-item">
                            <a href="#" class="dropdown-link">Mouse <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-mouse.php">Budget</a></li>
                                    <li><a href="high-mouse.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <a href="#" class="dropdown-link">Keyboard <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-keyboard.php">Budget</a></li>
                                    <li><a href="high-keyboard.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <a href="#" class="dropdown-link">Headphone <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-headphone.php">Budget</a></li>
                                    <li><a href="high-headphone.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a href="home.php#about" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="home.php#contact" class="nav-link">Connect</a></li>
            <li class="nav-item mobile-btn">
                <button type="button" class="btn"><a href="Login.php"><i class="fa-solid fa-user"></i></a></button>
            </li>
        </ul>
    </nav>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
        const dropdowns = document.querySelectorAll(".dropdown");
        const dropdownItems = document.querySelectorAll(".dropdown-item");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });

        document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
            if (!n.parentElement.classList.contains('dropdown')) {
                hamburger.classList.remove("active");
                navMenu.classList.remove("active");
            }
        }));

        // Handle main dropdown menus
        dropdowns.forEach(dropdown => {
            const dropdownLink = dropdown.querySelector(".nav-link");
            
            dropdownLink.addEventListener("click", (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Toggle active state
                    const wasActive = dropdown.classList.contains("active");
                    dropdown.classList.toggle("active");
                    const dropdownMenu = dropdown.querySelector(".dropdown-menu");
                    
                    if (wasActive) {
                        // If it was active, close it and all nested menus
                        dropdownMenu.classList.remove("show");
                        const nestedDropdowns = dropdown.querySelectorAll(".dropdown-menu-1");
                        nestedDropdowns.forEach(nested => {
                            nested.classList.remove("show");
                        });
                        const nestedItems = dropdown.querySelectorAll(".dropdown-item");
                        nestedItems.forEach(item => {
                            item.classList.remove("active");
                        });
                    } else {
                        // If it wasn't active, open it and close others
                        dropdownMenu.classList.add("show");
                        
                        // Close other dropdowns
                        dropdowns.forEach(otherDropdown => {
                            if (otherDropdown !== dropdown) {
                                otherDropdown.classList.remove("active");
                                otherDropdown.querySelector(".dropdown-menu").classList.remove("show");
                                // Close nested dropdowns in other main dropdowns
                                const nestedDropdowns = otherDropdown.querySelectorAll(".dropdown-menu-1");
                                nestedDropdowns.forEach(nested => {
                                    nested.classList.remove("show");
                                });
                                const nestedItems = otherDropdown.querySelectorAll(".dropdown-item");
                                nestedItems.forEach(item => {
                                    item.classList.remove("active");
                                });
                            }
                        });
                    }
                }
            });
        });

        // Handle nested dropdowns
        dropdownItems.forEach(item => {
            const dropdownLink = item.querySelector(".dropdown-link");
            
            dropdownLink.addEventListener("click", (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Toggle active state
                    const wasActive = item.classList.contains("active");
                    
                    // First, close any other open items at the same level
                    const siblings = item.parentElement.querySelectorAll(".dropdown-item");
                    siblings.forEach(sibling => {
                        if (sibling !== item) {
                            sibling.classList.remove("active");
                            const siblingMenu = sibling.querySelector(".dropdown-menu-1");
                            if (siblingMenu) {
                                siblingMenu.classList.remove("show");
                            }
                        }
                    });
                    
                    // Then toggle the clicked item
                    item.classList.toggle("active");
                    const nestedMenu = item.querySelector(".dropdown-menu-1");
                    if (nestedMenu) {
                        if (wasActive) {
                            nestedMenu.classList.remove("show");
                        } else {
                            nestedMenu.classList.add("show");
                        }
                    }
                }
            });
        });

        // Handle final menu items
        document.querySelectorAll(".dropdown-menu-1 a").forEach(link => {
            link.addEventListener("click", () => {
                hamburger.classList.remove("active");
                navMenu.classList.remove("active");
            });
        });
    </script>
</body>

</html>