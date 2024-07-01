import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import EmotionTracker from './components/EmotionTracker';

ReactDOM.createRoot(document.getElementById('app')).render(
  <React.StrictMode>
    <EmotionTracker />
  </React.StrictMode>
);