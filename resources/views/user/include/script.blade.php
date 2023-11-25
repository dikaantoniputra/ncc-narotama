{{-- Flowbite --}}
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

{{-- Navbar Function --}}
<script>
    // Ambil elemen tombol dan menu
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    // Tambahkan event listener untuk toggle menu saat tombol ditekan
    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
</script>

{{-- Tabs Function --}}
<script>
    function showDefaultTab() {
        const defaultTabButton = document.querySelector('[data-tab="tab-1"]');
        const defaultTabContent = document.getElementById('tab-1');
        const defaultSvgElement = document.getElementById('iconTabs1');
        const defaultPaths = defaultSvgElement.querySelectorAll('path');

        defaultTabButton.classList.add('bg-blue-500', 'text-white');
        defaultTabContent.classList.remove('hidden');

        // Mengubah warna stroke untuk semua path
        defaultPaths.forEach(path => {
            path.setAttribute('stroke', '#606060'); // Ganti warna stroke menjadi default
        });
    }

    function setActiveTab(tabId) {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    // Set semua path pada semua SVG menjadi warna abu (#606060) saat tidak aktif
    const svgElements = document.querySelectorAll('.tab-button svg');
    svgElements.forEach(svg => {
        const paths = svg.querySelectorAll('path');
        paths.forEach(path => {
            path.setAttribute('stroke', '#606060');
        });
    });

    // Tentukan SVG untuk tab yang aktif dan ubah warnanya menjadi putih saat aktif
    const activeSvgElement = document.getElementById(`iconTabs${tabId.slice(-1)}`);
    const activePathElements = activeSvgElement.querySelectorAll('path');
    activePathElements.forEach(path => {
        path.setAttribute('stroke', 'white');
    });

    tabButtons.forEach(button => {
        button.classList.remove('bg-blue-500', 'text-white');
        button.classList.add('text-#606060');
    });

    tabContents.forEach(content => content.classList.add('hidden'));
  
    const activeTabButton = document.querySelector(`[data-tab="${tabId}"]`);
    activeTabButton.classList.add('bg-blue-500', 'text-white');
  
    const activeTabContent = document.getElementById(tabId);
    activeTabContent.classList.remove('hidden');
}

const tabButtons = document.querySelectorAll('.tab-button');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        const tabId = button.getAttribute('data-tab');
        setActiveTab(tabId);
    });
});

window.addEventListener('load', () => {
    showDefaultTab();
    const activeTab = document.querySelector('.tab-button.bg-blue-500');
    if (activeTab) {
        setActiveTab(activeTab.getAttribute('data-tab'));
    }
});

</script>

{{-- Input File --}}

<script>
    document.getElementById('file-upload').addEventListener('change', function() {
        const fileNameDisplay = document.getElementById('file-name-display');
        const fileInput = document.getElementById('file-upload');

        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            fileNameDisplay.textContent = `${fileName}`;
        } else {
            fileNameDisplay.textContent = 'Tidak ada file yang dipilih';
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
