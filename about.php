<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SWTS Batam</title>
    <meta name="description" content="Learn more about our company and team">
    
    <!-- Include all the same assets as index.html -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                        dark: '#0f172a',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-50 dark:bg-dark font-sans antialiased transition-colors duration-300">
    <?php include 'header.html'; ?>
    
    <main>
        <!-- About Hero Section -->
        <section class="relative py-32 bg-gradient-to-r from-primary to-secondary overflow-hidden">
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">Our Story</h1>
                <p class="text-xl text-white/90 max-w-2xl mx-auto">
                    Learn about our journey, values, and the team behind SWTS Batam
                </p>
            </div>
        </section>

        <!-- Detailed About Content -->
        <section class="py-20 bg-white dark:bg-gray-800">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold mb-8">Company History</h2>
                    <div class="space-y-8">
                        <div class="pl-8 border-l-4 border-primary">
                            <h3 class="text-xl font-semibold mb-2">2010 - Foundation</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                SWTS Batam was founded with a vision to provide exceptional business services in the region.
                            </p>
                        </div>
                        <div class="pl-8 border-l-4 border-primary">
                            <h3 class="text-xl font-semibold mb-2">2015 - Expansion</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Expanded our service offerings to include IT solutions and HR services.
                            </p>
                        </div>
                        <div class="pl-8 border-l-4 border-primary">
                            <h3 class="text-xl font-semibold mb-2">2020 - Digital Transformation</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Implemented cutting-edge digital solutions for our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>