import React from 'react';
import './HeroSection.css';

const HeroSection = () => {
  return (
    <section className="hero-section">
      <div className="hero-background">
        <div className="hero-gradient"></div>
        <div className="hero-shapes">
          <div className="shape shape-1 animate-float"></div>
          <div className="shape shape-2 animate-float" style={{ animationDelay: '1s' }}></div>
          <div className="shape shape-3 animate-float" style={{ animationDelay: '2s' }}></div>
        </div>
      </div>

      <div className="container hero-content">
        <div className="hero-text animate-fade-in">
          <h1 className="hero-title">
            Supplier Alat Pilates Profesional untuk Studio & Gym
          </h1>
          <p className="hero-subtitle">
            Bangun studio Pilates yang berkualitas dengan reformer dan peralatan lengkap standar internasional.
            Tersedia harga B2B, garansi resmi, serta dukungan instalasi.
          </p>
          <div className="hero-cta">
            <button className="btn btn-primary btn-large">
              👉 Dapatkan Penawaran B2B
            </button>
            <button className="btn btn-secondary btn-large">
              👉 Konsultasi Gratis
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
