<?php
/**
 * Template Name: Sanity Blog Page
 * Template for displaying Sanity-powered blog
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white py-32 mt-20">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 rounded-full filter blur-3xl animate-pulse"
             style="background: linear-gradient(135deg, #F59E0B, #D97706);"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 rounded-full filter blur-3xl animate-pulse"
             style="background: linear-gradient(135deg, #F59E0B, #D97706); animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <p class="text-gold-400 text-xl tracking-widest uppercase font-bold mb-4 animate-fade-in-up">
                PROFESSIONAL INSIGHTS
            </p>
            <div class="w-20 h-1 mx-auto mb-8 bg-gold-gradient"></div>
            
            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-8 animate-fade-in-up" 
                style="animation-delay: 0.3s;">
                JUNYA'S <br />
                <span class="text-gradient">BLOG</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto mb-12 leading-relaxed font-light animate-fade-in-up" 
               style="animation-delay: 0.6s;">
                プロフェッショナルの視点から、トレーニングや栄養に関する最新情報と専門知識をお届けします
            </p>
        </div>
    </div>
</section>

<!-- Blog Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Loading State -->
            <div id="blog-loading" class="text-center py-20">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-gold-500"></div>
                <p class="mt-4 text-gray-600">記事を読み込み中...</p>
            </div>
            
            <!-- Categories Filter -->
            <div id="blog-categories" class="hidden mb-12">
                <h2 class="text-2xl font-bold text-center mb-8">カテゴリで探す</h2>
                <div class="flex flex-wrap justify-center gap-4" id="categories-container">
                    <button class="category-filter active" data-category="all">
                        すべて
                    </button>
                </div>
            </div>

            <!-- Featured Posts -->
            <div id="featured-posts" class="hidden mb-20">
                <div class="text-center mb-16">
                    <p class="text-gold-500 font-bold tracking-widest uppercase mb-2">FEATURED POSTS</p>
                    <h2 class="text-4xl font-black text-black mb-4">注目の記事</h2>
                    <p class="text-xl text-gray-600">プロが選ぶ、特に読んでほしい記事をご紹介</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="featured-posts-container">
                    <!-- Featured posts will be inserted here -->
                </div>
            </div>

            <!-- All Posts -->
            <div id="all-posts" class="hidden">
                <div class="text-center mb-16">
                    <p class="text-gold-500 font-bold tracking-widest uppercase mb-2">ALL POSTS</p>
                    <h2 class="text-4xl font-black text-black mb-4">すべての記事</h2>
                    <p class="text-xl text-gray-600">最新のトレーニング情報と専門知識</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="all-posts-container">
                    <!-- All posts will be inserted here -->
                </div>
            </div>

            <!-- No Posts State -->
            <div id="no-posts" class="hidden text-center py-20">
                <div class="max-w-2xl mx-auto">
                    <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-r from-gold-500 to-gold-600 rounded-full flex items-center justify-center">
                        <i class="ri-book-line text-3xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-black text-black mb-4">
                        ブログ準備中
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        現在、最新のトレーニング情報と専門知識をお届けするための<br />
                        コンテンツを準備しています。
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="btn-luxury text-lg px-8 py-4">
                            <i class="ri-phone-line mr-2"></i>無料カウンセリング予約
                        </a>
                        <a href="<?php echo home_url('/'); ?>" class="btn-luxury-outline text-lg px-8 py-4">
                            <i class="ri-home-line mr-2"></i>ホームに戻る
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sanity API Integration Script -->
<script>
// Sanity configuration
const SANITY_CONFIG = {
    projectId: '8gquylv3',
    dataset: 'production',
    apiVersion: '2024-01-01',
    useCdn: true
};

// Sanity client
class SanityClient {
    constructor(config) {
        this.config = config;
        this.baseUrl = `https://${config.projectId}.${config.useCdn ? 'apicdn' : 'api'}.sanity.io/v${config.apiVersion}/data/query/${config.dataset}`;
    }

    async fetch(query, params = {}) {
        const url = new URL(this.baseUrl);
        url.searchParams.set('query', query);
        
        // Add parameters
        Object.keys(params).forEach(key => {
            url.searchParams.set(`$${key}`, JSON.stringify(params[key]));
        });

        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            return data.result;
        } catch (error) {
            console.error('Sanity fetch error:', error);
            throw error;
        }
    }
}

// Initialize client
const sanityClient = new SanityClient(SANITY_CONFIG);

// Queries
const QUERIES = {
    allPosts: `*[_type == "post" && isPublished == true] | order(publishedAt desc) {
        _id,
        title,
        slug,
        excerpt,
        mainImage {
            asset,
            alt
        },
        categories[]-> {
            _id,
            title,
            slug,
            color
        },
        author-> {
            _id,
            name,
            slug,
            image {
                asset,
                alt
            }
        },
        publishedAt,
        isFeatured
    }`,
    
    featuredPosts: `*[_type == "post" && isPublished == true && isFeatured == true] | order(publishedAt desc) [0...3] {
        _id,
        title,
        slug,
        excerpt,
        mainImage {
            asset,
            alt
        },
        categories[]-> {
            _id,
            title,
            slug,
            color
        },
        author-> {
            _id,
            name,
            slug
        },
        publishedAt
    }`,
    
    allCategories: `*[_type == "category" && isActive == true] | order(title asc) {
        _id,
        title,
        slug,
        color
    }`
};

// Utility functions
function imageUrl(image, params = {}) {
    if (!image?.asset?._ref) return '';
    
    const ref = image.asset._ref;
    const [, id, dimensions, format] = ref.split('-');
    const [width, height] = dimensions.split('x');
    
    let url = `https://cdn.sanity.io/images/${SANITY_CONFIG.projectId}/${SANITY_CONFIG.dataset}/${id}-${dimensions}.${format}`;
    
    const urlParams = new URLSearchParams();
    if (params.width) urlParams.set('w', params.width);
    if (params.height) urlParams.set('h', params.height);
    if (params.quality) urlParams.set('q', params.quality);
    
    if (urlParams.toString()) {
        url += '?' + urlParams.toString();
    }
    
    return url;
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('ja-JP', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function createPostCard(post) {
    const categoryBadges = post.categories?.map(category => 
        `<span class="inline-block px-2 py-1 text-xs rounded-full" style="background-color:${category.color || '#F59E0B'};color:white">
            ${category.title}
        </span>`
    ).join(' ') || '';

    const imageHtml = post.mainImage ? 
        `<div class="aspect-video relative overflow-hidden">
            <img src="${imageUrl(post.mainImage, {width: 400, height: 250, quality: 90})}" 
                 alt="${post.mainImage.alt || post.title}" 
                 class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                 loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
        </div>` : '';

    const authorImage = post.author?.image ? 
        `<img src="${imageUrl(post.author.image, {width: 24, height: 24})}" 
             alt="${post.author.name}" 
             class="w-6 h-6 rounded-full object-cover">` : 
        `<div class="w-6 h-6 bg-gold-500 rounded-full flex items-center justify-center">
            <i class="ri-user-line text-white text-xs"></i>
        </div>`;

    return `
        <article class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white">
            <a href="javascript:void(0)" onclick="loadIndividualPost('${post.slug.current}')" class="block cursor-pointer">
                ${imageHtml}
                <div class="p-6">
                    ${categoryBadges ? `<div class="mb-3">${categoryBadges}</div>` : ''}
                    <h3 class="text-xl font-bold text-black mb-3 line-clamp-2 leading-tight">
                        ${post.title}
                    </h3>
                    ${post.excerpt ? `<p class="text-gray-600 mb-4 line-clamp-3">${post.excerpt}</p>` : ''}
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <div class="flex items-center space-x-2">
                            ${authorImage}
                            <span>${post.author?.name || 'JUNYA ISHIHARA'}</span>
                        </div>
                        <time>${formatDate(post.publishedAt)}</time>
                    </div>
                </div>
            </a>
        </article>
    `;
}

function createCategoryButton(category) {
    return `
        <button class="category-filter px-6 py-2 rounded-full border-2 border-gold-500 text-gold-500 hover:bg-gold-500 hover:text-white transition-colors duration-300" 
                data-category="${category.slug.current}"
                style="border-color: ${category.color}; color: ${category.color}">
            ${category.title}
        </button>
    `;
}

// Main blog loading function
async function loadBlog() {
    try {
        const [allPosts, featuredPosts, categories] = await Promise.all([
            sanityClient.fetch(QUERIES.allPosts),
            sanityClient.fetch(QUERIES.featuredPosts),
            sanityClient.fetch(QUERIES.allCategories)
        ]);

        // Hide loading
        document.getElementById('blog-loading').classList.add('hidden');

        if (!allPosts || allPosts.length === 0) {
            document.getElementById('no-posts').classList.remove('hidden');
            return;
        }

        // Show categories
        if (categories && categories.length > 0) {
            const categoriesContainer = document.getElementById('categories-container');
            const categoryButtons = categories.map(createCategoryButton).join('');
            categoriesContainer.innerHTML = `
                <button class="category-filter active px-6 py-2 bg-gold-500 text-white rounded-full hover:bg-gold-600 transition-colors duration-300" data-category="all">
                    すべて
                </button>
                ${categoryButtons}
            `;
            document.getElementById('blog-categories').classList.remove('hidden');
        }

        // Show featured posts
        if (featuredPosts && featuredPosts.length > 0) {
            const featuredContainer = document.getElementById('featured-posts-container');
            featuredContainer.innerHTML = featuredPosts.map(createPostCard).join('');
            document.getElementById('featured-posts').classList.remove('hidden');
        }

        // Show all posts
        const allPostsContainer = document.getElementById('all-posts-container');
        allPostsContainer.innerHTML = allPosts.map(createPostCard).join('');
        document.getElementById('all-posts').classList.remove('hidden');

        // Category filtering
        document.querySelectorAll('.category-filter').forEach(button => {
            button.addEventListener('click', () => {
                // Update active state
                document.querySelectorAll('.category-filter').forEach(btn => {
                    btn.classList.remove('active', 'bg-gold-500', 'text-white');
                    btn.classList.add('border-2', 'border-gold-500', 'text-gold-500');
                });
                button.classList.add('active', 'bg-gold-500', 'text-white');
                button.classList.remove('border-2', 'border-gold-500', 'text-gold-500');

                // Filter posts
                const category = button.dataset.category;
                const filteredPosts = category === 'all' ? allPosts : 
                    allPosts.filter(post => 
                        post.categories?.some(cat => cat.slug.current === category)
                    );
                
                allPostsContainer.innerHTML = filteredPosts.map(createPostCard).join('');
            });
        });

    } catch (error) {
        console.error('Blog loading error:', error);
        document.getElementById('blog-loading').classList.add('hidden');
        document.getElementById('no-posts').classList.remove('hidden');
    }
}

// Check if this is an individual post page based on URL
function checkIndividualPost() {
    // Check URL parameter first (from .htaccess redirect)
    const urlParams = new URLSearchParams(window.location.search);
    const slug = urlParams.get('slug');
    
    if (slug) {
        // This is an individual post page via URL parameter
        loadIndividualPost(slug);
        return true;
    }
    
    // Fallback: check URL path
    const path = window.location.pathname;
    const blogMatch = path.match(/^\/blog\/([^\/]+)\/?$/);
    
    if (blogMatch && blogMatch[1]) {
        // This is an individual post page via URL path
        loadIndividualPost(blogMatch[1]);
        return true;
    }
    return false;
}

// Load individual post function
async function loadIndividualPost(slug) {
    try {
        // Update browser URL without reloading page
        window.history.pushState({}, '', `/blog/${slug}/`);
        
        // Hide the main blog sections
        document.getElementById('blog-categories').style.display = 'none';
        document.getElementById('featured-posts').style.display = 'none';
        document.getElementById('all-posts').style.display = 'none';
        document.getElementById('no-posts').style.display = 'none';
        
        // Show loading
        document.getElementById('blog-loading').classList.remove('hidden');
        
        // Query for the individual post
        const query = `*[_type == "post" && slug.current == $slug && isPublished == true][0] {
            _id,
            title,
            slug,
            excerpt,
            mainImage {
                asset,
                alt
            },
            body,
            categories[]-> {
                _id,
                title,
                slug,
                color
            },
            tags,
            author-> {
                _id,
                name,
                slug,
                image {
                    asset,
                    alt
                },
                bio,
                qualification
            },
            publishedAt,
            _updatedAt,
            views
        }`;

        const post = await sanityClient.fetch(query, { slug });

        if (!post) {
            showPostNotFound();
            return;
        }

        renderIndividualPost(post);
        
    } catch (error) {
        console.error('Individual post loading error:', error);
        showPostNotFound();
    }
}

function showPostNotFound() {
    document.getElementById('blog-loading').classList.add('hidden');
    document.getElementById('blog-categories').style.display = 'none';
    document.getElementById('featured-posts').style.display = 'none';
    document.getElementById('all-posts').style.display = 'none';
    document.getElementById('no-posts').style.display = 'none';
    
    // Create post not found message
    const notFoundHTML = `
        <div class="py-32 text-center">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl mx-auto">
                    <h1 class="text-4xl font-black text-black mb-6">記事が見つかりません</h1>
                    <p class="text-xl text-gray-600 mb-8">指定された記事は存在しないか、削除された可能性があります。</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo home_url('/blog/'); ?>" class="bg-gold-gradient text-white px-8 py-4 font-bold tracking-wide hover:shadow-lg transition-all duration-300 uppercase text-sm">
                            <i class="ri-arrow-left-line mr-2"></i>ブログ一覧に戻る
                        </a>
                        <a href="<?php echo home_url('/'); ?>" class="border-2 border-gold-500 text-gold-500 px-8 py-4 font-bold tracking-wide hover:bg-gold-500 hover:text-white transition-all duration-300 uppercase text-sm">
                            <i class="ri-home-line mr-2"></i>ホームに戻る
                        </a>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Insert after the hero section
    const heroSection = document.querySelector('section');
    heroSection.insertAdjacentHTML('afterend', notFoundHTML);
}

function renderIndividualPost(post) {
    document.getElementById('blog-loading').classList.add('hidden');
    
    // Update document title
    document.title = `${post.title} | JUNYA ISHIHARA PERSONAL TRAINING`;
    
    // Create individual post HTML
    const postHTML = `
        <!-- Breadcrumb -->
        <section class="py-6 bg-gray-50 border-b border-gray-200">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <nav class="flex items-center space-x-2 text-sm text-gray-600">
                        <a href="<?php echo home_url('/'); ?>" class="hover:text-gold-500 transition-colors">ホーム</a>
                        <span>/</span>
                        <a href="<?php echo home_url('/blog/'); ?>" class="hover:text-gold-500 transition-colors">ブログ</a>
                        <span>/</span>
                        <span class="text-gray-900">${post.title}</span>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Article Content -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <!-- Categories -->
                    ${post.categories && post.categories.length > 0 ? `
                        <div class="mb-6">
                            ${post.categories.map(category => 
                                `<span class="inline-block px-3 py-1 rounded-full text-sm font-medium" style="background-color:${category.color || '#F59E0B'};color:white">
                                    ${category.title}
                                </span>`
                            ).join(' ')}
                        </div>
                    ` : ''}

                    <!-- Title -->
                    <h1 class="text-4xl md:text-5xl font-black text-black leading-tight mb-6">
                        ${post.title}
                    </h1>

                    <!-- Meta info -->
                    <div class="flex flex-wrap items-center gap-6 mb-8 pb-8 border-b border-gray-200">
                        <div class="flex items-center gap-3">
                            ${post.author?.image ? 
                                `<img src="${imageUrl(post.author.image, {width: 40, height: 40})}" alt="${post.author.name}" class="w-10 h-10 rounded-full object-cover">` : 
                                `<div class="w-10 h-10 bg-gold-500 rounded-full flex items-center justify-center">
                                    <i class="ri-user-line text-white"></i>
                                </div>`
                            }
                            <div>
                                <p class="font-bold text-black">${post.author?.name || 'JUNYA ISHIHARA'}</p>
                                <p class="text-sm text-gray-600">著者</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold text-black">${formatDate(post.publishedAt)}</p>
                            <p class="text-sm text-gray-600">公開日</p>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    ${post.mainImage ? `
                        <div class="mb-12">
                            <div class="aspect-video rounded-lg overflow-hidden">
                                <img src="${imageUrl(post.mainImage, {width: 1200, height: 675})}" alt="${post.mainImage.alt || post.title}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    ` : ''}

                    <!-- Article Body -->
                    <div class="prose prose-lg max-w-none prose-headings:text-black prose-headings:font-bold prose-h2:border-b-2 prose-h2:border-gold-500 prose-h2:pb-2 prose-a:text-gold-500 prose-a:no-underline hover:prose-a:underline prose-blockquote:border-l-4 prose-blockquote:border-gold-500 prose-blockquote:bg-gray-50 prose-blockquote:font-normal">
                        ${portableTextToHtml(post.body)}
                    </div>

                    <!-- Back to Blog -->
                    <div class="mt-12 pt-8 border-t border-gray-200 text-center">
                        <button onclick="backToBlog()" class="bg-gold-gradient text-white px-8 py-4 font-bold tracking-wide hover:shadow-lg transition-all duration-300 uppercase text-sm inline-block cursor-pointer">
                            <i class="ri-arrow-left-line mr-2"></i>ブログ一覧に戻る
                        </button>
                    </div>
                </div>
            </div>
        </section>
    `;
    
    // Insert after the hero section
    const heroSection = document.querySelector('section');
    heroSection.insertAdjacentHTML('afterend', postHTML);
}

// Convert Portable Text to HTML (same function as in page-blog-post.php)
function portableTextToHtml(blocks) {
    if (!blocks) return '';
    
    return blocks.map(block => {
        if (block._type === 'block') {
            const children = block.children?.map(child => {
                if (child.marks?.includes('strong')) {
                    return `<strong>${child.text}</strong>`;
                }
                if (child.marks?.includes('em')) {
                    return `<em>${child.text}</em>`;
                }
                return child.text;
            }).join('') || '';

            switch (block.style) {
                case 'h1': return `<h1>${children}</h1>`;
                case 'h2': return `<h2>${children}</h2>`;
                case 'h3': return `<h3>${children}</h3>`;
                case 'h4': return `<h4>${children}</h4>`;
                case 'blockquote': return `<blockquote>${children}</blockquote>`;
                default: return `<p>${children}</p>`;
            }
        }
        
        if (block._type === 'image') {
            const src = imageUrl(block, {width: 800, quality: 90});
            const alt = block.alt || '';
            return `<img src="${src}" alt="${alt}" class="w-full rounded-lg my-8">`;
        }
        
        return '';
    }).join('');
}

// Back to blog function
function backToBlog() {
    // Update URL
    window.history.pushState({}, '', '/blog/');
    
    // Reload the page to reset everything
    window.location.reload();
}

// Load blog when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Check if this is an individual post page first
    if (!checkIndividualPost()) {
        // Load normal blog page
        loadBlog();
    }
});
</script>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.category-filter.active {
    background-color: #F59E0B !important;
    color: white !important;
    border-color: #F59E0B !important;
}
</style>

<?php get_footer(); ?>