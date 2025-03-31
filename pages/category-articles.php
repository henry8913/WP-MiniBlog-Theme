<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Articles - MiniBlog</title>
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
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-12">
        <?php
        $category = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '';

        $categoryDetails = [
            'Technology' => ['icon' => '💻', 'color' => 'bg-blue-100 text-blue-600'],
            'Lifestyle' => ['icon' => '🌟', 'color' => 'bg-pink-100 text-pink-600'],
            'Travel' => ['icon' => '✈️', 'color' => 'bg-green-100 text-green-600'],
            'Food' => ['icon' => '🍕', 'color' => 'bg-yellow-100 text-yellow-600'],
            'Health' => ['icon' => '💪', 'color' => 'bg-purple-100 text-purple-600'],
            'Business' => ['icon' => '💼', 'color' => 'bg-indigo-100 text-indigo-600']
        ];

        $articles = [
            'Technology' => [
                ['title' => 'Quantum Computing Revolution', 'excerpt' => 'Inside the race to build practical quantum computers and their potential to transform cryptography, drug discovery, and climate modeling.', 'image' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb', 'author' => 'Dr. Sarah Chen', 'date' => '2024-03-25', 'readTime' => '8'],
                ['title' => 'AI in Modern Healthcare', 'excerpt' => 'How machine learning and AI are revolutionizing diagnosis, treatment planning, and personalized medicine.', 'image' => 'https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2906&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'author' => 'James Roberts', 'date' => '2024-03-24', 'readTime' => '6'],
                ['title' => 'Web3 and Digital Identity', 'excerpt' => 'Exploring how blockchain and decentralized systems are reshaping online identity, privacy, and digital ownership.', 'image' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0', 'author' => 'Alex Morgan', 'date' => '2024-03-23', 'readTime' => '7']
            ],
            'Lifestyle' => [
                ['title' => 'The Art of Digital Minimalism', 'excerpt' => 'Practical strategies for mindful technology use and creating a more balanced digital lifestyle in our connected world.', 'image' => 'https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e', 'author' => 'Emma Wright', 'date' => '2024-03-25', 'readTime' => '5'],
                ['title' => 'Sustainable Living 2024', 'excerpt' => 'Modern approaches to eco-friendly living, from zero-waste practices to energy-efficient home solutions.', 'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09', 'author' => 'Maya Patel', 'date' => '2024-03-24', 'readTime' => '6'],
                ['title' => 'Remote Work Revolution', 'excerpt' => 'Building a successful career while maintaining work-life harmony in the era of distributed teams.', 'image' => 'https://images.unsplash.com/photo-1665686308827-eb62e4f6604d', 'author' => 'Chris Thompson', 'date' => '2024-03-23', 'readTime' => '4']
            ],
            'Travel' => [
                ['title' => 'Secret Japan', 'excerpt' => 'A journey through Japan\'s hidden gems, from ancient mountain temples to undiscovered rural communities.', 'image' => 'https://images.unsplash.com/photo-1545569341-9eb8b30979d9', 'author' => 'Yuki Tanaka', 'date' => '2024-03-25', 'readTime' => '7'],
                ['title' => 'Eco-Tourism Guide', 'excerpt' => 'Comprehensive guide to responsible travel, supporting local communities, and minimizing environmental impact.', 'image' => 'https://images.unsplash.com/photo-1596895111956-bf1cf0599ce5', 'author' => 'Sofia Garcia', 'date' => '2024-03-24', 'readTime' => '5'],
                ['title' => 'Digital Nomad Life', 'excerpt' => 'Essential strategies for successful remote work while traveling, including productivity tips and destination guides.', 'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c', 'author' => 'Mark Wilson', 'date' => '2024-03-23', 'readTime' => '6']
            ],
            'Food' => [
                ['title' => 'Future of Plant-Based Cuisine', 'excerpt' => 'Innovative plant-based recipes and techniques that are reshaping modern cooking and sustainable dining.', 'image' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd', 'author' => 'Chef Lisa Chen', 'date' => '2024-03-25', 'readTime' => '5'],
                ['title' => 'World Street Food Guide', 'excerpt' => 'Exploring authentic street food cultures, from Asian night markets to European food festivals.', 'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', 'author' => 'Marco Rossi', 'date' => '2024-03-24', 'readTime' => '6'],
                ['title' => 'Modern Fermentation', 'excerpt' => 'Contemporary approaches to fermentation, combining traditional wisdom with modern food science.', 'image' => 'https://images.unsplash.com/photo-1592878912415-353c89227af4', 'author' => 'Dr. Kim Park', 'date' => '2024-03-23', 'readTime' => '7']
            ],
            'Health' => [
                ['title' => 'Mindful Fitness', 'excerpt' => 'Integrating mental and physical wellness through mindful movement and exercise practices.', 'image' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b', 'author' => 'Sam Chen', 'date' => '2024-03-25', 'readTime' => '6'],
                ['title' => 'Mental Health Toolkit', 'excerpt' => 'Practical strategies and resources for maintaining mental wellness in today\'s fast-paced world.', 'image' => 'https://images.unsplash.com/photo-1493836512294-502baa1986e2', 'author' => 'Dr. Emily Brooks', 'date' => '2024-03-24', 'readTime' => '8']
            ],
            'Business' => [
                ['title' => 'Startup Success Stories', 'excerpt' => 'Learning from innovative startups that are disrupting traditional industries and creating new markets.', 'image' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d', 'author' => 'David Zhang', 'date' => '2024-03-25', 'readTime' => '7'],
                ['title' => 'Digital Marketing 2024', 'excerpt' => 'Latest trends and strategies in digital marketing, from AI-powered analytics to social commerce.', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f', 'author' => 'Sarah Williams', 'date' => '2024-03-24', 'readTime' => '5']
            ]
        ];
        ?>

        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <a href="/pages/categories.php" class="inline-block bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-lg flex items-center w-fit mb-8">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Categories
                </a>

                <div class="flex items-center mb-6">
                    <span class="text-4xl mr-4"><?php echo isset($categoryDetails[$category]) ? $categoryDetails[$category]['icon'] : '📚'; ?></span>
                    <div>
                        <h1 class="text-4xl font-bold mb-2"><?php echo $category; ?></h1>
                        <p class="text-gray-600"><?php echo isset($articles[$category]) ? count($articles[$category]) : 0; ?> articles in this category</p>
                    </div>
                </div>
            </div>

            <?php if (isset($articles[$category])): ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($articles[$category] as $article): ?>
                        <article class="bg-white rounded-xl shadow-md overflow-hidden transform hover:-translate-y-1 transition-all duration-200">
                            <div class="relative">
                                <img src="<?php echo $article['image']; ?>" class="w-full h-48 object-cover" alt="<?php echo $article['title']; ?>">
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-white rounded-full text-sm font-medium text-gray-700 shadow-sm">
                                        <?php echo $article['readTime']; ?> min read
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h2 class="text-xl font-bold mb-3 hover:text-blue-600"><?php echo $article['title']; ?></h2>
                                <p class="text-gray-600 mb-4 line-clamp-3"><?php echo $article['excerpt']; ?></p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://i.pravatar.cc/40?u=<?php echo urlencode($article['author']); ?>" class="w-8 h-8 rounded-full mr-3" alt="<?php echo $article['author']; ?>">
                                        <div>
                                            <p class="text-sm font-medium"><?php echo $article['author']; ?></p>
                                            <p class="text-xs text-gray-500"><?php echo date('M j, Y', strtotime($article['date'])); ?></p>
                                        </div>
                                    </div>
                                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                        Read More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="mt-12 flex justify-center">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                        Load More Articles
                    </button>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <div class="mb-6">
                        <span class="text-6xl">🤔</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">No articles found</h2>
                    <p class="text-gray-600 mb-8">We couldn't find any articles in this category. Check back later or explore other categories.</p>
                    <a href="/pages/categories.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors inline-block">
                        Browse All Categories
                    </a>
                </div>
            <?php endif; ?>
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