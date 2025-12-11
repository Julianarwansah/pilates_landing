import React from 'react';
import './WhyChooseUs.css';

const WhyChooseUs = () => {
  const features = [
    {
      icon: '✅',
      title: 'Supplier Resmi',
      description: 'Supplier resmi peralatan Pilates untuk studio & gym'
    },
    {
      icon: '💰',
      title: 'Harga B2B Kompetitif',
      description: 'Harga B2B yang kompetitif untuk bisnis Anda'
    },
    {
      icon: '⭐',
      title: 'Produk Premium',
      description: 'Produk premium (Reformer, Cadillac, Chair, Barrel, dsb.)'
    },
    {
      icon: '🎓',
      title: 'Instalasi & Training',
      description: 'Instalasi & training penggunaan peralatan'
    },
    {
      icon: '🛡️',
      title: 'Garansi Resmi',
      description: 'Garansi + layanan purna jual terpercaya'
    },
    {
      icon: '🚚',
      title: 'Pengiriman Nasional',
      description: 'Pengiriman seluruh Indonesia dengan aman'
    }
  ];

  return (
    <section className="why-choose-us section">
      <div className="container">
        <div className="section-header text-center">
          <h2 className="section-title">Mengapa Bisnis Memilih Kami</h2>
          <p className="section-subtitle">
            Kami adalah mitra terpercaya untuk studio Pilates dan gym di seluruh Indonesia
          </p>
        </div>

        <div className="features-grid">
          {features.map((feature, index) => (
            <div
              key={index}
              className="feature-card card animate-fade-in"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className="feature-icon">{feature.icon}</div>
              <h3 className="feature-title">{feature.title}</h3>
              <p className="feature-description">{feature.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default WhyChooseUs;
