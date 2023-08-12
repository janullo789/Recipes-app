import $ from 'jquery';

$(function() {
    $('div.items-count a').click(function (event) {
        event.preventDefault();
        $('a.items-actual-count').text($(this).text());
        $('#dropdown').removeClass('block').addClass('hidden');
        getItems($(this).text());
    });

    $('a#filter-button').click(function(event) {
        event.preventDefault();
        getItems($('a.items-actual-count').text());
    });

    function getItems(paginate) {
        const form = $('form#sidebar-filter').serialize();
        console.log(form)
        $.ajax({
            method: "GET",
            url: "ingredients/",
            data: form + "&" + $.param({paginate: paginate}),
            dataType: 'json'
        })
            .done(function (response) {
                $('tbody#ingredients-list').empty();
                $.each(response.data, function (index, ingredient) {
                    const html = '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">' +
                        '                   <th scope="row"' +
                        '                       class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' +
                                                    ingredient.name +
                        '                   </th>' +
                        '                   <td class="px-6 py-4">' +
                                                ingredient.category +
                        '                   </td>' +
                        '                   <td class="px-6 py-4">' +
                                                ingredient.unit +
                        '                   </td>' +
                        '                   <td class="px-6 py-4">' +
                                                ingredient.calories +
                        '                   </td>' +
                        '                   <td class="px-6 py-4">' +
                        '                       <a href="#"' +
                        '                          class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>' +
                        '                   </td>' +
                        '                 </tr>';
                    $('tbody#ingredients-list').append(html);
                });
            });
    }
});
