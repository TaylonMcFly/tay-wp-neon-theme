// Neon Core - Main JavaScript
document.addEventListener('DOMContentLoaded', () => {
    // Initialize WebGL background
    const canvas = document.getElementById('webgl-background');
    if (canvas) initWebGL(canvas);
    
    // Dark mode toggle
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', toggleDarkMode);
        applyDarkModePreference();
    }
    
    // Initialize particles
    initParticles();
});

function initWebGL(canvas) {
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
    
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    
    // Create geometric particles
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 5000;
    
    const posArray = new Float32Array(particlesCount * 3);
    for(let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 10;
    }
    
    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particlesMaterial = new THREE.PointsMaterial({
        size: 0.005,
        color: new THREE.Color(0x00ffff),
        transparent: true
    });
    
    const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(particlesMesh);
    
    camera.position.z = 2;
    
    // Animation loop
    function animate() {
        requestAnimationFrame(animate);
        
        particlesMesh.rotation.x += 0.001;
        particlesMesh.rotation.y += 0.001;
        
        renderer.render(scene, camera);
    }
    
    animate();
    
    // Handle resize
    window.addEventListener('resize', () => {
        camera.aspect = canvas.clientWidth / canvas.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    });
}

function toggleDarkMode() {
    const currentMode = document.documentElement.getAttribute('data-theme');
    const newMode = currentMode === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newMode);
    localStorage.setItem('neon_theme', newMode);
    document.cookie = `neon_dark_mode=${newMode}; path=/; max-age=31536000`;
}

function applyDarkModePreference() {
    const savedTheme = localStorage.getItem('neon_theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const theme = savedTheme || (systemPrefersDark ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', theme);
}

function initParticles() {
    const container = document.querySelector('.particles-container');
    if (!container) return;
    
    for (let i = 0; i < 100; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.animationDuration = `${Math.random() * 5 + 5}s`;
        particle.style.setProperty('--size', `${Math.random() * 4 + 1}px`);
        particle.style.opacity = Math.random() * 0.5 + 0.1;
        container.appendChild(particle);
    }
}
