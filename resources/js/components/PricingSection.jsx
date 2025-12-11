import React from 'react';
import './PricingSection.css';

const PricingSection = () => {
  const packages = [
    {
      name: 'Starter Studio',
      contents: '1 Reformer',
      discount: 'Hemat 15%',
      popular: false
    },
    {
      name: 'Standard Studio',
      contents: '2–3 Reformer + Chair',
      discount: 'Hemat 20%',
      popular: true
    },
    {
      name: 'Full Studio',
      contents: 'Reformer + Cadillac + Chair + Barrel',
      discount: 'Hemat 25%',
      popular: false
    }
  ];

  return (
    <section className="pricing-section section">
      <div className="container">
        <div className="section-header text-center">
          <h2 className="section-title">Harga B2B</h2>
          <p className="section-subtitle">
            Kami menyediakan paket pembelian untuk studio baru dengan harga khusus B2B
          </p>
        </div>

        <div className="pricing-table-wrapper">
          <table className="pricing-table">
            <thead>
              <tr>
                <th>Paket</th>
                <th>Isi</th>
                <th>Harga (Estimasi)</th>
              </tr>
            </thead>
            <tbody>
              {packages.map((pkg, index) => (
                <tr
                  key={index}
                  className={`pricing-row ${pkg.popular ? 'popular' : ''} animate-fade-in`}
                  style={{ animationDelay: `${index * 0.1}s` }}
                >
                  <td className="package-name">
                    {pkg.name}
                    {pkg.popular && <span className="popular-badge">Populer</span>}
                  </td>
                  <td className="package-contents">{pkg.contents}</td>
                  <td className="package-discount">
                    <span className="discount-badge">{pkg.discount}</span>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>

        <div className="pricing-cta text-center">
          <button className="btn btn-primary btn-large">
            👉 Ajukan penawaran untuk studio Anda
          </button>
        </div>
      </div>
    </section>
  );
};

export default PricingSection;
