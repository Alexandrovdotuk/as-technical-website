const CACHE_NAME = 'crm-cache-v6'; // Erhöht von v5 zu v6
const urlsToCache = [
  '/CRM/assets/logo.png',
  '/CRM/assets/logo-192x192.png',
  '/CRM/assets/logo-512x512.png',
  '/CRM/offline.html',
  '/CRM/assets/js/simplewebauthn.min.js',
  '/assets/css/tailwind.css' // Neu hinzugefügt
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(urlsToCache);
    })
  );
  self.skipWaiting();
});

self.addEventListener('fetch', event => {
  const url = new URL(event.request.url);

  if (
    url.pathname.endsWith('.php') ||
    url.pathname.includes('/CRM/login.php') ||
    url.pathname.includes('/CRM/webauthn_')
  ) {
    event.respondWith(fetch(event.request));
    return;
  }

  event.respondWith(
    caches.match(event.request).then(cachedResponse => {
      if (cachedResponse && !cachedResponse.redirected) {
        return cachedResponse;
      }
      return fetch(event.request).then(networkResponse => {
        if (networkResponse.redirected) {
          return networkResponse;
        }
        if (url.pathname.match(/\.(png|jpg|jpeg|gif|css|js|html)$/)) {
          return caches.open(CACHE_NAME).then(cache => {
            cache.put(event.request, networkResponse.clone());
            return networkResponse;
          });
        }
        return networkResponse;
      }).catch(() => {
        return caches.match('/CRM/offline.html');
      });
    })
  );
});

self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
  self.clients.claim();
});
