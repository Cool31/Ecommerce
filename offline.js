if ('serviceWorker' in navigator) { navigator.serviceWorker.register('/service-worker.js') .then(function(registration) { console.log('Service worker started'); }).catch(function(error) { console.log('Service worker failed, error:', error); }); } 