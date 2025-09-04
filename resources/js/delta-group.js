import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// leaflet
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

// Daftarkan plugin ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// ========================
// Carousel
// ========================
const slides = document.querySelectorAll('.carousel img');
let index = 0;

function showSlide(i) {
  const prevIndex = index;
  index = (i + slides.length) % slides.length;

  gsap.to(slides[prevIndex], { duration: 0.5, opacity: 0 });
  gsap.to(slides[index], { duration: 0.5, opacity: 1 });
}

gsap.set(slides[0], { opacity: 1 });

document.getElementById('prev').addEventListener('click', () => showSlide(index - 1));
document.getElementById('next').addEventListener('click', () => showSlide(index + 1));

setInterval(() => showSlide(index + 1), 5000);

// ========================
// Animasi Scroll Section About
// ========================
gsap.from("#about h2", {
  scrollTrigger: {
    trigger: "#about",
    start: "top 80%", // mulai animasi saat 80% viewport
    toggleActions: "play reverse play reverse" // masuk & keluar
  },
  y: 50,
  opacity: 0,
  duration: 1,
  ease: "power2.out"
});

gsap.from("#about p:first-of-type", {
  scrollTrigger: {
    trigger: "#about",
    start: "top 75%",
    toggleActions: "play reverse play reverse"
  },
  y: 30,
  opacity: 0,
  delay: 0.2,
  duration: 1,
  ease: "power2.out"
});

gsap.from("#about img", {
  scrollTrigger: {
    trigger: "#about",
    start: "top 70%",
    toggleActions: "play reverse play reverse"
  },
  x: -100,
  opacity: 0,
  duration: 1,
  ease: "power2.out"
});

gsap.from("#about .md\\:w-1\\/2:last-child", {
  scrollTrigger: {
    trigger: "#about",
    start: "top 70%",
    toggleActions: "play reverse play reverse"
  },
  x: 100,
  opacity: 0,
  duration: 1,
  ease: "power2.out"
});

// ==========
// LEAFLET
// ==========
// Fix icon path (kalau tidak, marker default nggak muncul di Laravel)
import iconUrl from '/public/storage/img/marker.png';
// import iconRetinaUrl from 'leaflet/dist/images/marker-icon-2x.png';
import shadowUrl from 'leaflet/dist/images/marker-shadow.png';
// L.Icon.Default.mergeOptions({
//     iconUrl,
//     iconRetinaUrl,
//     shadowUrl
// });

const defaultIcon = new L.Icon({
    iconUrl,
    // iconRetinaUrl,
    shadowUrl,
    iconSize: [17, 20],
    iconAnchor: [9, 20],
    popupAnchor: [0, -20],
    shadowSize: [25, 21],
});

// Inisialisasi peta
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('map');
    if (mapContainer) {
        const map = L.map('map', {
            center: [-2.5489, 118.0149],
            zoom: 5,
            dragging: false,
            zoomControl: false,
            scrollWheelZoom: false,
            doubleClickZoom: false
        });

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; OpenStreetMap contributors',
        //     maxZoom: 8
        // }).addTo(map);
        // L.tileLayer('https://cartodb-basemaps-a.global.ssl.fastly.net/light_nolabels/{z}/{x}/{y}{r}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
        //     subdomains: 'abcd',
        //     maxZoom: 8
        // }).addTo(map);
        // L.tileLayer('https://stamen-tiles.a.ssl.fastly.net/toner/{z}/{x}/{y}.png', {
        //     attribution: 'Map tiles by <a href="https://stamen.com/">Stamen Design</a>, <a href="https://www.openstreetmap.org/">OSM</a>'
        // }).addTo(map);
        // L.tileLayer('https://stamen-tiles.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg', {
        //     attribution: 'Map tiles by <a href="https://stamen.com/">Stamen Design</a>, <a href="https://www.openstreetmap.org/">OSM</a>',
        //     maxZoom: 8
        // }).addTo(map);
        L.tileLayer('https://basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        const pelabuhan = [
          { name: "Samarinda, Kalimantan Timur", coords: [-0.5022, 117.1536] },
          { name: "Bengalon, Kalimantan Timur", coords: [0.7883, 117.6000] },
          { name: "Balikpapan, Kalimantan Timur", coords: [-1.2675, 116.8289] },
          { name: "Asam-Asam, Kalimantan Selatan", coords: [-3.9169, 114.6339] },
          { name: "Padang, Sumatra Barat", coords: [-0.9760, 100.3706] },
          { name: "Kolaka, Sulawesi Tenggara", coords: [-4.0644, 121.5932] },
          { name: "Pelabuhan Tanjung Priok, Jakarta", coords: [-6.1047, 106.8850] },
          { name: "Pelabuhan Tanjung Perak, Surabaya", coords: [-7.2060, 112.7366] },
        ];

        pelabuhan.forEach(p => {
          L.marker(p.coords, { icon: defaultIcon })
            .addTo(map)
            .bindPopup(p.name);
        });
        }
        
});