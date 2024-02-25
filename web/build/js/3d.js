// Import Three.js dan library lainnya
import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

// Buat Scene dan Kamera
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);

// Posisi Kamera
camera.position.z = 25;

// Batasi frame
const frameWidth = 3000;
const frameHeight = frameWidth / (window.innerWidth / window.innerHeight);
renderer.setSize(frameWidth, frameHeight);

// Lampu
const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);

const pointLight = new THREE.PointLight(0xffffff, 1);
pointLight.position.set(0, 100, 200);
scene.add(pointLight);

const topLight = new THREE.DirectionalLight(0xffffff, 1);
topLight.position.set(500, 500, 500);
topLight.castShadow = true;
scene.add(topLight);

// Orbit Controls
const controls = new OrbitControls(camera, renderer.domElement);

// Loader dan Model
const loader = new GLTFLoader();
loader.load(
  "build/models/dino/scene.gltf",
  (gltf) => {
    dinoObject = gltf.scene;
    scene.add(dinoObject);
  },
  (xhr) => {
    console.log((xhr.loaded / xhr.total * 100) + "% loaded");
  },
  (error) => {
    console.error(error);
  }
);

// Render dan Animasi
const renderer = new THREE.WebGLRenderer({ alpha: true });
document.getElementById("container3D").appendChild(renderer.domElement);

function animate() {
  requestAnimationFrame(animate);

  renderer.render(scene, camera);
}

animate();

// Menangani perubahan ukuran jendela
window.addEventListener("resize", function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();

  const newFrameHeight = frameWidth / (window.innerWidth / window.innerHeight);
  renderer.setSize(frameWidth, newFrameHeight);
});
