<?php
$produk_list = [
    [
        'nama' => 'HP Iphone 18 Pro Max 2 TB Burgundy',
        'kategori' => 'Smartphone',
        'harga' => 57000000,
        'diskon' => 5,
        'stok' => 6,
        'gambar' => 'https://www.apple.com/v/iphone-18-pro/a/images/overview/product-viewer/3d_viewer__hgotqf9hvvee_large.jpg'
    ],
    [
        'nama' => 'Xiaomi Gaming Monitor G24i 2026 24 Inch',
        'kategori' => 'Monitor',
        'harga' => 2200000,
        'diskon' => 10,
        'stok' => 5,
        'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/103/MTA-182505657/xiaomi_xiaomi_gaming_monitor_g24i_2026_-_fast_ips_fhd_resolution_-_faster_refresh_rate_200hz_-_1ms_gtg_response_time_-_free-sync_premium_full01_mps4ap8b.jpg'
    ],
    [
        'nama' => '16-inch MacBook Pro M5 Max',
        'kategori' => 'Laptop',
        'harga' => 86499000,
        'diskon' => 10,
        'stok' => 0, // Stok habis
        'gambar' => 'https://cdnpro.eraspace.com/media/catalog/product/a/p/apple_macbook_pro_16_inci_m5_max_2026_silver_1_.webp'
    ],
    [
        'nama' => 'Apple Pencil Pro',
        'kategori' => 'Aksesoris',
        'harga' => 2899000,
        'diskon' => 0,
        'stok' => 7,
        'gambar' => 'https://cdnpro.eraspace.com/media/catalog/product/a/p/apple_pencil_pro_1.jpg'
    ],
    [
        'nama' => 'iPad Pro M5 13 inch',
        'kategori' => 'Tablet',
        'harga' => 32999000,
        'diskon' => 5,
        'stok' => 3,
        'gambar' => 'https://ibox.co.id/_next/image?url=https%3A%2F%2Fcdnpro.eraspace.com%2Fmedia%2Fcatalog%2Fproduct%2Fa%2Fp%2Fapple_ipad_pro_13_inci_m5_wi-fi_space_black_3.webp&w=3840&q=100'
    ],
    [
        'nama' => 'AirPods Pro 3',
        'kategori' => 'Audio',
        'harga' => 4499000,
        'diskon' => 0,
        'stok' => 4,
        'gambar' => 'https://cdnpro.eraspace.com/media/catalog/product/a/p/apple_airpods_pro_3_position_1.webp'
    ],
    [
        'nama' => 'Mouse Wireless Logitech M240 Silent',
        'kategori' => 'Aksesoris',
        'harga' => 250000,
        'diskon' => 0,
        'stok' => 0, // Stok habis
        'gambar' => 'https://resource.logitech.com/w_544,h_466,ar_7:6,c_pad,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/m240/product-gallery/m240-mouse-top-view-rose.png'
    ]
];

$total_produk = count($produk_list);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store - Tech Shop</title>
    <!-- Google Fonts untuk tipografi estetik modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-main: #0b0f17;
            --bg-card: #161f2e;
            --bg-card-hover: #1c273a;
            --accent-blue: #0070f3;
            --accent-cyan: #00d8ff;
            --text-primary: #f3f4f6;
            --text-secondary: #9ca3af;
            --badge-green: #10b981;
            --badge-red: #ef4444;
            --border-color: #233146;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Header */
        header {
            background-color: rgba(22, 31, 46, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1.2rem 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, #ffffff, var(--accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        nav a {
            color: var(--text-secondary);
            text-decoration: none;
            margin-left: 2rem;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        nav a:hover, nav a.active {
            color: var(--accent-cyan);
        }

        /* Hero Section */
        .hero {
            padding: 4rem 8% 3rem;
            text-align: center;
            background: radial-gradient(circle at top center, rgba(0, 112, 243, 0.15) 0%, transparent 70%);
        }

        .hero-tag {
            display: inline-block;
            background: rgba(0, 216, 255, 0.1);
            color: var(--accent-cyan);
            border: 1px solid rgba(0, 216, 255, 0.2);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            background: linear-gradient(180deg, #ffffff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        /* Main Container */
        .container {
            width: 84%;
            max-width: 1300px;
            margin: 0 auto 4rem;
            flex: 1;
        }

        /* Section Title & Total counter */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .section-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .total-badge {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            padding: 0.6rem 1.2rem;
            border-radius: 10px;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .total-badge strong {
            color: var(--accent-cyan);
            font-weight: 700;
        }

        /* Grid System CSS */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        /* Product Card */
        .card {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: rgba(0, 216, 255, 0.4);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
            background-color: var(--bg-card-hover);
        }

        .card-img-wrapper {
            width: 100%;
            height: 200px;
            position: relative;
            overflow: hidden;
            background-color: #0d131d;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .badge-diskon {
            position: absolute;
            top: 12px;
            left: 12px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: #fff;
            padding: 0.35rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 700;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }

        .card-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .category {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--accent-cyan);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.4;
            color: var(--text-primary);
        }

        .price-container {
            margin-top: auto;
            margin-bottom: 1rem;
        }

        .price-original {
            text-decoration: line-through;
            color: var(--text-secondary);
            font-size: 0.85rem;
            margin-bottom: 0.2rem;
        }

        .price-final {
            font-size: 1.25rem;
            font-weight: 800;
            color: #ffffff;
        }

        .stock-status {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            margin-bottom: 1.2rem;
            font-weight: 600;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
        }

        .status-available {
            color: var(--badge-green);
        }
        .status-available .dot {
            background-color: var(--badge-green);
            box-shadow: 0 0 8px var(--badge-green);
        }

        .status-empty {
            color: var(--badge-red);
        }
        .status-empty .dot {
            background-color: var(--badge-red);
            box-shadow: 0 0 8px var(--badge-red);
        }

        /* Button Purchase */
        .btn-buy {
            width: 100%;
            padding: 0.85rem;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, var(--accent-blue), #0051ba);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 112, 243, 0.3);
        }

        .btn-buy:hover:not(:disabled) {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 112, 243, 0.4);
        }

        .btn-buy:disabled {
            background: #233146;
            color: #64748b;
            cursor: not-allowed;
            box-shadow: none;
        }

        /* Footer */
        footer {
            background-color: #080b11;
            border-top: 1px solid var(--border-color);
            padding: 2rem;
            text-align: center;
            color: var(--text-secondary);
            font-size: 0.85rem;
        }

        /* Responsif Layout */
        @media (max-width: 768px) {
            header {
                padding: 1rem 5%;
            }
            .hero h1 {
                font-size: 2.2rem;
            }
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="logo">CIA STORE</div>
        <nav>
            <a href="#" class="active">Katalog</a>
            <a href="#">Tentang Kami</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <span class="hero-tag">Tech & Electronics</span>
        <h1>Simple Tech Store.</h1>
        <p>Temukan berbagai perangkat dan aksesoris teknologi terbaik dengan penawaran eksklusif.</p>
    </section>

    <!-- Main Container -->
    <main class="container">
        
        <!-- Bar Informasi Produk -->
        <div class="section-header">
            <h2>Katalog Produk</h2>
            <div class="total-badge">
                Total Produk: <strong><?= $total_produk; ?></strong>
            </div>
        </div>

        <!-- Grid Katalog Produk -->
        <div class="product-grid">
            <?php foreach ($produk_list as $produk): ?>
                <?php 
                    // Logika Diskon
                    $has_diskon = isset($produk['diskon']) && $produk['diskon'] > 0;
                    if ($has_diskon) {
                        $potongan = $produk['harga'] * ($produk['diskon'] / 100);
                        $harga_akhir = $produk['harga'] - $potongan;
                    } else {
                        $harga_akhir = $produk['harga'];
                    }

                    // Logika Status Stok (If-Else)
                    $is_available = $produk['stok'] > 0;
                ?>

                <div class="card">
                    <div class="card-img-wrapper">
                        <?php if ($has_diskon): ?>
                            <span class="badge-diskon">DISKON <?= $produk['diskon']; ?>%</span>
                        <?php endif; ?>
                        <img src="<?= $produk['gambar']; ?>" alt="<?= $produk['nama']; ?>">
                    </div>
                    
                    <div class="card-content">
                        <span class="category"><?= $produk['kategori']; ?></span>
                        <h3 class="card-title"><?= $produk['nama']; ?></h3>

                        <div class="price-container">
                            <?php if ($has_diskon): ?>
                                <div class="price-original">Rp<?= number_format($produk['harga'], 2, ',', '.'); ?></div>
                            <?php endif; ?>
                            <div class="price-final">Rp<?= number_format($harga_akhir, 2, ',', '.'); ?></div>
                        </div>

                        <div class="stock-status">
                            <?php if ($is_available): ?>
                                <div class="status-available">
                                    <span class="dot"></span> Tersedia (Stok: <?= $produk['stok']; ?>)
                                </div>
                            <?php else: ?>
                                <div class="status-empty">
                                    <span class="dot"></span> Stok Habis
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Tombol Beli / Nonaktif -->
                        <?php if ($is_available): ?>
                            <button class="btn-buy">Beli Sekarang</button>
                        <?php else: ?>
                            <button class="btn-buy" disabled>Stok Habis</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date('Y'); ?> Cia Store. All rights reserved.</p>
    </footer>

</body>
</html>