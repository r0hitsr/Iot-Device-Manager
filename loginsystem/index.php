<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eram Solutions - Your Partner in Industrial Innovation. Specializing in water, wastewater, and air treatment technologies.">
    <meta name="keywords" content="industrial solutions, water treatment, wastewater management, air pollution control, automation, consulting">
    <title>Industrial Company - Eram Solutions</title>
    <link rel="stylesheet" href="../loginsystem/css/main.css">


    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_ANALYTICS_ID"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_ANALYTICS_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'YOUR_ANALYTICS_ID');
    </script>

    <style>
        /* Basic styles for container and cards */
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 50px auto;
            max-width: 1200px;
        }

        .card {
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 300px;
            margin: 20px;
            text-align: center;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .card-content {
            padding: 20px;
        }

        .card h3 {
            margin-bottom: 15px;
            font-size: 1.5em;
            color: #333;
        }

        .card p {
            color: #666;
            font-size: 1em;
        }

        .card button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 5px;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        /* Hover effect for the card */
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card:hover .card-content {
            color: #007BFF;
        }

        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
            }

            header nav ul {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .hero h2,
            .hero p {
                text-align: center;
            }
        }

        /* Basic styling for the services section */
        #services {
            padding: 40px;
            background-color: #f8f9fa;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        /* Styling for the image */
        .card-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        /* Styling for the text container */
        .card-container div:nth-child(2) {
            max-width: 600px;
            padding: 20px;
        }

        /* Heading styles */
        .card-container h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
            text-align: left;
        }

        /* Paragraph styling */
        .card-container p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 10px;
        }

        /* Add some responsiveness */
        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .card-container img {
                width: 100%;
                max-width: 600px;
            }

            .card-container div:nth-child(2) {
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>Eram Solutions <img src="../loginsystem/assets/image/logo.png" alt="Eram Solutions Logo" class="logo"></h1>


            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h2>Welcome to Eram Solutions</h2>
            <p>Your Partner in Industrial Innovation</p>
            <a href="#services" class="cta-button">Explore Services</a>
        </div>
    </section>
    <section id="services">
        <div class="card-container">
            <div><img src="../loginsystem/assets/image/55.jpg" alt=""></div>
            <div>
                <h3>Here are major services</h3>
                <section>
                    <p>
                        As the name implies, custom manufacturing services involve creating unique products. This is fairly common in the aerospace and automotive industries.

                        These companies often need components that serve highly specific purposes. The components might also have rigid design requirements.

                        Electronics manufacturing services are some of the most sought-after. It can be more difficult to find a custom manufacturer compared to other providers, as not all manufacturers offer this service.
                    </p>
                </section>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="card-container">
                <!-- First Service Card -->
                <div class="card">
                    <img src="../loginsystem/assets/image/66.jpg" alt="Consulting Image">
                    <div class="card-content">
                        <h3>Consulting</h3>
                        <p>We offer expert consulting services in water, air, and wastewater management, ensuring compliance with industry standards.</p>
                        <button>Learn More</button>
                    </div>
                </div>

                <!-- Second Service Card -->
                <div class="card">
                    <img src="../loginsystem/assets/image/1.webp" alt="Automation Image">
                    <div class="card-content">
                        <h3>Automation</h3>
                        <p>Our automation services streamline industrial processes, improving efficiency and reducing manual intervention.</p>
                        <button>Learn More</button>
                    </div>
                </div>

                <!-- Third Service Card -->
                <div class="card">
                    <img src="../loginsystem/assets/image/2.webp" alt="Maintenance Image">
                    <div class="card-content">
                        <h3>Maintenance</h3>
                        <p>We provide comprehensive maintenance services to ensure the longevity and reliability of your systems.</p>
                        <button>Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="moka">

        <a href="signup.php">
            <button aria-label="Sign up for Eram Solutions services">Sign Up</button>
        </a>

        <a href="login.php" target="login">
            <button>Login</button>
        </a>
        <a href="admin" target="_blank">
            <button>Admin</button>
        </a>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p class="about">Eram Solutions as the leading company in manufacturing, development & innovation of water, wastewater & air treatment technologies. ES India is the company engaged in the field of wastewater sector the company has grown steadily and become a manufacturer, trader and complete solution provider for waste water & Air pollution.

                We focused end to end solutions and integrated packages for Online, Real time analysis of various analytical parameter. We are the own manufactory Water Monitoring System & Air Monitoring System.

                To make a better world with better being, perpetuate the balance between them. Make the planet Earth an incredible one, worth being stared in wonder from the other galaxies..</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any inquiries or would like to collaborate, feel free to reach out!</p>
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Eram Solutions. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>