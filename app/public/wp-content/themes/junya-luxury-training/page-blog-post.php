<?php
/**
 * Template Name: Sanity Blog Post
 * Template for displaying individual Sanity blog posts
 */

get_header(); ?>

<div id="blog-post-content" class="mt-20">
    <!-- Loading State -->
    <div id="post-loading" class="py-32 text-center">
        <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-gold-500"></div>
        <p class="mt-4 text-gray-600">記事を読み込み中...</p>
    </div>

    <!-- Post Not Found -->
    <div id="post-not-found" class="hidden py-32 text-center">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl font-black text-black mb-6">記事が見つかりません</h1>
                <p class="text-xl text-gray-600 mb-8">指定された記事は存在しないか、削除された可能性があります。</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/blog/'); ?>" class="btn-luxury text-lg px-8 py-4">
                        <i class="ri-arrow-left-line mr-2"></i>ブログ一覧に戻る
                    </a>
                    <a href="<?php echo home_url('/'); ?>" class="btn-luxury-outline text-lg px-8 py-4">
                        <i class="ri-home-line mr-2"></i>ホームに戻る
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <div id="post-content" class="hidden">
        <!-- Breadcrumb -->
        <section class="py-6 bg-gray-50 border-b border-gray-200">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <nav class="flex items-center space-x-2 text-sm text-gray-600">
                        <a href="<?php echo home_url('/'); ?>" class="hover:text-gold-500 transition-colors">
                            ホーム
                        </a>
                        <span>/</span>
                        <a href="<?php echo home_url('/blog/'); ?>" class="hover:text-gold-500 transition-colors">
                            ブログ
                        </a>
                        <span>/</span>
                        <span class="text-gray-900" id="breadcrumb-title">記事タイトル</span>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Article Header -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <!-- Categories -->
                    <div id="post-categories" class="mb-6">
                        <!-- Categories will be inserted here -->
                    </div>

                    <!-- Title -->
                    <h1 id="post-title" class="text-4xl md:text-5xl font-black text-black leading-tight mb-6">
                        記事タイトル
                    </h1>

                    <!-- Excerpt -->
                    <p id="post-excerpt" class="text-xl text-gray-600 leading-relaxed mb-8 hidden">
                        記事の抜粋
                    </p>

                    <!-- Meta info -->
                    <div class="flex flex-wrap items-center gap-6 mb-8 pb-8 border-b border-gray-200">
                        <div id="post-author" class="flex items-center gap-3">
                            <!-- Author info will be inserted here -->
                        </div>

                        <div id="post-dates">
                            <!-- Date info will be inserted here -->
                        </div>

                        <div id="post-views" class="hidden">
                            <!-- Views count will be inserted here -->
                        </div>
                    </div>

                    <!-- Share buttons -->
                    <div class="flex items-center gap-4 mb-8">
                        <span class="text-gray-600 font-medium">シェア:</span>
                        <a href="#" id="twitter-share" class="flex items-center gap-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300">
                            <i class="ri-twitter-line"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="#" id="facebook-share" class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="ri-facebook-line"></i>
                            <span>Facebook</span>
                        </a>
                        <button id="copy-link" class="flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors duration-300">
                            <i class="ri-link"></i>
                            <span>リンクをコピー</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Image -->
        <section id="post-image" class="hidden mb-16">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto">
                    <div class="aspect-video rounded-xl overflow-hidden shadow-2xl">
                        <img id="featured-image" src="" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Article Body -->
        <section class="pb-20">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto">
                    <div id="post-body" class="max-w-none">
                        <!-- Article content will be inserted here -->
                    </div>
                    
                    <!-- Back to Blog Button -->
                    <div class="mt-16 pt-8 border-t border-gray-200 text-center">
                        <a href="<?php echo home_url('/blog/'); ?>" class="inline-flex items-center bg-gold-gradient text-white px-8 py-4 font-bold tracking-wide hover:shadow-xl transition-all duration-300 uppercase text-sm rounded-lg">
                            <i class="ri-arrow-left-line mr-2"></i>ブログ一覧に戻る
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tags -->
        <section id="post-tags" class="hidden py-8 border-t border-gray-200">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-lg font-bold text-black mb-4">タグ</h3>
                    <div id="tags-container" class="flex flex-wrap gap-2">
                        <!-- Tags will be inserted here -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Author Info -->
        <section id="author-section" class="py-12 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-lg p-8 shadow-sm">
                        <div id="author-info" class="flex items-start gap-6">
                            <!-- Author details will be inserted here -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Posts -->
        <section id="related-posts" class="hidden py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16">
                        <p class="text-gold-500 font-bold tracking-widest uppercase mb-2">RELATED POSTS</p>
                        <h2 class="text-4xl font-black text-black mb-4">関連記事</h2>
                        <p class="text-xl text-gray-600">こちらの記事もおすすめです</p>
                    </div>
                    
                    <div id="related-posts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Related posts will be inserted here -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
// Get slug from URL
function getSlugFromUrl() {
    const urlParts = window.location.pathname.split('/');
    return urlParts[urlParts.length - 1] || urlParts[urlParts.length - 2];
}

// Sanity configuration (same as blog page)
const SANITY_CONFIG = {
    projectId: '8gquylv3',
    dataset: 'production',
    apiVersion: '2024-01-01',
    useCdn: false
};

class SanityClient {
    constructor(config) {
        this.config = config;
        this.baseUrl = `https://${config.projectId}.${config.useCdn ? 'apicdn' : 'api'}.sanity.io/v${config.apiVersion}/data/query/${config.dataset}`;
    }

    async fetch(query, params = {}) {
        const url = new URL(this.baseUrl);
        url.searchParams.set('query', query);
        
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

const sanityClient = new SanityClient(SANITY_CONFIG);

// Utility functions
function imageUrl(image, params = {}) {
    if (!image?.asset?._ref) return '';
    
    const ref = image.asset._ref;
    const [, id, dimensions, format] = ref.split('-');
    
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

// Convert Portable Text to HTML
function portableTextToHtml(blocks) {
    if (!blocks) return '';
    
    // Group consecutive list items
    const processedBlocks = [];
    let currentList = null;
    
    blocks.forEach((block, index) => {
        if (block._type === 'block' && block.listItem) {
            // This is a list item
            if (!currentList || currentList.listItem !== block.listItem) {
                // Start a new list
                currentList = {
                    _type: 'list',
                    listItem: block.listItem,
                    children: []
                };
                processedBlocks.push(currentList);
            }
            currentList.children.push(block);
        } else {
            // Not a list item, close current list and add block
            currentList = null;
            processedBlocks.push(block);
        }
    });
    
    return processedBlocks.map(block => {
        if (block._type === 'block') {
            const children = block.children?.map(child => {
                let text = child.text || '';
                
                // Apply marks in the correct order
                if (child.marks && child.marks.length > 0) {
                    child.marks.forEach(mark => {
                        switch (mark) {
                            case 'strong':
                                text = `<strong>${text}</strong>`;
                                break;
                            case 'em':
                                text = `<em>${text}</em>`;
                                break;
                            case 'underline':
                                text = `<u>${text}</u>`;
                                break;
                            case 'code':
                                text = `<code class="bg-gray-100 px-2 py-1 rounded text-sm">${text}</code>`;
                                break;
                        }
                    });
                }
                
                return text;
            }).join('') || '';

            // Handle different block styles
            switch (block.style || 'normal') {
                case 'h1': 
                    return `<h1 class="text-4xl font-black text-black mb-8 mt-12 leading-tight">${children}</h1>`;
                case 'h2': 
                    return `<h2 class="text-3xl font-bold text-black mb-6 mt-10 border-b-2 border-gold-500 pb-2">${children}</h2>`;
                case 'h3': 
                    return `<h3 class="text-2xl font-bold text-black mb-4 mt-8">${children}</h3>`;
                case 'h4': 
                    return `<h4 class="text-xl font-bold text-black mb-3 mt-6">${children}</h4>`;
                case 'h5': 
                    return `<h5 class="text-lg font-bold text-black mb-3 mt-6">${children}</h5>`;
                case 'h6': 
                    return `<h6 class="text-base font-bold text-black mb-2 mt-4">${children}</h6>`;
                case 'blockquote': 
                    return `<blockquote class="border-l-4 border-gold-500 bg-gray-50 py-4 px-6 my-8 italic text-lg">${children}</blockquote>`;
                case 'normal':
                default: 
                    // Don't render empty paragraphs
                    if (!children.trim()) return '';
                    return `<p class="text-gray-700 leading-relaxed mb-6">${children}</p>`;
            }
        }
        
        if (block._type === 'image') {
            const src = imageUrl(block, {width: 600, height: 400, quality: 85});
            const alt = block.alt || '';
            const caption = block.caption ? `<figcaption class="text-sm text-gray-600 text-center mt-2 italic">${block.caption}</figcaption>` : '';
            
            return `<figure class="my-8">
                <img src="${src}" alt="${alt}" class="w-full max-w-lg mx-auto rounded-lg shadow-lg block">
                ${caption}
            </figure>`;
        }
        
        // Handle grouped lists
        if (block._type === 'list') {
            const items = block.children.map(item => {
                const itemChildren = item.children?.map(child => {
                    let text = child.text || '';
                    
                    // Apply marks
                    if (child.marks && child.marks.length > 0) {
                        child.marks.forEach(mark => {
                            switch (mark) {
                                case 'strong':
                                    text = `<strong>${text}</strong>`;
                                    break;
                                case 'em':
                                    text = `<em>${text}</em>`;
                                    break;
                                case 'underline':
                                    text = `<u>${text}</u>`;
                                    break;
                                case 'code':
                                    text = `<code class="bg-gray-100 px-2 py-1 rounded text-sm">${text}</code>`;
                                    break;
                            }
                        });
                    }
                    
                    return text;
                }).join('') || '';
                
                return `<li class="mb-2 text-gray-700 leading-relaxed">${itemChildren}</li>`;
            }).join('');
            
            if (block.listItem === 'bullet') {
                return `<ul class="list-disc list-outside my-6 pl-6 space-y-2">${items}</ul>`;
            } else if (block.listItem === 'number') {
                return `<ol class="list-decimal list-outside my-6 pl-6 space-y-2">${items}</ol>`;
            }
        }
        
        return '';
    }).filter(html => html.trim() !== '').join('');
}

// Load individual post
async function loadPost() {
    const slug = getSlugFromUrl();
    
    if (!slug) {
        showNotFound();
        return;
    }

    try {
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
            showNotFound();
            return;
        }

        renderPost(post);
        
        // Load related posts
        loadRelatedPosts(post._id, post.categories);

    } catch (error) {
        console.error('Post loading error:', error);
        showNotFound();
    }
}

function showNotFound() {
    document.getElementById('post-loading').classList.add('hidden');
    document.getElementById('post-not-found').classList.remove('hidden');
}

function renderPost(post) {
    // Hide loading
    document.getElementById('post-loading').classList.add('hidden');
    document.getElementById('post-content').classList.remove('hidden');

    // Update document title
    document.title = `${post.title} | JUNYA ISHIHARA PERSONAL TRAINING`;

    // Breadcrumb
    document.getElementById('breadcrumb-title').textContent = post.title;

    // Categories
    if (post.categories && post.categories.length > 0) {
        const categoriesHtml = post.categories.map(category => 
            `<span class="inline-block px-3 py-1 rounded-full text-sm font-medium" style="background-color:${category.color || '#F59E0B'};color:white">
                ${category.title}
            </span>`
        ).join(' ');
        document.getElementById('post-categories').innerHTML = categoriesHtml;
    }

    // Title
    document.getElementById('post-title').textContent = post.title;

    // Excerpt
    if (post.excerpt) {
        document.getElementById('post-excerpt').textContent = post.excerpt;
        document.getElementById('post-excerpt').classList.remove('hidden');
    }

    // Author
    const authorImage = post.author?.image ? 
        `<img src="${imageUrl(post.author.image, {width: 80, height: 80})}" 
             alt="${post.author.name}" 
             class="w-20 h-20 rounded-full object-cover">` : 
        `<div class="w-20 h-20 bg-gold-500 rounded-full flex items-center justify-center">
            <i class="ri-user-line text-white text-2xl"></i>
        </div>`;

    document.getElementById('post-author').innerHTML = `
        ${authorImage}
        <div>
            <p class="font-bold text-black">${post.author?.name || 'JUNYA ISHIHARA'}</p>
            <p class="text-sm text-gray-600">著者</p>
        </div>
    `;

    // Dates
    const publishedDate = formatDate(post.publishedAt);
    const updatedDate = formatDate(post._updatedAt);
    let datesHtml = `
        <div>
            <p class="font-bold text-black">${publishedDate}</p>
            <p class="text-sm text-gray-600">公開日</p>
        </div>
    `;
    
    if (post._updatedAt !== post.publishedAt) {
        datesHtml += `
            <div>
                <p class="font-bold text-black">${updatedDate}</p>
                <p class="text-sm text-gray-600">更新日</p>
            </div>
        `;
    }
    document.getElementById('post-dates').innerHTML = datesHtml;

    // Views
    if (post.views && post.views > 0) {
        document.getElementById('post-views').innerHTML = `
            <div>
                <p class="font-bold text-black">${post.views.toLocaleString()}</p>
                <p class="text-sm text-gray-600">読了数</p>
            </div>
        `;
        document.getElementById('post-views').classList.remove('hidden');
    }

    // Featured image
    if (post.mainImage) {
        document.getElementById('featured-image').src = imageUrl(post.mainImage, {width: 1200, height: 675});
        document.getElementById('featured-image').alt = post.mainImage.alt || post.title;
        document.getElementById('post-image').classList.remove('hidden');
    }

    // Body content
    document.getElementById('post-body').innerHTML = portableTextToHtml(post.body);

    // Tags
    if (post.tags && post.tags.length > 0) {
        const tagsHtml = post.tags.map(tag => 
            `<a href="<?php echo home_url('/blog/'); ?>?search=${encodeURIComponent(tag)}" 
               class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gold-500 hover:text-white transition-colors duration-300">
                #${tag}
            </a>`
        ).join('');
        document.getElementById('tags-container').innerHTML = tagsHtml;
        document.getElementById('post-tags').classList.remove('hidden');
    }

    // Author info
    const authorQualifications = post.author?.qualification ? 
        `<div class="mb-3">
            <p class="text-sm text-gray-600 mb-1">保有資格</p>
            <div class="flex flex-wrap gap-2">
                ${post.author.qualification.map(qual => 
                    `<span class="px-2 py-1 bg-gold-500/10 text-gold-500 text-xs rounded">${qual}</span>`
                ).join('')}
            </div>
        </div>` : '';

    const authorBio = post.author?.bio || 'プロフェッショナルパーソナルトレーナー';

    document.getElementById('author-info').innerHTML = `
        ${authorImage}
        <div class="flex-1">
            <h3 class="text-2xl font-bold text-black mb-2">${post.author?.name || 'JUNYA ISHIHARA'}</h3>
            ${authorQualifications}
            <p class="text-gray-600 leading-relaxed">${authorBio}</p>
        </div>
    `;

    // Setup share buttons
    setupShareButtons(post);
}

function setupShareButtons(post) {
    const url = window.location.href;
    const title = post.title;

    document.getElementById('twitter-share').href = `https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`;
    document.getElementById('facebook-share').href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
    
    document.getElementById('copy-link').addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(url);
            alert('リンクをコピーしました！');
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
    });
}

async function loadRelatedPosts(currentPostId, categories) {
    if (!categories || categories.length === 0) return;

    try {
        const categoryIds = categories.map(cat => cat._id);
        const query = `*[_type == "post" && isPublished == true && _id != $currentPostId && count(categories[]._ref[@ in $categoryIds]) > 0] | order(publishedAt desc) [0...3] {
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
            publishedAt
        }`;

        const relatedPosts = await sanityClient.fetch(query, { 
            currentPostId, 
            categoryIds 
        });

        if (relatedPosts && relatedPosts.length > 0) {
            const relatedHtml = relatedPosts.map(post => {
                const categoryBadges = post.categories?.map(category => 
                    `<span class="inline-block px-2 py-1 text-xs rounded-full" style="background-color:${category.color || '#F59E0B'};color:white">
                        ${category.title}
                    </span>`
                ).join(' ') || '';

                const imageHtml = post.mainImage ? 
                    `<div class="aspect-video relative overflow-hidden">
                        <img src="${imageUrl(post.mainImage, {width: 400, height: 250, quality: 90})}" 
                             alt="${post.mainImage.alt || post.title}" 
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>` : '';

                return `
                    <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                        <a href="<?php echo home_url('/blog/'); ?>${post.slug.current}/">
                            ${imageHtml}
                            <div class="p-6">
                                ${categoryBadges ? `<div class="mb-3">${categoryBadges}</div>` : ''}
                                <h3 class="text-xl font-bold text-black mb-3 line-clamp-2">${post.title}</h3>
                                ${post.excerpt ? `<p class="text-gray-600 line-clamp-3">${post.excerpt}</p>` : ''}
                                <div class="mt-4 text-sm text-gray-500">
                                    <time>${formatDate(post.publishedAt)}</time>
                                </div>
                            </div>
                        </a>
                    </article>
                `;
            }).join('');

            document.getElementById('related-posts-container').innerHTML = relatedHtml;
            document.getElementById('related-posts').classList.remove('hidden');
        }
    } catch (error) {
        console.error('Related posts loading error:', error);
    }
}

// Load post when page loads
document.addEventListener('DOMContentLoaded', loadPost);
</script>

<?php get_footer(); ?>