const staticCacheName = "pwa-worldplay";
const assets = [
  "/",
  // js
  "https://worldplay.tk/src/js/app.js",
  "https://worldplay.tk/src/js/general.js",
  "https://worldplay.tk/src/js/nav.js",
  "https://worldplay.tk/src/js/phonemenu.js",
  "https://worldplay.tk/src/js/preloader.js",
  "https://worldplay.tk/src/js/script.js",
  "https://worldplay.tk/src/js/search.js",
  "https://worldplay.tk/src/js/slider.js",
  "https://worldplay.tk/src/js/sw.js",
  // css
  "https://worldplay.tk/src/css/style.css",
  "https://worldplay.tk/src/css/preloader.css",
  // other
  "https://worldplay.tk/glitch.json",
  "https://worldplay.tk/src/files/manifest.json",
  "https://worldplay.tk/src/files/robots.txt",
  "https://worldplay.tk/src/files/sitemap.xml",
  "https://worldplay.tk/src/system/install.sh",
  "https://worldplay.tk/src/system/php.ini",
  // images
  "https://cdn.worldplay.tk/cdn/game/antwar.io.webp",
  "https://cdn.worldplay.tk/cdn/game/battledudes.io.webp",
  "https://cdn.worldplay.tk/cdn/game/bonk.io.webp",
  "https://cdn.worldplay.tk/cdn/game/brutalmania.io.webp",
  "https://cdn.worldplay.tk/cdn/game/cavegame.io.webp",
  "https://cdn.worldplay.tk/cdn/game/curvefever.io.webp"
];

self.addEventListener("install", (evt) => {
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      console.log("Кэширование ресурсов оболочки");
      cache.addAll(assets);
    })
  );
});

self.addEventListener("activate", (evt) => {
  evt.waitUntil(
    caches.keys().then((keys) => {
      return Promise.all(
        keys
          .filter((key) => key !== staticCacheName)
          .map((key) => caches.delete(key))
      );
    })
  );
});

self.addEventListener("fetch", (evt) => {
  evt.respondWith(
    caches.match(evt.request).then((cacheRes) => {
      return cacheRes || fetch(evt.request);
    })
  );
});
