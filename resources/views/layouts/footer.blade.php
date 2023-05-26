<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a class="text-muted" href="https://www.instagram.com/prasty_08/"
                        target="_blank"><strong>Rotiku</strong></a> &copy;
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script type="text/javascript">
    $(function() {
        $(document).on('click', '#delete', async function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            const swalResult = await Swal.fire({
                title: 'Apakah kamu ingin menghapus data ini?',
                text: "Data akan terhapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            });

            if (swalResult.isConfirmed) {
                await Swal.fire(
                    'Terhapus!',
                    'Data telah terhapus!',
                    'success'
                );
                window.location.href = link;
            }
        });
    });
</script>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
</script>
@include('sweetalert::alert')

</body>

</html>
