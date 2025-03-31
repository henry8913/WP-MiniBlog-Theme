
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - MiniBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-800">MiniBlog</a>
                <div class="md:flex space-x-6 hidden">
                    <a href="/" class="text-gray-600 hover:text-gray-900 font-medium">Home</a>
                    <a href="/pages/categories.php" class="text-blue-600 font-medium">Categories</a>
                    <a href="/pages/about.php" class="text-gray-600 hover:text-gray-900 font-medium">About</a>
                    <a href="/pages/contact.php" class="text-gray-600 hover:text-gray-900 font-medium">Contact</a>
                </div>
                <button onclick="toggleMenu()" class="md:hidden text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-600 hover:text-gray-900 font-medium">Home</a>
                    <a href="/pages/categories.php" class="text-blue-600 font-medium">Categories</a>
                    <a href="/pages/about.php" class="text-gray-600 hover:text-gray-900 font-medium">About</a>
                    <a href="/pages/contact.php" class="text-gray-600 hover:text-gray-900 font-medium">Contact</a>
                </div>
            </div>
        </nav>
        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            }
        </script>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold mb-4">Explore Our Categories</h1>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Discover a world of knowledge across various topics. Each category offers unique insights and perspectives from our expert writers.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $categories = [
                    ['name' => 'Technology', 'icon' => '💻', 'description' => 'Dive into AI, cybersecurity, software development, and emerging tech trends', 'color' => 'bg-blue-100 text-blue-600 hover:bg-blue-200'],
                    ['name' => 'Lifestyle', 'icon' => '🌟', 'description' => 'Modern living tips, mindfulness practices, and personal development insights', 'color' => 'bg-pink-100 text-pink-600 hover:bg-pink-200'],
                    ['name' => 'Travel', 'icon' => '✈️', 'description' => 'Hidden gems, cultural experiences, and smart travel strategies', 'color' => 'bg-green-100 text-green-600 hover:bg-green-200'],
                    ['name' => 'Food', 'icon' => '🍕', 'description' => 'Global cuisines, cooking techniques, and foodie adventures', 'color' => 'bg-yellow-100 text-yellow-600 hover:bg-yellow-200'],
                    ['name' => 'Health', 'icon' => '💪', 'description' => 'Holistic wellness, fitness routines, and mental health resources', 'color' => 'bg-purple-100 text-purple-600 hover:bg-purple-200'],
                    ['name' => 'Business', 'icon' => '💼', 'description' => 'Startup insights, digital marketing, and leadership strategies', 'color' => 'bg-indigo-100 text-indigo-600 hover:bg-indigo-200']
                ];

                // Add article count to each category
                foreach($categories as $key => $category) {
                    $categories[$key]['count'] = isset($articles[$category['name']]) ? count($articles[$category['name']]) : 0;
                }
                foreach($categories as $category):
                ?>
                <a href="/pages/category-articles.php?category=<?php echo urlencode($category['name']); ?>" 
                   class="block group transform hover:-translate-y-1 transition-all duration-200">
                    <div class="rounded-xl p-6 <?php echo $category['color']; ?> shadow-sm h-full">
                        <div class="text-center">
                            <span class="text-4xl mb-4 block"><?php echo $category['icon']; ?></span>
                            <h3 class="font-semibold text-xl mb-3"><?php echo $category['name']; ?></h3>
                            <p class="text-sm opacity-75 mb-4"><?php echo $category['description']; ?></p>
                            <span class="inline-flex items-center justify-center px-3 py-1 bg-white bg-opacity-50 rounded-full text-sm font-medium">
                                Discover More
                            </span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-12 mt-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> MiniBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
