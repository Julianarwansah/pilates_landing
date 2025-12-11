import React from 'react';
import './Testimonials.css';

const Testimonials = () => {
  const testimonials = [
    {
      quote: 'Kualitas reformernya sangat bagus. Instalasi rapi dan supportnya cepat.',
      author: 'Studio Pilates Jakarta',
      role: 'Owner'
    },
    {
      quote: 'Harga B2B membuat kami lebih hemat biaya untuk membuka cabang baru.',
      author: 'Gym & Wellness Center',
      role: 'Manager'
    }
  ];

  return (
    <section className="testimonials section">
      <div className="container">
        <div className="section-header text-center">
          <h2 className="section-title">Apa Kata Klien Kami</h2>
          <p className="section-subtitle">
            Dipercaya oleh studio Pilates dan gym terkemuka di Indonesia
          </p>
        </div>

        <div className="testimonials-grid">
          {testimonials.map((testimonial, index) => (
            <div
              key={index}
              className="testimonial-card card animate-fade-in"
              style={{ animationDelay: `${index * 0.2}s` }}
            >
              <div className="quote-icon">❝</div>
              <p className="testimonial-quote">{testimonial.quote}</p>
              <div className="testimonial-author">
                <div className="author-info">
                  <h4 className="author-name">{testimonial.author}</h4>
                  <p className="author-role">{testimonial.role}</p>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
