import React from 'react';
import './FeaturedProducts.css';

const FeaturedProducts = () => {
  const products = [
    {
      name: 'Pilates Reformer',
      image: '/images/reformer.png',
      features: [
        'Frame kuat dan stabil',
        'Smooth carriage movement',
        'Cocok untuk kelas privat & grup',
        'Pilihan: Aluminium / Wooden Reformer'
      ],
      cta: 'Minta katalog lengkap'
    },
    {
      name: 'Cadillac & Tower Unit',
      image: '/images/cadillac.png',
      features: [
        'Peralatan utama untuk program full-body',
        'Cocok untuk studio Pilates profesional',
        'Diskon B2B tersedia'
      ],
      cta: 'Lihat Penawaran'
    },
    {
      name: 'Wunda Chair & Ladder Barrel',
      image: '/images/chair.png',
      features: [
        'Material premium',
        'Tanpa perawatan rumit',
        'Ideal untuk variasi kelas lanjutan'
      ],
      cta: 'Hubungi Kami'
    }
  ];

  return (
    <section className="featured-products section">
      <div className="container">
        <div className="section-header text-center">
          <h2 className="section-title text-gradient">Produk Unggulan</h2>
          <p className="section-subtitle">
            Peralatan Pilates berkualitas tinggi untuk studio profesional Anda
          </p>
        </div>

        <div className="products-grid">
          {products.map((product, index) => (
            <div
              key={index}
              className="product-card card-glass animate-fade-in"
              style={{ animationDelay: `${index * 0.15}s` }}
            >
              <div className="product-image">
                <img src={product.image} alt={product.name} />
              </div>
              <div className="product-content">
                <h3 className="product-name">{product.name}</h3>
                <ul className="product-features">
                  {product.features.map((feature, idx) => (
                    <li key={idx}>✓ {feature}</li>
                  ))}
                </ul>
                <button className="btn btn-primary product-cta">
                  👉 {product.cta}
                </button>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FeaturedProducts;
