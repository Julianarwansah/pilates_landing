import React from 'react';
import ReactDOM from 'react-dom/client';
// import App from './SimpleApp.jsx';
// import '../css/index.css';

console.log('Main.jsx is running - INLINE APP');

function InlineApp() {
    return <h1 style={{ color: 'red' }}>INLINE APP WORKING</h1>;
}

const rootElement = document.getElementById('root');
console.log('Root element found:', rootElement);

if (rootElement) {
    const root = ReactDOM.createRoot(rootElement);
    root.render(
        <React.StrictMode>
            <InlineApp />
        </React.StrictMode>
    );
    console.log('React render called');
} else {
    console.error('Failed to find root element');
}
