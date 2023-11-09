// const jquery = require("./jquery");

//     let currentPage = 1;
//     console.log('aaa')
//     Jquery('#load-more').on('click', function () {
//             currentPage++; // Do currentPage + 1, because we want to load the next page
//             console.log(this.dataset.perpage)
//         $.ajax({
//             type: 'POST',
//             url: '/wp-admin/admin-ajax.php',
//             dataType: 'html',
//             data: {
//                 action: 'weichie_load_more',
//                 paged: currentPage,
//             },
//             success: function (res) {
//                 $('.publication-list').append(res);
//             }
//         });
//     });