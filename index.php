
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog - Your Modern Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">MiniBlog</h1>
                <div class="md:flex space-x-6 hidden">
                    <a href="/" class="text-blue-600 font-medium">Home</a>
                    <a href="/pages/categories.php" class="text-gray-600 hover:text-gray-900 font-medium">Categories</a>
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
                    <a href="/" class="text-blue-600 font-medium">Home</a>
                    <a href="/pages/categories.php" class="text-gray-600 hover:text-gray-900 font-medium">Categories</a>
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

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Welcome to MiniBlog</h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">Discover stories, insights, and knowledge from our community of writers and thinkers. Get inspired and stay informed.</p>
                <div class="flex gap-4 justify-center">
                    <a href="#featured" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-medium hover:bg-blue-50 transition-colors">
                        Start Reading
                    </a>
                    <a href="/pages/categories.php" class="bg-blue-500 text-white px-8 py-4 rounded-lg font-medium hover:bg-blue-400 transition-colors">
                        Browse Categories
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section id="featured" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Featured Posts</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our most popular and trending articles across various categories.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <article class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb" class="w-full h-56 object-cover" alt="Quantum Computing Article">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white rounded-full text-sm font-medium text-gray-700 shadow-sm">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-blue-600 font-medium text-sm">Technology</span>
                        <h3 class="text-xl font-bold mt-2 mb-3">The Rise of Quantum Computing</h3>
                        <p class="text-gray-600 mb-4">Exploring how quantum computers are revolutionizing computational capabilities and their potential impact on cryptography.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=1" class="w-10 h-10 rounded-full" alt="Dr. Sarah Chen">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Dr. Sarah Chen</p>
                                    <p class="text-sm text-gray-500">March 25, 2024</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">8 min read</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9" class="w-full h-56 object-cover" alt="Hidden Japan Article">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white rounded-full text-sm font-medium text-gray-700 shadow-sm">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-green-600 font-medium text-sm">Travel</span>
                        <h3 class="text-xl font-bold mt-2 mb-3">Hidden Japan</h3>
                        <p class="text-gray-600 mb-4">Venture beyond Tokyo to discover ancient temples, remote onsen towns, and the authentic soul of Japan.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=2" class="w-10 h-10 rounded-full" alt="Yuki Tanaka">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Yuki Tanaka</p>
                                    <p class="text-sm text-gray-500">March 24, 2024</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">7 min read</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd" class="w-full h-56 object-cover" alt="Plant-Based Revolution Article">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white rounded-full text-sm font-medium text-gray-700 shadow-sm">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-yellow-600 font-medium text-sm">Food</span>
                        <h3 class="text-xl font-bold mt-2 mb-3">Plant-Based Revolution</h3>
                        <p class="text-gray-600 mb-4">Discover the world of plant-based cooking with innovative recipes that will satisfy even the most dedicated meat lovers.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=3" class="w-10 h-10 rounded-full" alt="Chef Lisa Chen">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Chef Lisa Chen</p>
                                    <p class="text-sm text-gray-500">March 23, 2024</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">5 min read</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Explore Categories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Find the content that interests you most across our diverse range of topics.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <?php
                $categories = [
                    ['name' => 'Technology', 'icon' => '💻', 'color' => 'bg-blue-100 text-blue-600'],
                    ['name' => 'Lifestyle', 'icon' => '🌟', 'color' => 'bg-pink-100 text-pink-600'],
                    ['name' => 'Travel', 'icon' => '✈️', 'color' => 'bg-green-100 text-green-600'],
                    ['name' => 'Food', 'icon' => '🍕', 'color' => 'bg-yellow-100 text-yellow-600'],
                    ['name' => 'Health', 'icon' => '💪', 'color' => 'bg-purple-100 text-purple-600'],
                    ['name' => 'Business', 'icon' => '💼', 'color' => 'bg-indigo-100 text-indigo-600']
                ];
                foreach($categories as $category):
                ?>
                <a href="/pages/category-articles.php?category=<?php echo urlencode($category['name']); ?>" class="block group">
                    <div class="rounded-xl p-6 <?php echo $category['color']; ?> text-center transform group-hover:-translate-y-1 transition-all duration-300">
                        <span class="text-4xl mb-4 block"><?php echo $category['icon']; ?></span>
                        <h3 class="font-semibold text-lg"><?php echo $category['name']; ?></h3>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Latest Posts -->
    <main class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Latest Posts</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Stay up to date with our newest content across all categories.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-48 object-cover" alt="AI Healthcare">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-600 text-sm font-medium px-3 py-1 rounded-full">Technology</span>
                            <span class="text-gray-500 text-sm ml-4">6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">AI in Healthcare</h3>
                        <p class="text-gray-600 mb-4">How artificial intelligence is transforming medical diagnosis, treatment planning, and patient care.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=4" class="w-8 h-8 rounded-full" alt="James Roberts">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">James Roberts</p>
                                    <p class="text-xs text-gray-500">March 24, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e" class="w-full h-48 object-cover" alt="Digital Minimalism">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-600 text-sm font-medium px-3 py-1 rounded-full">Lifestyle</span>
                            <span class="text-gray-500 text-sm ml-4">5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Digital Minimalism</h3>
                        <p class="text-gray-600 mb-4">Embracing a mindful approach to technology use and digital consumption.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=5" class="w-8 h-8 rounded-full" alt="Emma Wright">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Emma Wright</p>
                                    <p class="text-xs text-gray-500">March 25, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="w-full h-48 object-cover" alt="Global Street Food">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-yellow-100 text-yellow-600 text-sm font-medium px-3 py-1 rounded-full">Food</span>
                            <span class="text-gray-500 text-sm ml-4">6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Global Street Food</h3>
                        <p class="text-gray-600 mb-4">A culinary journey through the world's most exciting street food scenes.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=6" class="w-8 h-8 rounded-full" alt="Marco Rossi">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Marco Rossi</p>
                                    <p class="text-xs text-gray-500">March 24, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1596895111956-bf1cf0599ce5" class="w-full h-48 object-cover" alt="Sustainable Tourism">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-green-100 text-green-600 text-sm font-medium px-3 py-1 rounded-full">Travel</span>
                            <span class="text-gray-500 text-sm ml-4">5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Sustainable Tourism</h3>
                        <p class="text-gray-600 mb-4">How to explore the world while minimizing your environmental impact.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=7" class="w-8 h-8 rounded-full" alt="Sofia Garcia">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Sofia Garcia</p>
                                    <p class="text-xs text-gray-500">March 24, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1665686308827-eb62e4f6604d" class="w-full h-48 object-cover" alt="Work Life Harmony">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-pink-100 text-pink-600 text-sm font-medium px-3 py-1 rounded-full">Lifestyle</span>
                            <span class="text-gray-500 text-sm ml-4">4 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Work-Life Harmony</h3>
                        <p class="text-gray-600 mb-4">Moving beyond traditional work-life balance to create a more integrated approach.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=8" class="w-8 h-8 rounded-full" alt="Chris Thompson">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Chris Thompson</p>
                                    <p class="text-xs text-gray-500">March 23, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1592878912415-353c89227af4?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-48 object-cover" alt="Fermentation">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-yellow-100 text-yellow-600 text-sm font-medium px-3 py-1 rounded-full">Food</span>
                            <span class="text-gray-500 text-sm ml-4">7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Fermentation Fundamentals</h3>
                        <p class="text-gray-600 mb-4">Learn the art and science of fermentation. From kombucha to kimchi.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=9" class="w-8 h-8 rounded-full" alt="Dr. Kim Park">
                                <div class="ml-3">
                                    <p class="text-sm font-medium">Dr. Kim Park</p>
                                    <p class="text-xs text-gray-500">March 23, 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Read More →</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-center mt-12">
                <button class="bg-gray-900 text-white px-8 py-4 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                    Load More Posts
                </button>
            </div>
        </div>
    </main>

    <!-- Newsletter -->
    <section class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-gray-400 mb-8">Stay updated with our latest stories and news. Join our growing community of readers.</p>
                <form class="flex gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg font-medium transition-colors">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">MiniBlog</h3>
                    <p class="text-gray-400">Sharing knowledge and stories with our growing community.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/pages/category-articles.php?category=Technology" class="hover:text-white">Technology</a></li>
                        <li><a href="/pages/category-articles.php?category=Lifestyle" class="hover:text-white">Lifestyle</a></li>
                        <li><a href="/pages/category-articles.php?category=Travel" class="hover:text-white">Travel</a></li>
                        <li><a href="/pages/category-articles.php?category=Food" class="hover:text-white">Food</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/pages/about.php" class="hover:text-white">About Us</a></li>
                        <li><a href="/pages/contact.php" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-pink-600 transition-colors">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> MiniBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
