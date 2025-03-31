
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MiniBlog</title>
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
                    <a href="/pages/categories.php" class="text-gray-600 hover:text-gray-900 font-medium">Categories</a>
                    <a href="/pages/about.php" class="text-blue-600 font-medium">About</a>
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
                    <a href="/pages/categories.php" class="text-gray-600 hover:text-gray-900 font-medium">Categories</a>
                    <a href="/pages/about.php" class="text-blue-600 font-medium">About</a>
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
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold mb-4">About MiniBlog</h1>
                <p class="text-gray-600 text-lg">Your daily source of inspiration and knowledge</p>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="https://picsum.photos/800/600?random=1" alt="Our Team" class="h-full w-full object-cover">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h2 class="text-2xl font-bold mb-4">Our Story</h2>
                        <p class="text-gray-600 mb-6">Founded in 2024, MiniBlog has grown from a small personal blog to a thriving community of writers, thinkers, and readers. Our mission is to share knowledge, inspire creativity, and foster meaningful discussions across various topics.</p>
                        <p class="text-gray-600">We believe in the power of words to transform lives and connect people from all walks of life. Through our platform, we aim to create a space where ideas can flourish and stories can be shared.</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Quality Content</h3>
                    <p class="text-gray-600">Carefully curated articles from expert writers across various fields</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🌟</span>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Community Driven</h3>
                    <p class="text-gray-600">A vibrant community of readers and writers sharing their perspectives</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Always Learning</h3>
                    <p class="text-gray-600">Continuously evolving and improving based on community feedback</p>
                </div>
            </div>

            <div class="bg-blue-50 rounded-xl p-8 mb-12">
                <h2 class="text-2xl font-bold mb-6 text-center">Our Team</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/150?img=1" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="font-semibold">John Smith</h3>
                        <p class="text-gray-600 text-sm">Editor in Chief</p>
                    </div>
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/150?img=2" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="font-semibold">Sarah Johnson</h3>
                        <p class="text-gray-600 text-sm">Content Manager</p>
                    </div>
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="font-semibold">Michael Chen</h3>
                        <p class="text-gray-600 text-sm">Tech Writer</p>
                    </div>
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/150?img=4" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="font-semibold">Emma Davis</h3>
                        <p class="text-gray-600 text-sm">Lifestyle Editor</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> MiniBlog. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
