import React from 'react';
import './CTASection.css';

const CTASection = () => {
  return (
    <section className="cta-section">
      <div className="cta-background">
        <div className="cta-gradient"></div>
      </div>

      <div className="container cta-content">
        <div className="cta-text animate-fade-in">
          <h2 className="cta-title">
            Bangun studio Pilates profesional dengan peralatan berkualitas.
          </h2>
          <p className="cta-subtitle">
            Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis
          </p>
          <div className="cta-buttons">
            <button className="btn btn-primary btn-large">
              📞 Hubungi kami sekarang
            </button>
            <button className="btn btn-secondary btn-large cta-btn-secondary">
              📩 Dapatkan katalog & harga B2B
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CTASection;
