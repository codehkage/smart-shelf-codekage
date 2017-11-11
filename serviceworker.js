// Setup the default cache for the service worker
var cacheName = 'v1';
var cacheFiles = [
'./',
'./welcome.html',
'./assets/css/bootstrap-3.3.7.min.css',
'./assets/css/custom.css',
'./assets/js/scripts.js',
'./assets/img/logo-1.png',
]


// Listen for when the Service Worker is installed
self.addEventListener('install', function(e) {
	console.log ("[Service Worker] Installed");

	// This makes the install event wait until this promise is resolved
	e.waitUntil (
		caches.open(cacheName).then(function(cache) {
			console.log ("[ServiceWorker] Caching cacheFiles");
			return cache.addAll(cacheFiles);
		})
		)
});

// Listen for when the Service Worker is activated
self.addEventListener('activate', function(e) {
	console.log ("[Service Worker] Activated");

	// Loop through the caches and remove any old caches
	e.waitUntil (
		caches.keys().then(function(cacheNames){
			return Promise.all(cacheNames.map(function(thisCacheName){

				if (thisCacheName !== cacheName){
					console.log("[ServiceWorker] Removing Cached Files from ", thisCacheName);
					return caches.delete(thisCacheName);
				}
			}))
		})
		)
});

// Listen for when the Service Worker is fetched
self.addEventListener('fetch', function(e) {
	console.log ("[Service Worker] Fetching: ", e.request.url);
});