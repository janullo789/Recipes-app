import $ from 'jquery';
import Swal from "sweetalert2";

$(function() {
    let deleteUrl = $("#deleteUrl").val();
    let editUrl = $("#editUrl").val();
    $(document).on('click', 'button.delete', function() {
        Swal.fire({
            title: 'Are you sure you want to delete a record?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.value) {
                console.log(deleteUrl + $(this).data("id"));
                $.ajax({
                    method: "DELETE",
                    url: deleteUrl + $(this).data("id"),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include the CSRF token
                    }
                })
                    .done(function (data) {
                        event.preventDefault();
                        getItems($('a.items-actual-count').text());
                    })
                    .fail(function (data) {
                        Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);
                    });
            }
        })
    });

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
        $.ajax({
            method: "GET",
            url: "ingredients/",
            data: form + "&" + $.param({paginate: paginate}),
            dataType: 'json'
        })
            .done(function (response) {
                $('tbody#ingredients-list').empty();
                $.each(response.data, function (index, ingredient) {
                    const html = '<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">' +
                        '                   <th scope="row"' +
                        '                       class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">' +
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
                        '                       <a href="' + editUrl + ingredient.id + '"' +
                        '                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>' +
                        '                       <button data-id="' + ingredient.id + '"' +
                        '                           class="ml-2 font-medium text-red-600 delete hover:underline dark:text-blue-500">Delete</button>' +
                        '                   </td>' +
                        '                 </tr>';
                    $('tbody#ingredients-list').append(html);
                });
                console.log(response.links);
                // $('.pagination-links a').replaceWith($(response.links).find('a'));
            });
    }
});
