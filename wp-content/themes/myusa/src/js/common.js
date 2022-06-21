window.addEventListener('DOMContentLoaded', function (event) {
    jQuery(document).ready(function ($) {
        console.log('js/common.js');

        let checkboxDetailsOpener = $('.checkbox-details-opener'),
            checkboxDetails = $('.checkbox-details');
        checkboxDetailsOpener.on('click', function () {
            /* todo: если включить анимации (hide/slideUp, show/slideDown), то можно увидеть,
                что события отрабатывают по два раза. возможно, стоит разобраться */
            let needToOpen = $(this).closest('.checkbox-details-opener-container').find('.checkbox-details');
            $(checkboxDetails).not(needToOpen).slideUp();
            needToOpen.slideDown();
        });

        // map on homepage
        $('.homepage .state__map .line path, .homepage .state__map .line text, .homepage .state__map .line circle, .homepage .state__map .line line').on('click', function () {
            let id = $(this).parent().find(':first-child').attr('id').toLowerCase();
            if (id in window.statesJson) {
                location.href = window.statesJson[id].permalink;
            }
        });

        if ($('.page-blog__inputs').length) {
            fillArchiveDates();

            $('#page-blog__inputs-frm').on('submit', function (e) {
                e.preventDefault();
                filterBlogPosts();
            });

            $('#archivesSelect').on('change', function () {
                filterBlogPosts();
            });

            $('#categoriesSelect').on('change', function () {
                filterBlogPosts();
            });
        }

        function fillArchiveDates() {
            $.ajax({
                type: "POST",
                url: "/wp-json/blog_filter/get_dates/",
                error: function () {
                    console.log('error');
                },
                success: function (result) {
                    //console.log(result);
                    let options = [
                        '<option value="0" selected>Archives</option>'
                    ];

                    for (const [key, value] of Object.entries(result)) {
                        options.push('<option value="' + value + '" selected>' + key + '</option>');
                    }
                    ;

                    //console.log(options);
                    $('#archivesSelect').html(options);
                    $('#archivesSelect').val(0);
                }
            });
        }

        function filterBlogPosts() {
            let srchStr = $('#blogSearch').val();
            let date = $('#archivesSelect').val();
            let category = $('#categoriesSelect').val();

            //console.log('srch: ' + srchStr + ' | date: ' + date + ' | cat: ' + category);

            $.ajax({
                type: "POST",
                url: "/wp-json/blog_filter/filter/",
                data: {
                    "srch": srchStr,
                    "date": date,
                    "category": category
                },
                error: function () {
                    console.log('error');
                },
                success: function (result) {
                    //let obj = result;
                    //console.log(obj);
                    $('.page-blog__pages').html(result);
                }
            });
        }

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
    });
});
