let currentPage = 1;
$('#load-more').on('click', function () {
    currentPage++;
    $.ajax({
        type: 'POST',
        url: 'https://localhost/wordpress/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
            action: 'loadMoreCategory',
            slug: this.dataset.slug,
            posts_per_page: this.dataset.perpage,
            paged: currentPage
        },
        success: function (res) {
            var prasel = JSON.parse(res);
            $('.content-container').append(prasel.html);
        }
    });
});