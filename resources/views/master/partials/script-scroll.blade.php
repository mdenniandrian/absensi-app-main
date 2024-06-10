<script>
    function setupAutoScroll(containerId, speed) {
        const scrollContainer = document.getElementById(containerId);
        let scrollDirection = 1;

        function scrollAutomatically() {
            scrollContainer.scrollTop += speed * scrollDirection;

            // Jika mencapai batas bawah atau atas, reset posisi scroll
            if (
                scrollContainer.scrollTop >=
                scrollContainer.scrollHeight - scrollContainer.clientHeight ||
                scrollContainer.scrollTop <= 0
            ) {
                scrollContainer.scrollTop = scrollDirection > 0 ?
                    0 :
                    scrollContainer.scrollHeight - scrollContainer.clientHeight;
            }
        }

        return setInterval(scrollAutomatically, 100);
        return setInterval(scrollAutomatically, 100);

    }

    // Atur scroll otomatis untuk masing-masing tabel
    const scrollInterval1 = setupAutoScroll('scroll1', 1); // Sesuaikan dengan kebutuhan
    const scrollInterval2 = setupAutoScroll('scroll2', 1); // Sesuaikan dengan kebutuhan

    // Hentikan scroll saat halaman dimuat ulang
    window.onbeforeunload = function() {
        clearInterval(scrollInterval1);
        clearInterval(scrollInterval2);
    };
</script>
{{-- <script>
    function toggleBlink() {
        const elementsToBlink = document.querySelectorAll('.blink');
        elementsToBlink.forEach(element => {
            element.classList.toggle('blinking');
        });
    }

    setInterval(toggleBlink, 1000);
</script> --}}
